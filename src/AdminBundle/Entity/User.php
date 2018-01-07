<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Farida
 */
namespace AdminBundle\Entity ;

use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\MinLengthValidator;
use Symfony\Component\Validator\Constraints\MaxLengthValidator;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity(repositoryClass="AdminBundle\Entity\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 * @ORM\HasLifecycleCallbacks
 */
class User extends BaseUser {
   /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
     /**
     * @ORM\Column(type="string" , nullable = true )
     */
     protected $name ;
     
    
     /**
     * @ORM\Column(type="integer" , nullable = true )
     */
     protected $privilege  ;
    
     
    
     
     public function __toString()
    {
        return $this->getName();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
          parent::__construct();
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
     * @return User
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
     * Set privilege
     *
     * @param integer $privilege
     * @return User
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;

        return $this;
    }

    /**
     * Get privilege
     *
     * @return integer 
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

}
