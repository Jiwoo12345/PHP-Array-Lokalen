<?php
$lokalen = [
	"lokaal 1" => [
		"lokaalnaam" => 2073,
		"capaciteit" => 28
	],
	"lokaal 2" => [
		"lokaalnaam" => 1050,
		"capaciteit" => 20
	],
	"lokaal 3" => [
		"lokaalnaam" => 1028,
		"capaciteit" => 30
	],
	"lokaal 4" => [
		"lokaalnaam" => 1073,
		"capaciteit" => 27
	],
	"lokaal 5" => [
		"lokaalnaam" => 1026,
		"capaciteit" => 25
	]
];

echo "<ul>";
foreach ($lokalen as $lokaal){
	echo "<li>" . "Lokaalnaam:" . " " . $lokaal["lokaalnaam"] . " " . "Capaciteit:" . " " . $lokaal["capaciteit"] . "<br>";
}
echo "</ul>";