<?php
include ("template/hd/nav/H4_for.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/for/for_A.php");

$pack1 = $md_page->getSubPage("for_home_1");
$pack2 = $md_page->getSubPage("for_home_2");
$pack3 = $md_page->getSubPage("for_home_3");
?>

<!-- A1 -->

<section id="SC_for1A">

    <div class="FM_T1r">
        <h2>Formation à Domicile</h2>
        <h3>Ou comment se former chez soi.</h3>
        <p>Envie d'apprendre les techniques de retouche installé confortablement chez vous ?<br>Choisissez votre leçon parmi nos formations proposées spécialement pour l'initiation et le perfectionnement de la retouche photo.</p>
        <a class="B2 B_BL1 R4" href="index.php?page=formation">Prochainement sur mdcreatis.com
	    <div><img class="BTfl1" src="css/all/ico.gif"></div></a>
    </div>

</section>

</div>

<?php
include ("template/ft/F1_wht.php");
?>