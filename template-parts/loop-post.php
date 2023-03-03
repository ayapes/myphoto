<div class="box" data-bs-toggle="modal" data-bs-target="#modal<?php the_ID(); ?>">
<article id="post-<?php the_ID(); ?>">
<!-- <a href="<?php the_permalink(); ?>"> -->
<p class="content_thumb">
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail( 'archive_thumbnail' ); ?>
<?php else : ?>
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dummy-image.png" load="lazy">
<?php endif; ?>
</p>
<h2 class="content_title"><?php the_title(); ?></h2>
<ul class="content_catlist">
<?php
$neko_category_list = get_the_category();
if ( $neko_category_list ) :
?>
<li>
<?php echo esc_html( $neko_category_list[0]->name ); ?>/
</li>
<li>
<?php echo esc_html( $neko_category_list[1]->name ); ?>
</li>
<?php endif; ?>
</ul>
<p>
<?php echo get_the_date('Y/n/j G:i'); ?>
</p>

</a>

<!-- Modal -->
<div class="modal fade" id="modal<?php the_ID(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<?php if ( has_post_thumbnail() ) : ?>
                        <div class="content-EyeCatch">
                            <?php the_post_thumbnail( 'page_eyecatch' ); ?>
                        </div>
                        <?php endif; ?>
                        <?php the_content(); ?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</article>

</div>
