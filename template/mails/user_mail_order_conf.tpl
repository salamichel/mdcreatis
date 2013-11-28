<!DOCTYPE html>

<html>

    <head>

        <TITLE>{$title} - {$Name}</TITLE>

        <meta charset="UTF-8">
        <meta content="width=device-width">
        <meta name="keywords" content="retouche, retoucher, photo, photos, images, création graphique, affiche, foyer">
        <meta name="description" content="Bienvenue sur le site Internet de MDCreatis">
        <link rel="shortcut icon" href="css/all/favicon.ico">
        <link rel="icon" type="image/x-icon" href="css/all/favicon.ico">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Courgette' rel='stylesheet' type='text/css'>

        <style type="text/css">
            /* Fonts and Content */
            body, td { font-family: 'Open Sans', Arial, Helvetica, Geneva, sans-serif; font-weight: 300; font-size:14px; }
            body { background-color: #EEE; margin: 0; padding: 0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }

        </style>

    </head>

    <body style="margin:0px; padding:0px; -webkit-text-size-adjust:none;">

        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #EEEEEE">

            <tbody>

                <tr>

                    <td>

                        <table cellpadding="0" cellspacing="0" border="0" style="width:700px; margin:0px auto">

                            <tbody>

                                <tr>

                                    <td>

                                        <table>

                                            <tbody>

                                                <tr>
                                                    <td height="10"></td>
                                                </tr>

                                                <tr>

                                                    <td width="700" align="center">
                                                        <a style="color:#333333; font-size:12px; font-weight:400" href="#">
                                                            <span style="color:#333333; font-size:12px; font-weight:400">
                                                                Visualiser ce message en ligne
                                                            </span>
                                                        </a>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td height="10"></td>
                                                </tr>

                                            </tbody>

                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" bgcolor="#555555" style="border-radius: 4px 4px 0 0">

                                            <tbody>

                                                <tr>
                                                    <td height="10"></td>
                                                </tr>

                                                <tr>

                                                    <td width="30"></td>
                                                    <td width="425">
                                                        <a href="#" style="text-decoration: none">
                                                            <img style="display: inline-block" src="css/all/nav/A2.png" alt="mdcreatis" width="28" height="16"/>
                                                            <span style="color:#FFFFFF; font-size:20px; margin-left:8px; letter-spacing:1px">mdcreatis</span>
                                                            <span style="color:#FFFFFF; font-size:12px; letter-spacing:1px">.com</span>
                                                        </a>
                                                    </td>
                                                    <td width="240">
                                                        <a href="http://www.mdcreatis.com/index.php?page=inf"style="display:inline-block; border: 1px solid transparent; font-weight:normal; text-align:center; text-shadow: 0 -1px 0px rgba(0,0,0,0.3); color: #FFFFFF; text-decoration:none; background: linear-gradient(top,rgba(255,255,255,0.2) 10%,rgba(0,0,0,0.1) 100%); box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 0 2px rgba(0,0,0,0.4); background-color: #777777; padding:5px 15px; border-radius:4px">
                                                            Mon Compte</a>
                                                        <a href="http://www.mdcreatis.com/index.php?page=cm1"style="display:inline-block; border: 1px solid transparent; font-weight:normal; text-align:center; text-shadow: 0 -1px 0px rgba(0,0,0,0.3); color: #FFFFFF; text-decoration:none; background: linear-gradient(top,rgba(255,255,255,0.2) 10%,rgba(0,0,0,0.1) 100%); box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 0 2px rgba(0,0,0,0.4); background-color: #777777; padding:5px 15px; border-radius:4px">
                                                            Commande</a>
                                                    </td>
                                                    <td width="5"></td>

                                                </tr>

                                                <tr>
                                                    <td height="10"></td>
                                                </tr>

                                            </tbody>

                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="700" bgcolor="#FFFFFF">

                                            <tbody>

                                                <tr>
                                                    <td width="700" height="30"></td>
                                                </tr>
                                                <tr>
                                                    <td width="700">

                                                        <table cellpadding="0" cellspacing="0" border="0">

                                                            <tbody>

                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640">
                                                                        <h3 style="color:#333333; font-size:16px; font-weight:400">Bonjour {$user_information.fname} {$user_information.name},</h3>
                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640">
                                                                        <p>Vous venez de passer commande sur le site mdcreatis.com et nous vous en remerçions.</p>
                                                                        <p>Voici le récapitulatif de votre commande :</p>
                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640">
                                                                        <br><p><span style="font-weight:400; color:#6699CC">N°Commande :</span> {$reference}<br>
                                                                           <span style="font-weight:400; color:#6699CC">Date :</span> {$date}
                                                                        </p>
                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640" style="border: dashed 1px #CCCCCC">

                                                                        <table cellpadding="3" border="0">

                                                                            <tbody>

                                                                                <tr valign="BASELINE">
                                                                                    <td align="LEFT" bgcolor="#6699CC" width="400" style="padding: 5px; font-weight:400; color:#FFFFFF">Produit</td>
                                                                                    <td align="CENTER" bgcolor="#6699CC" width="120" style="padding: 5px; font-weight:400; color:#FFFFFF">Quantité</td>
                                                                                    <td align="RIGHT" bgcolor="#6699CC" width="120" style="padding: 5px; font-weight:400; color:#FFFFFF">Prix Total</td>
                                                                                </tr>
                                                                                {assign var='prixttc' value='0'}
                                                                                {foreach name=outer item=produit from=$items}
                                                                                    <tr valign="BASELINE">
                                                                                        <td align="LEFT" style="padding:5px">{$produit.nom}</td>
                                                                                        <td align="CENTER" style="padding:5px">{$produit.qte}</td>
                                                                                        <td align="RIGHT" bgcolor="#F9F9F9" style="padding:5px">{$produit.prix|number_format:2}<span> €</span></td>
                                                                                        {$prixttc= $prixttc + $produit.prix}
                                                                                    </tr>

                                                                                    {* les options *}
                                                                                    {if isset($produit.options)}                                                                                

                                                                                        {foreach key=key item=opts from=$produit.options}

                                                                                            <tr valign="BASELINE">
                                                                                                <td align="LEFT" style="padding:5px">{$opts.o_nom}</td>
                                                                                                <td align="CENTER" style="padding:5px">{$opts.o_qte}</td>
                                                                                                <td align="RIGHT" style="padding:5px">{$opts.o_prix|number_format:2}<span> €</span></td>
                                                                                            </tr>
                                                                                            {$prixttc= $prixttc + $opts.o_prix}
                                                                                        {/foreach}
                                                                                    {/if}
                                                                                {/foreach}

                                                                                <tr valign="BASELINE"><td height="30"></td></tr>

                                                                                <tr valign="BASELINE">
                                                                                    <td></td>
                                                                                    <td align="RIGHT" style="padding:5px; font-weight:600">TOTAL TTC</td>
                                                                                    <td align="RIGHT" bgcolor="#F3F3F3" style="padding:5px; font-weight:600">{$prixttc|number_format:2}<span> €</span></td>
                                                                                </tr>

                                                                            </tbody>

                                                                        </table>

                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640">
                                                                        <p>Vous pouvez à tout moment suivre l'évolution de votre commande directement sur votre compte personnel dans la partie "Mes Commandes".<p>
                                                                        <p>En cas de problème sur votre commande, n'hésitez pas à nous écrire dans la partie <a href="http://www.mdcreatis.com/index.php?page=contact" style="text-decoration: underline; color:#6699CC">Contact</a>.</p>
                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640">
                                                                        <a href="{$link}"style="display:inline-block; border: 1px solid transparent; font-weight:normal; text-align:center; text-shadow: 0 -1px 0px rgba(0,0,0,0.3); color: #FFFFFF; text-decoration:none; background: linear-gradient(top,rgba(255,255,255,0.2) 10%,rgba(0,0,0,0.1) 100%); box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 0 2px rgba(0,0,0,0.4); background-color: #6699CC; padding:6px 15px; border-radius:4px">
                                                                            Suivre mes Commandes</a>
                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30" height="30"></td>
                                                                    <td width="640" height="30"></td>
                                                                    <td width="30" height="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640">
                                                                        <p style="font-weight:normal;">Nous vous remercions de votre confiance et sommes ravis de vous compter parmi nos clients et restons à votre service
                                                                            pour toutes questions ou problèmes rencontrés.</p>
                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>

                                                            </tbody>

                                                        </table>

                                                    </td>

                                                </tr>				
                                                <tr>
                                                    <td width="700" height="30"></td>
                                                </tr>

                                            </tbody>

                                        </table>

                                        <table cellpadding="0" cellspacing="0" border="0" width="700">

                                            <tbody>

                                                <tr>
                                                    <td width="700" height="30"></td>
                                                </tr>

                                            </tbody>

                                        </table>

									<table>

										<tbody>

											<tr>

												<td width="100">
													<a href="https://www.facebook.com/MDcreatis"><img src="css/all/ft/facebook.png" width="32" height="32" alt="facebook" style="display:inline-block"></a>
													<a href="https://twitter.com/MDCreatis"><img src="css/all/ft/twitter.png" width="32" height="32" alt="twitter" style="display:inline-block"></a>
												</td>
												<td width="230"></td>
												<td width="370">
													<ul style="list-style: none">
														<li style="display:inline-block">
															<a href="http://www.mdcreatis.com/index.php?page=help" style="text-decoration:none; color:#999999">AIDE</a>
															<a href="http://www.mdcreatis.com/index.php?page=condition" style="text-decoration:none; color:#999999; margin-left:15px">CONDITIONS</a>
															<a href="http://www.mdcreatis.com/index.php?page=covenant" style="text-decoration:none; color:#999999; margin-left:15px">ENGAGEMENTS</a>
															<a href="http://www.mdcreatis.com/index.php?page=contact" style="text-decoration:none; color:#999999; margin-left:15px">CONTACT</a>
														</li>
													</ul>
												</td>

											</tr>

										</tbody>

									</table>

									<table>

										<tbody>

											<tr>

												<td width="700" style="border-top: solid 1px #DDDDDD"></td>

											</tr>
											<tr>

												<td width="700">
													<p style="font-size:10px; text-decoration:none; color:#999999">Copyright 2012 MDcreatis. Tous droits réservés</p>
												</td>

											</tr>
											<tr>

												<td width="700" height="50"></td>

											</tr>

										</tbody>

									</table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>