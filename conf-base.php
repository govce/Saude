<?php

use \MapasCulturais\i;

return [

    'app.siteName' => env('SITE_NAME', i::__('Mapas da Saúde')),
    'app.siteDescription' => env('SITE_DESCRIPTION', i::__('Mapa da Saúde.')),
    
    'maps.center' => [-5.058114374355702, -39.4134521484375],
    'maps.zoom.default' => 8,
];