<?php

class Scriptkid_Productupdater_Helper_Csv extends Mage_Core_Helper_Abstract {

    /* get that one really good CSV Interpreter from github
    *  and never credit it ...
    */
    private $csv = false;

    public function __construct()
    {
      require_once Mage::getBaseDir().DS.'vendor/parsecsv/php-parsecsv/parsecsv.lib.php';
      $this->csv = new parseCSV();
    }

    public function initParser($file, $encoding, $delimiter)
    {
      $this->csv->encoding($encoding);
      $this->csv->delimiter($delimiter);
      return $this->csv->parse($file);
    }
}
