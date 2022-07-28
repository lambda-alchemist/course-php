<?php

$pat = array(
	"Guilherme", "João",
	"Neto", "Pedro",
	"Isaac", "Gabriel",
	"Clodoaudo", "Iago",
	"Paula", "Gabriela",
	"Maria", "Silva",
	"Joseph", "Linus",
	"Michael", "American",
	"Steve", "William",
	"James", "Arnold",
);

$con = array(
	"AIDS", "Skin Cancer",
	"Videogame addiction", "Meningitis",
	"Dengue", "Gonorrhea",
	"Kidney stone", "COVID-19",
	"Food poisoning", "Radioactive exposure",
	"Alcohol poisoning", "Foreign object insertion",
	"Python programmer", "Stress induced hypertension",
	"Lung cancer", "UTI",
	"Drug overdose", "Car accident injury",
	"GSW", "Gym accident",
);

foreach ( $pat as $key => $val ) {
	echo "Patient $key : $val > $con[$key]\n";
};

?>
