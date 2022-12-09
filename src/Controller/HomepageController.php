<?php

namespace Drupal\sph_products\Controller;

class HomepageController {
	public function dashboard(){
		return array(
	      '#markup' => 'Welcome to our Jugad Patches Pvt Ltd - Dashboard.'
	    );
	}
}