<div class="content__header">
    <?php echo get_the_post_thumbnail(4); ?>
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <p><?php echo get_bloginfo('description'); ?></p>
</div>
<div class="content__body">
    <?php the_content(); ?>
</div>