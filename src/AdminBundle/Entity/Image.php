<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Project
 *
 * @author Farida
 */
namespace AdminBundle\Entity ;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AdminBundle\Entity\Item;
use AdminBundle\Entity\Event;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
/**
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\Repository\ImageRepository")
 * @ORM\Table(name="image")
 * @ORM\HasLifecycleCallbacks
 * 
 */
class Image {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
   
   
     /**
     * @ORM\Column(type="string" , nullable = true )
     */
     protected $url="empty.png";
     // Propriétés standards ...
      /**
       *
       * @Assert\File(maxSize="6000000")
       * @Assert\File
       * @var UploadedFile
       */
      private $file;
 
     /**
     * 
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Item", inversedBy="images" )
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id" , onDelete="SET NULL" )
     */
     protected $item;

      /**
     * 
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Event", inversedBy="images" )
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id" , onDelete="SET NULL" )
     */
     protected $event;
    
    
  
     public function __construct(Item $item = null  , Event $event = null )
    {
      if ($item !== null) {
        $this->setItem($item);
      }
       
      if ($event !== null) {
        $this->setEvent($event);
      }
    
    }

    /**
   * Sets file.
   *
   * @param UploadedFile $file
   */
  public function setFile(UploadedFile $file = null)
  {
    if($file === null){
      return;
    }
    $this->url=null;
    $this->file = $file;
  }
 
  /**
   * Get file.
   *
   * @return UploadedFile
   */
  public function getFile()
  {
    return $this->file;
  }
 
  public function getWebPath()
  {
     
    return null === $this->url ? null : $this->getUploadDir() . '/' . $this->url;
  }
 
  public function getAbsolutePath()
  {
    return null === $this->url ? null : $this->getUploadRootDir() . '/' . $this->url;
  }
 
  protected function getUploadRootDir()
  {
    //throw new \Exception('You must implement getUploadRootDir in inherited classes ');
    // the absolute directory path where uploaded documents should be saved
    //return '/var/www/ent/storage/uploaded_file/'.$this->getUploadDir();
     return __DIR__.'/../../../web/'.$this->getUploadDir();
  }
 
  /**
   * @ORM\PrePersist()
   * @ORM\PreUpdate()
   */
  public function preUpload()
  {
    if (null !== $this->file) {
       
      $this->alt = $this->file->getClientOriginalName();
      //Set path of old file to remove it in file system
      $this->originalFilePathToDelete = $this->getAbsolutePath();
      if($this->getItem() != null)
      {
         $this->url = $this->getItem()->getName().'/'.md5($this->file->getClientOriginalName()) . '-' . mt_rand() . '.' . $this->file->guessExtension();
    
      }
      else if ($this->getEvent() !=null)
      {
         $this->url = $this->getEvent()->getName().'/'.md5($this->file->getClientOriginalName()) . '-' . mt_rand() . '.' . $this->file->guessExtension();
    
      }
     
    }
  }
 
  public function getUploadDir()
  {
    if($this->getItem() != null)
    {
      return 'assets/images/'.$this->getItem()->getName();
    }
    else if ($this->getEvent() !=null)
    {
      return 'assets/images/Events/'.$this->getEvent()->getName();
    }

  }
    public function compress($src, $dest, $quality)
    {
        $info = getimagesize($src);
        if ($info['mime'] == 'image/jpeg') {
            $image = imagecreatefromjpeg($src);
        } elseif ($info['mime'] == 'image/gif') {
            $image = imagecreatefromgif($src);
        } elseif ($info['mime'] == 'image/png') {
            $image = imagecreatefrompng($src);
        } else {
           // die('Unknown image file format');
            return ;
        }
        //compress and save file to jpg
        imagejpeg($image, $dest, $quality);
        //return destination file
        return $dest;
    }
  /**
   * @ORM\PostPersist()
   * @ORM\PostUpdate()
   */
  public function upload()
  {
    if (null === $this->file) {
      return;
    }
 
   
    // if there is an error when moving the file, an exception will
    // be automatically thrown by move(). This will properly prevent
    // the entity from being persisted to the database on error
    $d = $this->compress($this->file->getPathname(), $this->file->getPathname(), 50) ;
    $this->file->move( $this->getUploadDir(), $this->url);
 
    unset($this->file);
 
    // print_r("hello");exit;
    // Remove old file in filesystem
    if (null !== $this->originalFilePathToDelete && file_exists($this->originalFilePathToDelete)) {
      @unlink($this->originalFilePathToDelete);
    }
  }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

   


    /**
     * Set Item
     *
     * @param \AdminBundle\Entity\Item $item
     * @return Image
     */
    public function setItem(\AdminBundle\Entity\Item $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get Item
     *
     * @return \AdminBundle\Entity\Item 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set event
     *
     * @param \AdminBundle\Entity\Event $event
     * @return Image
     */
    public function setEvent(\AdminBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AdminBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }
}
