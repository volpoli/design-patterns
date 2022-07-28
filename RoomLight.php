<?php

class RoomLight
{
    public $state;
    public $changed = false;

    public function LightOn($undo = false)
    {
        if(!$undo){
            if($this->state === null || $this->state === false){
                $this->setState(true);
            } else {
                $this->changed = false;
            }
        } else {
            if($this->state && $this->changed)
                $this->setState(false);
        }
    }

    public function LightOff($undo = false)
    {
        if(!$undo){
            if($this->state === null || $this->state === true){
                $this->setState(false);
            } else {
                $this->changed = false;
            }
        } else {
            if(!$this->state && $this->changed) {
                $this->setState(true);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
        $this->changed = true;
    }
}
