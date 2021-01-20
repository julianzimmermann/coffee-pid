<?php

namespace Generated\Transfer\Pid;

use \Generated\Transfer\Pid\PidMachineTransfer;

class PidUserTransfer
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var \Generated\Transfer\Pid\PidMachineTransfer
     */
    protected $machine;

    /**
     * @return \Generated\Transfer\Pid\PidMachineTransfer|null
     */
    public function getMachine(): ?PidMachineTransfer
    {
        return $this->machine;
    }

    /**
     * @param \Generated\Transfer\Pid\PidMachineTransfer $machine
     *
     * @return $this
     */
    public function setMachine(PidMachineTransfer $machine): PidUserTransfer
    {
        $this->machine = $machine;
        return $this;
    }

    /**
     * @var string
     */
    protected $name;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): PidUserTransfer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     *
     * @return $this
     */
    public function setHash(string $hash): PidUserTransfer
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @var string
     */
    protected $hash;
}
