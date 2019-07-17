<!-- <?php
function listWrapper($content){
    echo '<li>' . $content . '.</li>';
}
?> -->
<html>
    <head>
        <title>foo_knews</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"
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


