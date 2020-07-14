<?php
namespace MapasCulturais;
$this->layout = 'pdf';
ini_set('memory_limit', '256M');
use Dompdf\Dompdf;

$app = App::i();
$em = $app->em;
$conn = $em->getConnection();

$query = $conn->fetchAll("SELECT * FROM term WHERE taxonomy = 'area' ");
/*
$query = $conn->fetchAll("SELECT space.id AS idSpace, name, type FROM space INNER JOIN space_meta ON space_meta.object_id = space.id where space_meta.key = 'En_Municipio' and space_meta.value = 'FORTALEZA' limit 500");
*/

$totalArea = count($query);
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$codigo_html = '
<table  style="width: 100%;" border="1" cellpadding="1">
    <thead>
        <tr>
            <th>Term</th>
            <th>Taxonomia</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>';
        foreach ($query as $key => $valueQuery) {
            $codigo_html .= 
            '<tr>
                <td>'.$query[$key]['term'].'</td>
                <td>'.$query[$key]['taxonomy'].'</td>
                <td>'.$query[$key]['description'].'</td>
            </tr>';
        }
        $codigo_html .= '
    </tbody>
</table>
'; 
//echo $codigo_html;
$dompdf->loadHtml($codigo_html);
$ganbi = 'taxo.pdf';
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$font = $dompdf->getFontMetrics()->getFont("Arial", "bold");
$dompdf->getCanvas()->page_text(16, 810, "Página: {PAGE_NUM} de {PAGE_COUNT}", $font, 8, array(0, 0, 0));

$dom = $dompdf->getDom();
$this->assertEquals('', $dom->textContent);
//echo $codigo_html;
$pdf = $dompdf->output();
$dompdf->stream($ganbi);
$dompdf->stream();
?>

