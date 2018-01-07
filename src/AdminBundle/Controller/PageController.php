<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AdminBundle\Entity\Image;
use AdminBundle\Entity\Weight;
use AdminBundle\Entity\Item;
use AdminBundle\Entity\MonthItem;
use AdminBundle\Entity\Event;
use AdminBundle\Form\ItemType;
use AdminBundle\Form\EventType;

class PageController extends Controller
{
    public function indexAction()
    {
       $em = $this->getDoctrine()->getManager();
       $user = $this->container->get('security.context')->getToken()->getUser();
        if($user === "anon." )
       {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
       }

        $items = $em->getRepository('AdminBundle:Item')->getBestSeller();
        $itemsofMonth= $em->getRepository('AdminBundle:Item')->getItemByMonth(date("m"));
        
        return $this->render('AdminBundle:Pages:index.html.twig', array('user'=> $user,'bestseller'=> $items , 'itemsofMonth'=>$itemsofMonth));
    }
    public function productsAction($categoryid)
    {
    	$em = $this->getDoctrine()->getManager();
    	$user = $this->container->get('security.context')->getToken()->getUser();
        if($user === "anon." )
        {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        if($categoryid == 0)
        {
             $items= $em->getRepository('AdminBundle:Item')->findBy(array('parentid'=> NULL));
        }
        else
        {

            $items= $em->getRepository('AdminBundle:Item')->findBy(array('parentid'=> $categoryid));
            $item = $em->getRepository('AdminBundle:Item')->find($categoryid);
            if(!$items && $categoryid!= 1 && $categoryid!= 2 && $item->getParentid()->getId() !=1 && $item->getParentid()->getId()!=2)
            {
                $item= $em->getRepository('AdminBundle:Item')->find($categoryid);
                return $this->render('AdminBundle:Pages:product.html.twig' , array('user'=> $user,'item'=> $item ));
            }
            return $this->render('AdminBundle:Pages:products.html.twig', array('user'=> $user,'items'=> $items , 'categoryid'=>$categoryid));
        }
    }
    public function createAction($categoryid)
    {
    	$em = $this->getDoctrine()->getManager();
    	$user = $this->container->get('security.context')->getToken()->getUser();
        if($user === "anon." )
        {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $parent = $em->getRepository('AdminBundle:Item')->find($categoryid);
    	$item = new Item();
        
        if($categoryid == 1 || $categoryid == 2)
        {
            $item->addImage(new Image($item,null));
        }
        else
        {
            $item->addImage(new Image($item,null));
            $item->addImage(new Image($item,null));
            $item->addImage(new Image($item,null));
            $item->addImage(new Image($item,null)); 
            $item->addWeight(new weight($item , "7 KG" ));
            $item->addWeight(new weight($item , "8 KG" ));

         
        }
    	 //echo "<pre>"; \Doctrine\Common\Util\Debug::dump($item->getWeights()[0]);echo "<pre>"; exit;
    	$request = $this->getRequest();
    	$form    = $this->createForm(new ItemType($em), $item );
    	if ($request->getMethod() == 'POST') {
            $form->bind($request);
             if ( $form->isValid() )
             { 
                if($categoryid != 1 && $categoryid != 2)
                {
                   
                    $output1= explode(",", $_POST["tags_1"]);
                    $output2= explode(",", $_POST["tags_2"]);
                    $item->getWeights()[0]->setCountpercartoon($output1);
                    $item->getWeights()[1]->setCountpercartoon($output2);
                }
                $item->setParentid($parent); 
                $em->persist($item);
                $em->flush();

                 //echo "<pre>"; \Doctrine\Common\Util\Debug::dump($item);echo "<pre>"; exit;
                return $this->redirect($this->generateUrl('admin_products' , array('categoryid'=>$categoryid)));

             }
              
        }
        return $this->render('AdminBundle:Pages:additem.html.twig', array('user'=> $user,'form'=>  $form->createView() ,"categoryid"=> $categoryid));
      

    }
    public function editAction($productid)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $IsCategory = 0;
        $count1 = -1;
        $count2 = -1;
        if($user === "anon." )
        {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $item = $em->getRepository('AdminBundle:Item')->find($productid);
        if ( $item->getParentid()->getId() === 1 or  $item->getParentid()->getId() === 2 )
        {
            $IsCategory = 1;
            
        }
        if ($IsCategory != 1 )
        {
            $count1 = implode("," , $item->getWeights()[0]->getCountpercartoon());
            if (count($item->getWeights()[1]->getCountpercartoon()) > 0)
            {
                $count2 = implode("," , $item->getWeights()[1]->getCountpercartoon());
            }
            else
            {
                $count2 = 0 ;
            }

         }
        //echo "<pre>"; \Doctrine\Common\Util\Debug::dump($item->getWeights()[1]->getCountpercartoon());echo "<pre>"; exit;
       
        $request = $this->getRequest();
        $form    = $this->createForm(new ItemType($em), $item );
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
             if ( $form->isValid() )
             { 
                if ($IsCategory != 1 )
                {
                    $output1 = explode(",", $_POST["tags_1"]);
                    $output2 = explode(",", $_POST["tags_2"]);
                    $item->getWeights()[0]->setCountpercartoon($output1);
                    $item->getWeights()[1]->setCountpercartoon($output2);
                }
                $em->persist($item);
                $em->flush();

                    return $this->redirect($this->generateUrl('admin_products' , array('categoryid'=>$item->getParentid()->getId())));

             }
              
        }
        return $this->render('AdminBundle:Pages:edititem.html.twig', array(
            'user'=> $user,
            'form'=>  $form->createView() ,
            "categoryid"=> $item->getId() , 
            "iscategory"=>$IsCategory , 
            "count1"=> $count1,
            "count2"=> $count2 ));
      

    }
     public function eventAction($eventid)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user === "anon." )
        {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $event= $em->getRepository('AdminBundle:Event')->find($eventid);
        return $this->render('AdminBundle:Pages:event.html.twig', array('user'=> $user,'item'=> $event ));
        
    }
    public function eventsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user === "anon." )
        {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $events= $em->getRepository('AdminBundle:Event')->findAll();
        return $this->render('AdminBundle:Pages:events.html.twig', array('user'=> $user,'events'=> $events ));
        
    }
     public function createeventAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user === "anon." )
        {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $event = new Event();
        $event->addImage(new Image(null,$event));
        $event->addImage(new Image(null,$event));
        $event->addImage(new Image(null,$event));
        $event->addImage(new Image(null,$event));

        
        
        $request = $this->getRequest();
        $form    = $this->createForm(new EventType(), $event );
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
             if ( $form->isValid() )
             { 
                   $em->persist($event);
                    $em->flush();
                    return $this->redirect($this->generateUrl('admin_events'));

             }
              
        }
        return $this->render('AdminBundle:Pages:addevent.html.twig', array('user'=> $user,'form'=>  $form->createView() ));
      

    }
    public function editeventAction($eventid)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user === "anon." )
        {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
        $event = $em->getRepository('AdminBundle:Event')->find($eventid);
        
        $request = $this->getRequest();
        $form    = $this->createForm(new EventType(), $event );
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
             if ( $form->isValid() )
             { 
                    
                    $em->persist($event);
                    $em->flush();
                    return $this->redirect($this->generateUrl('admin_events'));

             }
              
        }
        return $this->render('AdminBundle:Pages:editevent.html.twig', array('user'=> $user,'form'=>  $form->createView() ,"eventid"=> $eventid , 'item'=>$event));
      

    }
}
