<?php 
class LngSelectWidget extends CWidget {
    
    public function run(){
        
        $url = Yii::app()->request->url;
        $url = explode('/',$url);
        unset($url[0],$url[1]);
        $url = implode('/',$url);
              
        $currLanguage = Yii::app()->getLanguage();
        $objLng = Languages::model()->findByAttributes(array('prefix'=>$currLanguage));
        $cntLng = LanguagesContent::model()->findAllByAttributes(array('language'=>$objLng->id));
        
        $this->render('selector',array('cntLng' => $cntLng,'prefix'=>$currLanguage,'url'=>$url));
    }
} 
?>