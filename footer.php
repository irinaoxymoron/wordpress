</div>

<?php if ( is_front_page() && is_home() ) : ?>
<div class="filter__items">
    <button class="filter__label active">Все</button>

    <?php
    $tags = get_tags();
    if ($tags) {
        foreach ($tags as $tag) {
            echo "<button class=\"filter__label\" data-filter=\"." . transliterate($tag->name) . "\">$tag->name</button>";
        }
    }
    ?>
</div>
<?php endif ?>

<div class="loader">
    <div class="loader_inner"></div>
</div>

<!-- scripts -->
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/respond/respond.min.js"></script>
<![endif]-->

<?php wp_footer(); ?>

</body>
</html>