<html>
    <head>
        <title>Foo_Knews | Bizzare news for outer planet</title>
    </head>
            <body>
                <h1>Latest News</h1>
                    <ul class="grid">
                        <?php while(have_posts()): the_post(); ?>
                                        <li class="grid-item">
                                            <article class="card">
                                                <h1><?php the_title()?></h1>
                                                <?php the_post_thumbnail('thumbnail');?>
                                                    <?php the_excerpt()?>
                                                    <a href="<?php the_permalink()?>">Read More</a>                                           
                                            </article>
                                        </li>
                        <?php endwhile ?>
                    </ul>
            </body>
</html>
        
