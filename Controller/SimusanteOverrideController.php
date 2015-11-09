<?php

namespace CPASimUSante\SimusanteOverrideBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as EXT;

class SimusanteOverrideController extends Controller
{
    /**
     * @EXT\Route("/index", name="cpasimusante_simusanteoverride_index")
     * @EXT\Template
     *
     * @return Response
     */
    public function indexAction()
    {
        throw new \Exception('hello');
    }
}
