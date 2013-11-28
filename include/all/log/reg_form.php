<script>
    function validatePassword() {
        if ($("#regPW2").val() != $("#regPW").val()) {
            alert("le mot de passe ne correspond pas");
            //more processing here
            return(false);
        }
    }
</script>

<div class="SCR1">

<!-- SV1 -->

<section id="SC_idx" class="CLR">

		<div>

<!-- REGISTRER -->

<section id="SC_idx_rg1" class="CLR">

	<article>

		<h1>Inscrivez-vous dès maintenant sur mdcreatis.com</h1>
		<p>Profitez de nos diverses prestations dans le milieu du Design et de la retouche photographique.</p>

	</article>


	<aside>

		<div class="FM_LG1 R4">
			<h2>Formulaire d'inscription</h2>

			<?
            if (!$formCorrect) {
                ?>
                <div> <?= $msg ?></div> 
                <?
            }
            ?>

			<form id="validatedForm" action="index.php?page=registrer" method="post" onsubmit="return  validatePassword();">

				<input type="hidden" name="src" value="registrer">

				<div class="CLR">
					<input type="text"	name="fname" id="fname" placeholder="Prénom" required="required">
					<input type="text"	name="name" id="name" placeholder="Nom" required="required">
				</div>

				<div>
                    <input type="email"	name="cnx_id" id="regID" placeholder="Adresse Email" required="required" value="<?= @$_POST["cnx_id"] ?>">
                    <input type="password" name="cnx_pass" id="regPW" placeholder="Mot de passe" required="required" value="<?= @$_POST["cnx_pass"] ?>">
                    <input type="password" name="cnx_pass2" id="regPW2" placeholder="Confirmation mot de passe" required="required" value="">
                </div>

				<div id="BK_cond" class="CLR">
					<label>
						<input type="checkbox" value="yes" name="regTM" id="regTM"  required="required">
						<span>J'accepte les <a target="_blank" href="index.php?page=condition">Conditions générales</a></span>
					</label>
				</div>

                <div>
                    <button type="submit" class="B1 B_WHT R4" name="valid" title="Se connecter">Valider</button>
                </div>

            </form>

		</div>

	</aside>

</section>

		</div>

</section>

</div>