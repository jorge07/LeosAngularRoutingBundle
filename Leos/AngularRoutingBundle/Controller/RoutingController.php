<?php

namespace Leos\AngularRoutingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RoutingController extends Controller {

    /**
     * Routing generation for a module
     * 
     * @param {string} $module
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($module) {      

        $response = new Response();

        $response->headers->set('Content-Type', 'text/javascript');
        
        return $response
                    ->setContent($this->renderView('LeosAngularRoutingBundle:Routing:routing.js.twig',
                                array(
                                    'name' => $module,
                                    'routes' => $this->get('leos_angular_routing.nautilus')->getStates())));
    }

}
