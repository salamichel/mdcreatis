<div class="SCR1">

<!-- CONNECTION -->

<section id="SC_idx" class="CLR">

	<div class="AN_OP3">

		<?php
			if (empty($_SESSION["user"]["is_actif"])) {
				include ("idx/connection.php");
			}

			else {
				include ("idx/pub_131003.php");
			}
		?>

	</div>

</section>

</div>