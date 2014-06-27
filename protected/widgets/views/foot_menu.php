<?php $count = count($objNav);?>
<nav>
    <p>
        <?php foreach($objNav as $row):?>
            <?php if($objNav[$count-1] == $row):?>
               
                <?php echo CHtml::link($row->page_content->name,'/'.$prefix.'/main/getpage/'.$row->page_content->page);?>
            <?php else:?>
                <?php echo CHtml::link($row->page_content->name,'/'.$prefix.'/main/getpage/'.$row->page_content->page);?> ::
            <?php endif;?>
        <?php endforeach;?>
         
    </p>
</nav>