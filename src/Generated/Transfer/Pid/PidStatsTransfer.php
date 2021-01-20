<?php

namespace Generated\Transfer\Pid;

use DateTimeInterface;

class PidStatsTransfer
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(int $id): PidStatsTransfer
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var \Generated\Transfer\Pid\PidUserTransfer
     */
    protected $user;

    /**
     * @return \Generated\Transfer\Pid\PidUserTransfer|null
     */
    public function getUser(): ?PidUserTransfer
    {
        return $this->user;
    }

    /**
     * @param \Generated\Transfer\Pid\PidUserTransfer $user
     *
     * @return $this
     */
    public function setUser(PidUserTransfer $user): PidStatsTransfer
    {
        $this->user = $user;
        return $this;
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
    public function setMachine(PidMachineTransfer $machine): PidStatsTransfer
    {
        $this->machine = $machine;
        return $this;
    }

    /**
     * @var float
     */
    protected $temp;

    /**
     * @var float
     */
    protected $output;

    /**
     * @var float
     */
    protected $kp;

    /**
     * @var float
     */
    protected $ki;

    /**
     * @var float
     */
    protected $kd;

    /**
     * @var float
     */
    protected $sollTemp;

    /**
     * @var \DateTimeInterface $createdAt
     */
    protected $createdAt;

    /**
     * @return \DateTimeInterface|null
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @var \DateTimeInterface
     */
    protected $updatedAt;

    /**
     * @param float $temp
     *
     * @return PidStatsTransfer
     */
    public function setTemp(float $temp): PidStatsTransfer
    {
        $this->temp = $temp;
        return $this;
    }

    /**
     * @param float $output
     *
     * @return PidStatsTransfer
     */
    public function setOutput(float $output): PidStatsTransfer
    {
        $this->output = $output;
        return $this;
    }

    /**
     * @param float $kp
     *
     * @return PidStatsTransfer
     */
    public function setKp(float $kp): PidStatsTransfer
    {
        $this->kp = $kp;
        return $this;
    }

    /**
     * @param float $ki
     *
     * @return PidStatsTransfer
     */
    public function setKi(float $ki): PidStatsTransfer
    {
        $this->ki = $ki;
        return $this;
    }

    /**
     * @param float $kd
     *
     * @return PidStatsTransfer
     */
    public function setKd(float $kd): PidStatsTransfer
    {
        $this->kd = $kd;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTemp(): ?float
    {
        return $this->temp;
    }

    /**
     * @return float|null
     */
    public function getOutput(): ?float
    {
        return $this->output;
    }

    /**
     * @return float|null
     */
    public function getKp(): ?float
    {
        return $this->kp;
    }

    /**
     * @return float|null
     */
    public function getKi(): ?float
    {
        return $this->ki;
    }

    /**
     * @return float|null
     */
    public function getKd(): ?float
    {
        return $this->kd;
    }

    /**
     * @return float|null
     */
    public function getSollTemp(): ?float
    {
        return $this->sollTemp;
    }



    /**
     * @param float $sollTemp
     *
     * @return PidStatsTransfer
     */
    public function setSollTemp(float $sollTemp): PidStatsTransfer
    {
        $this->sollTemp = $sollTemp;
        return $this;
    }

    /**
     * @param \DateTimeInterface $createdAt
     *
     * @return $this
     */
    public function setCreatedAt(DateTimeInterface $createdAt): PidStatsTransfer
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param \DateTimeInterface $updatedAt
     *
     * @return PidStatsTransfer
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): PidStatsTransfer
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }
}
