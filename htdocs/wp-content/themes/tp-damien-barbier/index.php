<?php
get_header();
?>



<?php
if (have_posts()):
    while (have_posts()):
        the_post();
?>

        <article>
            <h2><?php the_title(); ?></h2>
            <aside>
                <?php the_date(); ?>
                <?php the_author_link(); ?>
                <?php the_category(); ?>
            </aside>
            
            <div>
                <?php the_excerpt(); ?>
            </div>

            <a href=""></a>
        </article>




<?php
    endwhile;
else:
    echo 'Aucun contenu';
endif;
?>







<?php
get_footer();
?>