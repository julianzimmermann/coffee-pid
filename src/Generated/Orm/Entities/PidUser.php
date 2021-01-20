<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pid_user")
 */
class PidUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\ManyToOne(targetEntity="PidMachine")
     * @ORM\JoinColumn(name="fk_machine", referencedColumnName="id")
     **/
    protected $machine;

    /**
     * @return \PidMachine
     */
    public function getMachine(): PidMachine
    {
        return $this->machine;
    }

    /**
     * @param \PidMachine $machine
     */
    public function setMachine(PidMachine $machine): void
    {
        $this->machine = $machine;
    }

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     */
    public function setHash($hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @ORM\Column(type="string")
     */
    protected $hash;
}
