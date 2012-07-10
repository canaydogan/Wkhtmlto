<?php

namespace Wkhtmlto;

use Wkhtmlto\AbstractWkhtmlto;

class Wkhtmltopdf extends AbstractWkhtmlto
{

    public function create()
    {
        $cmd = array();
        $cmd[] = 'wkhtmltopdf';
        $cmd[] = $this->getOptionsForExecute();
        $cmd[] = $this->getInput();
        $cmd[] = $this->getOutput();

        var_dump(\exec(implode(' ', $cmd)));
    }

}
