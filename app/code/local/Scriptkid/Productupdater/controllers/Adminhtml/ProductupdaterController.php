<?php

class Scriptkid_Productupdater_Adminhtml_ProductupdaterController extends Mage_Adminhtml_Controller_Action {

    public function indexAction()
    {
      $this->loadLayout();
      $this->_title($this->__("Overview"));
      $this->renderLayout();

    }

    public function manualAction()
    {
      Mage::helper('productupdater')->runUpdates();
      $this->_redirect('adminhtml/productupdater/index');
    }

}
