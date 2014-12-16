<?php

namespace Leos\AngularRoutingBundle\Service;

/**
 * Nautilus is the class who manage all the routing parameters
 *
 * @author Jorge Arco <jorge.arcoma@gmail.com>
 */
class Nautilus {

    /**
     * @var {array}
     */
    protected $config = array();

    /**
     * List of states
     *
     * @var {array}
     */
    private $states = array();

    /**
     * Set the config and generate the states
     * @param $config
     */
    public function __construct($config){

        $this->config = $config;

        $this->setStates();
    }

    /**
     * Set States in private var
     */
    public function setStates(){

        foreach ($this->config as $name =>$state) {

            if (isset($state['childs'])){

                foreach ($state['childs'] as $ch_name => $child) {
                    $this->processChilds($name.".".$ch_name, $child);
                }

                unset($state['childs']);
            }

            $this->states[$name] = $state;

        }
    }

    /**
     * Process the States
     *
     * @param $name
     * @param $state
     */
    private function processChilds($name, $state){

        if (isset($state['childs'])){

            foreach ($state['childs'] as $ch_name => $child) {
                $this->processChilds($name.".".$ch_name, $child);
            }

            unset($state['childs']);
        }

        $this->states[$name] = $state;

    }

    /**
     * Get States
     *
     * @return array
     */
    public function getStates(){
        return $this->states;
    }
}
