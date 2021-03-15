<?php

$this->layout = 'nolayout';
// instantiate and use the dompdf class
?>
<!-- $html = <<<'ENDHTML' -->

<div class="container">
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>
                        <img src="https://servicos.esp.ce.gov.br/eventos/2020/eve012020cenic/images/logo_espce_gov.png" alt="" width="50%" height="50%">
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="container">
    <div class="row">
        <table  class="table table-bordered">
        <thead>
            <tr>
                <th>
                <h5>Relatório de solicitação de recurso</h5>
                </th>
            </tr>
        </thead>
        </table>
    </div>
    <div class="row">

        <table class="table table-bordered">
        <thead>
            <tr class="active">
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
                <td>Junior</td>
                <td>000007</td>
                <td>A minha</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti voluptatum quam necessitatibus! Fuga inventore, ipsam vitae a ducimus repudiandae minus repellat odit vel consectetur. Accusantium distinctio nihil numquam quo dignissimos?</td>
                <td>05/11/1984</td>
                <td>Deferido</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim veritatis facilis quas adipisci minus porro est deserunt exercitationem, blanditiis animi nemo officiis explicabo saepe, optio, voluptas ab perferendis suscipit? Accusantium!</td>
                <td>12/03/2021</td>
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
