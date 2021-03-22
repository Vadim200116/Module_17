<?php

interface MachineInterface
{
    public function runForward();
    public function runBackwards();
    public function Beep();
    public function addColor(string $color);
}

abstract class Machine implements MachineInterface
{
    public $color;

    public function runForward()
    {
    }
    public function runBackwards()
    {
    }

    public function Beep()
    {
    }
    public function addColor(string $color)
    {
        $this->color = $color;
    }
}


class Car implements Machine
{

    public function runForward()
    {
        $this->runNitro();
    }

    public function runNitro()
    {
    }
}

class Buldozer extends Machine
{

    public function runForward()
    {
        $this->useLadle;
    }

    public function useLadle()
    {
    }
}

class Tank extends Machine
{
    public function Shoot()
    {
    }
}



function makeRun(Machine $b)
{
    $b->runForward();
}
