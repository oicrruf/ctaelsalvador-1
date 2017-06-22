<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModeloController extends Controller
{
    /**
     * @Route("/modelo", name="model")
     */
    public function modeloAction()
    {
        return $this->render('web/modelo.html.twig');
    }
    
    /**
     * @Route("/actividades-complementarias", name="actividades_complementarias")
     */
    public function actividadesAction()
    {
        return $this->render('web/modelo/actividades-complementarias.html.twig');
    }
    
    /**
     * @Route("/consejeria-terapeutica", name="consejeria_terapeutica")
     */
    public function consejeriaAction()
    {
        return $this->render('web/modelo/consejeria-terapeutica.html.twig');
    }
    
    /**
     * @Route("/consulta-evaluacion-psicologica", name="evaluacion_psicologica")
     */
    public function evaluacionaAction()
    {
        return $this->render('web/modelo/consulta-evaluacion-psicologica.html.twig');
    }
    
    /**
     * @Route("/grupos-familiares", name="grupos_familiares")
     */
    public function gruposfamAction()
    {
        return $this->render('web/modelo/grupos-familiares.html.twig');
    }
    
    /**
     * @Route("/grupos-institucionales", name="grupos_institucionales")
     */
    public function gruposinsAction()
    {
        return $this->render('web/modelo/grupos-institucionales.html.twig');
    }
    
    /**
     * @Route("/talleres-formativos", name="talleres_formativos")
     */
    public function talleresAction()
    {
        return $this->render('web/modelo/talleres-formativos-educativos.html.twig');
    }
    
    /**
     * @Route("/terapia-familiar", name="terapia_familiar")
     */
    public function terapiafAction()
    {
        return $this->render('web/modelo/terapia-familiar.html.twig');
    }
    
    /**
     * @Route("/terapia-psicologica", name="terapia_psicologica")
     */
    public function terapiapAction()
    {
        return $this->render('web/modelo/terapia-psicologica.html.twig');
    }
}
