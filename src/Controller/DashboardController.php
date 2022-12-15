<?php

namespace Drupal\sph_products\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity;
use Drupal\media\Entity\Media;
use Drupal\file\Entity\File;

class DashboardController extends ControllerBase{
	 public function content() {
	    return [
	      '#theme' => 'sph_products_listing',
	      '#test_var' => $this->t('Test Value'),
	    ];
	 
	}
	public function dashboard(){

		//fetch products from Juagad Patches content type only.
		$query = \Drupal::entityQuery('node');
		$query->condition('status', 1);
		$query->condition('type', 'jugad_patches_products');
        \return $entity_ids = $query->execute();
        
        foreach($entity_ids as $nid)
        {
        	$node = \Drupal\node\Entity\Node::load($nid);
        	$products = [
        		['product_name' => $node->get('title')->value],
        		['product_description' => $node->get('body')->value],
        		['app_purchase_link' => $node->get('field_app_purchase_link')->value]
        	];
        	
        	return [
		     	'#theme' => 'sph_products_listing',
		      	'#items' => $products,
		        '#title' => $this->t('All Products'),
		    ];
		    
        	//echo '<pre>'; print_r($node);
        	/*echo $product_title = $node->get('title')->value;
        	echo '<br/>';
        	echo $product_description = $node->get('body')->value;
        	echo '<br/><br/>';
        	echo $app_purchase_link = $node->get('field_app_purchase_link')->value; 
        	echo '<br/><br/>';*/
        }
	}
}