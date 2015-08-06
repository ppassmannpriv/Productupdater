<?php

class Scriptkid_Productupdater_Block_Adminhtml_Overview extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public funcion __construct()
  {
    die('asdf');
    $this->_blockGroup = 'productupdater';
    $this->_controller = 'adminhtml_productupdater';
    $this->_headerText = $this->__('Productupdater - Overview');

    parent::__construct();
  }

}
