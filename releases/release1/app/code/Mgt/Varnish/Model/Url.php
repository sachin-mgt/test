<?php
 namespace Mgt\Varnish\Model; class Url extends \Magento\Framework\Model\AbstractModel { protected $tags = []; public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Mgt\Varnish\Model\ResourceModel\Url $resource) { parent::__construct($context, $registry, $resource); } protected function _construct() { $this->_init("\x4d\147\164\134\x56\x61\x72\156\151\163\150\134\x4d\x6f\144\145\154\x5c\x52\x65\163\x6f\x75\162\x63\145\115\157\144\145\x6c\x5c\125\162\x6c"); } public function loadByStoreIdAndPath($storeId, $path) { goto F6548; ef2d3: $resource->loadByStoreIdAndPath($this, $storeId, $path); goto F954b; F954b: return $this; goto fb85d; F6548: $resource = $this->_getResource(); goto ef2d3; fb85d: } public function getId() { return parent::getData("\x75\162\x6c\137\151\144"); } public function setTags(array $tags) { $this->tags = $tags; } public function getTags() { return $this->tags; } public function afterSave() { goto a1516; a1516: $tags = $this->getTags(); goto eaff3; a85be: return parent::afterSave(); goto e4aaa; E28cc: $resource->saveTags($this, $tags); goto a85be; eaff3: $resource = $this->_getResource(); goto E28cc; e4aaa: } }