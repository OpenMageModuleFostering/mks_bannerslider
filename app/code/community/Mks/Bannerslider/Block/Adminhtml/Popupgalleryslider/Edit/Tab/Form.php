<?php
class Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("bannerslider_form", array("legend"=>Mage::helper("bannerslider")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("bannerslider")->__("Title"),
						"name" => "title",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('bannerslider')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("url", "text", array(
						"label" => Mage::helper("bannerslider")->__("URL"),
						"name" => "url",
						));
									
						 $fieldset->addField('category', 'select', array(
						'label'     => Mage::helper('bannerslider')->__('Category Id'),
						'values'   => Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Grid::getValueArray3(),
						'name' => 'category',
						));
						$fieldset->addField("description", "textarea", array(
						"label" => Mage::helper("bannerslider")->__("Description"),
						"name" => "description",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('bannerslider')->__('Status'),
						'values'   => Mks_Bannerslider_Block_Adminhtml_Popupgalleryslider_Grid::getValueArray5(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getPopupgallerysliderData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getPopupgallerysliderData());
					Mage::getSingleton("adminhtml/session")->setPopupgallerysliderData(null);
				} 
				elseif(Mage::registry("popupgalleryslider_data")) {
				    $form->setValues(Mage::registry("popupgalleryslider_data")->getData());
				}
				return parent::_prepareForm();
		}
}
