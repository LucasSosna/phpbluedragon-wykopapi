<?php

/**
 * @author Lukasz Sosna
 * @copyright 2019
 * @e-mail tree@interia.pl
 * @e-mail support@phpbluedragon.eu
 * @www http://phpbluedragon.eu
 */
 
echo '<ol class="breadcrumb">
<li><a href="'.base_url().'">'.$this->lang->line('a0981').'</a></li>
<li class="active">'.$Title.'</li>
</ol>';

echo '<h1>'.$Title.'</h1>';

echo $Content.'<br /><br />';
//echo date('n', strtotime("-2 months"));
echo $PageContent;

//$NullRecords = true;

        
                /*echo '<pre>';
                print_r($UserArray);
                echo '<pre>';
                
                echo '<pre>';
                print_r($ResultArray);
                echo '<pre>';
                */
                
?>