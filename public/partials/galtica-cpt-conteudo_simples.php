<?php

/**
 * Provide a public-facing view for the content type
 *
 * This file is used to markup the Conteudo Simples
 *
 * @package    Galtica
 * @subpackage Galtica/public/partials
 */

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$tipo_de_midia = get_sub_field('tipo_de_midia');
$imagem = get_sub_field('imagem');
$video = get_sub_field('video');
$exibicao = get_sub_field('exibicao');

// var_dump($video);
?>
<h2><?php echo $titulo; ?></h2>
<h3><?php echo $subtitulo; ?></h3>

<?php if ($tipo_de_midia == 'Imagem') : ?>

	imagem

<?php elseif ($tipo_de_midia == 'Vídeo'): ?>

	video

<?php endif; ?>