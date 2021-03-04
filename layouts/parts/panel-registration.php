<?php
use MapasCulturais\Entities\Registration;

$app = MapasCulturais\App::i();

$url = $registration->status == Registration::STATUS_DRAFT ? $registration->editUrl : $registration->singleUrl;
$proj = $registration->opportunity;
//dump($registration);

?>
<article class="objeto clearfix">
    <?php if($avatar = $proj->avatar): ?>
    <div class="thumb">
        <img src="<?php echo $avatar->transform('avatarSmall')->url ?>" >
    </div>
    <?php endif; ?>
    <a href="<?php echo $url; ?>" class="btn btn-success" >Acessar inscrição</a>
    <h1><?php echo $proj->name ?></h1>
    <small>
        <strong>Inscrição:</strong> <?php echo $registration->number; ?>
    </small> <br>
    <!-- <a href="<?php echo $url; ?>" class="btn btn-primary" >
        <i class="fa fa-edit"></i> Abrir Recurso
    </a> -->
    <a href="#modal-<?php echo $registration->id; ?>" class="btn btn-primary">
    <i class="fa fa-edit"></i> Abrir Recurso
    </a>
    <div ng-controller="resourceController">
        <div class="remodal" data-remodal-id="modal-<?php echo $registration->id; ?>">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1>Formulário de recurso</h1>
            <p>
                <label for=""><strong>Oportunidade: </strong>
                    <?php echo $registration->opportunity->name; ?>
                </label>
            </p>
            <form  method="post" id="formSendResource">
                <textarea name="resource_text" id="" cols="30" rows="20" class="form-control" style="height: 322px !important"></textarea>
                <input type="text" name="registration_id" value="<?php echo $registration->id; ?>">
                <input type="text" name="opportunity_id" value="<?php echo $registration->opportunity->id; ?>">
                <input type="text" name="agent_id" value="<?php echo $registration->owner->id; ?>">
            
            <br>
            <button data-remodal-action="cancel" class="btn btn-default" title="Desistir de enviar o recurso">
                <i class="fa fa-close" aria-hidden="true"></i>
                Fechar
            </button>
            <button class="btn btn-primary" type="submit" title="Enviar o seu recurso para essa oportunidade" style="margin-left: 20px;"
            id="">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                Enviar
            </button>
            </form>
        </div>
    </div>
    <div class="objeto-meta">
        <div><span class="label"<?php \MapasCulturais\i::esc_attr_e("Responsável:");?>></span> <?php echo $registration->owner->name ?></div>
        <?php
        foreach($app->getRegisteredRegistrationAgentRelations() as $def):
            if(isset($registration->relatedAgents[$def->agentRelationGroupName])):
                $agent = $registration->relatedAgents[$def->agentRelationGroupName][0];
        ?>
        <div><span class="label"><?php echo $def->label ?>:</span> <?php echo $agent->name; ?></div>

        <?php
            endif;
        endforeach;
        ?>
        <?php if($proj->registrationCategories): ?>
        <div><span class="label"><?php echo $proj->registrationCategTitle ?>:</span> <?php echo $registration->category ?></div>
        <?php endif; ?>
    </div>
</article>