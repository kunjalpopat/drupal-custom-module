<?php

namespace Drupal\sph_products\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/*
 * Provides a block for show Product Scanner
 *
 * @Block(
 *	id = 'product_qrscanner_block',
 *	'admin_label' = @Translation('Product QR Scanner Block'))
 *
 */

class QRScannerBlock extends BlockBase{
	/*
	 * {@inheritdoc}
	 */

	public function build() {
		return [
			'#type' => 'markup',
			'#markup' = 'Product QR Scanner Block',
		];
	}
}