<?php
class Hackathon_Logger_ViewController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
		$collection = Mage::getModel('hackathon_logger/db_entry')->getCollection();
		foreach($collection as $entry) {
			echo $entry->getMessage().PHP_EOL;
		}
		$v = 0;
    }
}
