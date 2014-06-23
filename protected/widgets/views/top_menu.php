<nav>
    <ul id="navigation">
        <?php foreach($objNav as $row):?>
        <li><a href="#"><?php echo $row->page_content->name; ?></a></li>
        <?php endforeach;?>
    </ul><!-- /navigation -->
</nav>