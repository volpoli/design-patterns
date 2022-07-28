<?php

class LightOffCommand implements ICommand
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
        $this->roomLight->LightOff();
    }

    public function unExecute()
    {
        $this->roomLight->LightOff(true);
    }
}
