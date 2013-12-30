<!DOCTYPE html>
<?php
$maxyta_e = 50;
$maxyta_n = 200;
$pilknappurl="http://dummyimage.com/200x40/ed393a/0011ff&text=>";

$pages = array(
	"root" => array(
		"type" => "",
		"rubrik" => "",
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Golvv�rme",
				"text" => "Kompletta systemlösnignar för golvvörme",
				"bildurl" => "",
				"linkpageid" => "golv"
			),
			array(
				"rubrik" => "Tappvatten",
				"text" => "Kompletta systeml�sningar f�r tappvattensystem typ R�r-i-R�r.",
				"bildurl" => "",
				"linkpageid" => "tapp"
			)
		)
	),
	
	"tapp" => array(
		"type" => "",
		"rubrik" => "Wermgo Tappvatten",
		"text" => "Kompletta tappvattensystem av typen R�r-i-R�r.",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Tomt",
				"text" => "Tomt",
				"bildurl" => "",
				"linkpageid" => "golv"
			)
		)
	),
	
	
	"om" => array(
		"type" => "",
		"rubrik" => "Om Wermgo",
		"text" => "<p>Wermgo tillhandah�ller system f�r vattenburen golvv�rme och tappvatten till proffsmarknaden.</p>
			<p>V�rt system best�r av noga utvalda komponenter fr�n flera ledande tillverkare. Kvalitet �r ett ledord - Du kan alltid vara s�ker p� att en produkt fr�n Wermgo h�ller h�gsta klass.</p>
			<p>I v�ra system finns m�nga innovativa l�sningar och vi efterstr�var enkelhet och snabbhet vid montering.</p>
			<p>Vi levererar till proffsmarknaden och som privatperson �r Du alltid v�lkomna att kontakta oss f�r hj�lp med Ditt golvv�rmeprojekt. Vi tar kostnadsfritt fram budgetpris och g�r f�rl�ggningsritning. Best�ller och f�rhandlar pris g�r Du sedan fr�n valfri �terf�rs�ljare.</p>
			<p>Hos oss f�r Du alltid personlig service, och Du �r alltid v�lkommen att sl� oss en signal!</p>
			<p>Om du inte har tid att ringa g�r det naturligtvis bra att skicka oss e-posta.</p>",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
		)
	),
	
	
	"proffs" => array(
		"type" => "",
		"rubrik" => "F�r proffs",
		"text" => "H�r hittar du tekniska information.",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Produktlista Golvv�rme",
				"text" => "",
				"bildurl" => "",
				"linkpageid" => "golv"
			),
			array(
				"rubrik" => "Produktlista Tappvattem",
				"text" => "",
				"bildurl" => "",
				"linkpageid" => "golv"
			),
			array(
				"rubrik" => "Monteringsanvisningar Golvv�rme",
				"text" => "",
				"bildurl" => "",
				"linkpageid" => "golv"
			),
			array(
				"rubrik" => "Monteringsanvisningar Tappvatten",
				"text" => "",
				"bildurl" => "",
				"linkpageid" => "tapp"
			)
		)
	),
	
	
	
	
	//Startsida golvv�rme
	"golv" => array(
		"type" => "",
		"rubrik" => "Vilken typ av installation ska du g�ra?",
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Enstaka rum max " . $maxyta_e . " m2",
				"text" => "Renovering eller tillbyggnad av enstaka rum.",
				"bildurl" => "",
				"linkpageid" => "golv-e"
			),
			array(
				"rubrik" => "Flera rum, totalt upp till " . $maxyta_n . " m2",
				"text" => "Nybyggnation eller st�rre renovering.",
				"bildurl" => "",
				"linkpageid" => "golv-n"
			)
		)
	),
	
	//Lista p� enstaka rum
	"golv-e" => array(
		"type" => "",
		"rubrik" => "Vilken typ av golv ska du g�ra?",
		"text" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br> It has survived not only five centuries,<br> but also the leap into electronic typesetting",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Ingjutning i betong",
				"text" => "Golvv�rme ingjuten i betongplatta.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0001.png",
				"linkpageid" => "golv-e-betong"
			),
			array(
				"rubrik" => "Flytande golv p� befintligt golv",
				"text" => "Golvv�rme monterad i cellplastskivor f�r t.ex renovering.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-e-cell"
			),
			array(
				"rubrik" => "Glespanel",
				"text" => "Golvv�rme monterad i glespanel c/c 30 cm.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0009.png",
				"linkpageid" => "golv-e-gles"
			),
			array(
				"rubrik" => "Tr�bj�lklag",
				"text" => "Golvv�rme monterad i tr�bj�lklag c/c 60 cm.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0011.png",
				"linkpageid" => "golv-e-tra"
			),
			array(
				"rubrik" => "Sp�nskivor",
				"text" => "Golvv�rme monterad i sp�nskivor.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0013.png",
				"linkpageid" => "golv-e-span"
			),
			array(
				"rubrik" => "Inspackling",
				"text" => "Golvv�rme inspacklad i tunna golv. T.ex. vid renovering av badrum.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0015.png",
				"linkpageid" => "golv-e-q"
			)
		)
	),
	
	
	"golv-e-cell" => array(
		"type" => "",
		"rubrik" => "Vilken byggh�jd �nskar du?",
		"text" => "",
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Cellplastskiva tjocklek 25 mm",
				"text" => "",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-e-cell-25"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 30 mm",
				"text" => "",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-e-cell-30"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 50 mm",
				"text" => "",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-e-cell-50"
			)
		)
	),

	
	"golv-e-cell-25" => array(
		"type" => "produkt",
		"rubrik" => "Wermgo Cellplastsystem 25 mm",
		"text" => "",
		"innehall" => array(
			"Cellplastskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),


	"golv-e-cell-30" => array(
		"type" => "produkt",
		"rubrik" => "Wermgo Cellplastsystem 30 mm",
		"text" => "",
		"innehall" => array(
			"Cellplastskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0003.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),

	"golv-e-cell-50" => array(
		"type" => "produkt",
		"rubrik" => "Wermgo Cellplastsystem 50 mm",
		"text" => "",
		"innehall" => array(
			"Cellplastskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0003.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-e-betong" => array(
		"type" => "produkt",
		"rubrik" => "Ingjutning i betong",
		"text" => "Vid ingjutning i betong sprider betongen v�rmen j�mt �ver ytan. R�ren f�r inte ligga f�r djupt i betongen d� det �r risk att systemet blir sv�rt att reglera, och inte f�r grunt d� det �r risk f�r varma och kalla zoner. Ett djup p� mellan 30 och 100 mm fr�n r�rets �versida fungerar i de flesta fall. Betongplattan m�ste vara v�l isolerad ned�t f�r att undvika v�rmef�rluster.",
		"innehall" => array(
			"Golvv�rmer�r",
			"R�rh�llarskenor",
			"F�stm�rlor",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0003.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-e-gles" => array(
		"type" => "produkt",
		"rubrik" => "Glespanel",
		"text" => "",
		"innehall" => array(
			"Golvv�rmer�r",
			"V�rmef�rdelningspl�tar",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0009.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-e-tra" => array(
		"type" => "produkt",
		"rubrik" => "Tr�bj�lklag",
		"text" => "",
		"innehall" => array(
			"Golvv�rmer�r",
			"V�rmef�rdelningspl�tar",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0011.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-e-span" => array(
		"type" => "produkt",
		"rubrik" => "Sp�nskivor",
		"text" => "",
		"innehall" => array(
			"Sp�nskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0013.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-e-q" => array(
		"type" => "produkt",
		"rubrik" => "Inspackling",
		"text" => "",
		"innehall" => array(
			"Golvv�rmer�r",
			"R�rh�llarskenor",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0015.png",
		"koptill" => array(
			
		),
		"fot" => "",
	),

	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	"golv-n" => array(
		"type" => "",
		"rubrik" => "Vilken typ av golv ska du g�ra?",
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Ingjutning i betong",
				"text" => "Golvv�rme ingjuten i betongplatta.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0001.png",
				"linkpageid" => "golv-n-betong"
			),
			array(
				"rubrik" => "Flytande golv p� befintligt golv",
				"text" => "Golvv�rme monterad i cellplastskivor f�r t.ex renovering.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-n-cell"
			),
			array(
				"rubrik" => "Glespanel",
				"text" => "Golvv�rme monterad i glespanel c/c 30 cm.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0009.png",
				"linkpageid" => "golv-n-gles"
			),
			array(
				"rubrik" => "Tr�bj�lklag",
				"text" => "Golvv�rme monterad i tr�bj�lklag c/c 60 cm.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0011.png",
				"linkpageid" => "golv-n-tra"
			),
			array(
				"rubrik" => "Sp�nskivor",
				"text" => "Golvv�rme monterad i sp�nskivor.",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0013.png",
				"linkpageid" => "golv-n-span"
			)
		)
	),
	
	
	"golv-n-cell" => array(
		"type" => "",
		"rubrik" => "Vilken byggh�jd �nskar du?",
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Cellplastskiva tjocklek 25 mm",
				"text" => "",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-n-cell-25"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 30 mm",
				"text" => "",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-n-cell-30"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 50 mm",
				"text" => "",
				"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s200/WG0003.png",
				"linkpageid" => "golv-n-cell-50"
			)
		)
	),

	
	"golv-n-cell-25" => array(
		"type" => "produkt",
		"rubrik" => "Wermgo Cellplastsystem 25 mm",
		"text" => "",
		"innehall" => array(
			"Cellplastskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0003.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),


	"golv-n-cell-30" => array(
		"type" => "produkt",
		"rubrik" => "Wermgo Cellplastsystem 30 mm",
		"text" => "",
		"innehall" => array(
			"Cellplastskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0003.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),

	"golv-n-cell-50" => array(
		"type" => "produkt",
		"rubrik" => "Wermgo Cellplastsystem 50 mm",
		"text" => "",
		"innehall" => array(
			"Cellplastskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0003.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),


	"golv-n-betong" => array(
		"type" => "produkt",
		"rubrik" => "Ingjutning i betong",
		"text" => "",
		"innehall" => array(
			"Golvv�rmer�r",
			"R�rh�llarskenor",
			"F�stm�rlor",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0001.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-n-gles" => array(
		"type" => "produkt",
		"rubrik" => "Glespanel",
		"text" => "",
		"innehall" => array(
			"Golvv�rmer�r",
			"V�rmef�rdelningspl�tar",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0009.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-n-tra" => array(
		"type" => "produkt",
		"rubrik" => "Tr�bj�lklag",
		"text" => "",
		"innehall" => array(
			"Golvv�rmer�r",
			"V�rmef�rdelningspl�tar",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0011.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	"golv-n-span" => array(
		"type" => "produkt",
		"rubrik" => "Sp�nskivor",
		"text" => "",
		"innehall" => array(
			"Sp�nskivor",
			"V�rmef�rdelningspl�tar",
			"Golvv�rmer�r",
			"R�rb�jningsst�d"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/WG0013.png",
		"koptill" => array(
			"micropaket"
		),
		"fot" => "",
	),
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	"micropaket" => array(
		"type" => "produkt",
		"rubrik" => "Shunt Micro",
		"ltext" => "Shuntpaket f�r reglering av rum upp till " . $maxyta_e . "m2. Med kapill�rr�rstermostat.",
		"text" => "Shuntpaket f�r reglering av rum upp till " . $maxyta_e . "m2. Med kapill�rr�rstermostat.",
		"innehall" => array(
			"Shunt Micro med energiklassad cirkulationspump",
			"Kopplijgar f�r golvv�rmer�r",
			"Kapill�rr�rstermostat"
		),
		"pris" => 100,
		"startpris" => 0,
		"m2pris" => 0,
		"maxyta" => $maxyta_e,
		"bildurl" => "http://www.saljex.se/p/golvvarme/paket/s400/EG1611.png",
		"koptill" => array(
		),
		"fot" => "",
	)
	
	
	
);


?>

		<?php		$p = $pages[$_REQUEST["pageid"]];		
					if ($p==null) $p=$pages["root"];
		?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Wermgo porduktv�ljare</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>		
		<style type="text/css">
			body {
				margin: 0px;
				padding: 0px;
			}
			
			
			.w33 {	width: 296px;	}
			.w66 {	width: 612px;	} /* w33*2+4+1*marg-right */
			.w100 {	width: 932px;	}
			.mh10 { min-height: 100px; }
			.mh20 { min-height: 200px; }
			.mh30 { min-height: 300px; }
			.mh40 { min-height: 400px; }
			
			.padded-margin { padding-left: 4px; padding-right: 4px; }
			
			.block {
				margin: 0px 16px 16px 0px; 
				padding: 0px;
				display: inline-block;
				vertical-align: top;
			}
			.block-content {
				width: 100%;
				border-left: 2px solid #65bae3;				
				border-right: 2px solid #65bae3;
				border-top: 2px solid #65bae3;
				margin: 0px;
				padding: 0px;
			}
			.block-content h3 {
				font-size: 18px;
				font-weight: bold;
				text-align: center;
				background-color: #65bae3;	
				color: white;
				margin: 0px 0px 4px 0px;
				padding: 0px 0px 4px 0px;
			}
			.block-footer {
				width: 100%;
				background-color: #65bae3;	
				margin: 0px;
				padding: 0px;
				border-left: 2px solid #65bae3;				
				border-right: 2px solid #65bae3;
				border-bottom:  2px solid #65bae3;
			}
			

			
			
			
			
			.contentarea {
				font-family: Arial, sans-serif;
				font-size: 16px;
				text-align: left;
				max-width: 980px;		
				margin: 0px 0px 0px 16px;
				padding: 0px;
				color: black;
			}			
			
			.contentarea h1,h2,h3,h4 {
				padding: 0px 0px 0px 0px;
				margin: 0px 0px 0px 0px;
				font-family: 'Open Sans', Verdana, sans-serif;
			}
			
			.contentarea p {
				margin-bottom: 24px;
			}
			.contentarea h1 {
				font-size: 32px;
				font-weight: bold;
				color: black;
				margin: 16px 0px 16px 0px;
				padding: 0px;
			}
			.contentarea h2 {
				font-size: 18px;
				font-weight: bold;
				color: black;
			}
			.contentarea h4 {
				font-size: 16px;
				font-weight: bold;
				color: black;
				margin: 0px;
			}

			.contentarea-2col {
				width: 600px;
				padding: 4px 4px 4px 4px;
				margin: 0px 16px 16px 0px;
				border: 2px solid black;
				min-height: 400px;
				display: inline-block;
				vertical-align: top;
			}
			.contentarea-1col {
				width: 300px;
				padding: 4px 4px 4px 4px;
				margin: 0px 16px 16px 0px;
				border: 2px solid black;
				min-height: 400px;
				display: inline-block;
				vertical-align: top;
			}
			.contentarea-15col {
				width: 450px;
				padding: 4px 4px 4px 4px;
				margin: 0px 16px 16px 0px;
				border: 2px solid black;
				min-height: 400px;
				display: inline-block;
				vertical-align: top;
			}
			
			
			.contentarea-innehall {
				font-size: 14px;
				margin-bottom: 16px;
			}
			.contentarea-pris {
				margin-bottom: 16px;
			}
			
			.contentarea-pris table{
				margin-left: auto;
				margin-right: auto;
			}
			
			#koptill {
				text-align: left;
			}
			
			.koptill-produkt{
				font-size: 14px;
			} 
			.koptill-produkt img {
				max-width: 100px;
				max-height: 100px;
			} 
			.koptill-produkt table {
				width: 100%;
				border-collapse: collapse;
			} 
			.koptill-produkt tr {
				padding: 0px;
				margin:0px;
			} 
			.koptill-produkt td {
				padding: 0px 4px 0px 4px;
				margin: 0px;
			} 
			
			.koptill-even {
				background-color: #ffffff;
			}
			.koptill-odd {
				background-color: #fafafa;
			}
			
			.subpage {
				width: 300px;
				padding: 0px 0px 0px 0px;
				margin: 0px 16px 24px 0px;
				min-height: 400px;
				display: inline-block;
				vertical-align: top;
			}
			.subpage h3 {
				padding: 8px 0px 8px 0px;
				margin: 0px 0px 8px 0px;
				background-color: #65bae3;
				color: white;
				text-align: center;
				
			}
			.subpage-border {
				border-left: 2px solid #65bae3;				
				border-right: 2px solid #65bae3;
				border-top: 2px solid #65bae3;
				width: 100%;
				margin: 0px;
				padding: 0px;
			}
			
			.subpage-info {
				min-height: 120px;
				text-align: left;
				margin: 0px 0px 4px 0px;
			}
			.subpage-info p {
				padding: 0px 8px 9px 8px;
			}
		
			.subpage-picture {
				margin: 0px 0px 0px 0px;
				min-height: 210px;
				vertical-align: middle;
				text-align: center;
			}
			.subpage-btn {
				vertical-align: middle;
				text-align: left;
				vertical-align: bottom;
				width: 344px;
			}
			
			.divlink {
				display:block;
				width:100%;
				height:100%;
				text-decoration:none;
				color: inherit;
			}
			
			.prisbelopp {
				font-size: 24px;
				color: red;
				font-weight: bolder;
			}
			
			.beraknapris {
				background-color: cyan;
				margin-bottom: 16px;
			}
			
			#inputyta {
				width: 4em;
			}
			#displaysumma {
				color: red;
				font-size: 36px;
				font-weight: bolder;
			}
			#displayresultat {
				visibility: hidden;
			}
			
			
			
			
			
			
			
		input[type=checkbox].css-checkbox {
							display:none;
						}

		input[type=checkbox].css-checkbox + label.css-label {
			padding-left:30px;
			height:25px; 
			display:inline-block;
			line-height:25px;
			background-repeat:no-repeat;
			background-position: 0 0;
			font-size:25px;
			vertical-align:middle;
			cursor:pointer;

		}

		input[type=checkbox].css-checkbox:checked + label.css-label {
			background-position: 0 -25px;
		}
		label.css-label {
			background-image:url(check.png);
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}			
		
		
		
		.footerarea {
			font-family: Arial, sans-serif;
			font-size: 12px;
/*			width: 100%;*/
			border-top: 1px solid black;
			margin: 16px 0px 2px 0px;
			padding: 2px 2% 0px 2%;
		
		}
		.footerarea table {
			border-collapse: collapse;
		}
		.footerarea-cell {
				padding: 0px;
				margin: 0px 8px 0px 8px;
				display: inline-block;
				vertical-align: top;
		}
		
		
		.headerarea {
			font-family: Arial, sans-serif;
			/*width: 100%;*/
			background-color: #65bae3;
			min-height: 32px;
			margin: 0px;
			padding: 0px 2% 0px 2%;
			text-align: left;
		/*	background-image: url(logo-bg.png);
			background-repeat: repeat-x;*/
		}
		
		.headerarea-logo {
				width: 120px;
				height: 32px;
				margin: 0px 0px 0px 0px;
				padding: 0px 2px 0px 2px;
				display: inline-block;
				vertical-align: top;
				text-align: center;
		}
		.headerarea-menu-item {
				width: 140px;
				height: 32px;
				margin: 0px 2px 0px 2px;
				padding: 0px 2px 0px 2px;
				display: inline-block;
				text-align: center;
				vertical-align: top;
		}
		.headerarea-menu-item h4 {
			padding: 6px 0px 0px 0px;
			font-weight: bold;
			font-size: 16px;
			margin: 0px;
			color: white;
			vertical-align: middle;
			font-family: 'Open Sans', Verdana, sans-serif;
		}		
		</style>
<script type="text/javascript">
	function onLoad() {
	}
<?php if ($p["type"] == "produkt") { ?>
	var kt_pris = new Array();
	var kt_m2pris = new Array();
	var kt_startpris = new Array();
	var kt_lastindex;
<?php
	$cn=0;
	foreach($p["koptill"] as $i => $k) {
	?>	
		kt_pris[<?php echo $cn; ?>] = <?php if (is_numeric($pages[$k]["pris"])) echo $pages[$k]["pris"]; else echo 0;?>;
		kt_startpris[<?php echo $cn; ?>] = <?php if (is_numeric($pages[$k]["startpris"])) echo $pages[$k]["startpris"];  else echo 0;?>;
		kt_m2pris[<?php echo $cn; ?>] = <?php if (is_numeric($pages[$k]["m2pris"])) echo $pages[$k]["m2pris"]; else echo 0; ?>;
	<?php $cn++;
	} ?>
	kt_lastindex=<?php echo $cn-1; ?>;
	function calc() {
		var minyta = document.getElementById("getminyta").innerHTML;
		var maxyta = document.getElementById("getmaxyta").innerHTML;
		var yta = document.getElementById("inputyta").value;
		var pris = document.getElementById("getpris").innerHTML;
		var startpris = document.getElementById("getstartpris").innerHTML;
		var m2pris = document.getElementById("getm2pris").innerHTML;
		document.getElementById("displayresultat").style.display="block";
		
		if (isNaN(minyta) || minyta <1) minyta = 10;
		if (isNaN(maxyta) || maxyta <50) maxyta = 50;
		if (isNaN(yta) || yta < minyta) { yta = minyta; document.getElementById("inputyta").value=minyta; }
		if (yta > maxyta) { yta = maxyta; document.getElementById("inputyta").value=maxyta; }
		if (isNaN(pris) || pris <0) pris = 0;
		if (isNaN(m2pris) || m2pris <0) m2pris = 0;
		if (isNaN(startpris) || startpris <0) startpris = 0;

		var antalstartpaket = Math.ceil(yta/maxyta);
		
		var delsumma=0;
		for (cn=0;cn<=kt_lastindex;cn++) {
			if (document.getElementById("kt-check-" + cn).checked) {
				delsumma+=kt_pris[cn] + antalstartpaket*kt_startpris[cn] + yta*kt_m2pris[cn];
			}
		}

		document.getElementById("displaysumma").innerHTML = Number(antalstartpaket*startpris+yta*m2pris+pris)+Number(delsumma*1);
//		document.getElementById("displaysumma").innerHTML = "Startp: " + antalstartpaket*startpris + " m2: " + yta*m2pris+ " pri:" + pris + "delsumma" + delsumma;
		document.getElementById("displayyta").innerHTML = yta;
		document.getElementById("displayresultat").style.visibility="visible";
	}
<?php } ?>
</script>

    </head>
    <body onload="onLoad()">
		
	<div id="headerarea" class="headerarea">
		<div class="headerarea-logo"><a class="divlink" href="?"><img src="logo-wermgo-h32.png"></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=golv"><h4>GOLVV�RME</h4></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=tapp"><h4>TAPPVATTEN</h4></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=om"><h4>OM OSS</h4></a></div>
		<div class="headerarea-menu-item"><a class="divlink" href="?pageid=proffs"><h4>F�R PROFFS</h4></a></div>
		
	</div>
		
		
		
		
		
		
	<div class="contentarea">
		
		<h1><?php echo $p["rubrik"]; ?></h1>
		
		<?php if($p["type"]=="produkt") { ?>		
			<div class="contentarea-2col">
				<?php if (strlen($p["bildurl"]) > 0) { ?>
					<div class="contentarea-picture">
						<img src="<?php echo $p["bildurl"]; ?>">
					</div>
				<?php } ?>
				<p><?php echo $p["text"]; ?></p>
				<?php if (sizeof($p["innehall"]) > 0) { ?>
					<div class="contentarea-innehall">
						<b>Paketet inneh�ller: </b>
							<?php $firstrun = true; ?>
							<?php foreach($p["innehall"] as $v) { ?>
								<?php if ($firstrun) $firstrun = false; else echo "* "; ?>
								<?php echo $v; ?>
							<?php } ?>
					</div>
				<?php } ?>
			</div>
			<div class="contentarea-1col">
				<div class="contentarea-pris">
					<h4>Pris</h4>
					<table>
						<?php if ($p["startpris"] > 0) { ?>
							<tr><td>Startpris</td><td id="getstartpris" class="prisbelopp"><?php echo $p["startpris"]; ?></td></tr>
						<?php } ?>
						<?php if ($p["m2pris"] > 0) { ?>
							<tr><td>Pris/m2</td><td id="getm2pris" class="prisbelopp"><?php echo $p["m2pris"]; ?></td></tr>
						<?php } ?>
						<?php if ($p["pris"] > 0) { ?>
							<tr><td>Pris</td><td id="getpris" class="prisbelopp"><?php echo $p["pris"]; ?></td></tr>
						<?php } ?>
					</table>
				</div>
				<div class="beraknapris">
					<div style="display:none">
						<span id="getminyta"><?php echo $p["minyta"]; ?></span>
						<span id="getmaxyta"><?php echo $p["maxyta"]; ?></span>
						<span id="getpris"><?php echo $p["pris"]; ?></span>
					</div>
					<h3>Ber�kna ditt pris</h3>
					<p>Ange yta: <input id="inputyta" min="1" type="number" onchange="calc()"></p>
					<div id="displayresultat">Ditt pris f�r <span id="displayyta"></span> m2 blir<br><span id="displaysumma"></span> kr.</div>
				</div>
				
				<?php	if (sizeof($p["koptill"]) >0)	{ ?>
					<div id="koptill">
						<h2>K�p till</h2>
						<?php 
						$odd = false;
						$cn=0;
						foreach ($p["koptill"] as $i => $v) { 
							$odd = !$odd;
						?>
							<div class="koptill-produkt <?php if ($odd) echo "koptill-odd"; else echo "koptill-even";  ?>">
								<b><?php echo $pages[$v]["rubrik"]; ?></b><br>
								<?php echo $pages[$v]["ltext"]; ?>
								<table>
									<tr>
										<td style="width: 108px;"><img src="<?php echo $pages[$v]["bildurl"]; ?>"</td>
										<td>
											<table>
												<?php if ($pages[$v]["pris"] > 0) { ?>
													<tr><td>Pris</td><td><?php echo $pages[$v]["pris"]; ?></td></tr>
												<?php } ?>
												<?php if ($pages[$v]["startpris"] > 0) { ?>
													<tr><td>Startpris</td><td><?php echo $pages[$v]["startpris"]; ?></td></tr>
												<?php } ?>
												<?php if ($pages[$v]["m2pris"] > 0) { ?>
													<tr><td>Pris/m2</td><td><?php echo $pages[$v]["m2pris"]; ?></td></tr>
												<?php } ?>
											</table>
										</td>
										<td style="width: 50px;"><input type="checkbox" onchange="calc()" class="css-checkbox" id="kt-check-<?php echo $cn; ?>" value="true"><label for="kt-check-<?php echo $cn; ?>" class="css-label"></label></td>										
									</tr>
								</table>
							</div>
					</div>
				<?php $cn++;	} 
				} ?>
				
				
			</div>
			
		
		
		<?php } else { ?>

				
				

			
				
				
				
				
				
			<?php if (strlen($p["bildurl"]) > 0) { ?>
				<div class="contentarea-picture">
					<img src="<?php echo $p["bildurl"]; ?>">
				</div>
			<?php } ?>
			<p><?php echo $p["text"]; ?></p>
			<?php		foreach ($p["items"] as $i => $v) { ?>
				<div class="block w33">
					<a class="divlink" href="?pageid=<?php echo $v["linkpageid"]; ?>">
						<div class="block-content">
							<div class="mh10">
								<h3><?php echo $v["rubrik"]; ?></h3>
								<div class="padded-margin"><?php echo $v["text"]; ?></div>
							</div>
							<div class="subpage-picture">
								<img src="<?php if (sizeof($v["bildurl"]) < 1) echo "http://dummyimage.com/340x200/ed393a/fff&text=Produktbild"; else echo $v["bildurl"]; ?>">
							</div>
						</div>
						<div class="block-footer">
							<img src="<?php echo $pilknappurl ?>">
						</div>
					</a>
				</div>
			<?php	} ?>
		<?php } ?>
		<p><?php echo $p["fot"]; ?></p>
		
	</div>
		
	<div class="footerarea">
		<div class="footerarea-cell">
			<table>
				<tr>
					<td colspan="2">Wermgo AB</td>
				</tr>
				<tr><td>Tel:</td><td>0570-12150</td></tr>
			</table>
		</div>
		<div class="footerarea-cell">
			<table>
				<tr><td>E-Post:</td><td><a href="mailto:info@wermgo.se">info@wermgo.se</a></td></tr>
				<tr><td>Org.nr:</td><td>111111-2222</td></tr>
			</table>
		</div>
		<div class="footerarea-cell">
			
		</div>
		<div class="footerarea-cell">
		</div>
	</div>
	</body>
</html>
