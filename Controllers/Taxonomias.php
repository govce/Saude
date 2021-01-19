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
        try {
            $app = App::i();
            $taxo = new \MapasCulturais\Entities\Term;
            $taxo->taxonomy = $this->postData['taxonomy'];
            $taxo->term = $this->postData['term'];
            $taxo->description = $this->postData['description'];
            $app->em->persist($taxo);
            $app->em->flush();
            $this->json(true, 200);
        } catch (\Throwable $th) {
            $this->json(['message' => 'Erro, não pode ter valor duplicado ou tente novamente', 'status' => 'error'], 500);
        }
    }

    function GET_allData() {
        $app = App::i();
        $termsGraus = $app->repo('Term')->findBy(['taxonomy' => $this->getData['params']]);
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

    function POST_alterTaxo() {
        $app = App::i();
        dump($this->postData);
        $app = App::i();
        $taxoUp = $app->repo('Term')->findBy(['id' => $this->postData['id'] ], ['id' => "ASC"]);
        $taxoUp[0]->term = $this->postData['nome'];
        $app->em->flush();
        return $this->json(['message' => 'Cadastro com sucesso', 'status' => 'success'], 200);
        
    }

    function DELETE_delete()
    {
        //dump($this->urlData);

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

}