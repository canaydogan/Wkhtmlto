<?php

namespace Wkhtmlto;

abstract class AbstractWkhtmlto
{

    abstract public function create();

    /**
     * Input File / URL
     * @var string
     */
    protected $_input;

    /**
     * Output File
     * @var string
     */
    protected $_output;

    /**
     * @var array
     */
    protected $_options = array();

    public function getOptionsForExecute()
    {
        $options = '';

        foreach ($this->getOptions() as $key => $value) {
            $options .= '--' . $key . ' ' . $value . ' ';
        }

        return $options;
    }

    public function addOption($key, $value)
    {
        $this->_options[$key] = $value;
    }

    public function isSuccess()
    {
        return \file_exists($this->getOutput());
    }

    /**
     * @param string $input
     */
    public function setInput($input)
    {
        $this->_input = $input;
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->_input;
    }

    /**
     * @param string $output
     */
    public function setOutput($output)
    {
        $this->_output = $output;
    }

    /**
     * @return string
     */
    public function getOutput()
    {
        return $this->_output;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->_options = $options;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->_options;
    }

}