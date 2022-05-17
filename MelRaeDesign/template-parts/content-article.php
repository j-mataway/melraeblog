        <span class="date"><?php echo get_the_date(); ?></span>
            <?php
             the_tags('<span><i class="fa fa-tag"></i>','</span> <span><i class="fa fa-tag"></i>','</span><br>');
            ?>   
        <span class="comment"><a href="#comments"><i class="fa fa-comment"></i><?php comments_number(); ?></a></span>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </header>
        <div class="image main"><img src="images/pic01.jpg" alt="" /></div>			
</section>
<?php
comments_template();
?>

