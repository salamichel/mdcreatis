<?php
include ("template/hd/nav/H2_pic.php");

$id = 3;
if (!empty($_POST["item_id"])) {
    $id = $_POST["item_id"];
}
?>

<!-- PIC_DEV -->

<section id="SC_pic_dv" class="SC_dev">

    <div class="FM_DV">
        <h2>Séance Photo Personnalisée</h2>
        <h3>Demandez votre séance</h3>
        <p>Vous avez des besoins précis, une demande particulière qui n'entre pas dans nos offres de Séances Photos ? N'hésitez pas une seconde et faites nous part de votre demande et nous trouverons la solution adéquate pour répondre à votre besoin.</p>
    </div>

	<div class="SH">
		<h3 class="BK0 R4">Demande effectuée par :
		<span><?= $_SESSION["user"]["name"] ?> <?= $_SESSION["user"]["fname"] ?></span></h3>	
	</div>

	<div>

		<form action="index.php?page=cad" method="post">
			<input type="hidden" name="prestation" value ="picture">
			<input type="hidden" name="item_id" value ="<?= $id ?>">

			<?
			if ($id == 3) {
			?>

			<!-- FIRST -->

			<div id="first_step" class="form_STP">

				<h3>Veuillez compléter le contenu de votre Pack</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="time">Durée du Shooting :</label>
						<select id="time" name="duree_seance">
							<option>30 min</option>
							<option>1 h</option>
							<option>1 heure 30</option>
							<option>2 heures</option>
							<option>2 heures 30</option>
							<option>3 heures</option>
							<option>3 heures 30</option>
							<option>4 heures</option>
						</select>
					</div>

					<div class="CLR">
						<label for="picture">Nombre de Photos :</label>
						<input type="number" name="nb_photos" id="picture" required="true" />
					</div>

					<div class="CLR">
						<label for="retouch">Nombre de Photos Filtres :</label>
						<input type="number" name="nb_retouches" id="retouch" required="true"/>
					</div>

				</div>

			</div>

			<?
				}
			?>

			<!-- SECOND -->

			<div id="second_step" class="form_STP LSt CLR">

				<h3>Veuillez indiquer le Lieu de la Séance.</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="location">Type de demande :</label>
						<select id="location" name="type_demande">
							<option>Particulier</option>
							<option>Entreprise</option>
							<option>Evénement</option>
							<option>Reportage</option>
						</select>
					</div>

					<div class="CLR">
						<label for="location">Endroit de la séance :</label>
						<select id="location" name="place">
							<option>Studio</option>
							<option>Extérieur</option>
							<option>Intérieur</option>
							<option>Domicile</option>
							<option>Autre</option>
						</select>
					</div>

					<div class="CLR">
						<label for="namecity">Lieu de la séance :</label>
						<input type="text" name="namecity" id="namecity" placeholder="Nom de la ville" required="true"/>
					</div>

					<div class="CLR">
						<label for="namelocation">Nom de l'endroit :</label>
						<input type="text" name="namelocation" id="namelocation" placeholder="Nom du lieu" required="true"/>
					</div>

					<div class="CLR">
						<label for="date">Date Souhaitée :</label>
						<input type="date" name="date_souhaite" id="date" required="true"/>
					</div>

					<div class="CLR">
						<textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
					</div>

				</div>               

			</div>

			<!-- THIRD -->

			<div id="third_step" class="form_STP LSt">

				<h3>Veuillez Sélectionner vos Options.</h3>
				<div class="form CLR">

				<?
				$options = $db->rawQuery("SELECT * FROM md_produit_options a, md_options o WHERE a.option_id = o.option_id and produit_id = ? order by prix_ht desc", array("3"));
				$i = 0;
				foreach ($options as $option) {
					$i++;
				?>

					<div class = "CLR">
						<input type = "checkbox" name = "options[]" id = "option<?= $i ?>" value = "<?= $option["option_id"] ?>" />
						<label for = "option<?= $i ?>"><?= $option["titre"] ?><span> <?= $option["prix_ht"] ?> €</span></label>
					</div>

					<?
						}
					?>

				</div>

			</div>

			<!-- FOURTH -->

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