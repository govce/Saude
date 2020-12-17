<?php
$app = MapasCulturais\App::i();
$em = $app->em;
$conn = $em->getConnection();

return array(
    'insert taxo agents saúde' => function () use($conn){
        
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_graus_academicos', 'Técnico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_graus_academicos', 'Graduação');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_graus_academicos', 'Especialização');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_graus_academicos', 'MBA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_graus_academicos', 'Mestrado');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_graus_academicos', 'Doutorado');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_graus_academicos', 'Pós-doutorado');");

            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Acupuntura');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Alergia e imunologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Anestesiologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Angiologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cardiologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia cardiovascular');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia da mão');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia de cabeça e pescoço');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia do aparelho digestivo');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia geral');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia oncológica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia pediátrica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia plástica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia torácica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Cirurgia vascular');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Clínica médica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Coloproctologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Dermatologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Endocrinologia e metabologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Endoscopia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Gastroenterologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Genética médica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Geriatria');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Ginecologia e obstetrícia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Hematologia e hemoterapia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Homeopatia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Infectologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Mastologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina de emergência');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina de família e comunidade');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina do trabalho');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina de tráfego');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina esportiva');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina física e reabilitação');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina intensiva');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina legal e perícia médica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina nuclear');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Medicina preventiva e social');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Nefrologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Neurocirurgia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Neurologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Nutrologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Oftalmologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Oncologia clínica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Ortopedia e traumatologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Otorrinolaringologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Patologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Patologia clínica/medicina laboratorial');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Pediatria');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Pneumologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Psiquiatria');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Radiologia e diagnóstico por imagem');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Radioterapia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Reumatologia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_especialidades', 'Urologia');");

            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Medicina');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Fisioterapia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Enfermagem');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Terapia Ocupacional');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Farmácia');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Coordenação Clínica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Coordenação de Enfermagem');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_categorias_profissionais', 'Outra');");

            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Assistência direta ao paciente');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Apoio diagnóstico ou terapêutico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Apoio técnico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Administração e gestão');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Pronto-socorro');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Ambulatório');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Centro cirúrgico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Centro obstétrico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Internação');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'UTI');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Outro setor ou serviço de assistência direta ao paciente');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Laboratório clínico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Diagnóstico por imagem');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Hemodinâmica ou cardiologia intervencionista');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Nefrologia ou terapia renal substitutiva');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Outro setor ou serviço de apoio diagnóstico e terapêutico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Triagem e acolhimento');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Acolhimento psicossocial');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Alimentação e assistência nutricional e dietética');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Farmácia e assistência farmacêutica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Fisioterapia fonoaudiologia e terapia ocupacional');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Esterilização de materiais');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Arquivo médico e estatística');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Epidemiologia vigilância epidemiológica e registro de óbito');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Outro setor ou serviço de apoio técnico');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Gestão estratégica');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Regulação contas hospitalares e gestão de riscos');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Gestão de pessoas');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Formação ou qualificação profissional');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Estágio profissional');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Residência médica ou multiprofissional');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Saúde e segurança do trabalho');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Apoio administrativo');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Higiene e limpeza');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Transporte e segurança');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Materiais e suprimentos');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Manutenção e reparos');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('profissionais_setor_atuacao', 'Outro setor ou serviço de apoio administrativo');");
    },

    'insert taxo spaces saúde' => function () use($conn){
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRAL DE ABASTECIMENTO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRAL DE GESTÃO EM SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRAL DE NOTIFICACÃO,CAPTACÃO E DISTRIB DE ORGÃOS ESTADUAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRAL DE REGULAÇÃO DE SERVIÇOS DE SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRAL DE REGULAÇÃO DO ACESSO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRAL DE REGULAÇÃO MEDICA DAS URGENCIAS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRO DE APOIO A SAÚDE DA FAMILIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRO DE ATENÇÃO HEMOTERAPIA E OU HEMATOLOGICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRO DE ATENÇÃO PSICOSSOCIAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRO DE IMUNIZAÇÃO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRO DE PARTO NORMAL - ISOLADO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CENTRO DE SAÚDE/UNIDADE BÁSICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CLINICA/CENTRO DE ESPECIALIDADE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'CONSULTORIO ISOLADO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'COOPERATIVA OU EMPRESA DE CESSAO DE TRABALHADORES NA SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'FARMACIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'HOSPITAL/DIA - ISOLADO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'HOSPITAL ESPECIALIZADO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'HOSPITAL GERAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'LABORATORIO CENTRAL DE SAÚDE PUBLICA LACEN');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'LABORATORIO DE SAÚDE PUBLICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'OFICINA ORTOPEDICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'POLICLINICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'POLO ACADEMIA DA SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'POLO DE PREVENCAO DE DOENCAS E AGRAVOS E PROMOCAO DA SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'POSTO DE SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'PRONTO ATENDIMENTO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'PRONTO SOCORRO ESPECIALIZADO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'PRONTO SOCORRO GERAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'SERVICO DE ATENÇÃO DOMICILIAR ISOLADO(HOME CARE)');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'TELESSAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'UNIDADE DE APOIO DIAGNOSE E TERAPIA (SADT ISOLADO)');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'UNIDADE DE ATENÇÃO A SAÚDE INDIGENA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'UNIDADE DE VIGILANCIA EM SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'UNIDADE MISTA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'UNIDADE MOVEL DE NIVEL PRE-HOSPITALAR NA AREA DE URGENCIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_unidades', 'UNIDADE MOVEL TERRESTRE');");

            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_gestao', 'DUPLA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_gestao', 'ESTADUAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_tipos_gestao', 'MUNICIPAL');");

            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ATENÇÃO A DOENÇA RENAL CRÔNICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ATENÇÃO A SAÚDE DE POPULACOES INDIGENAS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ATENÇÃO A SAÚDE NO SISTEMA PENITENCIARIO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ATENÇÃO AS PESSOAS EM SITUACAO DE VIOLENCIA SEXUAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ATENÇÃO BÁSICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ATENÇÃO EM UROLOGIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ATENDIMENTO ITINERANTE DE ASSISTENCIA E ENSINO EM SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'CIRURGIA VASCULAR');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'COMISSOES E COMITES');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'CONSULTORIO NA RUA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ESTRATEGIA DE AGENTES COMUNITARIOS DE SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'ESTRATEGIA DE SAÚDE DA FAMÍLIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'HOSPITAL DIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'IMUNIZAÇÃO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'LOGISTICA DE IMUNOBIOLOGICOS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'MEDICINA NUCLEAR');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'REGULAÇÃO DO ACESSO A ACOES E SERVIÇOS DE SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE APOIO A SAÚDE DA FAMILIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO A DST/HIV/AIDS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO A OBESIDADE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO AO PACIENTE COM TUBERCULOSE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO AO PRE-NATAL, PARTO E NASCIMENTO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO A SAÚDE AUDITIVA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO A SAÚDE DOS ADOLESCENTES EM CONFLITO COM');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO A SAÚDE DO TRABALHADOR');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO A SAÚDE REPRODUTIVA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO CARDIOVASCULAR / CARDIOLOGIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO DOMICILIAR');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO EM NEUROLOGIA / NEUROCIRURGIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO EM SAÚDE BUCAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO INTEGRAL EM HANSENIASE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENÇÃO PSICOSSOCIAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ATENDIMENTO MOVEL DE URGENCIAS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE BANCO DE TECIDOS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE CIRURGIA REPARADORA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE CIRURGIA TORACICA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE CONTROLE DE TABAGISMO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE CUIDADOS INTERMEDIARIOS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE DIAGNOSTICO DE LABORATORIO CLINICO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE DIAGNOSTICO POR ANATOMIA PATOLOGICA EOU CITOPATO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE DIAGNOSTICO POR IMAGEM');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE DIAGNOSTICO POR METODOS GRAFICOS DINAMICOS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE DISPENSACAO DE ORTESES PROTESES E MATERIAIS ESPE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ENDOCRINOLOGIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ENDOSCOPIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE FARMACIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE FISIOTERAPIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE HEMOTERAPIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE LABORATORIO DE HISTOCOMPATIBILIDADE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE LABORATORIO DE PROTESE DENTARIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE OFTALMOLOGIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ONCOLOGIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE ORTESES, PROTESES E MAT ESPECIAIS EM REABILITACAO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE PNEUMOLOGIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE PRATICAS INTEGRATIVAS E COMPLEMENTARES');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE REABILITACAO');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE SUPORTE NUTRICIONAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE TERAPIA INTENSIVA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE TRAUMATOLOGIA E ORTOPEDIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE TRIAGEM NEONATAL');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE URGENCIA E EMERGENCIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE VIDEOLAPAROSCOPIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO DE VIGILANCIA EM SAÚDE');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'SERVICO POSTO DE COLETA DE MATERIAIS  BIOLOGICOS');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'TELECONSULTORIA');");
            $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('instituicao_servicos', 'TRANSPLANTE');");
    },

    'insert taxo opportunity saúde' => function () use($conn){
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Concurso');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Conferência');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Congresso');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Convenção');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Curso');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Edital');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Encontro');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Exposição');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Feira');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Fórum');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Mostra');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Oficina');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Palestra');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Reunião');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Simpósio');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('opportunity_taxonomia', 'Workshop');");

    },
    
    'insert taxo project saúde' => function () use($conn){
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_taxonomia', 'Cezoa Davar');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_taxonomia', 'Lorem ipsum pulvinar');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_taxonomia', 'Lorem rutrum himenaeos');");
    },

    'insert taxo project_type saúde' => function () use($conn){
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Concurso');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Conferência');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Congresso');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Convenção');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Curso');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Edital');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Encontro');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Exposição');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Feira');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Fórum');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Mostra');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Oficina');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Palestra');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Reunião');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Simpósio');");
        $conn->executeQuery("INSERT INTO public.term (taxonomy, term) VALUES('project_type', 'Workshop');");
    }
);











