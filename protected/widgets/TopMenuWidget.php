<?php
class TopMenuWidget extends CWidget {

    public function run(){
        
        $currLng = Yii::app()->getLanguage();        
        $objLanguage = Languages::model()->findByAttributes(array('prefix'=>$currLng));
        
        $objNav = Navigation::model()->with(array('page_content'=> array('on'=>'page_content.language = '.$objLanguage->id)))->findAllByAttributes(array('type' => 1),array('order'=>'priority ASC'));
    
    
        $this->render('top_menu',array('objNav' => $objNav));
    }    
    
}
?>