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
        $date = new DateTime('now');
        //$dt = $date->format('Y-m-d');
        $dt = date('Y-m-d H:i:s');
        try {
            $conn->executeQuery("INSERT INTO resources(resource_text, registration_id, opportunity_id, agent_id, resource_send) VALUES (1,{$this->postData['resource_text']},
            {$this->postData['registration_id']},
            {$this->postData['opportunity_id']},
            {$this->postData['agent_id']}, '".$dt."'
            )");
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}