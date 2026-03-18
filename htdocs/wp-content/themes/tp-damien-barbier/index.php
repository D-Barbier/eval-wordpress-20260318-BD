<?php
get_header();
?>

<section class="flex">


    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>

            <article>
                
                <h2><a href="<?php the_permalink() ?>">
                    <?php the_title();
                    ?>
                </a></h2>
                <?php the_post_thumbnail('thumbnail'); ?>
                <aside>
                    <?php the_date(); ?>
                    <?php the_author_link(); ?>
                    <?php the_category(); ?>
                </aside>

                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>


            </article>



    <?php
        endwhile;
    else:
        echo 'Aucun contenu';
    endif;
    ?>

</section>

<aside>
    <?php
    dynamic_sidebar('main-sidebar');
    ?>
</aside>




<?php
get_footer();
?>