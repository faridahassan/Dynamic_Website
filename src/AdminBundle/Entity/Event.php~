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
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\Repository\EventRepository")
 * @ORM\Table(name="event")
 * @ORM\HasLifecycleCallbacks
 * 
 */
class Event {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * @ORM\Column(type="string" , nullable = true )
     */
     protected $name;
     
     /**
     * @ORM\Column(type="string" , nullable = true )
     */
     protected $description;


     /**
     * @ORM\OneToMany(targetEntity="AdminBundle\Entity\Image", mappedBy="event" ,  cascade={"persist"}) 
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
     * Set Name
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
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Description
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
     * Get Description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

   
    /**
     * Add Images
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
     * Remove Images
     *
     * @param \AdminBundle\Entity\Image $images
     */
    public function removeImage(\AdminBundle\Entity\Image $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get Images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }
}
