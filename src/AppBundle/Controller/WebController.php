<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Client;
use AppBundle\Entity\Testimonial;
use AppBundle\Entity\Gallery;
use AppBundle\Entity\Employed;
use Symfony\Component\HttpFoundation\Response;

class WebController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $logoInstitution = $this->getDoctrine()
                ->getRepository('AppBundle:Institution')
                ->findAll();
        
        return $this->render('web/index.html.twig', array(
            'logoInstitution'         => $logoInstitution,
            
        ));
    }
    
    /**
     * @Route("/testimonios", name="testimonios")
     */
    public function testimoniosAction()
    {
        $testimonio = $this->getDoctrine()
                ->getRepository('AppBundle:Testimonial')
                ->findAll();
        
        return $this->render('web/testimonios.html.twig', array(
            'testimonio'         => $testimonio,
            
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
        $empleado = $this->getDoctrine()
                ->getRepository('AppBundle:Employed')
                ->findAll();
        
        return $this->render('web/equipo.html.twig', array(
            'empleado'         => $empleado,
            
        ));
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
        $fotografia = $this->getDoctrine()
                ->getRepository('AppBundle:Gallery')
                ->findAll();
        
        return $this->render('web/galeria.html.twig', array(
            'fotografia'         => $fotografia,
            
        ));
    }
    
    
}
