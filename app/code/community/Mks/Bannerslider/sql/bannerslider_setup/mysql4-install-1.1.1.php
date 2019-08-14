<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table popupgalleryslider(id int not null auto_increment, title varchar(255),  image varchar(255), url varchar(255), category varchar(100), description varchar(255),primary key(id));

		
SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 