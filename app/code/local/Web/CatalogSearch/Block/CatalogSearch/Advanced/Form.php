<?php
/**
 * @author Mohamed Meabed <mo.meabed@gmail.com>
 */
class Web_CatalogSearch_Block_CatalogSearch_Advanced_Form extends Mage_CatalogSearch_Block_Advanced_Form {

    /**
     * Build date element html string for attribute
     *
     * @param Mage_Eav_Model_Entity_Attribute_Abstract $attribute
     * @param string $part
     * @return string
     */
    public function getDateInput($attribute, $part = 'from')
    {
        $name = $attribute->getAttributeCode() . '[' . $part . ']';
        $value = $this->getAttributeValue($attribute, $part);

        return $this->_getDateBlock()
            ->setName($name)
            ->setId($attribute->getAttributeCode() . ($part == 'from' ? '' : '_' . $part))
            ->setTitle($this->getAttributeLabel($attribute))
            ->setValue($value)
            ->setImage($this->getSkinUrl('images/calendar.gif'))
            ->setFormat('%d-%m-%Y')
            ->setClass('input-text')
            ->getHtml();
    }
}