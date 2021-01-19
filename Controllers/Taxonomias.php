<?php
namespace Saude\Controllers;
use \MapasCulturais\App;
use \MapasCulturais\i;
class Taxonomias extends \MapasCulturais\Controller{

    function GET_info() {
        $this->render('info');
        //echo "index";
    }


    function POST_create() {
        $app = App::i();
        if(empty($this->postData['taxonomy']) || empty($this->postData['term'])) {
            return $this->json([
                'title' => 'Ops!',
                'message' => 'Escolha um taxonomia ou digite um nome.', 
                'params' => $this->postData['taxonomy'],
                'type' => 'error'
            ], 500);
        }
        $taxo = new \MapasCulturais\Entities\Term;
        $taxo->taxonomy = $this->postData['taxonomy'];
        $taxo->term = $this->postData['term'];
        $taxo->description = $this->postData['description'];
        $app->em->persist($taxo);
        $app->em->flush();
        $this->json([
            'title' => 'Sucesso!',
            'message' => 'Cadastro realizado com sucesso.', 
            'params' => $this->postData['taxonomy'],
            'type' => 'success'
        ], 200);
    }

    function GET_allData() {
        $app = App::i();
        $termsGraus = $app->repo('Term')->findBy(['taxonomy' => $this->getData['params']]);
        $graus = [];
        foreach ($termsGraus as $key => $value) {
            //echo $key." - ".$value."<br />";
            //echo $termsGraus[$key]->id."<br />"; 
            array_push($graus, [
                'id' => $termsGraus[$key]->id, 
                'nome' => $termsGraus[$key]->term]
            );
        }
        $this->json($graus);
    }

    function POST_alterTaxo() {
        $app = App::i();
        $taxoUp = $app->repo('Term')->findBy(['id' => $this->postData['id'] ], ['id' => "ASC"]);
        $taxoUp[0]->term = $this->postData['nome'];
        $app->em->flush();
        return $this->json(['message' => 'Cadastro com sucesso', 'status' => 'success'], 200);
    }

    function DELETE_delete()
    {
        try {
            $app = App::i();
            $taxoUp = $app->repo('Term')->find($this->urlData['id']);
            $taxoUp->delete();
            $app->em->flush();
            return $this->json(true);
       } catch (\Throwable $th) {
           echo $th->getMessage();
       }
        
    }

    function GET_spaces() {
        //dump($this->getData);
        $this->render('spaces');
    }

    function GET_projects() {
        //dump($this->getData);
        $this->render('projects');
    }

}