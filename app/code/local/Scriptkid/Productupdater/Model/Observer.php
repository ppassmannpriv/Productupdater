<?php
/*
 * Scriptkid Productupdater General Observer
 *
 * It only catches the cronjob event and gives it to the Helper to process stuff.
 * We could implement a way of triggering it manually - which could actually make quite a lot of sense...
 * WARNING: Written in total Balmer mode. This code needs audits. FIX THIS YOU MORON!
 * For now it is set up to run every hour - which.. well it should be able to set this from the backend
 * at some point.
 */

class Scriptkid_Productupdater_Model_Observer
{

    public function cronjobTrigger($observer)
    {
        return Mage::helper('productupdater')->runUpdates();
    }

    public function manualTrigger($observer)
    {
        return Mage::helper('productupdater')->runUpdates();
    }
}
