<?php

$maxyta_e = 50;
$maxyta_n = 200;
$pages = array(
	//Startsida golvvärme
	"golv" => array(
		"type" => "",
		"rubrik" => "Vilken typ av installation ska du göra?",
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
				"text" => "Nybyggnation eller större renovering.",
				"bildurl" => "",
				"linkpageid" => "golv-n"
			)
		)
	),
	
	//Lista på enstaka rum
	"golv-e" => array(
		"type" => "",
		"rubrik" => "Vilken typ av golv ska du göra?",
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Ingjutning i betong",
				"text" => "Golvvärme ingjuten i betongplatta.",
				"bildurl" => "",
				"linkpageid" => "golv-e-betong"
			),
			array(
				"rubrik" => "Flytande golv på befintligt golv",
				"text" => "Golvvärme monterad i cellplastskivor för t.ex renovering.",
				"bildurl" => "",
				"linkpageid" => "golv-e-cell"
			),
			array(
				"rubrik" => "Glespanel",
				"text" => "Golvvärme monterad i glespanel c/c 30 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-e-gles"
			),
			array(
				"rubrik" => "Träbjälklag",
				"text" => "Golvvärme monterad i träbjälklag c/c 60 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-e-tra"
			),
			array(
				"rubrik" => "Spånskivor",
				"text" => "Golvvärme monterad i spånskivor.",
				"bildurl" => "",
				"linkpageid" => "golv-e-span"
			),
			array(
				"rubrik" => "Inspackling",
				"text" => "Golvvärme inspacklad i tunna golv. T.ex. vid renovering av badrum.",
				"bildurl" => "",
				"linkpageid" => "golv-e-q"
			)
		)
	),
	
	
	"golv-e-cell" => array(
		"type" => "",
		"rubrik" => "Vilken bygghöjd önskar du?",
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
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
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
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
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
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
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
			"Golvvärmerör",
			"Rörhållarskenor",
			"Fästmärlor",
			"Rörböjningsstöd"
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
			"Golvvärmerör",
			"Värmefördelningsplåtar",
			"Rörböjningsstöd"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "",
		"fot" => "",
	),
	
	"golv-e-tra" => array(
		"type" => "produkt",
		"rubrik" => "Träbjälklag",
		"text" => "",
		"innehall" => array(
			"Golvvärmerör",
			"Värmefördelningsplåtar",
			"Rörböjningsstöd"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "",
		"fot" => "",
	),
	
	"golv-e-span" => array(
		"type" => "produkt",
		"rubrik" => "Spånskivor",
		"text" => "",
		"innehall" => array(
			"Spånskivor",
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
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
			"Golvvärmerör",
			"Rörhållarskenor",
			"Rörböjningsstöd"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_e,
		"bildurl" => "",
		"fot" => "",
	),

	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	"golv-n" => array(
		"type" => "",
		"rubrik" => "Vilken typ av golv ska du göra?",
		"text" => "",
		"bildurl" => "",
		"fot" => "",
		"items" => array(
			array(
				"rubrik" => "Ingjutning i betong",
				"text" => "Golvvärme ingjuten i betongplatta.",
				"bildurl" => "",
				"linkpageid" => "golv-n-betong"
			),
			array(
				"rubrik" => "Flytande golv på befintligt golv",
				"text" => "Golvvärme monterad i cellplastskivor för t.ex renovering.",
				"bildurl" => "",
				"linkpageid" => "golv-n-cell"
			),
			array(
				"rubrik" => "Glespanel",
				"text" => "Golvvärme monterad i glespanel c/c 30 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-n-gles"
			),
			array(
				"rubrik" => "Träbjälklag",
				"text" => "Golvvärme monterad i träbjälklag c/c 60 cm.",
				"bildurl" => "",
				"linkpageid" => "golv-n-tra"
			),
			array(
				"rubrik" => "Spånskivor",
				"text" => "Golvvärme monterad i spånskivor.",
				"bildurl" => "",
				"linkpageid" => "golv-n-span"
			),
			array(
				"rubrik" => "Inspackling",
				"text" => "Golvvärme inspacklad i tunna golv. T.ex. vid renovering av badrum.",
				"bildurl" => "",
				"linkpageid" => "golv-n-q"
			)
		)
	),
	
	
	"golv-n-cell" => array(
		"type" => "",
		"rubrik" => "Vilken bygghöjd önskar du?",
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
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
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
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
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
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
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
			"Golvvärmerör",
			"Rörhållarskenor",
			"Fästmärlor",
			"Rörböjningsstöd"
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
			"Golvvärmerör",
			"Värmefördelningsplåtar",
			"Rörböjningsstöd"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "",
		"fot" => "",
	),
	
	"golv-n-tra" => array(
		"type" => "produkt",
		"rubrik" => "Träbjälklag",
		"text" => "",
		"innehall" => array(
			"Golvvärmerör",
			"Värmefördelningsplåtar",
			"Rörböjningsstöd"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "",
		"fot" => "",
	),
	
	"golv-n-span" => array(
		"type" => "produkt",
		"rubrik" => "Spånskivor",
		"text" => "",
		"innehall" => array(
			"Spånskivor",
			"Värmefördelningsplåtar",
			"Golvvärmerör",
			"Rörböjningsstöd"
		),
		"startpris" => 100,
		"m2pris" => 100,
		"maxyta" => $maxyta_n,
		"bildurl" => "",
		"fot" => "",
	),
	
	
	
	
);


?>
