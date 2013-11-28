<?php
include ("template/hd/nav/H3_des.php");

$id = 1;
if (!empty($_POST["item_id"])) {
    $id = $_POST["item_id"];
}
?>

<!-- DES_DEV -->

<section id="SC_des_dv" class="SC_dev">

    <div class="FM_DV">
        <h2>Communication Visuelle</h2>
        <h3>Demandez votre devis</h3>
        <p>A votre écoute pour tout vos projets. Nous vous accompagnons durant toute l'élaboration du supports demandé pour coller au maximum à votre demande.</p>
    </div>

	<div class="SH">
		<h3 class="BK0 R4">Demande effectuée par :
		<span><?= $_SESSION["user"]["name"] ?> <?= $_SESSION["user"]["fname"] ?></span></h3>	
	</div>

	<div>

		<form action="index.php?page=cad" method="post" enctype="multipart/form-data">

			<input type="hidden" name="item_id" value ="<?= $id ?>">

			<?
			if ($id == 1) {
			?>

			<!-- FIRST -->

			<div id="first_step" class="form_STP">

				<h3>Veuillez compléter le contenu de votre demande</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="type">Type de prestation :</label>
						<select id="type" name="prestation">
							<option>Logotype</option>
							<option>Carte de visite</option>
							<option>Affiche</option>
							<option>Flyer</option>
							<option>Plaquette</option>
							<option>Carton d'invitation</option>
							<option>Web-Design</option>
						</select>
					</div>

					<div class="CLR">
						<label for="type">Budget :</label>
						<select id="type" name="budget">
							<option>30€ - 100€</option>
							<option>100€ - 200€</option>
							<option>200€ - 400€</option>
							<option>400€ - 800€</option>
							<option>800€ - 1500€</option>
							<option>1500€ - 5000€</option>
							<option>5000€ - 20000€</option>
							<option>+ 20000€</option>
						</select>
					</div>

					<div class="CLR">
						<textarea name="comshoot" placeholder="Description de votre demande de devis…" cols=55 rows=10></textarea>
					</div>

				</div>

			</div>

			<?
				}
			?>

			<!--SECOND-->

			<div id = "second_step" class = "form_STP LSt CLR">

				<h3>Veuillez compléter les informations suivantes.</h3>
				<div class = "form CLR">

					<div class = "CLR">
						<label for = "location">Type de demande :</label>
						<select id = "location" name = "type_demande">
							<option>Particulier</option>
							<option>Entreprise</option>
							<option>Micro Entreprise</option>
							<option>Association</option>
							<option>Autre</option>
						</select>
					</div>

					<div class = "CLR">
						<label for = "location">Type de Projet :</label>
						<select id = "location" name = "det_projet">
							<option>Demande d'informations</option>
							<option>Demande pour établir un Budget</option>
							<option>Projet concret, réalisation à moyen terme</option>
							<option>Projet important, réalisation dans l'immédiat</option>
						</select>
					</div>

					<div class = "CLR">
						<label for = "namecity">Lieu de la demande :</label>
						<input type = "text" name = "namecity" id = "namecity" placeholder = "Nom de la ville" required = "true"/>
					</div>

					<div class = "CLR">
						<label for = "date">Échéances :</label>
						<input type = "date" name = "date_souhaite" id = "date" required = "true"/>
					</div>

				</div>

			</div>

			<!--THIRD-->

			<div id = "third_step" class="form_STP LSt">

				<h3>Joindre un Cahier des Charges.</h3>
				<div class = "form CLR">

					<div id="file_design">
						<input name = "project_file" type = "file" data-validate = "true" >
					</div>

				</div>

			</div>

			<!--FOURTH-->

			<div id="fourth_step" class="form_STP LSt">
				<button id="submit_fourth" type="submit" class="BT4 BLACK R4" name="submit_fourth">
				Ajouter au Panier<span><img class="BTcad" src="css/all/ico.gif"></span></button>
			</div>

		</form>

	</div>

</section>

</div>

<?php
include ("template/ft/F1_wht.php");
?>