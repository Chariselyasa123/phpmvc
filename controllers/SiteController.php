<?php

namespace Hafid\Phpmvc\Controllers;

use Hafid\Phpmvc\Core\Application;

class SiteController extends Controller {
	public function home() {
		return $this->render( 'home', [
			'title' => 'Home',
		] );
	}

	public function contact() {
		return $this->render( 'contact', [
			'title' => 'Contact',
		] );
	}

	public function handleContact() {
		return 'handling submitted data';
	}
}