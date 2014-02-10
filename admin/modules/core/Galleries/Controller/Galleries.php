<?php

namespace Galleries\Controller;

class Galleries extends \Cockpit\Controller {


    public function index() {
        return $this->render("galleries:views/index.php");
    }


    public function gallery($id=null){
        return $this->render("galleries:views/gallery.php", compact('id'));
    }

}