<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;

interface EmailInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getEmailUser();

    /**
     * @param string $emailUser
     * @return $this
     */
    public function setEmailUser($emailUser);

    /**
     * @return DomainInterface
     */
    public function getDomain();

    /**
     * @param DomainInterface $domain
     * @return $this
     */
    public function setDomain(DomainInterface $domain);

    /**
     * @return UserInterface
     */
    public function getUser();

    /**
     * @param UserInterface $user
     * @return $this
     */
    public function setUser(UserInterface $user);
}
