<?php
namespace BlackBoxCode\Pando\UserBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait DomainTrait
{
    use TypeTrait;
}
