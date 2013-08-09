<?php

namespace gipsydanger\peopleBundle\Model;

use gipsydanger\peopleBundle\Model\om\BaseUsers;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

class Users extends BaseUsers implements UserInterface
{
	public function getUsername()
	{
		return $this->getEmail();
	}
	public function eraseCredentials()
	{
		return true;
	}
	public function setHashPassword($rawPass)
	{
		$salt = uniqid(mt_rand(), true);
		$cryptPass= hash('sha1', $rawPass+''+$salt);
		$this->setSalt($salt);
		$this->setPassword($cryptPass);
	}

	public function isPasswordCorrect($rawPass)
	{
		$cryptPass= hash(sha1, $rawPass+''+$this->getSalt());
		if($this->getPassword === $cryptPass)
		{
			return true;
		}
		return false;
	}
}
