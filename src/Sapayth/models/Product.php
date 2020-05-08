<?php

/**
 * The product class
 */
class Product
{
	protected $name;
	protected $purchasePrice;
	protected $sellingPrice;
    protected $stock;

	public function __construct($name, $purchasePrice, $sellingPrice)
	{
		$this->name = $name;
		$this->purchasePrice = $purchasePrice;
		$this->sellingPrice = $sellingPrice;
	}

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return string
     */
    public function setName(String $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * @param mixed $purchasePrice
     *
     * @return self
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getsellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * @param mixed $sellingPrice
     *
     * @return self
     */
    public function setsellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;

        return $this;
    }
}