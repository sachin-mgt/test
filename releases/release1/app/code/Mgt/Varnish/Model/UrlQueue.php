<?php
 namespace Mgt\Varnish\Model; use Zend\Uri\Uri; class UrlQueue extends \Magento\Framework\Model\AbstractModel { const PRIORITY_HIGH = 1000; const PRIORITY_MEDIUM = 500; const PRIORITY_LOW = 100; protected $storeManager; protected $license; protected $licenseCache = []; public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Mgt\Varnish\Model\ResourceModel\UrlQueue $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Mgt\Varnish\Model\License $license) { goto c7be5; E147f: $this->license = $license; goto Ebaf4; c7be5: parent::__construct($context, $registry, $resource); goto B06b0; B06b0: $this->storeManager = $storeManager; goto E147f; Ebaf4: } protected function _construct() { $this->_init("\x4d\x67\164\134\126\x61\x72\156\151\x73\150\x5c\x4d\157\144\x65\154\134\122\x65\163\157\165\162\143\x65\115\x6f\x64\145\154\134\125\162\x6c\x51\165\145\x75\145"); } public function getId() { return parent::getData("\165\x72\x6c\x5f\151\144"); } public function addToQueue(array $urls) { goto bf565; c6a55: $resource->addToQueue($urls); goto F01ce; F01ce: cd7d3: goto F2713; bf565: $urls = $this->filterUrls($urls); goto Bc349; Bc349: if (!$urls) { goto cd7d3; } goto D2aa0; D2aa0: $resource = $this->_getResource(); goto c6a55; F2713: } protected function filterUrls(array $urls) { goto a2ba6; a3c3c: Ae650: goto A4ad2; a2ba6: $filteredUrls = []; goto F4628; A4ad2: return $filteredUrls; goto A5170; F4628: foreach ($urls as $url) { goto B2e25; a43d9: Adb6b: goto C4ea1; B72ff: $filteredUrls[] = $url; goto fd85e; fd85e: A4b9a: goto a43d9; fe09b: $canAddUrlToQueue = $this->canAddUrlToQueue($storeId); goto A3004; A3004: if (!(true === $canAddUrlToQueue)) { goto A4b9a; } goto B72ff; Eafa0: $url["\x70\141\x74\x68"] = ltrim($url["\x70\141\164\150"], "\x2f"); goto fe09b; B2e25: $storeId = (int) $url["\x73\x74\157\x72\x65\x5f\151\144"]; goto Eafa0; C4ea1: } goto a3c3c; A5170: } protected function canAddUrlToQueue($storeId) { goto E20ea; d61cf: return true; goto a5c6f; d3e3f: c03f7: goto aa568; aa568: $canAddUrlToQueue = $this->licenseCache[$storeId]; goto A3f7e; E20ea: if (isset($this->licenseCache[$storeId])) { goto c03f7; } goto E5395; Dbabf: goto B5046; goto d3e3f; a5c6f: Ce8b8: goto Dbabf; C7496: $host = $uri->getHost(); goto a8379; A09bd: $uri = new Uri($store->getBaseUrl()); goto C7496; ef1bb: $this->licenseCache[$storeId] = $hasLicense; goto b3f22; C05ec: return false; goto c76ed; b3f22: if (true === $hasLicense) { goto f1bd4; } goto C05ec; F339f: f1bd4: goto d61cf; E5395: $store = $this->storeManager->getStore($storeId); goto A09bd; c76ed: goto Ce8b8; goto F339f; D253d: B5046: goto d7799; a8379: $hasLicense = $this->license->hasLicense($host); goto ef1bb; A3f7e: return $canAddUrlToQueue; goto D253d; d7799: } }