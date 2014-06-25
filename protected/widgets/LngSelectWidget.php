<?php 
class LngSelectWidget extends CWidget {
    
    public function run(){
        
        $currLanguage = Yii::app()->getLanguage();
        $objLng = Languages::model()->findByAttributes(array('prefix'=>$currLanguage));
        $cntLng = LanguagesContent::model()->findAllByAttributes(array('language'=>$objLng->id));
        
        $this->render('selector',array('cntLng' => $cntLng,'prefix'=>$currLanguage));
    }
} 
?>