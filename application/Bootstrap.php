<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initPlaceholders(){
        $this->_bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('HTML5');
        $view->headTitle('Zend Framework Quickstart Application')
             ->setSeparator(' :: ')
             ->append('Practic Turorial');
        $view->headLink()->prependStylesheet('/css/global.css');
        $view->headScript()->prependFile('/js/global.js');
        $view->headMeta()->appendHttpEquiv('content','text/plain');
        $view->headMeta()->setCharset('UTF-8');             
}

}

