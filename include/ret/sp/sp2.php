<?php
include ("template/hd/nav/H1_blk.php");
?>

<?
$tkts = $db->rawQuery("SELECT distinct nom
            FROM md_produits
            WHERE   prestation = ?
            order by nom", array("Technique Retouche"));
$mainlist = "\"";
$sublist = array();
foreach ($tkts as $tkt) {
    $mainlist .= $tkt["nom"] . "\",\"";
    $sublist[$tkt["nom"]] = getTktOption($tkt["nom"]);
}

function getTktOption($tkt) {
    global $db;
    $opts = $db->rawQuery("SELECT a.produit_id, c.option_id, titre, c.prix_ht 
            FROM md_produits a, md_produit_options b, md_options c
            WHERE a.produit_id = b.produit_id
            and b.option_id = c.option_id 
            and nom = ? 
            order by c.prix_ht desc", array($tkt));
    return($opts);
}
?>

<!-- STP -->

<section class="FM_SP1">

	<div>

		<h1>Etape 2</h1>
		<p>Sélection des techniques et options</p>

	</div>

	<div class="CLR AN_OP3">

		<article class="R4">
			<h1>Techniques et Options</h1>
			<h2>Faites votre choix.</h2>
			<p>Sélectionnez les techniques et options de retouches que vous souhaitez appliquer à vos photos.</p>
		</article>

		<article class="R4">
			<h1>Panier</h1>
			<h2>Validez votre commande.</h2>
			<a class="B2r B_BL1 R4" href="javascript:void(0);" onclick="document.getElementById('frm1').submit();">Ajouter au Panier<div><img class="BTcad" src="css/all/ico.gif"></div></a>

	</div>

</section>

<!-- AC2 -->

<div id="template" style="visibility:hidden">
    <select id="tpltkt">
        <option value="">Sélectionner une technique</option>
        <?
        foreach (array_keys($sublist) as $key) {
            ?>
            <option value="<?= $key ?>"><?= $key ?></option>    
            <?
        }
        ?>        
    </select>

    <select id="tplopt">
        <option value="">Sélectionner une option</option>
        <?
        foreach ($sublist as $key => $values) {
            foreach ($values as $opt) {
                ?>  
                <option value="<?= $opt["option_id"] ?>" class="<?= $key ?>"><?= $opt["titre"] ?> (<?= $opt["prix_ht"] ?> €)</option>
                <?
            }
        }
        ?>                 
    </select>

</div>

<?
if (!empty($_SESSION["pics"])) {
    ?>
    <!-- AC2 -->

    <section class="SC_ret_ac2">
    
    <h2>Sélection des Techniques et Options</h2>

    <form id="frm1" action="index.php?page=cad" method="post">    

        <div id="BK_ret_ac2" class="F1 R4">

            <?
            $i = 0;
            foreach ($_SESSION["pics"] as $pic) {
                ?>
                <article class="CLR" id="test<?= $i ?>">
                    <div id="img<?= $i ?>">
                        <img src="<?= $dir_dest ?>/<?= $pic["filename"] ?>">
                    </div> 
                    <div id="template<?= $i ?>">
                        <select id="tkt<?= $i ?>" name="cat[<?= $i ?>]" class="tkt">
                            <option value="">Sélectionner une technique</option>
                            <?
                            foreach (array_keys($sublist) as $key) {
                                ?>
                                <option value="<?= $key ?>"><?= $key ?></option>    
                                <?
                            }
                            ?>        
                        </select>

                        <select id="opt<?= $i ?>" name="opt[<?= $i ?>][]" class="opt">
                            <option value="">Sélectionner une option</option>
                            <?
                            foreach ($sublist as $key => $values) {
                                foreach ($values as $opt) {
                                    ?>  
                                    <option value="<?= $opt["option_id"] ?>" class="<?= $key ?>"><?= $opt["titre"] ?> (<?= $opt["prix_ht"] ?> €)</option>
                                    <?
                                }
                            }
                            ?>                 
                        </select>
                        <a class="B1 B_BL1 R4" href="javascript:void(0);" onclick="javascript:addnewline(<?= $i ?>)">ajouter</a>
                    </div>
                </article>


                <script>
                            $("#opt<?= $i ?>").chained("#tkt<?= $i ?>"); /* or $("#series").chainedTo("#mark"); */
                </script>
                <?
                $i++;
            }
            ?>

        </div>

        <script>
            var c = 0;


            function addnewline(i) {
                var cloned = $('#template').clone();
                // Set the id of cloned, use i++ instead of incrementing it elsewhere.
                $(cloned).attr('id', 'duptkt' + (++c));
                $(cloned).css("visibility", "visible");
                $(cloned).append("<button class='B1 B_BLK R4' type='button' name='deltkt'>Retirer</button>");
                $(cloned).appendTo('#template' + i);
                $(cloned).find('#tpltkt').attr('id', 'tkt' + i + c);
                $(cloned).find('#tplopt').attr('id', 'opt' + i + c);
                $(cloned).find('#tkt' + i + c).attr('name', 'cat[' + i + '][]');
                $(cloned).find('#opt' + i + c).attr('name', 'opt[' + i + '][]');
                $("#opt" + i + c).chained("#tkt" + i + c);

                $("button[name='deltkt'").click(function() {
                    $(this).parent().remove();
                })
            }
        </script>

        <script>
            var c = 0;
            $(document).ready(function() {


                $(".cloneCFbak").click(function() {

                    chainItWithId();
                    /*var cloned = $('#combo0').clone();
                     
                     // Add .dupe class to cloned
                     $(cloned).addClass('dupe');
                     
                     // Set the id of cloned, use i++ instead of incrementing it elsewhere.
                     $(cloned).attr('id', 'dupcombo' + (++c));
                     
                     
                     $(cloned).appendTo('#test0');
                     
                     chainItWithId($(cloned));
                     
                     //$("#combo0").clone().appendTo("#test0");
                     */
                });
            });
            function chainItWithId() {
                $("#opt" + c).chained("#tkt" + c);
                // Chain .provincia to .pais in the current clone
                $(cloned).find('.tkt').attr('id', 'duptkt' + c);
                $(cloned).find('.opt').attr('id', 'dupopt' + c);
                $(cloned).find('#dupopt' + c).chained($(cloned).find('#duptkt' + c));
                // Chain .ciudad to .provincia in the current clone
                //$(cloned).find('.tkt').chained($(cloned).find('.opt'));
            }

        </script>

    </form>
    <?
}else{
    ?>

    <section class="SC_ret_ac2">
	    <h3>Aucune image n'a été téléchargé</h3>
	    <a class="B2r B_BLK R4" href="index.php?page=retouch_sp1">
	    Retour Etape 1<div><img class="BTfl1" src="css/all/ico.gif"></div></a>
    </section>

    <?
}
?>

    </section>
    
    <div></div>
    
<?php
include ("template/ft/F1_wht.php");
?>