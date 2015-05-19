<?php
namespace BlackBoxCode\Pando\UserBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\TypeInterface;

interface RoleInterface extends TypeInterface
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER  = 'ROLE_USER';
}
