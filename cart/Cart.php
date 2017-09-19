<?php

class Cart
{
	private $_user;

	private $_items = [];

	public function __construct(?User $user)
	{
		$this->_user = $user;
	}

	public function getUser(): ?User
	{
		return $this->_user;
	}

	// item_id, price, sku, etc.
	public function addItem(array $item): void
	{
		$this->_items[] = $item;
	}

	public function getTotalAmount(): int
	{
		$ret = 0;
		foreach ($this->_items as $item)
			$ret += $item['price'];
		return $ret;
	}

	public function getDiscountedTotalAmount(): int
	{
		return $this->getTotalAmount() * $this->_getDiscount();
	}

	private function _getDiscount(): float
	{
		return 0;
	}
}