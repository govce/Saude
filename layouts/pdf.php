<?php
$site_name = $this->dict('site: name', false);
$title = isset($entity) ? $this->getTitle($entity) : $this->getTitle()
?>

<!DOCTYPE html>
<html lang="<?php echo $app->getCurrentLCode(); ?>" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php $this->asset('img/favicon.ico') ?>" />
    <title><?php echo $title == $site_name ? $title : "{$site_name} - {$title}"; ?></title>

</head>
<body <?php $this->bodyProperties() ?> >
        <section id="main-section" class="clearfix">
		<?php echo $TEMPLATE_CONTENT;?>
		<?php $this->part('footer', $render_data);?>