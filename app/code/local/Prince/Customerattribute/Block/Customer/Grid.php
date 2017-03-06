<?php

class Prince_Customerattribute_Block_Customer_Grid extends Mage_Adminhtml_Block_Customer_Grid
{
    public function setCollection($collection)
    {
        $collection->addAttributeToSelect('newattribute'); 
        parent::setCollection($collection);
    }

    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        $this->addColumnAfter('newattribute', array(
                'header'=> Mage::helper('customer')->__('New Attribute'),
                'index' => 'newattribute',
                'type'  => 'options',
                'options'   => Mage::getSingleton('adminhtml/system_config_source_yesno')->toArray(),
        ), 'entity_id');
        return parent::_prepareColumns();
    }
}