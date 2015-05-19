<?php
namespace BlackBoxCode\Pando\UserBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait UserPasswordTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @var UserInterface
     *
     * @ORM\OneToOne(targetEntity="User", inversedBy="password")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setPassword($password)
    {
        $this->password = $password;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->$user;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setUser(UserInterface $user)
    {
        $this->user = $user;
        
        return $this;
    }
}
