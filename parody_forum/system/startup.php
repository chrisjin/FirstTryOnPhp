<?php
// Autoloader
function autoload($class) {
	$file = DIR_SYSTEM . 'library/' . str_replace('\\', '/', strtolower($class)) . '.php';

	if (file_exists($file)) {
		include_once($file);

		return true;
	} else {
		return false;
	}
}

spl_autoload_register('autoload');
spl_autoload_extensions('.php');



require_once(DIR_SYSTEM . '/core/controller.php');

require_once(DIR_SYSTEM . '/core/loader.php');
require_once(DIR_SYSTEM . '/core/model.php');
require_once(DIR_SYSTEM . '/core/registry.php');


?>