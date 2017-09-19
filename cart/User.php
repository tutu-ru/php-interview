<?php

class User
{
	public function getAge(): int {
		return mt_rand(15, 80);
	}
}