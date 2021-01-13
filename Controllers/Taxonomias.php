<?php
namespace Saude\Controllers;
use \MapasCulturais\App;
use \MapasCulturais\i;

class Taxonomias extends \MapasCulturais\Controller{

    function GET_info() {
        $this->render('info');
        //echo "index";
    }
/*
    function POST_create() {
        if(empty($this->postData['term']))
        {
            $app = App::i();
            $app->redirect($app->redirect('/taxonomias/taxonomias_area/' , 401));
        }
        try {
            $taxo = new \MapasCulturais\Entities\Term;
            $taxo->taxonomy = $this->postData['type'];
            $taxo->term = $this->postData['term'];
            $taxo->description = $this->postData['term']. ' - description';
            $taxo->save();
            return $this->json(true);
        } catch (\Throwable $th) {
            return "Retornar erro: ".$th->getMessage();
        }
        
    }

    function POST_update() {
        try {
            $app = App::i();
            $taxoUp = $app->repo('Term')->findBy(['id' => $this->postData['id'] ]);
            $taxoUp[0]->term = $this->postData['term'];
            $taxoUp[0]->description = $this->postData['description'];
            return $this->json(true);
        } catch (\Throwable $th) {
            return "Retornar erro: ".$th->getMessage();
        }
    }

    function DELETE_delete()
    {
       try {
            $app = App::i();
            $taxoUp = $app->repo('Term')->find($this->postData['id']);
            $taxoUp->delete();
            return $this->json(true);
       } catch (\Throwable $th) {
           echo $th->getMessage();
       }
        
    }
    */
}