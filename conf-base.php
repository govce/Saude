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
<<<<<<< HEAD
        'logout_url'            => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/logout',
        'client_id'             => 'DigitalSaude',
        'client_secret'         => '1085ca2a-ab21-46ef-828d-5fb01b43c918',
	    'auth_endpoint'         => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/auth',
        'token_endpoint'        => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/token',
        'user_info_endpoint'    => 'https://dev.id.org.br/auth/realms/saude/protocol/openid-connect/userinfo',
        'redirect_uri'          => 'http://localhost/autenticacao/keycloak/oauth2callback',
=======
        'logout_url'            => env('LOGOUT_URL', ''),
        'client_id'             => env('CLIENT_ID', ''),
        'client_secret'         => env('CLIENT_SECRET', ''),
	    'auth_endpoint'         => env('AUTH_ENDPOINT', ''),
        'token_endpoint'        => env('TOKEN_ENDPOINT', ''),
        'user_info_endpoint'    => env('USER_INFO_ENDPOINT', ''),
        'redirect_uri'          => env('REDIRECT_URI', ''),
>>>>>>> cd3f0699be23321114864e3461530f5e12fe59ec
    ],
];