<!-- Plantilla que genera el contenido de la presentación de los posts
- El if primero verifica si la petición es una página de search o de archive -->

<?php if(is_search() || is_archive()) : ?>

    <div class="archive-post">
                        
        <h4>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>

        <p>
            Publicado el: <?php the_time('Y j, F g:i a'); ?>
        </p>

    </div>

<!-- - Este else… introduce el contenido normal de un listado de post en el caso que la petición sea de listar post -->

<?php else : ?>

    <article class="post">
        <h2>

            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>      

        </h2>
        <p class="meta">
            Publicado a las
            <?php the_time('Y F j g:i a'); ?>
            por
            <a href="<?php echo get_author_posts_url (get_the_author_meta('ID')) ?>">
            <?php the_author(); ?>
            </a> |
            Publicado en
            <?php 
                $categories = get_the_category();
                $separator = ", ";
                $output = '';

                if ($categories) {
                    foreach ($categories as $category) {
                        $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'. $separator;
                    }
                }

                echo trim($output, $separator);
            ?>
        </p>
        
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>
        
<!-- - Este eif… introduce el contenido si el single, sino pondrá el excerpt para hacer un listado de post -->

        <?php if(is_single()) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <?php the_excerpt(); ?>
            <a class="button" href="<?php the_permalink(); ?>">Read More</a>
        <?php endif; ?>


        
    </article>

<?php endif; ?>


