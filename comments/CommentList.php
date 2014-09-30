<?php
namespace comments;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
\Yii::import('comments\ICommentList');

/**
 * Description of List
 *
 * @author antonio
 * 
 * @property \CActiveRecord $model Description
 */
class CommentList extends \CFormModel implements ICommentList{
    //put your code here
    
    private $model;


    /**
     * @return \CActiveDataProvider Description 
     */
    public function search(){
        return $this->model->search();
    }
    
    public function setAttributes($values,$safeOnly=true){
        $this->model->setAttributes($values, $safeOnly);
    }
    
    public function setModel(\CActiveRecord $model){
        $model->setScenario('search');
        $this->model=$model;
    }
    
    public function behaviors() {
        return array(
            'formBehavior'=>array(
                'class'=>'app.helpers.FormBehavior'
            )
        );
    }
    
    public function attributeNames(){
        return array();
    }
    
}
