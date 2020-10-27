<?php declare(strict_types = 1);

namespace Mangoweb\Authorization;


interface Identity
{

	/**
	 * @return string[]
	 */
	public function getRoles(): array;

}
