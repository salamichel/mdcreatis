<?php
include ("template/hd/nav/H2_ret.php");

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/ret/pk/pk5.php");
$pack1 = $md_page->getSubPage("b_w2");
?>

<?/*
<div style="background-color: #fff">
    <h1>balise dynamique </h1>
    nom : <?= $pack1["nom"] ?><br>
    tarif : <?= $pack1["prix"] ?><span><sup>€<?= $pack1["decimal"] ?></sup>        
</div>
*/
?>

<!-- NAV -->

<section id="" class="F1 R5 M20">

    <div class="R5 LSb"><?php include ("template/ot/NAV_pk1.php"); ?></div>

</section>

<!-- PK -->

<section id="SC_ret_pk" class="FD R5 M50">

	<div id="SLD1-02" class="SLD1">

	<div class="sl-slider">

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/P5/P5_1r.jpg">
				<img src="css/ret/P5/P5_1.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/P5/P5_2r.jpg">
				<img src="css/ret/P5/P5_2.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/P5/P5_3r.jpg">
				<img src="css/ret/P5/P5_3.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
			<div class="UCP">
				<img src="css/ret/P5/P5_4r.jpg">
				<img src="css/ret/P5/P5_4.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
			<div class="UCP">
				<img src="css/ret/P5/P5_5r.jpg">
				<img src="css/ret/P5/P5_5.jpg">		
			</div>
		</article>

		<article class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			<div class="UCP">
				<img src="css/ret/P5/P5_6r.jpg">
				<img src="css/ret/P5/P5_6.jpg">		
			</div>
		</article>

	</div>

	<nav id="nav-dots">
		<span class="nav-dot-current"></span>
	</nav>

	</div>

    <!-- DESCRIPTION -->

    <div id="ret_PK1" class="FM_TKA1 CLR">

        <article>
            <h1>Pack <span>B &amp; WHITE (Paysage)</span></h1>
            <h2>Partager ses émotions au détour d'un souvenir démuni de couleurs.</h2>
            <p>Spécialisé dans les paysages, ce pack vous permettra à la fois de donner un charme assuré grâce au noir et blanc tout en gommant certaines imperfections. Box B & White (Paysage) associe le dynamisme et le prestige d'une photographie en noir et blanc pour paysage.</p>
            <div class="FM_PK-IF1">
	            <p>Commande traitée sous : 72h</p>
	            <p><span>13,00€ </span>Économisez <span>50%</span> soit <span>6,50€</span></p>
            </div>
        </article>

        <aside>

	        <div id="pk-img5" class="pk-img"></div>
            <div class="FM_PK-price1">
            	<p>Le pack au prix de : </p><?= $pack1["prix"] ?><span><sup>€<?= $pack1["decimal"] ?>
            	</sup><sub>TTC</sub></span>
            	<button class="B2r B_BLK R4" onclick="document.getElementById('cart').submit();">
            	Ajouter au Panier<div><img class="BTcad" src="css/all/ico.gif"></div></button>
            </div>

            <form id="cart" name = "cart" action="index.php?page=pack_step" method="post">
                <input type="hidden" name="item_id" value ="<?= $pack1["produit_id"] ?>">
            </form>

        </aside>

    </div>

    <div class="LSt">

        <div id="ret_PK2">

            <h1>Options incluses</h1>
            <ul class="BK_tk1 CLR">

                <?php
	            	include ("template/tk/TK_A2.php");
	            	include ("template/tk/TK_B3.php");
	            ?>

            </ul>

            <ul class="BK_tk1 CLR">

                <?php
	            	include ("template/tk/TK_C1.php");
	            	include ("template/tk/TK_E2.php");
	            ?>

            </ul>

            <h1>Options Offertes</h1>
            <ul class="BK_tk1 CLR">

                <?php
	            	include ("template/tk/TK_D6.php");
	            ?>

            </ul>

        </div>

    </div>

</section>

<?php
include ("js/inc/SLD1.js");
include ("js/ucompare.js");
include ("template/ft/F1_wht.php");
?>