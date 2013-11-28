<?php
include ("template/hd/nav/H2_ret.php");
?>

<!-- STP -->

<section class="FM_SP3 M20 CLR">

	<article class="F1 R4">

		<h1>Etape 1</h1>
		<h2>Sélection de votre photo.</h2>
		<p>Glissez votre photo dans le cadre, ou choisissez un fichier et appuyez sur le bouton télécharger la photo.</p>

	</article>

	<article class="F1 R4">

		<h1>Etape 2</h1>
		<h2>Validez votre Panier.</h2>
		<form id="frm1" action="index.php?page=cad" method="post">
			<input type="hidden" name="item_id" value="<?= @$_POST["item_id"] ?>">
			<a href="#" class="B1 B_BLK R4" onclick="document.getElementById('frm1').submit();">Ajouter au Panier</a>
		</form>

	</article>

</section>

<!-- AC1 -->

<?
include("template/forms/dnd_forms.php")
?>

<?php
include ("template/ft/F1_wht.php");
?>