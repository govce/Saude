<?php
use MapasCulturais\Entities\Registration;

$app = MapasCulturais\App::i();

$url = $registration->status == Registration::STATUS_DRAFT ? $registration->editUrl : $registration->singleUrl;
$proj = $registration->opportunity;

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
    <div class="remodal" data-remodal-id="modal-<?php echo $registration->id; ?>">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Remodal</h1>
        <p>
        Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
        </p>
        <form action="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">
        
        </form>
        <br>
        <button data-remodal-action="cancel" class="btn btn-default">Cancel</button>
        <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
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