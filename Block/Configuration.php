<?php 
namespace ProductTab\Document\Block;  

class Configuration extends \Magento\Framework\View\Element\Html\Link
{
    public function _toHtml() 
    {
        if (!$this->_scopeConfig->isSetFlag('document/general/enable')) {
            return '';
        }
        return parent::_toHtml();
    }
}