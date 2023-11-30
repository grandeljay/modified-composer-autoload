Composer Autoload ist ein Feature des PHP-Tools Composer, das die automatische Einbindung (Autoloading) von Klassen in einem PHP-Projekt ermöglicht. Wenn du in deinem Projekt Klassen verwendest, musst du normalerweise jede Klasse einzeln inkludieren, was zu viel manuellem Aufwand führen kann, insbesondere in größeren Projekten.

Composer Autoload löst dieses Problem, indem es automatisch die benötigten Klassen lädt, wenn sie zum ersten Mal im Code aufgerufen werden. Dies geschieht durch das Erzeugen einer Autoload-Datei `verndor-mmlc/autoload.php` oder `vendor-no-composer/autoload.php` (veraltet), die alle notwendigen Autoloading-Informationen enthält.