<?php  
/*
Template Name: Company Layout
*/
?>

<?php get_header(); ?>

    <div class="container content">
        
        <div class="main block">

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
            
                    <article class="page">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <p class="phone">Call Us: 1-800-555-555</p>
                        <?php the_content(); ?>
                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <?php echo apautop('Lo siento, no se han encontrado entradas') ?>
        
            <?php endif; ?>
            
        </div>

        <div class="side">
            
            <div class="block">
                
                <h3>Sidebar Head</h3>
                <p>
                    
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien nulla, porta vel felis aliquet, convallis malesuada dui. Proin eleifend odio sem, eget aliquam tellus commodo et. Integer dignissim metus in magna interdum tincidunt. Vestibulum ornare vulputate ante vitae consectetur. Etiam ultrices sodales finibus. Nunc maximus congue quam, sit amet feugiat ante tristique et. Nulla facilisi. Vivamus gravida orci nec diam porta, in venenatis mauris tempor.
                </p>
                <a class="button">More...</a>
                
            </div>

        </div>

    </div>

<?php get_footer(); ?>

