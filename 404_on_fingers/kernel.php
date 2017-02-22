<?php
class Kernel
{
    const MODE_DEV = 'dev';

    private $mode;

    public function __construct($mode = Kernel::MODE_DEV)
    {
        $this->mode = $mode;
    }

    public function getMode()
    {
        return $this->mode;
    }
}
