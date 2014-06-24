<?php 
class LngSelectWidget extends CWidget {
    
    public function run(){
        
        $currLng = Yii::app()->getLanguage();
        
        $objLanguage = Languages::model()->findByAttributes(array('prefix'=>$currLng));        
        $cntLang = LanguagesContent::model()->findAllByAttributes(array('language' => $objLanguage->id));        
        $this->render('selector',array('cntLng' => $cntLang,'prefix'=>$currLng));
    }
} 
?>