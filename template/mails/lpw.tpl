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
																	<h3 style="color:#333333; font-size:16px; font-weight:400">{$user['fname']} {$user['name']},</h3>
																</td>
																<td width="30"></td>
															</tr>
															<tr>
																<td width="30"></td>
																<td width="640">
																	<p>Vous avez oublié votre mot de passe d'accès à l'Espace personnel.<br>
																Votre demande de réinitialisation de mot de passe sur <a href="http://www.mdcreatis.com">mdcreatis.com</a>
																	a bien été enregistrée et pris en compte par notre système.</p>
																	<p>Nous vous confirmons les éléments vous permettant de vous connecter et vous invitons dès à présent à modifier votre mot de passe par la suite :</p>
																</td>
																<td width="30"></td>
															</tr>
															<tr>
																<td height="30"></td>
															</tr>
															<tr>
																<td width="30"></td>
																<td width="640" style="border: dashed 1px #CCCCCC">

																	<table cellpadding="0" cellspacing="0" border="0">

																		<tbody>

																			<tr>
																				<td width="15" height="15"></td>
																				<td width="610" height="15"></td>
																				<td width="15" height="15"></td>
																			</tr>
																			<tr>
																				<td width="15"></td>
																				<td width="610">
																					<h4 style="font-weight:600; color:#333333"><span style="font-weight:400; color:#6699CC">Nouveau mot de passe : </span>{$new_pwd}</h4>
																				</td>
																				<td width="15"></td>
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
																	<a href="{$link}"style="display:inline-block; border: 1px solid transparent; font-weight:normal; text-align:center; text-shadow: 0 -1px 0px rgba(0,0,0,0.3); color: #FFFFFF; text-decoration:none; background: linear-gradient(top,rgba(255,255,255,0.2) 10%,rgba(0,0,0,0.1) 100%); box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 0 2px rgba(0,0,0,0.4); background-color: #555; padding:6px 15px; border-radius:4px">
																	Confirmer mon nouveau mot de passe</a>
																</td>
																<td width="30"></td>
															</tr>
															<tr>
																<td height="30"></td>
															</tr>
															<tr>
																<td width="30"></td>
																<td width="640">
																	<p>Ces identifiants sont personnels et restent confidentiels.<br>
																	En cas d'oublis de votre part, vous disposez d'une fonction de récupération de votre mot de passe sur le site
																	<a href="http://www.mdcreatis.com">mdcreatis.com</a>.</p>
																</td>
																<td width="30"></td>
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