<?php

namespace Generated\Transfer\Pid;

use DateTime;

class PidStatsRequestDataTransfer
{
    /**
     * @var string
     */
    protected $temp;

    /**
     * @var string
     */
    protected $output;

    /**
     * @var string
     */
    protected $kp;

    /**
     * @var string
     */
    protected $ki;

    /**
     * @var string
     */
    protected $kd;

    /**
     * @var string
     */
    protected $sollTemp;

    /**
     * @return string
     */
    public function getTemp(): string
    {
        return $this->temp;
    }

    /**
     * @param string $temp
     *
     * @return PidStatsRequestDataTransfer
     */
    public function setTemp(string $temp): PidStatsRequestDataTransfer
    {
        $this->temp = $temp;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutput(): string
    {
        return $this->output;
    }

    /**
     * @param string $output
     *
     * @return PidStatsRequestDataTransfer
     */
    public function setOutput(string $output): PidStatsRequestDataTransfer
    {
        $this->output = $output;
        return $this;
    }

    /**
     * @return string
     */
    public function getKp(): string
    {
        return $this->kp;
    }

    /**
     * @param string $kp
     *
     * @return PidStatsRequestDataTransfer
     */
    public function setKp(string $kp): PidStatsRequestDataTransfer
    {
        $this->kp = $kp;
        return $this;
    }

    /**
     * @return string
     */
    public function getKi(): string
    {
        return $this->ki;
    }

    /**
     * @param string $ki
     *
     * @return PidStatsRequestDataTransfer
     */
    public function setKi(string $ki): PidStatsRequestDataTransfer
    {
        $this->ki = $ki;
        return $this;
    }

    /**
     * @return string
     */
    public function getKd(): string
    {
        return $this->kd;
    }

    /**
     * @param string $kd
     *
     * @return PidStatsRequestDataTransfer
     */
    public function setKd(string $kd): PidStatsRequestDataTransfer
    {
        $this->kd = $kd;
        return $this;
    }

    /**
     * @return string
     */
    public function getSollTemp(): string
    {
        return $this->sollTemp;
    }

    /**
     * @param string $sollTemp
     *
     * @return PidStatsRequestDataTransfer
     */
    public function setSollTemp(string $sollTemp): PidStatsRequestDataTransfer
    {
        $this->sollTemp = $sollTemp;
        return $this;
    }


}
