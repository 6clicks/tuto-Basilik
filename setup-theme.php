<?php
/**
 * Plugin Name: Tutorials Installation du theme Basilik.
 * Plugin URI: https://www.925.ch
 * Description:  La liste des vidéos tutotial pour la gestion du site
 * Version:  1.0
 * Author: John Robert-Nicoud
 * Author URI: https://www.925.ch
 * License: A "Slug" license name e.g. GPL2
 */
 
 add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', '!! Ne pas oublier !!', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '
<img src="https://raw.githubusercontent.com/6clicks/tuto-snow/master/logo-925.png">
<h2>tutorial pour installer Basilik </h2>
<ol>
<li> une fois installé le thème vous pouvez masquer cette fenêtre avec les option d\'écrant</li>
<li> Importer les ACF pour la home <a href="https://raw.githubusercontent.com/6clicks/tuto-snow/master/acf-images-responsive.json" target="_blanc">télécharger ce fichier </a> et l\' importer dans ACF / outils	</li>
</ol>
<br>
';
}