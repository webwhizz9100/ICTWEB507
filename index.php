<!-- <?php
function listWrapper($content){
    echo '<li>' . $content . '.</li>';
}
?> -->
<html>
    <head>
        <title>foo_knews</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>" media="screen">
    </head>
    <body>
        <h1>Posts</h1>
        <ul class="row">
            <? while(have_posts()): the_post();?>
                <li class="column">
                    <div class="card">
                            <h2 class="card_title"><? the_title()?></h2>
                            <div class="card_content"><? the_content()?></div>
                            <div class="card_img"><? the_post_thumbnail();?></div>
                    </div>
                </li>
            <? endwhile ?>
        </ul>
    </body>
</html>


