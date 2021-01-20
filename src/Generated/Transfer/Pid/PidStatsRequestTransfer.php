<?php

namespace Generated\Transfer\Pid;

use DateTime;

class PidStatsRequestTransfer
{
    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $hash;

    /**
     * @var string
     */
    protected $maschine;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var \Generated\Transfer\Pid\PidStatsRequestDataTransfer
     */
    protected $data;

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return PidStatsRequestTransfer
     */
    public function setUser(string $user): PidStatsRequestTransfer
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     *
     * @return PidStatsRequestTransfer
     */
    public function setHash(string $hash): PidStatsRequestTransfer
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaschine(): string
    {
        return $this->maschine;
    }

    /**
     * @param string $maschine
     *
     * @return PidStatsRequestTransfer
     */
    public function setMaschine(string $maschine): PidStatsRequestTransfer
    {
        $this->maschine = $maschine;
        return $this;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     *
     * @return PidStatsRequestTransfer
     */
    public function setModel(string $model): PidStatsRequestTransfer
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return \Generated\Transfer\Pid\PidStatsRequestDataTransfer
     */
    public function getData(): PidStatsRequestDataTransfer
    {
        return $this->data;
    }

    /**
     * @param \Generated\Transfer\Pid\PidStatsRequestDataTransfer $data
     *
     * @return PidStatsRequestTransfer
     */
    public function setData(PidStatsRequestDataTransfer $data): PidStatsRequestTransfer
    {
        $this->data = $data;
        return $this;
    }


}
