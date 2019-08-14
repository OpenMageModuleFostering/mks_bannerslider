<?php


class Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_popupgalleryslider";
	$this->_blockGroup = "bannerslider";
	$this->_headerText = Mage::helper("bannerslider")->__("Popupgalleryslider Manager");
	$this->_addButtonLabel = Mage::helper("bannerslider")->__("Add New Item");
	parent::__construct();
	
	}

}