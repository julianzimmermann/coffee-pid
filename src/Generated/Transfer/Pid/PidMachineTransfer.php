<?php
namespace Generated\Transfer\Pid;

class PidMachineTransfer
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
    public function setId(int $id): PidMachineTransfer
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
    public function setName(string $name): PidMachineTransfer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @var string
     */
    protected $model;

    /**
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * @param string $model
     *
     * @return $this
     */
    public function setModel(string $model): PidMachineTransfer
    {
        $this->model = $model;
        return $this;
    }
}
