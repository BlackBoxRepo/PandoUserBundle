<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\HasIdTrait;
use Doctrine\ORM\Mapping as ORM;

trait UserTrait
{
    use HasIdTrait;

    /**
     * @ORM\OneToOne(targetEntity="UserName", mappedBy="user")
     */
    private $userName;

    /**
     * @ORM\OneToOne(targetEntity="UserPassword", mappedBy="user")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="Email", mappedBy="user")
     */
    private $emails;

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     */
    private $roles;
}
