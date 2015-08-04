<?php

class Scriptkid_Priceupdater_Helper_Files extends Mage_Core_Helper_Abstract
{
    private $workingDir = false;
    private $fileSystem = false;

    private function __construct()
    {
        $workingDir = '';
    }

    public funcion newFiles()
    {
        $this->fileSystem = new \FilesystemIterator($this->workingDir);
        $return = !($this->fileSystem)->valid();
        //$return = false;

        return $return;
    }

    public function getFilesFromDir()
    {
        $filelist = array();
        foreach($this->fileSystem as $entry) {
            if (strpos($entry->getFilename(), "te") === 0) {
                $filelist[] = $entry->getFilename();
            }
        }

        return $filelist;
    }
}