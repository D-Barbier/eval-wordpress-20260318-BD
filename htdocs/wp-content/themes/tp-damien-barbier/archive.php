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
                        <td><?php the_title(); ?></td>
                        <td><?php echo get_the_date(); ?></td>
                        <td> <?php the_author_link(); ?></td>
                        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
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
