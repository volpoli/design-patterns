<?php


class LightOnCommand implements ICommand
{
    /**
     * @var RoomLight
     */
    private $roomLight;

    public function __construct(RoomLight $roomLight)
    {
        $this->roomLight = $roomLight;
    }

    public function execute()
    {
        $this->roomLight->LightOn();
    }

    public function unExecute()
    {
        $this->roomLight->LightOn(true);
    }
}
