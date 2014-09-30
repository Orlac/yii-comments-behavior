<?php
namespace comments;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommetForm
 *
 * @author antonio
 * 
 * @property \CActiveRecord $model Description
 */
class CommentForm extends \CFormModel implements ICommentForm{
    //put your code here
    
    private $model;
    
    public $text;

    public function rules() {
        return array(
            array('text', 'required')
        );
    }
    
    public function behaviors() {
        return array(
            'formBehavior'=>array(
                'class'=>'app.helpers.FormBehavior'
            )
        );
    }
    
    public function attributeLabels() {
        return array(
            'text'=>'Комментарий'
        );
    }
    
    public function setModel(\CActiveRecord $model){
        $this->model=$model;
    }
    
    public function setAttributes($values) {
        parent::setAttributes($values);
        $this->model->setAttributes($this->getAttributes());
        //\Yii::app()->getUser()->getId();
    }
    
    /**
     * @return type Description
     */
    public function getModel(){
        return $this->model;
    }
    public function validate(){
        if(parent::validate()){
            //$this->model->setAttributes($this->getAttributes());
            return $this->model->validate();
        }
    }
    public function save(){
        if($this->validate()){
            //$this->model->setAttributes($this->getAttributes());
            return $this->model->save();
        }
    }
    public function saveSure(){
        if(!$this->model->save()){
            throw new \CException(\CHtml::errorSummary($this->model));
        }
    }
    
}
