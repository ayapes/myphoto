<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div>
        <header role="banner">
            <h1>
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
                </a>
                <span><?php bloginfo( 'description' ); ?></span>
            </h1>
        </header>
        <?php if ( ! is_front_page() ) : ?>
            <?php if ( function_exists( 'bcn_display' ) ): ?>
                <nav class="breadCrumb" typeof="BreadcrumbList" vocab="http://schema.org/" aria-label="現在のページ">
                    <?php bcn_display(); ?>
                </nav>
            <?php endif; ?>
        <?php endif; ?>
