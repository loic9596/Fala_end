<?php
/*
  Plugin Name: mes shortcodes
  Description: Plugin fournissant des shortcodes
  Author: Elliott
  Version: 1.0.0
 */
function shortcode_luxe(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Mode homme</a></li>
 	<li><a href='http://ddd'>Mode Femme</a></li>
 	<li><a href='http://ddd'>Mode enfant</a></li>
 	<li><a href='http://ddd'>Chaussures</a></li>
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
 	
</ul>";
}
add_shortcode('luxe', 'shortcode_luxe');
function shortcode_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Mode homme</a></li>
 	<li><a href='http://ddd'>Mode Femme</a></li>
 	<li><a href='http://ddd'>Mode enfant</a></li>
 	<li><a href='http://ddd'>Chaussures</a></li>
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
 	
</ul>";
}
add_shortcode('vinted', 'shortcode_vinted');

function shortcode_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Mode homme</a></li>
 	<li><a href='http://ddd'>Mode Femme</a></li>
 	<li><a href='http://ddd'>Mode enfant</a></li>
 	<li><a href='http://ddd'>Chaussures</a></li>
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
 	
</ul>";
}
add_shortcode('kmer', 'shortcode_kmer');


function shortcode_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Mode homme</a></li>
 	<li><a href='http://ddd'>Mode Femme</a></li>
 	<li><a href='http://ddd'>Mode enfant</a></li>
 	<li><a href='http://ddd'>Chaussures</a></li>
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
 	
</ul>";
}
add_shortcode('standard', 'shortcode_standard');



