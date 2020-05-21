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
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
	<li><a href='http://ddd'>Maison&bureaux</a></li>
	<li><a href='http://ddd'>Electromenager</a></li>
	<li><a href='http://ddd'>Agroalimentation</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
 	
</ul>";
}
add_shortcode('luxe', 'shortcode_luxe');
function shortcode_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Mode homme</a></li>
 	<li><a href='http://ddd'>Mode Femme</a></li>
 	<li><a href='http://ddd'>Mode enfant</a></li>
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
	<li><a href='http://ddd'>Maison&bureaux</a></li>
	<li><a href='http://ddd'>Electromenager</a></li>
	<li><a href='http://ddd'>Agroalimentation</a></li>
 	<li><a href='http://ddd'>Divers</a></li> 	
</ul>";
}
add_shortcode('vinted', 'shortcode_vinted');

function shortcode_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Mode homme</a></li>
 	<li><a href='http://ddd'>Mode Femme</a></li>
 	<li><a href='http://ddd'>Mode enfant</a></li>
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
	<li><a href='http://ddd'>Maison&bureaux</a></li>
	<li><a href='http://ddd'>Electromenager</a></li>
	<li><a href='http://ddd'>Agroalimentation</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
</ul>";
}
add_shortcode('kmer', 'shortcode_kmer');


function shortcode_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Mode homme</a></li>
 	<li><a href='http://ddd'>Mode Femme</a></li>
 	<li><a href='http://ddd'>Mode enfant</a></li>
 	<li><a href='http://ddd'>Santé&Beauté</a></li>
	<li><a href='http://ddd'>Maison&bureaux</a></li>
	<li><a href='http://ddd'>Electromenager</a></li>
	<li><a href='http://ddd'>Agroalimentation</a></li>
 	<li><a href='http://ddd'>Divers</a></li>
 	
</ul>";
}
add_shortcode('standard', 'shortcode_standard');


// produit de luxe
function shortcode_modehomme_luxe(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures hommes </a></li>
 	<li><a href='http://ddd'>Vetements hommes</a></li>
 	<li><a href='http://ddd'>Accessoires hommes</a></li>
 	
 	
</ul>";
}
add_shortcode('homme_luxe', 'shortcode_modehomme_luxe');

function shortcode_modefemme_luxe(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures femmes </a></li>
 	<li><a href='http://ddd'>Vetements femmes</a></li>
 	<li><a href='http://ddd'>Accessoires femmes</a></li>
 	
 	
</ul>";
}
add_shortcode('femme_luxe', 'shortcode_modefemme_luxe');

function shortcode_modeenfant_luxe(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures enfants </a></li>
 	<li><a href='http://ddd'>Vetements enfants</a></li>
 	<li><a href='http://ddd'>Accessoires enfants</a></li>
 	
 	
</ul>";
}
add_shortcode('enfant_luxe', 'shortcode_modeenfant_luxe');

function shortcode_electromenager_luxe(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cuisinière </a></li>
 	<li><a href='http://ddd'>Frigo</a></li>
 	<li><a href='http://ddd'>Congélateur</a></li>
        <li><a href='http://tagusdrone.com'>Marmite </a></li>
 	<li><a href='http://ddd'>Micro-onde</a></li>
 	<li><a href='http://ddd'>Plaque à gaz</a></li>
       <li><a href='http://tagusdrone.com'>Ustensiles </a></li>
 	
 	
 	
</ul>";
}
add_shortcode('electromenager_luxe', 'shortcode_electromenager_luxe');



function shortcode_sante_luxe(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cheveux</a></li>
 	<li><a href='http://ddd'>Suppléments</a></li>
 	<li><a href='http://ddd'>Parfum</a></li>
        <li><a href='http://tagusdrone.com'>Cosmétique </a></li>	
</ul>";
}
add_shortcode('sante_luxe', 'shortcode_sante_luxe');

function shortcode_maison_luxe(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Canapé</a></li>
 	<li><a href='http://ddd'>Table de salon</a></li>
 	<li><a href='http://ddd'>Meuble</a></li>
        <li><a href='http://tagusdrone.com'>Décoration </a></li>	
	<li><a href='http://tagusdrone.com'>Horloge </a></li>
</ul>";
}
add_shortcode('maison_luxe', 'shortcode_maison_luxe');
//fin produit de luxe 

//produit vinted
function shortcode_modehomme_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures hommes </a></li>
 	<li><a href='http://ddd'>Vetements hommes</a></li>
 	<li><a href='http://ddd'>Accessoires hommes</a></li>
 	
 	
</ul>";
}
add_shortcode('homme_vinted', 'shortcode_modehomme_vinted');

function shortcode_modefemme_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures femmes </a></li>
 	<li><a href='http://ddd'>Vetements femmes</a></li>
 	<li><a href='http://ddd'>Accessoires femmes</a></li>
 	
 	
</ul>";
}
add_shortcode('femme_vinted', 'shortcode_modefemme_vinted');

function shortcode_modeenfant_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures enfants </a></li>
 	<li><a href='http://ddd'>Vetements enfants</a></li>
 	<li><a href='http://ddd'>Accessoires enfants</a></li>
 	
 	
</ul>";
}
add_shortcode('enfant_vinted', 'shortcode_modeenfant_vinted');

function shortcode_electromenager_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cuisinière </a></li>
 	<li><a href='http://ddd'>Frigo</a></li>
 	<li><a href='http://ddd'>Congélateur</a></li>
        <li><a href='http://tagusdrone.com'>Marmite </a></li>
 	<li><a href='http://ddd'>Micro-onde</a></li>
 	<li><a href='http://ddd'>Plaque à gaz</a></li>
       <li><a href='http://tagusdrone.com'>Ustensiles </a></li>
 	
 	
 	
</ul>";
}
add_shortcode('electromenager_vinted', 'shortcode_electromenager_vinted');



function shortcode_sante_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cheveux</a></li>
 	<li><a href='http://ddd'>Suppléments</a></li>
 	<li><a href='http://ddd'>Parfum</a></li>
        <li><a href='http://tagusdrone.com'>Cosmétique </a></li>	
</ul>";
}
add_shortcode('sante_vinted', 'shortcode_sante_vinted');

function shortcode_maison_vinted(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Canapé</a></li>
 	<li><a href='http://ddd'>Table de salon</a></li>
 	<li><a href='http://ddd'>Meuble</a></li>
        <li><a href='http://tagusdrone.com'>Décoration </a></li>	
	<li><a href='http://tagusdrone.com'>Horloge </a></li>
</ul>";
}
add_shortcode('maison_vinted', 'shortcode_maison_vinted');
//fin produit vinted

//produit standard
function shortcode_modehomme_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures hommes </a></li>
 	<li><a href='http://ddd'>Vetements hommes</a></li>
 	<li><a href='http://ddd'>Accessoires hommes</a></li>
 	
 	
</ul>";
}
add_shortcode('homme_standard', 'shortcode_modehomme_standard');

function shortcode_modefemme_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures femmes </a></li>
 	<li><a href='http://ddd'>Vetements femmes</a></li>
 	<li><a href='http://ddd'>Accessoires femmes</a></li>
 	
 	
</ul>";
}
add_shortcode('femme_standard', 'shortcode_modefemme_standard');

function shortcode_modeenfant_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures enfants </a></li>
 	<li><a href='http://ddd'>Vetements enfants</a></li>
 	<li><a href='http://ddd'>Accessoires enfants</a></li>
 	
 	
</ul>";
}
add_shortcode('enfant_standard', 'shortcode_modeenfant_standard');

function shortcode_electromenager_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cuisinière </a></li>
 	<li><a href='http://ddd'>Frigo</a></li>
 	<li><a href='http://ddd'>Congélateur</a></li>
        <li><a href='http://tagusdrone.com'>Marmite </a></li>
 	<li><a href='http://ddd'>Micro-onde</a></li>
 	<li><a href='http://ddd'>Plaque à gaz</a></li>
       <li><a href='http://tagusdrone.com'>Ustensiles </a></li>
 	
 	
 	
</ul>";
}
add_shortcode('electromenager_standard', 'shortcode_electromenager_standard');



function shortcode_sante_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cheveux</a></li>
 	<li><a href='http://ddd'>Suppléments</a></li>
 	<li><a href='http://ddd'>Parfum</a></li>
        <li><a href='http://tagusdrone.com'>Cosmétique </a></li>	
</ul>";
}
add_shortcode('sante_standard', 'shortcode_sante_standard');

function shortcode_maison_standard(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Canapé</a></li>
 	<li><a href='http://ddd'>Table de salon</a></li>
 	<li><a href='http://ddd'>Meuble</a></li>
        <li><a href='http://tagusdrone.com'>Décoration </a></li>	
	<li><a href='http://tagusdrone.com'>Horloge </a></li>
</ul>";
}
add_shortcode('maison_standard', 'shortcode_maison_standard');
//fin produit standard

//produit kmer

function shortcode_modehomme_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures hommes </a></li>
 	<li><a href='http://ddd'>Vetements hommes</a></li>
 	<li><a href='http://ddd'>Accessoires hommes</a></li>
 	
 	
</ul>";
}
add_shortcode('homme_kmer', 'shortcode_modehomme_kmer');

function shortcode_modefemme_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures femmes </a></li>
 	<li><a href='http://ddd'>Vetements femmes</a></li>
 	<li><a href='http://ddd'>Accessoires femmes</a></li>
 	
 	
</ul>";
}
add_shortcode('femme_kmer', 'shortcode_modefemme_kmer');

function shortcode_modeenfant_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Chaussures enfants </a></li>
 	<li><a href='http://ddd'>Vetements enfants</a></li>
 	<li><a href='http://ddd'>Accessoires enfants</a></li>
 	
 	
</ul>";
}
add_shortcode('enfant_kmer', 'shortcode_modeenfant_kmer');

function shortcode_electromenager_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cuisinière </a></li>
 	<li><a href='http://ddd'>Frigo</a></li>
 	<li><a href='http://ddd'>Congélateur</a></li>
        <li><a href='http://tagusdrone.com'>Marmite </a></li>
 	<li><a href='http://ddd'>Micro-onde</a></li>
 	<li><a href='http://ddd'>Plaque à gaz</a></li>
       <li><a href='http://tagusdrone.com'>Ustensiles </a></li>
 	
 	
 	
</ul>";
}
add_shortcode('electromenager_kmer', 'shortcode_electromenager_kmer');



function shortcode_sante_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Cheveux</a></li>
 	<li><a href='http://ddd'>Suppléments</a></li>
 	<li><a href='http://ddd'>Parfum</a></li>
        <li><a href='http://tagusdrone.com'>Cosmétique </a></li>	
</ul>";
}
add_shortcode('sante_kmer', 'shortcode_sante_kmer');

function shortcode_maison_kmer(){
    return "<ul>
 	<li><a href='http://tagusdrone.com'>Canapé</a></li>
 	<li><a href='http://ddd'>Table de salon</a></li>
 	<li><a href='http://ddd'>Meuble</a></li>
        <li><a href='http://tagusdrone.com'>Décoration </a></li>	
	<li><a href='http://tagusdrone.com'>Horloge </a></li>
</ul>";
}
add_shortcode('maison_kmer', 'shortcode_maison_kmer');
//fin produit kmer
