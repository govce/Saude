<?php 
$registrations = $app->repo('Registration')->findByOpportunityAndUser($entity, $app->user); 

if(!empty($registrations)){

    $allResults = $app->repo('RegistrationEvaluation')->findBy(['registration' => $registrations[0]->id]);
    $verifyPublish = $app->repo('Opportunity')->find($registrations[0]->opportunity->id);
    $typeEvaluation = $app->repo('EvaluationMethodConfiguration')->findBy(
        ['opportunity' => $registrations[0]->opportunity->id]);
}

?>
<?php if ($registrations): ?>
    <table class="my-registrations">
        <caption class="caption-table"><?php \MapasCulturais\i::_e("Minhas inscrições");?></caption>
        <thead>
            <tr>
                <th class="registration-id-col">
                    <?php \MapasCulturais\i::_e("Inscrição");?>
                </th>
                <th class="registration-agents-col">
                    <?php \MapasCulturais\i::_e("Agentes");?>
                </th>
                <th class="registration-status-col">
                    <?php \MapasCulturais\i::_e("Status");?>
                </th>
                <?php if($verifyPublish->publishedRegistrations == true
                 && $typeEvaluation[0]->type->id == 'technical'): ?>
                    <th class="registration-status-col" style="text-align: center;">
                        <?php \MapasCulturais\i::_e("Nota preliminar");?>
                    </th>
                    <th class="registration-status-col" style="text-align: center;">
                        <?php \MapasCulturais\i::_e("Nota final");?>
                    </th>
                <?php endif; ?> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registrations as $registration):
                $reg_args = ['registration' => $registration, 'opportunity' => $entity]; 
                ?>
                <tr>
                    <?php $this->applyTemplateHook('user-registration-table--registration', 'begin', $reg_args); ?>
                    <td class="registration-id-col">
                        <?php $this->applyTemplateHook('user-registration-table--registration--number', 'begin', $reg_args); ?>
                        <a href="<?php echo $registration->singleUrl ?>"><?php echo $registration->number ?></a>
                        <?php $this->applyTemplateHook('user-registration-table--registration--number', 'end', $reg_args); ?>
                    </td>
                    <td class="registration-agents-col">
                        <?php $this->applyTemplateHook('user-registration-table--registration--agents', 'begin', $reg_args); ?>
                        <p>
                            <span class="label"><?php \MapasCulturais\i::_e("Responsável");?></span><br>
                            <?php echo htmlentities($registration->owner->name); ?>
                        </p>
                        <?php
                        foreach ($app->getRegisteredRegistrationAgentRelations() as $def):
                            if (!$entity->useRegistrationAgentRelation($def))
                                continue;
                            ?>
                            <?php if ($agents = $registration->getRelatedAgents($def->agentRelationGroupName)): ?>
                                <p>
                                    <span class="label"><?php echo $def->label ?></span><br>
                                    <?php echo htmlentities($agents[0]->name); ?>
                                </p>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php $this->applyTemplateHook('user-registration-table--registration--agents', 'end', $reg_args); ?>
                    </td>
                    <td class="registration-status-col">
                        <?php $this->applyTemplateHook('user-registration-table--registration--status', 'begin', $reg_args); ?>
                        <?php if ($registration->status > 0): ?>
                            <?php \MapasCulturais\i::_e("Enviada em");?> <?php echo $registration->sentTimestamp ? $registration->sentTimestamp->format(\MapasCulturais\i::__('d/m/Y à\s H:i')): ''; ?>.
                        <?php else: ?>
                            <?php \MapasCulturais\i::_e("Não enviada.");?><br>
                            <a class="btn btn-small btn-primary" href="<?php echo $registration->singleUrl ?>"><?php \MapasCulturais\i::_e("Editar e enviar");?></a>
                        <?php endif; ?>
                        <?php $this->applyTemplateHook('user-registration-table--registration--status', 'end', $reg_args); ?>
                    </td>
                    <?php if($verifyPublish->publishedRegistrations == true
                     && $typeEvaluation[0]->type->id == 'technical'): ?>
                        <td>
                            <?php echo $registration->preliminaryResult; ?>
                        </td>
                        <td>
                            <?php echo $registration->consolidatedResult; ?>
                        </td>
                    <?php endif; ?>
                    <?php $this->applyTemplateHook('user-registration-table--registration', 'end', $reg_args); ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<?php 
if(isset($verifyPublish) && $verifyPublish->publishedRegistrations == true
&& $typeEvaluation[0]->type->id == 'technical'){
    if (!empty($allResults)): ?>
        <table class="my-registrations">
        <caption class="caption-table"><?php \MapasCulturais\i::_e("Avaliações");?></caption>
            <thead>
                <tr>
                    <th class="registration-id-col">
                        <?php \MapasCulturais\i::_e("Inscrição");?>
                    </th>
                    <th class="registration-col-evalutions">
                        <?php \MapasCulturais\i::_e("Nota Avaliação");?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $count = 0;
                foreach ($allResults as $key => $value): ?>
                    <tr>
                        <td>
                            
                            <a href="<?php echo $registration->singleUrl ?>"><?php echo $registration->number ?></a>
                        </td>
                        <td class="registration-col-evalutions">
                            <?php \MapasCulturais\i::_e("Nota do avaliador ".($key + 1).  ' foi: <strong>'.number_format($value->result, 2, '.','').'</strong>'); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<?php 
    endif;
}    
?>
