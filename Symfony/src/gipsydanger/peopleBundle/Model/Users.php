<?php

namespace gipsydanger\peopleBundle\Model;

use gipsydanger\peopleBundle\Model\om\BaseUsers;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

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
}
