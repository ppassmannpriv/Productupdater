<?php

class Scriptkid_Productupdater_Helper_Data extends Mage_Core_Helper_Abstract {

    private $files = false;
    private $xml = false;
    private $csv = false;
    private $updater = false;
    private $notifaction = false;

    public function __construct()
    {
        $this->files = Mage::helper('productupdater/files');
        $this->xml = Mage::helper('productupdater/xml');
        $this->csv = Mage::helper('productupdater/csv');
        $this->updater = Mage::helper('productupdater/updater');
        $this->notifaction = Mage::helper('productupdater/notification');
    }

    public function runUpdates()
    {

        #if($files->newFiles())
        #{
            //run an update?
        #}
        $msg = 'This actually works! A bit...';
        return $msg;
    }
}
