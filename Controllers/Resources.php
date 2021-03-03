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
        $rec = new EntitiesResources;
        $rec->resourceText = $this->postData['resource_text'];
        $rec->registrationId = $this->postData['registration_id'];
        $rec->opportunityId = $this->postData['opportunity_id'];
        //$rec->agentId = $this->postData['agent_id'];
        $date = new DateTime('now');
        $dt = date('Y-m-d H:i:s');
        $rec->resourceSend = $date;
        //dump($rec);
        die;
    }
}