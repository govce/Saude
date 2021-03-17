<?php

$this->layout = 'nolayout';

?>

<!-- $html = <<<'ENDHTML' -->
<style>
.table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
.img-logo {
    height: 50px;
    width: 600px;
    margin-bottom: 20px;
    margin-top: 20px;
    margin-left: 20%;
}  
</style>
<div class="container">
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>
                        <img class="img-logo " src="https://servicos.esp.ce.gov.br/eventos/2020/eve012020cenic/images/logo_espce_gov.png" alt="">
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="container">
    <div class="row">
        <table class="table table-bordered"  style="width: 100%;">
        <thead>
            <tr>
                <th style="background-color: red;">
                <h5>Relatório de solicitação de recurso</h5>
                </th>
            </tr>
        </thead>
        </table>
    </div>
    <div class="row">
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nº Inscrição</th>
                <th>Oportunidade</th>
                <th>Recurso Enviado</th>
                <th>Data Envio</th>
                <th>Situação</th>
                <th>Resposta</th>
                <th>Respondido em</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $report->agentId->name; ?></td>
                <td><?php echo $report->registrationId->id; ?></td>
                <td><?php echo $report->opportunityId->name; ?></td>
                <td><?php echo $report->resourceText; ?></td>
                <td><?php echo $report->resourceSend->format('d/m/Y H:i'); ?></td>
                <td><?php echo $report->resourceStatus; ?></td>
                <td><?php echo $report->resourceReply; ?></td>
                <td><?php echo $report->resourceDateReply->format('d/m/Y H:i'); ?></td>
                
            </tr>
        </tbody>
        </table>
    </div>
</div>

<?php
// ENDHTML;

// ob_start();

// $dompdf->load_html($html); 
// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'portrait');
// $dompdf->output(ob_clean());
// // Render the HTML as PDF
// //$dompdf->loadHtml(ob_get_clean());
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream("hello.pdf");
?>
