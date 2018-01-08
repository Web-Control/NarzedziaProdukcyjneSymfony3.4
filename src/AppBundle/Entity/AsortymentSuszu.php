<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AsortymentSuszu
 *
 * @ORM\Table(name="asortyment_suszu")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsortymentSuszuRepository")
 */
class AsortymentSuszu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Asortyment", type="string", length=255, unique=true)
     */
    private $asortyment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set asortyment
     *
     * @param string $asortyment
     *
     * @return AsortymentSuszu
     */
    public function setAsortyment($asortyment)
    {
        $this->asortyment = $asortyment;

        return $this;
    }

    /**
     * Get asortyment
     *
     * @return string
     */
    public function getAsortyment()
    {
        return $this->asortyment;
    }
}

