<?php

/**
 * @author Lukasz Sosna
 * @copyright 2019
 * @e-mail tree@interia.pl
 * @e-mail support@phpbluedragon.eu
 * @www http://phpbluedragon.eu
 */
 
echo '<ol class="breadcrumb">
<li><a href="'.base_url().'">'.$this->lang->line('a0958').'</a></li>
<li class="active">'.$this->lang->line('a1069').'</li>
</ol>';

echo '<h1>'.$Title.'</h1>';

echo $Content;

?>