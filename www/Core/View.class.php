<?php

namespace App\Core;

class View{

    private $view;
    private $template;
    private $data = [];

    public function __construct($view, $template="front")
    {
        $this->setView($view);
        $this->setTemplate($template);
    }

    public function setView($view):void
    {
        $this->view = strtolower($view);
    }
    public function setTemplate($template):void
    {
        $this->template = strtolower($template);
    }

    public function assign($key, $value):void
    {
        $this->data[$key]=$value;
    }

    public function __toString():string
    {
        return "La vue c'est : ".$this->view. " et le template c'est : ".$this->template;
    }

    public function __destruct()
    {
        //$this->data = ["firstname"=>"yves"] -----> $firstname = "yves"
        extract($this->data);
        include "View/".$this->template.".tpl.php";
    }

}