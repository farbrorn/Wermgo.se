<?php

$maxyta_e = 50;
$maxyta_n = 200;
$pages = array(
	//Startsida golvv�rme
	"golv" => array(
		"type" => "",
		"rubrik" => "Vilken typ av installation ska du dgg�ra?",
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
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Ingjutning i betong",
				"text" => "Golvv�rme ingjuten i betongplatta.",
				"bildurl" => "",
				"linkpageid" => "golv-e-betong"
			),
			array(
				"rubrik" => "Flytande golv p� befintligt golv",
				"text" => "Golvv�rme monterad i cellplastskivor f�r t.ex renovering.",
				"bildurl" => "",
				"linkpageid" => "golv-e-cell"
			),
			array(
				"rubrik" => "Glespanel",
				"text" => "Golvv�rme monterad i glespanel c/c 30 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-e-gles"
			),
			array(
				"rubrik" => "Tr�bj�lklag",
				"text" => "Golvv�rme monterad i tr�bj�lklag c/c 60 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-e-tra"
			),
			array(
				"rubrik" => "Sp�nskivor",
				"text" => "Golvv�rme monterad i sp�nskivor.",
				"bildurl" => "",
				"linkpageid" => "golv-e-span"
			),
			array(
				"rubrik" => "Inspackling",
				"text" => "Golvv�rme inspacklad i tunna golv. T.ex. vid renovering av badrum.",
				"bildurl" => "",
				"linkpageid" => "golv-e-q"
			)
		)
	),
	
	
	"golv-e-cell" => array(
		"type" => "",
		"rubrik" => "Vilken byggh�jd �nskar du?",
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Cellplastskiva tjocklek 25 mm",
				"text" => "",
				"bildurl" => "",
				"linkpageid" => "golv-e-cell-25"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 30 mm",
				"text" => "",
				"bildurl" => "",
				"linkpageid" => "golv-e-cell-30"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 50 mm",
				"text" => "",
				"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
		"fot" => "",
	),
	
	"golv-e-betong" => array(
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
		"maxyta" => $maxyta_e,
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
				"bildurl" => "",
				"linkpageid" => "golv-n-betong"
			),
			array(
				"rubrik" => "Flytande golv p� befintligt golv",
				"text" => "Golvv�rme monterad i cellplastskivor f�r t.ex renovering.",
				"bildurl" => "",
				"linkpageid" => "golv-n-cell"
			),
			array(
				"rubrik" => "Glespanel",
				"text" => "Golvv�rme monterad i glespanel c/c 30 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-n-gles"
			),
			array(
				"rubrik" => "Tr�bj�lklag",
				"text" => "Golvv�rme monterad i tr�bj�lklag c/c 60 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-n-tra"
			),
			array(
				"rubrik" => "Sp�nskivor",
				"text" => "Golvv�rme monterad i sp�nskivor.",
				"bildurl" => "",
				"linkpageid" => "golv-n-span"
			),
			array(
				"rubrik" => "Inspackling",
				"text" => "Golvv�rme inspacklad i tunna golv. T.ex. vid renovering av badrum.",
				"bildurl" => "",
				"linkpageid" => "golv-n-q"
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
				"bildurl" => "",
				"linkpageid" => "golv-n-cell-25"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 30 mm",
				"text" => "",
				"bildurl" => "",
				"linkpageid" => "golv-n-cell-30"
			),
			array(
				"rubrik" => "Cellplastskiva tjocklek 50 mm",
				"text" => "",
				"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
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
		"bildurl" => "",
		"fot" => "",
	),
	
	
	
	
);


?>
