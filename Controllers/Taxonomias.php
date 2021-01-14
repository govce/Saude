<?php
namespace Saude\Controllers;
use \MapasCulturais\App;
use \MapasCulturais\i;
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Taxonomias extends \MapasCulturais\Controller{

    function GET_info() {
        $this->render('info');
        //echo "index";
    }


    function POST_create() {
        
        if(empty($this->postData['term']) || empty($this->postData['taxonomy']))
        {
            return $this->json(['message' => 'Taxonomia e Term são obrigatórios', 'status' => 'error'], 500);
            //$app->redirect($app->redirect('/taxonomias/info/' , 401));
        }
        
        // $app->em->persist($taxo);
        // $app->em->flush();
        //dump($taxo);
         
        $app = App::i();
        $taxo = new \MapasCulturais\Entities\Term;
        $taxo->taxonomy = $this->postData['taxonomy'];
        $taxo->term = $this->postData['term'];
        $taxo->description = $this->postData['description'];
        $app->em->persist($taxo);
        $app->em->flush();
        return $this->json(['message' => 'Cadastro com sucesso', 'status' => 'success'], 200);
        
    }

    function GET_allData() {
        $app = App::i();
        $termsGraus = $app->repo('Term')->findBy(['taxonomy' => 'profissionais_graus_academicos']);
        $graus = [];
        foreach ($termsGraus as $key => $value) {
            //echo $key." - ".$value."<br />";
            echo $termsGraus[$key]->id."<br />"; 
            array_push($graus, [
                'id' => $termsGraus[$key]->id, 
                'nome' => $termsGraus[$key]->term]
            );
        }
        return $this->json($graus);
    }
/*
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