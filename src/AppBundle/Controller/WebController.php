<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Response;

class WebController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $logoCliente = $this->getDoctrine()
                ->getRepository('AppBundle:Client')
                ->findAll();
        
        return $this->render('web/index.html.twig', array(
            'logoClient'         => $logoCliente,
            
        ));
    }
    
    /**
     * @Route("/modelo", name="modelo")
     */
    public function modeloAction()
    {
        return $this->render('web/modelo.html.twig');
    }
    
    /**
     * @Route("/equipo", name="equipo_terapeutico")
     */
    public function equipoAction()
    {
        return $this->render('web/equipo.html.twig');
    }
    
    /**
     * @Route("/como-llegar", name="como_llegar")
     */
    public function mapAction()
    {
        return $this->render('web/como-llegar.html.twig');
    }
    
    /**
     * @Route("/galeria", name="galeria")
     */
    public function galeriaAction()
    {
        return $this->render('web/galeria.html.twig');
    }
    
    /**
     * @Route("/testimonios", name="testimonios")
     */
    public function testimoniosAction()
    {
        return $this->render('web/testimonios.html.twig');
    }
}
