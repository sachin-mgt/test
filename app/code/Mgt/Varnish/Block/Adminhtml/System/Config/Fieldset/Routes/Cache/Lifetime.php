<?php
 namespace Mgt\Varnish\Block\Adminhtml\System\Config\Fieldset\Routes\Cache; class Lifetime extends \Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray { protected $_elementFactory; public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, array $data = []) { $this->_elementFactory = $elementFactory; parent::__construct($context, $data); } protected function _construct() { goto D6e62; faee7: parent::_construct(); goto aea2b; f8a8c: $this->addColumn("\146\x69\145\154\144\63", ["\154\141\x62\x65\x6c" => __("\x43\x6f\x6d\x6d\145\156\164")]); goto fb524; A1227: $this->_addButtonLabel = __("\x41\144\144"); goto faee7; fb524: $this->_addAfter = false; goto A1227; d24ee: $this->addColumn("\146\x69\x65\x6c\x64\62", ["\x6c\x61\142\x65\154" => __("\103\x61\x63\x68\x65\x20\114\151\x66\145\x74\x69\155\145")]); goto f8a8c; D6e62: $this->addColumn("\x66\x69\145\x6c\x64\61", ["\x6c\141\x62\145\x6c" => __("\122\x6f\165\164\x65")]); goto d24ee; aea2b: } public function getArrayRows() { goto Ed70d; Bbc08: $elementValue = $element->getValue(); goto daa2d; B210a: if (!($elementValue === "\142\x3a\x30\x3b" || $unserializedValue !== false)) { goto ec22b; } goto e6122; D2ff2: C94ef: goto e5d8f; efa51: goto Dfbfb; goto D2ff2; e5d8f: $element->setValue($elementValue); goto befa9; Ed70d: $element = $this->getElement(); goto Bbc08; D28f6: $unserializedValue = @unserialize($elementValue); goto B210a; befa9: Dfbfb: goto d28de; daa2d: if (true === is_array($elementValue)) { goto C94ef; } goto D28f6; Fd0ff: ec22b: goto efa51; d28de: return parent::getArrayRows(); goto D1ce5; e6122: $element->setValue($unserializedValue); goto Fd0ff; D1ce5: } }
