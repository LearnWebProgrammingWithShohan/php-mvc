<?php

require 'Models/Mobile.php';
require 'Models/Accessory.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';

$mobiles = [
	new Mobile('Walton Primo N', 7000, 7800),
	new Mobile('Walton PRIMO ZX3', 23950, 24999),
	new Mobile('Walton PRIMO S7', 14080, 15699),
	new Mobile('Redmi Note 9 Pro', 18080, 18699),
	new Mobile('Redmi Note 8', 12020, 12300),
	new Mobile('Redmi Note 8 Pro', 14800, 15500),
];

$accessories = [
	new Accessory('5D Tampared Glass', 30, 100),
	new Accessory('Earphone SV01', 30, 100),
	new Accessory('Powerbank BREEZE-10000 (WITH DATA CABLE)', 2270, 2350),
];

$queryBuilder = new QueryBuilder(Connection::make());

$queryBuilder->flushTable('mvc_products');

foreach ($mobiles as $mobile) {
	$queryBuilder->insert('mvc_products',
		['name',
		'purchase_price',
		'selling_price'],

		[$mobile->getName(),
		$mobile->getPurchasePrice(),
		$mobile->getSellingPrice()]);
}

foreach ($accessories as $accessory) {
	$queryBuilder->insert('mvc_products',
		[ 'name',
		'purchase_price',
		'selling_price'],

		[$accessory->getName(),
		$accessory->getPurchasePrice(),
		$accessory->getSellingPrice()]
	);
}

$allProducts = $queryBuilder->fetchAll('mvc_products');

echo "before edit \n";
var_dump($allProducts);

$queryBuilder->editItem('mvc_products', ['name', 'purchase_price'], ['Walton Primo NX5', 10000], 'id', 1);
$allProducts = $queryBuilder->fetchAll('mvc_products');

echo "after edit \n";
var_dump($allProducts);