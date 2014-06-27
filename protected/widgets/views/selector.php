<form method="post">
    <select id="language" name="language">
        <?php foreach($cntLng as $row):?>
            <?php if($row->prefix == $prefix):?>
                <option selected="true" value="<?php echo Yii::app()->request->baseUrl?>/<?php echo $row->prefix?>/<?php echo $url?>"><?php echo $row->label?></option>
            <?php else:?>
                <option value="<?php echo Yii::app()->request->baseUrl?>/<?php echo $row->prefix?>/<?php echo $url?>"><?php echo $row->label?></option>
            <?php endif;?>
        <?php endforeach;?>
    </select>
</form>