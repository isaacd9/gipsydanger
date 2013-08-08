<?php

namespace gipsydanger\peopleBundle\Forms\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\IdenticalTo;

class baseUserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('fname','text');
		$builder->add('lname','text');
		$builder->add('email','text');
		$builder->add('password','repeated',array(
			'type' => 'password'
			));
		$builder->add('register','submit');
	}

	public function getName() {
		return 'Users';
	}

}
