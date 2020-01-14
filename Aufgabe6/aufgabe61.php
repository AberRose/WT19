<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title>Datei einlesen</title>
</head>
<body>
	<h1>Datei einlesen</h1>
<?php
/*
 * falls das Zeilenende der einzulesenden Datei nicht korrekt 
 * erkannt werden sollte, dann sollte die folgende Anweisung 
 * ausgeführt werden
 */
ini_set("auto_detect_line_endings", true);
/* Öffnen der Datei zum Lesen "r"
 * Datei muss im gleichen Verzeichnis liegen wie aufgabe6.php
 * andernfalls Pfadangabe ändern
 * @ unterdrückt evtl Warnungen
 */
$file = @fopen ( "./mockdatatext", "r" );
/*
 * wenn das Öffnen der Datei funktioniert hat, ist $file TRUE
 * wenn nicht, dann FALSE
 */
if (! $file) {
	echo "Es ist ein Problem beim Öffnen der Datei 'mockupdatatext' aufgetreten.";
} else {
	/*
	 * feof - end of file
	 * prüft, ob ein Dateizeiger am Ende der Datei steht
	 */

	$counter10=0;
	$counter3=0;
$list = "<h2>Liste der Teilnehmer</h2>";
	while ( ! feof ( $file ) ) {

		$list .= "<div class='well'><ul class='list-group'>";
		/*
		 * fegts() liest eine Zeile einer Datei aus
		 * fgets() gibt einen String zürück
		 * nach Aufruf von fgets() steht der Dateizeiger 
		 * in der nächsten Zeile (außer, es wurde eine 
		 * Leselänge als 2. Parameter fgets übergeben)
		 */
		for ($i=0; $i<10 && ! feof ($file) ; $i++) {
			$list .= "<li class='list-group-item'>";

			$current_line = fgets($file);
			$list .= $current_line;

			$current_line = fgets($file);
			$list .= $current_line;

			$current_line = fgets($file);
			$list .= "<a href='mailto:" . $current_line . "'>($current_line)</a></li>";
			fgets($file);
			fgets($file);
		}
		$list.= "</ul></div>";
	}

	echo $list;
	fclose ( $file );
}
?>
</body>
</html>