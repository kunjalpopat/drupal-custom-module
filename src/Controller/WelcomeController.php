<?php

namespace Drupal\sph_products\Controller;

class WelcomeController {
	public function welcome(){
		return array(
	      '#markup' => 'Welcome to our Jugad Patches.'
	    );
	}
}