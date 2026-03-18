<?php
get_header();
?>

<section class="flex">


    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
    ?>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date de publication</th>
                        <th>Auteur</th>
                        <th>Lien</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php the_title(); ?>
                    </tr>
                    <tr>
                        <?php the_date(); ?>
                    </tr>
                    <tr>
                        <?php the_author_link(); ?>
                    </tr>
                    <tr>
                        <?php the_permalink(); ?>
                    </tr>
                </tbody>
            </table>
            
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