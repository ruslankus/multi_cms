<form method="post">
    <select id="language" name="language">
        <?php foreach($cntLng as $row):?>
            <?php if($row->prefix == $prefix):?>
            <option selected="true" value="<?php echo $row->prefix; ?>"><?php echo $row->label;?></option>
            <?php else:?>
            <option  value="<?php echo $row->prefix; ?>"><?php echo $row->label;?></option>
            <?php endif;?>
        <?php endforeach;?>
        
    </select>
</form>