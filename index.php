<?php
function listWrapper($content){
    echo '<li>' . $content . '.</li>';
}
?>
<h1>Posts</h1>
<ul>
<? foreach($posts as $post) : ?>
    <li><?= $post-> post_title ?></li>
<? endforeach ?>
</ul>



