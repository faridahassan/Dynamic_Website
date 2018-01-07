<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactType
 *
 * @author Farida
 */
namespace ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name' , 'text' , array('required' => 'true','attr'=> array('class'=>'input-text required-entry' , 'placeholder'=>'Name*', 'name'=>'name')));
        $builder->add('email', 'email' ,  array('required' => 'true','attr'=> array('class'=>'input-text required-entry', 'placeholder'=>'Email*', 'name'=>'email')));
        $builder->add('phone' , 'text' ,   array('required' => 'true','attr'=> array('class'=>'input-text required-entry', 'placeholder'=>'Phone', 'name'=>'phone')));
        $builder->add('body', 'textarea'  ,  array('required' => 'true','attr'=> array('class'=>'input-text required-entry' , 'placeholder'=>'Message', 'name'=>'comments')));
    }

    public function getName()
    {
        return 'contact';
    }
}
