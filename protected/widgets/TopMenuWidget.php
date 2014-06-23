<?php
class TopMenuWidget extends CWidget {

    public function run(){
        
        $objNav = Navigation::model()->with(array('page_content.name',array('language' => 2)))->findAllByAttributes(array('type' => 1),array('order'=>'priority ASC'));
        
       
               
        $this->d($objNav);
               
        $this->render('top_menu',array('objNav' => $objNav));
    }    
    
}
?>