
<div class="foo-banner position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center" style="background-image: url(<?php the_post_thumbnail_url() ?>)">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal"><?php the_title() ?></h1>
        <p class="lead font-weight-normal"><?php the_excerpt() ?></p>
        <a class="btn btn-outline-secondary" href="#content">Read More</a>
    </div>
</div>