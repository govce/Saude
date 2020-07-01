<?php
$app = MapasCulturais\App::i();
$terms = $app->repo('Term')->findBy(['taxonomy' => 'area']);
$areas = array_map(function($term) { return $term->term; }, $terms);
$termsLinguage = $app->repo('Term')->findBy(['taxonomy' => 'linguagem']);
$linguage = array_map(function($termLinguage) { return $termLinguage->term; }, $termsLinguage);
//eval(\psy\sh());
return array(
    1 => array(
       // 'slug' => \MapasCulturais\i::__('tag'),
    'slug' => 'tag',
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
            'MapasCulturais\Entities\Event',
            'MapasCulturais\Entities\Project',
            'MapasCulturais\Entities\Opportunity',
        )
    ),

    2 => array(
        //'slug' => \MapasCulturais\i::__('area'),
        'slug' => 'area',
        'required' => \MapasCulturais\i::__("Você deve informar ao menos uma área de atuação"),
        'entities' => array(
            'MapasCulturais\Entities\Space',
            'MapasCulturais\Entities\Agent',
        ),
        'restricted_terms' => $areas
    ),

    3 => array(
        'slug' => 'linguagem',
        'required' => \MapasCulturais\i::__("Você deve informar ao menos uma linguagem"),
        'entities' => array(
            'MapasCulturais\Entities\Event'
        ),

        'restricted_terms' => $linguage
    )
);
