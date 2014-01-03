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
				"rubrik" => "Golvvärme3333333",
				"text" => "Kompletta systemlösnignar för golvvörme",
				"bildurl" => "",
				"linkpageid" => "golv"
			),
			array(
				"rubrik" => "Tappvatten",
				"text" => "Kompletta systemlösningar för tappvattensystem typ Rör-i-Rör.",
				"bildurl" => "",
				"linkpageid" => "tapp"
			)
		)
	),
	
	"tapp" => array(
		"type" => "",
		"rubrik" => "Wermgo Tappvatten",
		"text" => "Kompletta tappvattensystem av typen Rör-i-Rör.",
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
