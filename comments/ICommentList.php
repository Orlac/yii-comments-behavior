<?php
namespace comments;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ICommentList
 *
 * @author antonio
 */
interface ICommentList {
    //put your code here
    
    /**
     * @return \CActiveDataProvider Description 
     */
    public function search();
    
    public function setModel( \CActiveRecord $model);
    
    
    
}
