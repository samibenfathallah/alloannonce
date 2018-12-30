<?php

namespace FrontofficeBundle\Controller;
use BackofficeBundle\Entity\Info;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        
        $info = $this->getDoctrine()->getRepository(Info::class)->findAll();
         
        return $this->render('@Frontoffice/Home/index.html.twig', array('infos' => $info));
    }
}
