<?php

class RemoteInvoker
{
    /**
     * @var LightOnCommand
     */
    private $lightOnCommand;
    /**
     * @var LightOffCommand
     */
    private $lightOffCommand;

    public $stack = [];

    public function __construct(LightOnCommand $lightOnCommand, LightOffCommand $lightOffCommand)
    {
        $this->lightOnCommand = $lightOnCommand;
        $this->lightOffCommand = $lightOffCommand;
    }

    public function clickOn()
    {
        $this->lightOnCommand->execute();
        $this->stack[] = 'lightOnCommand';
    }

    public function clickOff()
    {
        $this->lightOffCommand->execute();
        $this->stack[] = 'lightOffCommand';
    }

    public function undo()
    {
        if(empty($this->stack))
            return;
        $commandClass = array_pop($this->stack);
        $this->{$commandClass}->unExecute();
    }
}
