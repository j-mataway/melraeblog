	<article class="post featured">
		<header class="major">
			<span class="date"><?php echo get_the_date(); ?></span>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>" class="image main"><img src="<?php the_post_thumbnail_url('medium'); ?>" alt="" /></a>
			<p><?php the_excerpt(); ?></p>
		</header>
		<ul class="actions special">
			<li><a href="<?php the_permalink(); ?>" class="button large">Full Post</a></li>
		</ul>
	</article>
</section>

