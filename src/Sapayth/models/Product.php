<?php

/**
 * The product class
 */
class Product
{
	protected $name;
	protected $purchasePrice;
	protected $regularSellingPrice;

	public function __construct($name, $purchasePrice, $regularSellingPrice)
	{
		$this->name = $name;
		$this->purchasePrice = $purchasePrice;
		$this->regularSellingPrice = $regularSellingPrice;
	}	

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
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
    public function getRegularSellingPrice()
    {
        return $this->regularSellingPrice;
    }

    /**
     * @param mixed $regularSellingPrice
     *
     * @return self
     */
    public function setRegularSellingPrice($regularSellingPrice)
    {
        $this->regularSellingPrice = $regularSellingPrice;

        return $this;
    }
}