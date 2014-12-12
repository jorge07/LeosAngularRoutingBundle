<?php

namespace Leos\AngularRoutingBundle\Service;

use Symfony\Bundle\FrameworkBundle\Routing\Router;

/**
 * Nautilus is the class who manage all the routing paramaters
 *
 * @author Jorge Arco <jorge.arcoma@gmail.com>
 */
class Nautilus {
   
    /**
     * @var Router; 
     */
    protected $routing;
    
    public function getRouting() {
        return $this->routing;
    }

    public function setRouting($routing) {
        $this->routing = $routing;
    }


    public function getRoute() {
        return $this->routing;
    }
    
    
}
