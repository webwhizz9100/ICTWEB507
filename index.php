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
        <div class="container">
            <div class="row">
 
                    <? while(have_posts()): the_post();?>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="https://via.placeholder.com/150

C/O https://placeholder.com/" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title()?></h5>
                                <p class="card-text"><?php the_excerpt()?></p>
                                <a href="#" class="btn btn-primary">Read Moer</a>
                            </div>
                        </div>
                    </div> 
                <? endwhile ?>
        </div>
</div>
    </body>
</html>


