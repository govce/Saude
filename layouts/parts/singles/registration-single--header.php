<?php $sentDate = $entity->sentTimestamp; ?>
<?php if ($sentDate): ?>
<div class="alert success">
    <?php \MapasCulturais\i::_e("Inscrição enviada no dia");?>    
    <?php echo $sentDate->format(\MapasCulturais\i::__('d/m/Y à\s H:i:s')); ?>
</div>
<?php endif; 
// PEGANDO SOMENTE O NUMERO DA INSCRIÇÃO E RETIRANDO O on-
$inscricao = substr($entity->number, 3);
//echo $inscricao;
?>
<h3 class="registration-header"><?php \MapasCulturais\i::_e("Formulário de Inscrição");?></h3>

<div class="registration-fieldset clearfix">
    <h4><?php \MapasCulturais\i::_e("Número da Inscrição");?></h4>
    <div class="registration-id alignleft">
        <?php echo $entity->number ?>
    </div>
    <div class="alignright">
        <?php if($entity->canUser('changeStatus')): ?>
            <mc-select class="{{getStatusSlug(data.registration.status)}}" model="data.registration" data="data.registrationStatusesNames" getter="getRegistrationStatus" setter="setRegistrationStatus"></mc-select>
        <?php elseif($opportunity->publishedRegistrations): ?>
            <span class="status status-{{getStatusSlug(<?php echo $entity->status ?>)}}">{{getStatusNameById(<?php echo $entity->status ?>)}}</span>
        <?php endif; ?>        
    </div>
</div>
<div class="registration-fieldset clearfix">
    <div ng-repeat="reg in data.registrations" >
        <div class="registration-id alignleft" ng-if="reg.id == '<?php echo $inscricao ?>'">
            <h4><?php \MapasCulturais\i::_e("Média da nota");?></h4>
        </div>
        <div class="alignright"  ng-if="reg.id == '<?php echo $inscricao ?>'">
            <h4 >
            {{reg.evaluationResultString}}
            </h4>
        </div>
    </div>
</div>

<?php if($entity->projectName): ?>
    <div class="registration-fieldset">
        <div class="label"><?php \MapasCulturais\i::_e("Nome do Projeto"); ?> </div>
        <h5> <?php echo $entity->projectName; ?> </h5>
    </div>
<?php endif; ?>
