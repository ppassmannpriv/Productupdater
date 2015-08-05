<?php

class Scriptkid_Productupdater_Helper_Files extends Mage_Core_Helper_Abstract
{
    private $workingDir = false;
    private $fileSystem = false;

    public function __construct()
    {
        $workingDir = '';
    }

    public function newFiles()
    {
        $this->fileSystem = new \FilesystemIterator($this->workingDir);
        //$return = !($this->fileSystem)->valid();
        $return = false;

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
