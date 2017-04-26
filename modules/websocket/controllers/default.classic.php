<?php
/**
* @package   websocket
* @subpackage websocket
* @author    your name
* @copyright 2011 your name
* @link      http://www.yourwebsite.undefined
* @license    All rights reserved
*/

class defaultCtrl extends jController {
    /**
    *
    */
    function index() {
        $rep = $this->getResponse('basichtml');

$rep->htmlFile = 'D:\Victor\wamp64\www\jelix\websocket\www\main\main.php';
//Path leHTML File hayav lehiyot Male kolel Konan        
	
        return $rep;
    }
}
