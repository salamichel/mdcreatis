<?php
include ("template/hd/nav/H3_for.php");

$id = 43;
if (!empty($_POST["item_id"])) {
    $id = $_POST["item_id"];
}
?>

<!-- FOR_DEV -->

<section id="SC_for_dv" class="SC_dev">

    <div class="FM_DV">
        <h2>Formation Personnalisée</h2>
        <h3>Demandez-nous votre leçon</h3>
        <p>Et si vous aviez envie d'approfondir sérieusement vos connaissances ?<br>C'est possible sur mdcreatis ! Personnalisez vos leçons, il vous suffit simplement de nous faire part de votre demande sur le site et nous vous apporterons une réponse personnalisée en vous formant chez vous ou sur internet.</p>
    </div>

	<div class="SH">
		<h3 class="BK0">Demande effectuée par :
		<span><?= $_SESSION["user"]["name"] ?> <?= $_SESSION["user"]["fname"] ?></span></h3>	
	</div>

	<div>

		<form action="index.php?page=cad" method="post">

			<input type="hidden" name="item_id" value ="<?= $id ?>">

			<?
			if ($id == 43) {
			?>

			<!-- FIRST -->

			<div id="first_step" class="form_STP">

				<h3>Veuillez compléter le contenu de votre Pack</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="time">Durée de la Formation :</label>
						<select id="time" name="duree_seance">
							<option>Nous laisser évaluer</option>
							<option>1 h</option>
							<option>1 heure 30</option>
							<option>2 heures</option>
							<option>2 heures 30</option>
							<option>3 heures</option>
							<option>3 heures 30</option>
							<option>4 heures</option>
							<option>4 heure 30</option>
							<option>5 heures</option>
							<option>5 heures 30</option>
							<option>6 heures</option>
							<option>6 heures 30</option>
							<option>8 heures</option>
							<option>10 heures</option>
							<option>+ 10 heures</option>
						</select>
					</div>

					<div class="CLR">
						<label for="retouch">Nombre de Jours :</label>
						<input type="number" name="nb_jours" id="retouch" required="true" />
					</div>

				</div>

			</div>

			<?
			}
			?>

			<!--SECOND-->

			<div id="second_step" class="form_STP LSt CLR">

				<h3>Veuillez indiquer le Lieu de la Formation.</h3>
				<div class="form CLR">

					<div class="CLR">
						<label for="location">Type de demande :</label>
						<select id="location" name="type_demande">
							<option>Particulier</option>
							<option>Entreprise</option>
						</select>
					</div>

					<div class="CLR">
						<label for="location">Endroit de la formation :</label>
						<select id="location" name="place">
							<option>à Domicile</option>
							<option>Autre</option>
						</select>
					</div>

					<div class="CLR">
						<label for="namecity">Lieu de la formation :</label>
						<input type="text" name="namecity" id="namecity" placeholder="Nom de la ville" required="true" />
					</div>

					<div class="CLR">
						<label for="namelocation">Nom de l'endroit :</label>
						<input type="text" name="namelocation" id="namelocation" placeholder="Nom du lieu" required="true" />
					</div>

					<div class="CLR">
						<label for="date">Date Souhaitée :</label>
						<input type="date" name="date_souhaite" id="date" required="true" />
					</div>                    

				</div>

			</div>

			<!-- THIRD -->

			<div id="third_step" class="form_STP LSt">

				<h3>Veuillez Sélectionner vos Leçons ou faire votre demande.</h3>
				<div class="form CLR">

				<?
				$options = $db->rawQuery("SELECT * FROM md_produit_options a, md_options o WHERE a.option_id = o.option_id and produit_id = ? order by prix_ht desc", array($id));
				$i = 0;
				foreach ($options as $option) {
					$i++;
				?>

					<div class="CLR">
						<input type="checkbox" name="options[]" id = "option<?= $i ?>" value="<?= $option["option_id"] ?>" />
						<label for = "option<?= $i ?>"><?= $option["titre"] ?><span> <?= $option["prix_ht"] ?> €</span></label>
					</div>

					<?
					}
					?>

					<div class="CLR">
						<textarea name="comshoot" placeholder="Votre commentaire…" cols=55 rows=10></textarea>
					</div>

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