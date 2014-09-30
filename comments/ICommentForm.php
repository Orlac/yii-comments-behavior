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
interface ICommentForm {
    //put your code here
    public function setAttributes($data);
    
    public function getModel();
    public function validate();
    public function save();
    public function saveSure();
}
