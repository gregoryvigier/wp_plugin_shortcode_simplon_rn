<?php
/*
	Plugin Name: Shortcode Simplon Référent Numérique
	Description: Plugin contenant un Shortcode afin d'intégrer à un site, une référence à la formation Référent Numérique chez Simplon.
	Author: Vigier Gregory
	Version: 1.0.0
	Date: 11 oct 2019 

	*/

	Function simplon_rn() {
		return '

			<style>.bold{font-weight:700;}.colorred{color:red;}</style>

			<p>Destinée aux chercheurs d\'emplois en situation de reconversion, la formation <span class="bold">Référent.e Numérique Entreprise</span> prépare en 8 mois aux métiers du numérique et est couronnée 
	   			par l\'obtention de <span class="colorred">3 certifications</span>.<br/>
       			Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins.<br/>
       	
       			<span>La formation est menée conjointement par :</span>
				<ul>
					<li>l\'<a href="https://www.insa-rouen.fr/" title="Lien vers le site de l\'INSA">INSA</a> ;</li>
					<li>le <a href="https://www.cesi.fr" title="Lien vers le site du CESI">CESI</a> ;</li>
					<li><a href="https://simplonline.co" title="Lien vers le site de Simplon">Simplon.co</a>.</li>
				</ul>
			</p>

		';
	}

	add_shortcode ('simplon', 'simplon_rn');
