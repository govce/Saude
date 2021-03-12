<?php
namespace Saude\Controllers;

use DateTime;
use \MapasCulturais\App;
use \MapasCulturais\i;
use \Saude\Entities\Resources as EntitiesResources;
use Saude\Repositories\Resource;

class Resources extends \MapasCulturais\Controller{

    function GET_index() {
        //$this->render('resources');
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $app = App::i();
        $dql = "SELECT r, o
        FROM 
        Saude\Entities\Resources r
        JOIN r.opportunityId o
        JOIN r.registrationId re
        WHERE r.opportunityId = 17 
        and r.registrationId  = 905535015";

        $query = $app->em->createQuery($dql);
        $resource = $query->getResult();
        if(!empty($resource)) {
            if($resource[0]->resourceText !== "" && $resource[0]->replyPublish == TRUE )
            // dump($resource[0]->resourceText);
            // dump($resource[0]->replyPublish);
            dump(true);
        }
        dump(false);
    }

    function POST_store() {
        $app = App::i();
        if(empty($this->postData['resource_text'])){

            $this->json(['title' => 'Erro','message' => 'O campo não pode ser vazio', 'type' => 'error'], 500);
        }
        // RECUPERANDO OS OBJETOS PARA RELACIONAMENTO
        $regId = $app->repo('Registration')->find($this->postData['registration_id']);
        $oppId = $app->repo('Opportunity')->find($this->postData['opportunity_id']);
        $ageId = $app->repo('Agent')->find($this->postData['agent_id']);
        // INICIANDO A INSTANCIA
        $app->disableAccessControl();
        $rec = new EntitiesResources;
        $rec->resourceText = $this->postData['resource_text'];
        $rec->registrationId = $regId;
        $rec->opportunityId = $oppId;
        $rec->agentId = $ageId;
        $date = new DateTime('now');
        $rec->resourceSend = $date;
        try {
            $app->em->persist($rec);
            $app->em->flush();
            $app->enableAccessControl();
            $this->json(['title' => 'Sucesso','message' => 'Seu recurso foi enviado com sucesso','id' => $rec->id, 'type' => 'success'], 200);
        } catch (\Throwable $th) {
            //dump( $th->getMessage());
            // $this->json(['title' => 'Erro','message' => 'Ocorreu um erro inesperado, tente novamente!','type' => 'eror'], 500);
        } 
    }

    function GET_allResource() {
        $all = EntitiesResources::allResource();
        $this->json($all);
    }

    function GET_inforesource() {
        $text = EntitiesResources::inforesource($this->getData['reg'], $this->getData['opp']);        
        $textSimple = ['id' => $text[0]['id'], 'text' => $text[0]['resource_text']];
        $this->json($textSimple);
    }

    function GET_inforesourceReply() {
        $text = EntitiesResources::find($this->getData['id']);
        $this->json($text);
    }

    function PUT_replyResource() {
        if(
            empty($this->postData['resource_reply']) || 
            empty($this->postData['resource_status']) ){
            $this->json(['title' => 'Erro','message' => 'Todos os campos deve ser preenchidos', 'type' => 'error'], 500);
        }
        $app = App::i();
        $date = new DateTime('now');
        $reply = $app->em->find('Saude\Entities\Resources', $this->putData['resource_id']);
        $reply->resourceReply = $this->putData['resource_reply'];
        $reply->resourceStatus = $this->putData['resource_status'];
        $reply->resourceDateReply = $date;
        $reply->replyAgentId = $app->user->id;

        //ALTERAR A NOTA FINAL
        if(!empty($this->putData['new_consolidated_result'])) {
            $reg = $app->repo('Registration')->find($reply->registrationId->id);
            $reg->consolidatedResult = $this->putData['new_consolidated_result'];
            $app->em->persist($reg);
        }

        try {
            $app->em->persist($reply);
            $app->em->flush();
            $this->json(['title' => 'Sucesso','message' => 'Sua resposta foi enviado com sucesso', 'type' => 'success'], 200);
        } catch (Exception $th) {
            //throw new \Exception('Controller Id already in use');
            $this->json(['title' => 'Ops!','message' => 'Ocorreu um erro inesperado, tente mais tarde.', 'type' => 'error'], 500);
        }
        
    }

    function POST_publishResource() {
        //dump($this->postData);
        $res = EntitiesResources::publishResource($this->postData['opportunity_id']);
        if($res > 0) {
            $this->json([ 'title' => 'Sucesso', 'message' => 'Publicação realizada com sucesso', 'type' => 'success'], 200);
        }
        $this->json([ 'title' => 'Error', 'message' => 'Ocorreu um erro inesperado.', 'type' => 'error'], 500);
    }

    function GET_getNameOpportunity() {
        $app = App::i();
        $opp = $app->repo('Opportunity')->find($this->getData['id']);
        $this->json($opp->name);
    }

}