<!-- IDX CONNECTION -->

<section id="SC_idx_rg1" class="CLR AN_OP3">

	<article>

		<h1>La photo comme vous ne l'avez jamais vu...</h1>
		<p>La retouche photo ouvre ses portes aux particuliers. Venez découvrir dès maintenant ce que le monde professionnel de la photo a à vous offrir.</p>

	</article>


	<aside>

		<div class="FM_LG1 R4">
			<h2>S'identifier sur mdcreatis</h2>

			<?
			if (!$formCorrect) {
				echo '<div id="pass_error">' . $msg . '</div> ';
			}
			?>

			<form action="index.php" method="post">

				<input type="hidden" name="src" value="connection">

				<div>
					<input type="email"	name="cnx_id" id="cnx_id" placeholder="Adresse Email" required="required">
				</div>

				<div>
					<input type="password"	name="cnx_pass" id="cnx_pass" placeholder="Mot de passe" required="required">
				</div>

				<div id="BK_forgot" class="CLR">
					<label>
						<input type="checkbox" value="1" name="remember_me" checked="checked">
						<span>Se souvenir de moi</span>
					</label>
					<a href="index.php?page=lostpass">Mot de passe oublié ?</a>
				</div>

                <div>
                    <button type="submit" class="B1 B_WHT R4" name="valid" title="Se connecter">Se connecter
                    </button>
                </div>

            </form>

		</div>

		<div>
			<a href="index.php?page=registrer" class="FHb FM_LG2 R4">Inscription</a>
		</div>

	</aside>

</section>