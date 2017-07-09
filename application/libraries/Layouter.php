<?php
    /**
      * Layouter Class for Code-Igniter
      * by LJ Sta. Ana (C) 2017
      * MIT-License

      * Supports, automatic URI to view mapping
      * Follow this convention :
      * URI : controller/action -> VIEW FILE : @controller/action.php
      * @ sign represents a parsed template page
      * (does not contain php but parsed, avoid putting too much
      *  logic in view files, rather, make a presenter function inline
      *  with the controller)

      * public function login() {
      *    //login logic
      * }
      *   ^
      *   gets called by and presents view
      * public function _login($data) {
      *    //template logic (variable setup)
      * }
    **/
    class Layouter
    {
         public $inst;
         public $header = 'sections/#header';
         public $loaders = array();
         public $footer = 'sections/#footer';

         public function __construct()
         {
             $this->inst = get_instance();
             $this->inst->load->library('parser');
         }

         public function add($view, $render = false)
         {
             array_push($this->loaders, $view);
             if($render) $this->render();
         }

         public function render($data = array(), $view = '')
         {
             $loaders = $this->loaders;
             $header = $this->header;
             $footer = $this->footer;

             $this->inst->parser->parse($this->header, $data);
             //if there exists at least one loader
             if(count($loaders) > 0)
                foreach($loaders as $item => $value)
                   echo $this->inst->parser->parse($value, $data);
             else
             {
                if($view == '')
                {
                    $view =
                        "@" . $this->inst->router->class .
                        "/" . $this->inst->router->fetch_method();
                }
                $this->inst->parser->parse($view, $data);
             }
             $this->inst->parser->parse($footer, $data);
         }

    }
