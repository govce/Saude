<?php
namespace Saude\Controllers;
use \MapasCulturais\App;
use \MapasCulturais\i;
use \Saude\Entities\Resources as EntitiesResources;

class Resources extends \MapasCulturais\Controller{

    function GET_index() {
        $this->render('resources');
        //echo "recurso";
    }

    function POST_resource() {
        dump($this->postData);
    }
}