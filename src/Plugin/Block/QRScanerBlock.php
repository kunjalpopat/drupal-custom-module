<?php

namespace Drupal\sph_products\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/*
 * Provides a block for show Product Scanner
 *
 * @Block(
 *	 id = 'qr_scanner_block',
 *	 admin_label = @Translation('Product QR Scanner')
 * )
 */

class QRScannerBlock extends BlockBase{

	/**
     * {@inheritdoc}
     */

	public function defaultConfiguration() {
	   return ['label_display' => FALSE];
	}

	/**
	 * {@inheritdoc}
	 */

	public function build() {
		  $renderable = [
		      '#theme' => 'my_template',
		      '#test_var' => 'test variable',
		    ];

		return $renderable;
	}
}