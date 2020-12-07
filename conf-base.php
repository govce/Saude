<?php

use \MapasCulturais\i;

return [

    'app.siteName' => env('SITE_NAME', i::__('Mapas da Saúde')),
    'app.siteDescription' => env('SITE_DESCRIPTION', i::__('Mapa da Saúde.')),
    
    'maps.center' => [-5.058114374355702, -39.4134521484375],
    'maps.zoom.default' => 8,

    'plugins' => [
        'EvaluationMethodTechnical' => ['namespace' => 'EvaluationMethodTechnical', 'config' => ['step' => 0.1]],
        'EvaluationMethodSimple' => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary']
    ],

    'auth.provider' => 'OpauthKeyCloak',
    'auth.config' => [
        'logout_url'            => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/logout',
        'client_id'             => 'DigitalSaude',
        'client_secret'         => 'xxx',
	    'auth_endpoint'         => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/auth',
        'token_endpoint'        => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/token',
        'user_info_endpoint'    => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/userinfo',
        'redirect_uri'          => 'http://localhost:85/autenticacao/keycloak/oauth2callback',
    ],
];