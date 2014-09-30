<?php
namespace comments\widgets;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author antonio
 * 
 * @property \CActiveDataProvider $dp Description
 */
class Admin extends \CWidget{
    //put your code here
    
    public $dp;
    
    //public $updateUrl;
    //public $deleteUrl;


    public function run() {
        $this->render('admin');
    }
}
