<?php
include ("template/hd/nav/H1_blk.php");
unset($_SESSION["pics"]);
?>

<!-- STP -->

<section class="FM_SP1">

	<div>

		<h1>Etape 1</h1>
		<p>Sélection de vos photos</p>

	</div>

	<div class="CLR AN_OP3">

		<article class="R4">
			<h1>Téléchargement</h1>
			<h2>Glisser / Déposer.</h2>
			<p>Sélectionnez vos photos en les glissants dans le cadre ou sélectionnez-les une par une en validant sur le bouton "Télécharger la photo".</p>
		</article>

		<article class="R4">
			<h1>Etape 2</h1>
			<h2>Validez cette étape.</h2>
			<a href="index.php?page=retouch_sp2" class="B1 B_BLK R4">Etape suivante</a>
	</article>

	</div>

</section>

<!-- AC1 -->

<?
include("template/forms/dnd_forms.php")
?>

<?php
include ("template/ft/F1_wht.php");
?>