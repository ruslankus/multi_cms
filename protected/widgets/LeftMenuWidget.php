<?php
class LeftMenuWidget extends CWidget {

    public function run(){
        $currLanguage = Yii::app()->getLanguage();
        $objLng = Languages::model()->findByAttributes(array('prefix'=>$currLanguage));
        $objNav = Navigation::model()->with(array('page_content'=> array('on'=>'page_content.language = '.$objLng->id)))->findAllByAttributes(array('type' => 2),array('order'=>'priority ASC'));
    
         $this->render('left_menu',array('objNav' => $objNav,'prefix'=>$currLanguage));
    }    
    
}
?>