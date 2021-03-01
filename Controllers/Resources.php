<?php
namespace Saude\Controllers;
use \MapasCulturais\App;
use \MapasCulturais\i;

class Resources extends \MapasCulturais\Controller{

    function GET_index() {
        $this->render('resources');
        //echo "recurso";
    }


}