<?php

namespace Hafid\Phpmvc\Controllers;

use Hafid\Phpmvc\Core\Application;

class Controller {
	public function render( $view, $params = [] ) {
		return Application::$app->router->renderView( $view, $params );
	}
}