<?php

require_once 'Product.php';

/**
 * The mobile class
 */
class Mobile extends Product
{
	
	function __construct($name, $purchasePrice, $regularSellingPrice)
	{
		parent::__construct($name, $purchasePrice, $regularSellingPrice);
	}
}