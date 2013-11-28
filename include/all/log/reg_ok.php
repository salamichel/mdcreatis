<?php
include ("template/hd/nav/H1_idx2.php");

$updateData = array(
    'is_actif' => '1',
    'date_activation' => date("Y-m-d h:i:s")
);


$db->where('cle_securite', $_GET["key"]);
$results = $db->update('md_comptes', $updateData);

$user = $db
        ->where('cle_securite', $_GET["key"])
        ->get('md_comptes');

if (count($user) == 1) {
    $_SESSION["user"] = $user[0];
    //echo "OK";
    ?>

<div class="SCR1">

<!-- CONNECTION -->

<section id="SC_idx" class="CLR">

	<div class="AN_OP3">

<!-- REGISTRER OK -->

<section id="SC_idx_rg1" class="CLR">

	<article>

		<h1><?= strtoupper($user[0]["name"]) ?> <?= ucfirst($user[0]["fname"]) ?>,</h1>
		<p>mdcreatis vous souhaite la bienvenue dans le monde du Design et de la Photographie.</p>

	</article>


	<aside>

		<div class="FM_RG2 R4">
			<h2>Félicitations, votre compte est dorénavant actif.</h2>

                <div>
                    <a href="index.php?page=index" class="B1 B_WHT R4" title="Accueil">Retour Accueil</a>
                </div>

		</div>

	</aside>

</section>

	</div>

</section>

</div>

    <?
} else {
    echo "KO";
}
?>

<?php
include ("template/ft/F1_wht.php");
?>