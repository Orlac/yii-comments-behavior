<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $this comments\widgets\Admin */
$this->widget('GridView', array(
	'dataProvider' => $this->dp,
	'columns' => array(
        'id',
        array(
            'header'=>'Клиент',
            'value'=>function(\comments\ICommentModel $data){
                return $data->getUserName();
            }
        ),
        'text',
		array(
			'class' => 'CButtonColumn',
			'template' => '{delete}',
            'deleteButtonUrl'=>function(\comments\ICommentModel $data){
                return $data->getDeleteUrl();
            }			
		),
	),
));