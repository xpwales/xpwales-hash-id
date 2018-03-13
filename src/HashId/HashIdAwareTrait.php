<?php

namespace Xpwales\HashId;

use Zend\Stdlib\Guard\NullGuardTrait,
	Zend\Stdlib\Guard\EmptyGuardTrait,
	Xpwales\HashId\Exception\RuntimeException,
	Xpwales\HashId\Exception\InvalidArgumentException;

trait HashIdAwareTrait
{
	use NullGuardTrait,
		EmptyGuardTrait;

	/**
	 * @var string
	 */
	private $hashId = null;

	/**
	 * @param string $hashId
	 *
	 * @return $this
	 *
	 * @throws InvalidArgumentException on empty param value
	 */
	public function setHashId($hashId)
	{
		$hashId = (string) $hashId;

		$this->guardAgainstEmpty(
			$hashId,
			'hashId',
			'Xpwales\HashId\Exception\InvalidArgumentException');

		$this->hashId = $hashId;

		return $this;
	}

	/**
	 * @return string
	 *
	 * @throws RuntimeException on unset hash ID
	 */
	public function getHashId()
	{
		$this->guardAgainstNull(
			$this->hashId,
			'hashId',
			'Xpwales\HashId\Exception\RuntimeException');

		return $this->hashId;
	}

}//end trait