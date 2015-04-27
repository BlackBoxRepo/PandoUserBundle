<?php
namespace BlackBoxCode\Pando\Bundle\UserBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait DomainTrait
{
    use TypeTrait;
}
