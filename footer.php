<footer role="contentinfo">
<div>
<div>
<div>
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
<div>
<?php dynamic_sidebar( 'footer-widget-area' ); ?>
</div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
<div>
<?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
</div>
<?php endif; ?>
<?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) : ?>
<div>
<?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
</div>
<?php endif; ?>
</div>
</div>
</div>
<p>
<small>&copy; 2023 Yamaoka MyPhoto </small>
</p>
</footer>
</div>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
