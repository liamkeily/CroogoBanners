<?php
echo '<tr>';
echo '<td><label>Title</label><input type="text" value="'.$image['BannerImage']['title'].'" />';
echo '<label>Description</label><textarea>'.$image['BannerImage']['description'].'"</textarea>';
echo '<td>'.$this->Image->resize('/uploads/'.$image['BannerImage']['path'],200,200).'</td>';
echo '<td>';
echo $this->Html->link('<i class="icon-arrow-up"></i>',array(),array('class'=>'btn btn-default')).' ';
echo $this->Html->link('<i class="icon-arrow-down"></i>',array(),array('class'=>'btn btn-default')).' ';
echo $this->Html->link('<i class="icon-trash"></i>',array(),array('class'=>'btn btn-default')).' ';
echo '</td>';
echo '</tr>';
