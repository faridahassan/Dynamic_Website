<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemType
 *
 * @author Farida
 */
namespace AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType {
   
    public function buildForm(FormBuilderInterface $builder, array $options)
     {
          $builder ->add('name','text',array('attr'=>  array('class'=>'span6 m-wrap')))
                  ->add('description', 'textarea',array( 'required'=> false ,'attr' => array('class' => 'ckeditor', 'style'=>'width:500px;')))
                  ->add('images' , 'collection', array('type' => new ImageType(),
                  'by_reference' => false) );
                  
           
        }
     
   
     public function setDefaultOptions(OptionsResolverInterface $r)
	{
		$r->setDefaults(array(
			'data_class' => 'AdminBundle\Entity\Event'
		));
	}
    public function getName()
    {
        return 'Event';
    }
}
