<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait EmailTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $emailUser;

    /**
     * @ORM\ManyToOne(targetEntity="Domain")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domain;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="emails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
}
