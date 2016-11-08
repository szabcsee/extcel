<?php
    ini_set('display_errors', 1);

	require __DIR__ . '/rest-server/server.php';
    require __DIR__ . '/controller/MainController.php';

    $server = new ServerRouting();
	$path = $server->getPath();
	if ($path) {
		$mainpage = file_get_contents(__DIR__ . '/js/src/index.html');
		echo $mainpage;
        echo '<script src="' . __DIR__ . '/js/src/EventDispatcher.js"></script>';
        echo '<script src="' . __DIR__ . '/js/src/Model.js"></script>';
        echo '<script src="' . __DIR__ . '/js/src//js/src/View.js"></script>';
        echo '<script src="' . __DIR__ . '/js/src/Controller.js"></script>';
        echo '<script src="' . __DIR__ . '/js/src/app.js"></script>';
        echo '</body>';
        echo '</html>';
	}

?>