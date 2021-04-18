<?php


class sql extends sqlConfig
{
    private $dataBaseName;

    /**
     * @return mixed
     */
    public function getDataBaseName()
    {
        return $this->dataBaseName;
    }

    /**
     * @param mixed $dataBaseName
     */
    public function setDataBaseName($dataBaseName)
    {
        $this->dataBaseName = $dataBaseName;
    }

}