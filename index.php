<?php
function listWrapper($content){
    echo '<li>' . $content . '.</li>';
}
?>
<h1>Posts</h1>
<ul>
    <? while(have_posts()): the_post();?>
        <li><? the_title()?></li>
            <? the_content()?>
    <? endwhile ?>
</ul>



