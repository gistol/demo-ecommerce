<?php 

/** 
* Generated at: 2018-04-27T11:39:39+02:00
* IP: 192.168.9.18


Fields Summary: 
 - specs [multiselect]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class ShoeDetails extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "shoeDetails";
public $specs;


/**
* Set specs - 
* @return array
*/
public function getSpecs () {
	$data = $this->specs;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("specs")->isEmpty($data)) {
		return $this->getValueFromParent("specs");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set specs - 
* @param array $specs
* @return \Pimcore\Model\DataObject\Objectbrick\Data\ShoeDetails
*/
public function setSpecs ($specs) {
	$this->specs = $specs;
	return $this;
}

}

