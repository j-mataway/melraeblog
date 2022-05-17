<?php
    get_header();
?>
	<!-- Main -->
	<div id="main">
		<!-- Post -->
		<section class="post">
			<header class="major">
				<?php 
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            get_template_part('template-parts/content', 'page');
                        }
                    }
                ?>
            </header> 
<?php
    get_footer();
?>