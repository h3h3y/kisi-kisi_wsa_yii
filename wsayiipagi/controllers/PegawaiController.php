<?php
namespace app\controllers;
use yii\rest\ActiveController;
class PegawaiController extends ActiveController{
    public $modelClass = 'app\models\Pegawai';

    public function actions() 
    { 
        $actions = parent::actions();
        $actions['index']['dataFilter'] = [
            'class' => \yii\data\ActiveDataFilter::class,
            'searchModel' => $this->modelClass 
        ];
        return $actions;
    }

    
}


?>