<?php

class Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("popupgallerysliderGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("ASC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("bannerslider/popupgalleryslider")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("bannerslider")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("bannerslider")->__("Title"),
				"index" => "title",
				));
				$this->addColumn("url", array(
				"header" => Mage::helper("bannerslider")->__("URL"),
				"index" => "url",
				));
						$this->addColumn('category', array(
						'header' => Mage::helper('bannerslider')->__('Category Id'),
						'index' => 'category',
						'type' => 'options',
						'options'=>Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Grid::getOptionArray3(),				
						));
						
						$this->addColumn('status', array(
						'header' => Mage::helper('bannerslider')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Grid::getOptionArray5(),				
						));
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_popupgalleryslider', array(
					 'label'=> Mage::helper('bannerslider')->__('Remove Popupgalleryslider'),
					 'url'  => $this->getUrl('*/adminhtml_popupgalleryslider/massRemove'),
					 'confirm' => Mage::helper('bannerslider')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray3()
		{
            $data_array=array(); 
			$data_array[0]='1';
			$data_array[1]='2';
			$data_array[2]='3';
			$data_array[3]='4';
			$data_array[4]='5';
			$data_array[5]='6';
			$data_array[6]='7';
			$data_array[7]='8';
			$data_array[8]='9';
			$data_array[9]='10';
            return($data_array);
		}
		static public function getValueArray3()
		{
            $data_array=array();
			foreach(Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Grid::getOptionArray3() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		
		static public function getOptionArray5()
		{
            $data_array=array(); 
			$data_array[0]='Yes';
			$data_array[1]='No';
            return($data_array);
		}
		static public function getValueArray5()
		{
            $data_array=array();
			foreach(Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Grid::getOptionArray5() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}