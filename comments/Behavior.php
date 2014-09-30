<?php
namespace comments;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Behavior
 *
 * @author antonio
 */
class Behavior extends \CActiveRecordBehavior{
    //put your code here
    
    public $isCommentable='getIsCommentable';
    public $commentModel=array(
        'class'=>'\comments\Model'
    );
    public $commentList=array(
        'class'=>'\comments\CommentList'
    );
    public $commentForm=array(
        'class'=>'\comments\CommentForm'
    );
    
    /**
     * @param \CActiveRecord $owner Description
     */
    public function attach( $owner) {
        if($owner->{$this->isCommentable}() ){
            $this->commentModel=  \Yii::createComponent($this->commentModel);
            $this->commentModel->setCommentedModel($owner);
            
            $this->commentList=  \Yii::createComponent($this->commentList);
            $this->commentList->setModel($this->commentModel);
            
            $this->commentForm=  \Yii::createComponent($this->commentForm);
            $this->commentForm->setModel($this->commentModel);
            
        }
    }
}
