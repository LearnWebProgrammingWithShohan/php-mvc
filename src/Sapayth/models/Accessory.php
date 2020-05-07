<?php

require_once 'Product.php';

/**
 * Class for Accessories
 */
class Accessory extends Product
{
	
	function __construct($name, $purchasePrice, $regularSellingPrice)
	{
		parent::__construct($name, $purchasePrice, $regularSellingPrice);
	}
}