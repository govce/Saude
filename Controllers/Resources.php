<?php
namespace Saude\Controllers;

use DateTime;
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

    function POST_store() {
        dump($this->postData);
        $app = App::i();
        $conn = $app->em->getConnection();
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
        $rec->resourceSend = $date->format('Y-m-d H:i:s');
        $app->em->persist($rec);
        // $app->em->flush();
        //$rec->save(true);
        $app->enableAccessControl();
        dump($rec);
    }
}