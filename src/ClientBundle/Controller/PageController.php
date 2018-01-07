<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ClientBundle\Entity\Contact;
use ClientBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository('AdminBundle:Item')->getBestSeller();
        
        $itemsofMonth= $em->getRepository('AdminBundle:Item')->getItemByMonth(date("m"));
        return $this->render('ClientBundle:Pages:index.html.twig', array('bestseller'=> $items , 'itemsofMonth'=>$itemsofMonth));
    }
     public function aboutAction()
    {
        
        return $this->render('ClientBundle:Pages:about.html.twig');
        
    }
    public function seasonAction()
    {
        $em = $this->getDoctrine()->getManager();
        $items = array();
        for ($x = 1; $x <= 12; $x++) {
            $itemsofMonth= $em->getRepository('AdminBundle:Item')->getItemByMonth($x);
            $items[$x]=$itemsofMonth;
        } 
        // echo "<pre>"; \Doctrine\Common\Util\Debug::dump( $items);echo "<pre>";exit;
        return $this->render('ClientBundle:Pages:season.html.twig' , array('items'=> $items));
    }

    public function productsAction($categoryid)
    {
        $em = $this->getDoctrine()->getManager();

        $itemsSidebar= $em->getRepository('AdminBundle:Item')->findAll();
        if($categoryid == 0)
        {
             $items= $em->getRepository('AdminBundle:Item')->findBy(array('parentid'=> NULL));
        }
        else
        {

            $items= $em->getRepository('AdminBundle:Item')->findBy(array('parentid'=> $categoryid));

             //echo "<pre>"; \Doctrine\Common\Util\Debug::dump($items[0]);echo "<pre>";exit;
            if(!$items)
            {
                
                $item= $em->getRepository('AdminBundle:Item')->find($categoryid);
                $relateditems= $em->getRepository('AdminBundle:Item')->findBy(array('parentid'=> $item->getParentid() ));
                return $this->render('ClientBundle:Pages:product.html.twig' , array('item'=> $item , 'relateditems' => $relateditems));
            }
        }
        return $this->render('ClientBundle:Pages:products.html.twig', array('items'=> $items , 'itemsSidebar'=>$itemsSidebar));
    }

    public function boxesAction()
    {
        return $this->render('ClientBundle:Pages:boxes.html.twig');
    }
    public function eventsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events= $em->getRepository('AdminBundle:Event')->findAll();
       
        return $this->render('ClientBundle:Pages:events.html.twig', array('events'=> $events ));
    }
    public function eventAction($eventid)
    {
        $em = $this->getDoctrine()->getManager();
        $event= $em->getRepository('AdminBundle:Event')->getEventsAjax($eventid);

        $return = array("responseCode" => 200 , 'event'=>$event); 
        $return=json_encode($return);
        
        return new Response($return , 200,array('Content-Type'=>'application/json'));
        
    }
    public function certificatesAction()
    {
        return $this->render('ClientBundle:Pages:certificates.html.twig');
    }
     public function farmsAction()
    {
        return $this->render('ClientBundle:Pages:farms.html.twig');
    }
    public function contactAction()
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
               
                  $to = 'info@ELSAADEST.COM';
                  $subject = 'Contact Us';
                  $message = " Information Requset From: ".$contact->getName()."\r\n"."Customer Mobile Number:".$contact->getPhone()."\r\n".$contact->getBody();
                  $headers = $contact->getEmail(). "\r\n" ; 
                  mail($to, $subject, $message, $headers);

           // $this->get('session')->setFlash('remax-notice', 'Your contact enquiry was successfully sent. Thank you!');
                return $this->redirect($this->generateUrl('client_contact'));
            }
        }

        return $this->render('ClientBundle:Pages:contact.html.twig', array('form'=> $form->createView()));
    }
}
