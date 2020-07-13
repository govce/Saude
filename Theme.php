<?php
namespace Saude;
use MapasCulturais\Themes\BaseV1;
use MapasCulturais\App;

class Theme extends BaseV1\Theme{

    protected static function _getTexts(){
        $app = App::i();
        $self = $app->view;
        $url_search_agents = $self->searchAgentsUrl;
        $url_search_spaces = $self->searchSpacesUrl;
        $url_search_events = $self->searchEventsUrl;
        $url_search_projects = $self->searchProjectsUrl;

        return [
           'site: name' => 'Mapas da saúde',
           'site: description' => App::i()->config['app.siteDescription'],
           'site: in the region' => 'na região',
           'site: of the region' => 'da região',
           'site: owner' => 'Secretaria',
           'site: by the site owner' => 'pela Secretaria',

           'home: title' => "Bem-vind@!",
           'home: abbreviation' => "ESP-CE",
           'home: colabore' => "Colabore com o Mapa da Saúde",
           'home: welcome' => "O Mapa da Saúde é um software livre, gratuito e colaborativo implementado pela Escola de Saúde Pública (ESP-CE). No qual, abrange informações   de diferentes sistemas, serviços e recursos para melhor informar e integrar a sociedade e os governos sobre o quadro de saúde do Estado do Ceará, trazendo dados sobre os profissionais, os serviços e os sistema relacionados a escola. Para conferir mais e colaborar na gestão estadual, basta criar seu perfil.",
           'home: events' => "Você pode pesquisar eventos de saúde da cidade nos campos de busca combinada. Como usuário cadastrado, você pode incluir seus eventos na plataforma e divulgá-los gratuitamente.",
           'home: agents' => "Você pode colaborar na gestão da saúde da cidade com suas próprias informações, preenchendo seu perfil de ator de mudança. Neste espaço, estão registrados profissionais, gestores e instituições; uma rede de atores envolvidos no cenário de saúde. Você pode cadastrar um ou mais informes, além de associar ao seu perfil eventos e espaços de com divulgação gratuita.",
           'home: spaces' => "Procure por espaços culturais incluídos na plataforma, acessando os campos de busca combinada que ajudam na precisão de sua pesquisa. Cadastre também os espaços onde desenvolve suas atividades artísticas e culturais na cidade.",
           'home: projects' => "Reúne os projetos ou agrupa os eventos de todos os tipos executados pela escola. Neste espaço, você encontra leis de fomento, mostras, convocatórias e editais criado pela Escola de Saúde Pública-CE, além de diversas iniciativas cadastradas pelos usuários da plataforma. Cadastre-se e divulgue seus projetos.
           ",
            'home: home_devs' => 'Existem algumas maneiras de desenvolvedores interagirem com o Mapas Culturais. A primeira é através da nossa <a href="https://github.com/hacklabr/mapasculturais/blob/master/documentation/docs/mc_config_api.md" target="_blank">API</a>. Com ela você pode acessar os dados públicos no nosso banco de dados e utilizá-los para desenvolver aplicações externas. Além disso, o Mapas Culturais é construído a partir do sofware livre <a href="http://institutotim.org.br/project/mapas-culturais/" target="_blank">Mapas Culturais</a>, criado em parceria com o <a href="http://institutotim.org.br" target="_blank">Instituto TIM</a>, e você pode contribuir para o seu desenvolvimento através do <a href="https://github.com/hacklabr/mapasculturais/" target="_blank">GitHub</a>.',
            'home: opportunities' => "Faça a sua inscrição ou acesse o resultado de diversas convocatórias como editais, oficinas, prêmios e concursos. Você também pode criar o seu próprio formulário e divulgar uma oportunidade para outros atores de mudança.",
           'search: verified results' => 'Resultados Verificados',
           'search: verified' => "Verificados"
        ];
    }

    static function getThemeFolder() {
        return __DIR__;
    }

    function _init() {        
        parent::_init();
        $app = App::i();
       
        $app->hook('view.render(<<*>>):before', function() use($app) {
            $this->_publishAssets();
        });

        //$app->registerController('indicadores', 'Saude\Controllers\Indicadores');
    }

    protected function _publishAssets() {
        $this->jsObject['assets']['logo-instituicao'] = $this->asset('img/logo-instituicao.png', false);
    }

    public function register() {
        parent::register();
        $app = App::i();
        $app->registerController('indicadores', 'Saude\Controllers\Indicadores');
        $app->registerController('taxonomias', 'Saude\Controllers\Taxonomias');
        // \MapasCulturais\App::i()->registerController('indicadores', 'Saude\Controllers\Indicadores');
    }

}
