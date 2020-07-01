<?php
namespace Saude\Controllers;
use \MapasCulturais\App;
use \MapasCulturais\i;
use PHPUnit\Runner\Exception;

class Taxonomias extends \MapasCulturais\Controller{

    function GET_taxonomias_area() {
        $this->render('index');
        //echo $this->data[0] .' - '.$this->data[1];
    }

    function POST_create() {
        //dump($this->postData);
        $taxo = new \MapasCulturais\Entities\Term;
        $taxo->taxonomy = $this->postData['type'];
        $taxo->term = $this->postData['term'];
        $taxo->description = $this->postData['term']. ' - description';
        try {
            $taxo->save();
            return $this->json(true);
        } catch (\Throwable $th) {
            return "Retornar erro: ".$th->getMessage();
        }
        
    }
}