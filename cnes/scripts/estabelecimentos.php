<?php

require_once "php-cnes-master/ws-security.php";
ini_set('display_errors', true);

$conMap = new PDO("pgsql:host=IP;port=5432;dbname=mapas", "mapas", "mapas");
$conMap->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (!$conMap) {
    echo 'não conectou';
}

$row = 1;
if (($handle = fopen("../csv/estabelecimentos.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
            $cnes = $data[$c];


            $options = array('location' => 'https://servicoshm.saude.gov.br/cnes/EstabelecimentoSaudeService/v1r0',
                'encoding' => 'utf-8',
                'soap_version' => SOAP_1_2,
                'connection_timeout' => 180,
                'trace' => 1,
                'exceptions' => 1);

            $client = new SoapClient('https://servicoshm.saude.gov.br/cnes/EstabelecimentoSaudeService/v1r0?wsdl', $options);
            $client->__setSoapHeaders(soapClientWSSecurityHeader('CNES.PUBLICO', 'cnes#2015public'));

            $function = 'consultarEstabelecimentoSaude';

            $arguments = array('est' =>
                array(
                    'FiltroPesquisaEstabelecimentoSaude' => array(
                        'CodigoCNES' => array(
                            'codigo' => $cnes
                        )
                    )
                )
            );

            $result = $client->__soapCall($function, $arguments);


            $nomeFantasia = $result->DadosGeraisEstabelecimentoSaude->nomeFantasia->Nome;

            $location = '(' . $result->DadosGeraisEstabelecimentoSaude->Localizacao->longitude . ', ' . $result->DadosGeraisEstabelecimentoSaude->Localizacao->latitude . ')';

            if ($result->DadosGeraisEstabelecimentoSaude->Localizacao->longitude == null) {
                $location = '(0, 0)';
            }

            $data = date('Y-m-d H:i:s');
            $idAgenteResponsavel = 7; //mudar esse valor, pois ? baseado no agente
            $sqlInsert = "INSERT INTO public.space (location, _geo_location, name, short_description, long_description, create_timestamp, status, is_verified, public, agent_id, type) 
                        VALUES ('" . $location . "', '0101000020E610000000000008A63E43C090B78B3B9BCF0DC0', '" . $nomeFantasia . "', '" . $nomeFantasia . "', '" . $nomeFantasia . "', '" . $data . "', 1, 'FALSE', 'FALSE', '" . $idAgenteResponsavel ."', 1)";
            $conMap->exec($sqlInsert);
            $idSpace = $conMap->lastInsertId();


            $endereco = $result->DadosGeraisEstabelecimentoSaude->Endereco;

            $sql = "SELECT MAX(id)+1 FROM public.space_meta";
            $maxSpaceMeta = $conMap->query($sql);
            $id = $maxSpaceMeta->fetchColumn();


            $sqlInsertMeta2 = "INSERT INTO public.space_meta (object_id, key, value, id) VALUES (
                                                                        {$idSpace}, 
                                                                        'En_CEP', 
                                                                        {$endereco->CEP->numeroCEP},  
                                                                        {$id}
                                                                        )";
            $conMap->exec($sqlInsertMeta2);

            $maxSpaceMeta = $conMap->query($sql);
            $id = $maxSpaceMeta->fetchColumn();
            $sqlInsertMeta3 = "INSERT INTO public.space_meta (object_id, key, value, id) VALUES ({$idSpace}, 'En_Nome_Logradouro', '{$endereco->nomeLogradouro}', {$id}  )";
            $conMap->exec($sqlInsertMeta3);

            $maxSpaceMeta = $conMap->query($sql);
            $id = $maxSpaceMeta->fetchColumn();
            $sqlInsertMeta4 = "INSERT INTO public.space_meta (object_id, key, value, id) VALUES ({$idSpace}, 'En_Num', '{$endereco->numero}', {$id}  )";
            $conMap->exec($sqlInsertMeta4);

            $maxSpaceMeta = $conMap->query($sql);
            $id = $maxSpaceMeta->fetchColumn();
            $sqlInsertMeta5 = "INSERT INTO public.space_meta (object_id, key, value, id) VALUES ({$idSpace}, 'En_Bairro', '{$endereco->Bairro->descricaoBairro}', {$id}  )";
            $conMap->exec($sqlInsertMeta5);

            $maxSpaceMeta = $conMap->query($sql);
            $id = $maxSpaceMeta->fetchColumn();
            $sqlInsertMeta6 = "INSERT INTO public.space_meta (object_id, key, value, id) VALUES ({$idSpace}, 'En_Municipio', '{$endereco->Municipio->nomeMunicipio}' , {$id} )";
            $conMap->exec($sqlInsertMeta6);

            $maxSpaceMeta = $conMap->query($sql);
            $id = $maxSpaceMeta->fetchColumn();
            $sqlInsertMeta7 = "INSERT INTO public.space_meta (object_id, key, value, id) VALUES ({$idSpace}, 'En_Estado', '{$endereco->Municipio->UF->siglaUF}', {$id}  )";
            $conMap->exec($sqlInsertMeta7);


            $row++;
            if ($row == 100) {
                die;
            }
        }
    }
    fclose($handle);
}

echo $row;