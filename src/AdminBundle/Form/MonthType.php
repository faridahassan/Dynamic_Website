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

class MonthType extends AbstractType {
   
    public function buildForm(FormBuilderInterface $builder, array $options)
     {
          $builder ->add('name','text',array('attr'=>  array('class'=>'span6 m-wrap')));
                  
     }
     
   
     public function setDefaultOptions(OptionsResolverInterface $r)
	{
		$r->setDefaults(array(
			'data_class' => 'AdminBundle\Entity\Month'
		));
	}
    public function getName()
    {
        return 'Month';
    }
}
