<?php

namespace Drupal\sph_products\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity;
use Drupal\media\Entity\Media;
use Drupal\file\Entity\File;

class DashboardController extends ControllerBase{
	public function dashboard(){

		//fetch products from Juagad Patches content type only.
		$query = \Drupal::entityQuery('node');
		$query->condition('status', 1);
		$query->condition('type', 'jugad_patches_products');
        $entity_ids = $query->execute();
        
        foreach($entity_ids as $nid)
        {
        	$node = \Drupal\node\Entity\Node::load($nid);
        	echo '<pre>'; print_r($node);
        	echo $product_title = $node->get('title')->value;
        	echo '<br/>';
        	echo $product_description = $node->get('body')->value;
        	echo '<br/>';
        	echo $app_purchase_link = $node->get('field_app_purchase_link')->value; 
        	echo '<br/>';
        	echo $product_file_id = $node->get('field_product_image')->target_id;
        	echo '<br/>';
        	$media = Media::load($product_file_id);
			echo $fid = $media->field_product_image->target_id;
			$file = File::load($fid);
			echo $url = $file->url();
        }
        exit;
	}
}