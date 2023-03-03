<?php get_header(); ?>
<main class="main">
<div>
<section class="content">
<div class="item">
<?php
$neko_args       = array(
'post_type'      => 'post',
'posts_per_page' => 30,
);
$neko_news_query = new WP_Query($neko_args);
if ($neko_news_query->have_posts()) :
?>
<?php
while ($neko_news_query->have_posts()) :
$neko_news_query->the_post();
?>
<?php get_template_part('template-parts/loop', 'post'); ?>
<?php
endwhile;
wp_reset_postdata();
?>
<?php endif; ?>
</div>
<p class="home-News_More">
<a href="#" class="home-News_More_Link">more</a>
</p>
</section>
</div>
</main>
<?php get_footer(); ?>