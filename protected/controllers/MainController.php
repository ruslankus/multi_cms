<?php

class MainController extends Controller{
    
    public function actionIndex(){
        $currLanguage = Yii::app()->getLanguage();
        $objLng = Languages::model()->findByAttributes(array('prefix'=>$currLanguage));
        $objPage = PagesContent::model()->findByAttributes(array('language' => $objLng->id,'page' => 1));

        $this->render('page',array('objPage'=>$objPage));
        
    }
    
    
    public function actionError(){
        $currLanguage = Yii::app()->getLanguage();
        
        $objLng = Languages::model()->findByAttributes(array('prefix'=>$currLanguage));
        $objPage = PagesContent::model()->findByAttributes(array('language' => $objLng->id,'page' => 2));

        $this->render('page',array('objPage'=>$objPage));
    }
    
    public function actionGetPage($id=null){
         $id = (int)$id;
         //$this->d($id);           
         $currLanguage = Yii::app()->getLanguage();

         $objLng = Languages::model()->findByAttributes(array('prefix'=>$currLanguage));
         $objPage = PagesContent::model()->findByAttributes(array('language' => $objLng->id,'page' => $id));
         
         if(!empty($objPage)){
            $this->render('page',array('objPage'=>$objPage));   
         }else{
           
            $this->redirect('/'.$currLanguage.'/main/error');
         }
            
           
    }//GetPage
    
    public function actionCheck(){
        
    }
    
}
?>
