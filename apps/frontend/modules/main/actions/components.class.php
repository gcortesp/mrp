<?php

/**
 * menus actions.
 *
 * @package    eMrp
 * @subpackage menus
 * @author     Scoppia
 */
class mainComponents extends sfComponents {

    function executeHeader(sfWebRequest $request) {
        $this->user = sfGuardUserTable::getInstance()->findOneById($this->getUser()->getGuardUser()->getId());
    }

    function executeSearch(sfWebRequest $request) {
        
    }

    function executeSidebar(sfWebRequest $request) {
        
    }

    function executeFooter(sfWebRequest $request) {
        
    }

}
