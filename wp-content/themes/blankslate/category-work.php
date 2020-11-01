<?php get_header(); ?>
<section id="content" role="main">


<!-- <h6 class="entry-title"><?php single_cat_title(); ?></h6>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?> -->


<div class="meta">see case studies from our various design and marketing clients.</div>
<!--more-->





<div class="project_title brand_light_purple">creative juice for business.</div>

<div class="h2_centered project_subtitle brand_white">case studies from various design and marketing clients</div>










<img class="center_imgs feature_img" src="http://dmadsdesign-dev.com/_site/wp-content/themes/blankslate/imgs/pages/work/creative_juice_for_business_fade.png"/>


<img class="center_imgs title_arrows" src="http://dmadsdesign-dev.com/_site/wp-content/themes/blankslate/imgs/universal/down_arrow.png"/>


<div id="landing_projects">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<a href="<?php the_permalink () ?>">
<?php get_template_part( 'entry' ); ?>
</a>


<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
</section>
<?php get_footer(); ?>