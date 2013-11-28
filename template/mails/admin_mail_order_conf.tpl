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
                                                    <td width="245"></td>

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
                                                                    <td width="320" align="LEFT" bgcolor="#6699CC" style="padding: 5px; font-weight:400">

	                                                                    <h2 style="color:#FFFFFF">Client</h2>

                                                                    </td>
                                                                    <td width="320" align="LEFT" bgcolor="#6699CC" style="padding: 5px; font-weight:400">

	                                                                    <h2 style="color:#FFFFFF">Adresse</h2>

                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="320">

	                                                                    {foreach key=key item=detail from=$user_information}
	                                                                    	<b>{$key} </b>: {$detail}<br />
	                                                                    {/foreach} 

                                                                    </td>
                                                                    <td width="320">

	                                                                    {foreach key=key item=adresses from=$user_adresse}
	                                                                    	{foreach key=key item=adresse from=$adresses}
	                                                                    		{$adresse}<br />
	                                                                    	{/foreach} 
	                                                                    {/foreach} 

                                                                    </td>
                                                                    <td width="30"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="30"></td>
                                                                </tr>
                                                                
                                                            </tbody>

                                                        </table>

                                                        <table cellpadding="0" cellspacing="0" border="0">

                                                            <tbody>

                                                                <tr>
                                                                    <td width="30"></td>
                                                                    <td width="640" style="border: dashed 1px #CCCCCC">

                                                                        <table cellpadding="3" border="0">

	                                                                        {foreach name=outer item=produit from=$items}

                                                                            <tbody>

	                                                                            <tr valign="BASELINE">
                                                                                    <td align="LEFT" bgcolor="#555555" width="320" style="padding: 5px; font-weight:400; color:#FFFFFF">Commande Client</td>
                                                                                    <td align="LEFT" bgcolor="#555555" width="320" style="padding: 5px; font-weight:400; color:#FFFFFF"></td>
                                                                                </tr>

                                                                                <tr valign="BASELINE">
                                                                                    <td align="LEFT" bgcolor="#6699CC" width="320" style="padding: 5px; font-weight:400; color:#FFFFFF">Produit</td>
                                                                                    <td align="LEFT" bgcolor="#6699CC" width="320" style="padding: 5px; font-weight:400; color:#FFFFFF">Options</td>
                                                                                </tr>
                                                                                
                                                                                    <tr valign="BASELINE">
                                                                                        <td align="LEFT" style="padding:5px">
	                                                                                        
	                                                                                        {foreach key=key item=item from=$produit}
	                                                                                        	{if !is_array($produit.$key)}
	                                                                                        		<b>{$key} </b>: {$item}<br />
	                                                                                        	{/if}
	                                                                                        {/foreach}
	                                                                                        
                                                                                        </td>
                                                                                        <td align="LEFT" style="padding:5px">
	                                                                                        
	                                                                                        {if isset($produit.options)}
	                                                                                        {foreach key=key item=opts from=$produit.options}
	                                                                                        	{foreach key=key item=opt from=$opts}
	                                                                                        		<b>{$key} </b>: {$opt}<br />
	                                                                                        	{/foreach}     
	                                                                                        {/foreach}
	                                                                                        
	                                                                                        {/if}
	                                                                                        
                                                                                        </td>
                                                                                       
                                                                                    </tr>

	                                                                                <tr valign="BASELINE">
                                                                              	      <td align="LEFT" bgcolor="#6699CC" width="320" style="padding: 5px; font-weight:400; color:#FFFFFF">Détails</td>
                                                                              	      <td align="LEFT" bgcolor="#6699CC" width="320" style="padding: 5px; font-weight:400; color:#FFFFFF">Fichiers</td>
                                                                              	    </tr>

	                                                                                <tr valign="BASELINE">
                                                                                        <td align="LEFT" style="padding:5px">
	                                                                                        
	                                                                                        {if isset($produit.contact)}
	                                                                                        {foreach key=key item=detail from=$produit.contact}
	                                                                                        	<b>{$key} </b>: {$detail}<br />
	                                                                                        {/foreach}  
	                                                                                        {/if}
	                                                                                        
                                                                                        </td>
                                                                                        <td align="LEFT" style="padding:5px">
	                                                                                        
	                                                                                        {if isset($produit.files)}
	                                                                                       {foreach key=key item=files from=$produit.files}
	                                                                                       	{foreach key=key item=file from=$files}
	                                                                                       		<b>{$key} </b>: {$file}<br />
	                                                                                       	{/foreach}     
	                                                                                        {/foreach}    
	                                                                                        {/if}
	                                                                                        
                                                                                        </td>
                                                                                       
                                                                                    </tr>

                                                                            </tbody>

                                                                            {/foreach}

                                                                        </table>

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