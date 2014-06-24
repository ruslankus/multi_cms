<?php
class TopMenuWidget extends CWidget {

    public function run(){
        
        $objNav = Navigation::model()->with(array('page_content'=> array('on'=>'page_content.language = 4')))->findAllByAttributes(array('type' => 1),array('order'=>'priority ASC'));
    
    
        $this->render('top_menu',array('objNav' => $objNav));
    }    
    
}
?>