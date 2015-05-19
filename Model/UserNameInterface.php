<?php
namespace BlackBoxCode\Pando\UserBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdInterface;

interface UserNameInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getName();
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

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
