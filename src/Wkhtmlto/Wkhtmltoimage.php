<?php

namespace Wkhtmlto;

use Wkhtmlto\AbstractWkhtmlto;

class Wkhtmltoimage extends AbstractWkhtmlto
{

    public function create()
    {
        $cmd = array();
        $cmd[] = 'wkhtmltoimage';
        $cmd[] = $this->getOptionsForExecute();
        $cmd[] = $this->getInput();
        $cmd[] = $this->getOutput();

        $output = \shell_exec(implode(' ', $cmd));
    }

}
