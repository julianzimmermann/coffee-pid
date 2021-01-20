<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pid_stats")
 */
class PidStat
{
    /**
     * PidStat constructor.
     */
    public function __construct()
    {
        $this->onPrePersist();
        $this->onPreUpdate();
    }

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
     * @var \PidUser $user
     *
     * @ORM\ManyToOne(targetEntity="PidUser")
     * @ORM\JoinColumn(name="fk_user", referencedColumnName="id")
     **/
    protected $user;

    /**
     * @var \PidMachine $machine
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
     *
     * @return $this
     */
    public function setMachine(PidMachine $machine)
    {
        $this->machine = $machine;
        return $this;
    }

    /**
     * @ORM\Column(type="float")
     */
    protected $temp;

    /**
     * @ORM\Column(type="float")
     */
    protected $output;

    /**
     * @ORM\Column(type="float")
     */
    protected $kp;

    /**
     * @ORM\Column(type="float")
     */
    protected $ki;

    /**
     * @ORM\Column(type="float")
     */
    protected $kd;

    /**
     * @ORM\Column(type="float")
     */
    protected $sollTemp;

    /**
     * @var DateTimeInterface $createdAt
     *
     * @ORM\Column(type="datetime_immutable")
     */
    protected $createdAt;

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @var DateTimeInterface $updatedAt
     *
     * @ORM\Column(type="datetime_immutable", nullable = true)
     */
    protected $updatedAt;

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @return \PidUser
     */
    public function getUser(): PidUser
    {
        return $this->user;
    }

    /**
     * @param \PidUser $user
     *
     * @return PidStat
     */
    public function setUser(PidUser $user): PidStat
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * @param mixed $temp
     *
     * @return PidStat
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @param mixed $output
     *
     * @return PidStat
     */
    public function setOutput($output)
    {
        $this->output = $output;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKp()
    {
        return $this->kp;
    }

    /**
     * @param mixed $kp
     *
     * @return PidStat
     */
    public function setKp($kp)
    {
        $this->kp = $kp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKi()
    {
        return $this->ki;
    }

    /**
     * @param mixed $ki
     *
     * @return PidStat
     */
    public function setKi($ki)
    {
        $this->ki = $ki;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKd()
    {
        return $this->kd;
    }

    /**
     * @param mixed $kd
     *
     * @return PidStat
     */
    public function setKd($kd)
    {
        $this->kd = $kd;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSollTemp()
    {
        return $this->sollTemp;
    }

    /**
     * @param mixed $sollTemp
     *
     * @return PidStat
     */
    public function setSollTemp($sollTemp)
    {
        $this->sollTemp = $sollTemp;
        return $this;
    }



    /**
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTimeImmutable("now");
    }

    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTimeImmutable("now");
    }

}
