<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WebController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('web/index.html.twig');
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
}
