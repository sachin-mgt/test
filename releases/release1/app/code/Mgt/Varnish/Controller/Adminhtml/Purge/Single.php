<?php
 namespace Mgt\Varnish\Controller\Adminhtml\Purge; class Single extends \Magento\Backend\App\Action { public function execute() { goto C1eba; E36f9: Ccb0a: goto D1415; B8e47: if ($url) { goto Ccb0a; } goto C9bf7; A576e: $resultRedirect = $this->resultRedirectFactory->create(); goto f7586; Ea2c9: D1e00: goto A576e; a16ee: $url = trim($request->getParam("\x75\x72\x6c")); goto B8e47; C1eba: $request = $this->getRequest(); goto a16ee; C9bf7: $this->messageManager->addErrorMessage("\123\x69\156\147\x6c\145\40\120\165\162\147\145\40\125\x72\x6c\40\x63\x61\x6e\156\157\164\x20\x62\145\40\145\155\160\164\171"); goto C57a0; D1415: try { goto a29f1; Ce5ca: $this->messageManager->addSuccessMessage(sprintf("\x55\122\114\40\42\x25\x73\x22\x20\150\x61\x73\40\142\x65\145\156\x20\160\165\x72\147\145\x64\40\146\x72\x6f\155\x20\x56\x61\162\x6e\x69\163\150\x20\103\141\143\150\x65", $url)); goto d6d11; f5a0b: $cachePurger->purgeUrlRequest($url); goto Ce5ca; a29f1: $cachePurger = $this->_objectManager->get("\x5c\115\141\147\145\x6e\x74\157\134\x43\141\143\x68\145\x49\x6e\166\141\x6c\x69\x64\x61\164\x65\x5c\x4d\157\144\145\x6c\x5c\120\x75\x72\147\x65\103\141\143\x68\145"); goto f5a0b; d6d11: } catch (\Exception $e) { $errorMessage = $e->getMessage(); $this->messageManager->addErrorMessage($errorMessage); } goto Ea2c9; f7586: return $resultRedirect->setPath("\x61\x64\155\x69\x6e\150\164\x6d\154\57\143\x61\x63\x68\145\x2f\151\x6e\144\145\170"); goto C9eba; C57a0: goto D1e00; goto E36f9; C9eba: } }