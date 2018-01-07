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
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\Repository\WeightRepository")
 * @ORM\Table(name="weight")
 * @ORM\HasLifecycleCallbacks
 * 
 */
class Weight {
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
     * @ @ORM\ManyToMany(targetEntity="Item", mappedBy="weights")
     **/
     protected $items = array();

      /**
     *@ORM\Column(name="countpercartoon", type="array", nullable=true)
     *
     */

     protected $countpercartoon = array();
    
    public function __toString()
    {
        if(is_null($this->getName())) {
             return 'NULL';
         }
        else
        {
            return $this->getName();
        }
            
    }
   
    /**
     * Constructor
     */
    public function __construct(Item $item = null , $name)
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->countpercartoon  = new \Doctrine\Common\Collections\ArrayCollection();
        if ($item !== null && $name != null) {
        $this->addItem($item);
        $this->setName($name);
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
     * Set name
     *
     * @param string $name
     * @return Month
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
     * Add items
     *
     * @param \AdminBundle\Entity\Item $items
     * @return Month
     */
    public function addItem(\AdminBundle\Entity\Item $items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * Remove items
     *
     * @param \AdminBundle\Entity\Item $items
     */
    public function removeItem(\AdminBundle\Entity\Item $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set countpercartoon
     *
     * @param array $countpercartoon
     * @return Weight
     */
    public function setCountpercartoon($countpercartoon)
    {
        $this->countpercartoon = $countpercartoon;

        return $this;
    }

    /**
     * Get countpercartoon
     *
     * @return array 
     */
    public function getCountpercartoon()
    {
        return $this->countpercartoon;
    }
}
