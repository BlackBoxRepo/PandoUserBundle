<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait UserPasswordTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="userName")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
}
