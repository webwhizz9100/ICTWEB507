<?php
function listWrapper($content){
    echo '<li>' . $content . '.</li>';
}
?>
<h1>My List of Animals</h1>
<ul>
<? foreach($animals as $animal) : ?>
    <li><?= $animal ?></li>
<? endforeach ?>
</ul>



