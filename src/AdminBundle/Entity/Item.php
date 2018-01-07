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
/**
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\Repository\ItemRepository")
 * @ORM\Table(name="item")
 * @ORM\HasLifecycleCallbacks
 * 
 */
class Item {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     *
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Item", inversedBy="parentid" )
     * @ORM\JoinColumn(name="parentid", referencedColumnName="id" , onDelete="SET NULL" )
     */
    protected $parentid;
     /**
     * @ORM\Column(type="string" , nullable = true )
     */
     protected $name;
      /**
     * @ORM\Column(type="boolean" , nullable = true )
     */
     protected $isbestseller;
     /**
     * @ORM\Column(type="string" , nullable = true )
     */
     protected $description;
     
       /**
     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Month", inversedBy="items" )
     *  @ORM\JoinTable(name="month_item" ,
     *      joinColumns={@ORM\JoinColumn(name="item_id", referencedColumnName="id"  )},
     *      inverseJoinColumns={@ORM\JoinColumn(name="month_id", referencedColumnName="id"  )}
     *      )
     **/
     protected $months = array();
      /**
     * @ORM\ManyToMany(targetEntity="AdminBundle\Entity\Weight", inversedBy="items", cascade={"persist"} )
     *  @ORM\JoinTable(name="weight_item" ,
     *      joinColumns={@ORM\JoinColumn(name="item_id", referencedColumnName="id"  )},
     *      inverseJoinColumns={@ORM\JoinColumn(name="weight_id", referencedColumnName="id"  )}
     *      )
     **/
     protected $weights = array();

     /**
     * @ORM\OneToMany(targetEntity="AdminBundle\Entity\Image", mappedBy="item" ,  cascade={"persist"}) 
     *
     */

     protected $images = array();
    
    public function __toString()
    {
        return $this->getName();
    }
    
   
  
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->months = new \Doctrine\Common\Collections\ArrayCollection();
        $this->weights = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isbestseller
     *
     * @param boolean $isbestseller
     * @return Item
     */
    public function setIsbestseller($isbestseller)
    {
        $this->isbestseller = $isbestseller;

        return $this;
    }

    /**
     * Get isbestseller
     *
     * @return boolean 
     */
    public function getIsbestseller()
    {
        return $this->isbestseller;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set parentid
     *
     * @param \AdminBundle\Entity\Item $parentid
     * @return Item
     */
    public function setParentid(\AdminBundle\Entity\Item $parentid = null)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return \AdminBundle\Entity\Item 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Add months
     *
     * @param \AdminBundle\Entity\Month $months
     * @return Item
     */
    public function addMonth(\AdminBundle\Entity\Month $months)
    {
        $this->months[] = $months;

        return $this;
    }

    /**
     * Remove months
     *
     * @param \AdminBundle\Entity\Month $months
     */
    public function removeMonth(\AdminBundle\Entity\Month $months)
    {
        $this->months->removeElement($months);
    }

    /**
     * Get months
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMonths()
    {
        return $this->months;
    }

    /**
     * Add images
     *
     * @param \AdminBundle\Entity\Image $images
     * @return Item
     */
    public function addImage(\AdminBundle\Entity\Image $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \AdminBundle\Entity\Image $images
     */
    public function removeImage(\AdminBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    

    /**
     * Add weights
     *
     * @param \AdminBundle\Entity\Weight $weights
     * @return Item
     */
    public function addWeight(\AdminBundle\Entity\Weight $weights)
    {
        $this->weights[] = $weights;

        return $this;
    }

    /**
     * Remove weights
     *
     * @param \AdminBundle\Entity\Weight $weights
     */
    public function removeWeight(\AdminBundle\Entity\Weight $weights)
    {
        $this->weights->removeElement($weights);
    }

    /**
     * Get weights
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWeights()
    {
        return $this->weights;
    }
}
