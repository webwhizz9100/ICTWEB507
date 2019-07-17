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
                        <article class="card">
                            <small><?php echo get_the_date()?></small>
                                <h2><? the_title()?></h2>
                                <?php the_post_thumbnail('thumbnail');?>
                                <?php the_excerpt() ?> 
                                <a href="<?php the_permalink() ?>" >Read More</a>
                        </article>
                    </li>
                <? endwhile ?>
            </ul>
    </body>
</html>


