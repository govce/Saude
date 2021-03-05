<?php
namespace Saude\Controllers;

use DateTime;
use \MapasCulturais\App;
use \MapasCulturais\i;
use \Saude\Entities\Resources as EntitiesResources;
use Saude\Repositories\Resource;

class Resources extends \MapasCulturais\Controller{

    function GET_index() {
        $this->render('resources');
        //echo "recurso";
    }

    function POST_store() {
        $app = App::i();
        
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
        //ID REG
        //ID OPP
        // dump($this->getData);
        // die();
        // $this->getData[''];
        // $this->getData[''];
        $text = EntitiesResources::inforesource($this->getData['reg'], $this->getData['opp']);        
        $textSimple = ['id' => $text[0]['id'], 'text' => $text[0]['resource_text']];
        $this->json($textSimple);
    }

    function PUT_replyResource() {
        dump($this->putData);
        $app = App::i();
        $date = new DateTime('now');
        $reply = $app->em->find('Saude\Entities\Resources', $this->putData['resource_id']);
        $reply->resourceReply = $this->putData['resource_reply'];
        $reply->resourceStatus = $this->putData['resource_status'];
        $reply->resourceDateReply = $date;
        $app->em->persist($reply);
        $app->em->flush();
        dump($reply);
        
    }
}