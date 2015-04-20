<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;

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
