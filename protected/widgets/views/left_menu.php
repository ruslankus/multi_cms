<nav>
    <ul id="navigation-left">
        <?php foreach($objNav as $row):?>
        <li><?php echo CHtml::link($row->page_content->name,'/'.$prefix.'/main/getpage/'.$row->page_content->page);?></a></li>
        <?php endforeach;?>        
    </ul><!-- /navigation-left --> 
</nav>