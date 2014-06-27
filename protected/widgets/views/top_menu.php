<nav>
    <ul id="navigation">
        <?php foreach($objNav as $row):?>
            <li><?php echo CHtml::link($row->page_content->name,'/'.$prefix.'/main/getpage/'.$row->page_content->page);?></li>
        <?php endforeach;?>
    </ul><!-- /navigation -->
</nav>