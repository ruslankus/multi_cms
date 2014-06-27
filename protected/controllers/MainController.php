<?php

class MainController extends Controller{
    
    public function actionIndex(){
        $this->render('index');
    }
    
    
    public function actionError(){
        $this->render('error');
    }
    
    public function actionGetPage($id){
         $currLanguage = Yii::app()->getLanguage();
         $objLng = Languages::model()->findByAttributes(array('prefix'=>$currLanguage));
         $objPage = PagesContent::model()->findByAttributes(array('language' => $objLng->id,'page' => $id));
       
         $this->render('page',array('objPage'=>$objPage));   
    }//GetPage
    
}
?>
