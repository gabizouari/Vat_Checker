<?php
class Lybe_Euvatchecker_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("vatchecker"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("vatchecker", array(
                "label" => $this->__("vatchecker"),
                "title" => $this->__("vatchecker")
		   ));

      $this->renderLayout(); 
	  
    }
}