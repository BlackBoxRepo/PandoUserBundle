<?php
namespace BlackBoxCode\Pando\UserBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(columns={"emailUser"})})
 */
trait EmailTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $emailUser;

    /**
     * @var DomainInterface
     *
     * @ORM\ManyToOne(targetEntity="Domain")
     * @ORM\JoinColumn(nullable=false)
     */
    private $domain;

    /**
     * @var UserInterface
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="emails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    
    /**
     * {@inheritdoc}
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getDomain()
    {
        return $this->domain;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setDomain(DomainInterface $domain)
    {
        $this->domain = $domain;
        
        return $this;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
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
