<?php

namespace BranchBit\AirGramBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BranchBitAirGramBundle:Default:index.html.twig', array('name' => $name));
    }
}
