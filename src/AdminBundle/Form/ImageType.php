<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImageType
 *
 * @author Farida
 */
namespace AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class ImageType extends AbstractType {
     public function buildForm(FormBuilderInterface $builder, array $options)
     {
           $builder 
           ->add('url','hidden', array('attr'=>  array('style'=>'display:none')))
           ->add('file','file',array('label_attr' => array('style' => 'display:none'),'required'  => false  ,'attr' => array('class' => 'default'  ))); 
     }
      public function setDefaultOptions(OptionsResolverInterface $r)
	{
		$r->setDefaults(array(
			'data_class' => 'AdminBundle\Entity\Image'
		));
	}
     public function getName()
    {
        return 'Image';
    }  
  
}
