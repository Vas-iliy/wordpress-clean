<?php
get_header();
?>
    <div id="fh5co-content">
        <div class="container">
            <div class="row">
                <?while (have_posts()): the_post();?>
                    <? get_template_part('template-parts/content', 'page'); ?>
                <?endwhile;?>

            </div>
        </div>
    </div>

<?php
get_footer();

