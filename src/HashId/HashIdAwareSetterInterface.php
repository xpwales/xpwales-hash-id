<?php

namespace Xpwales\HashId;

interface HashIdAwareSetterInterface
{
	/**
	 * @param string $hashId
	 *
	 * @return self
	 */
	public function setHashId($hashId);

}//end interface