<?php
use Saude\Entities\Resources;

$resources = Resources::resourceIdOpportunity($entity->id);
?>

<div id="resource" class="aba-content">
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="active">
                <!-- <th>Publicar</th> -->
                <th>Inscrição</th>
                <th>Agente</th>
                <th>Status</th>
                <th>Responder</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($resources as $key => $resource) {
            //pegando a instancia do objecto com o relacionamento
            $rec = Resources::find($resources[$key]['id']);

            $registration = $app->repo('Registration')->find($rec->registrationId->id);
        ?>
            <tr>
                <!-- <th><input type="checkbox" name="replyPublish"></th> -->
                <th><?php echo $rec->registrationId->number; ?></th>
                <th><?php echo $rec->agentId->name; ?></th>
                <th><?php echo $rec->resourceStatus; ?></th>
                <!-- <th>
                    <?php //echo substr($rec->resourceText, 0 , 20); ?>
                    <p>
                        <a href="#" class="text-info">Ver recurso</a>
                    </p>
                </th> -->
                <th>
                    <?php echo substr($rec->resourceReply, 0 , 30) ; ?>...
                    <p>
                    <a href="#modal-resposta-recurso" onclick="showModalReply('<?php echo $rec->id; ?>', '<?php echo $entity->id; ?>', '<?php echo $rec->opportunityId->name; ?>','<?php echo $registration->consolidatedResult; ?>')" class="btn btn-info" title="Responder o recurso do <?php echo $rec->agentId->name; ?>">
                        <i class="fa fa-share-square" aria-hidden="true"></i> Responder Recurso
                    </a>
                    </p>
                </th>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="form-group">
        
        <button class="btn btn-primary" onclick="clickPublish(<?php echo $entity->id; ?>)"> 
            <i class="fa fa-bullhorn" aria-hidden="true"></i>
            Publicar Recurso
        </button>
    </div>
</div>
<!-- modal de resposta de recurso -->
<?php $this->part('modals/form-reply-resource') ?>
