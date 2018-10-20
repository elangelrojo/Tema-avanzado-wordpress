
<?php get_header(); ?>

    <div class="container content">
        
        <div class="main block">

            <h1 class="page-header">
                
                <?php 

                    if (is_category()) {
                        # code...
                        single_cat_title();
                    } elseif (is_author()) {
                        the_post();
                        echo "Archives By Author: " .get_the_author();
                        rewind_posts();
                    }elseif (is_tag()) {
                        single_tag_title();
                    }elseif (is_day()) {
                        echo "Archives By day: " .get_the_date();
                    }elseif (is_month()) {
                        echo "Archives By Month: " .get_the_date('Y F');
                    }elseif (is_year()) {
                        echo "Archives By Year: " .get_the_date('Y');
                    }else {
                        echo "Archives";
                    }

                 ?>

            </h1>

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
            
                    <?php get_template_part('content', get_post_format()); ?>


                <?php endwhile; ?>

            <?php else : ?>

                <?php echo apautop('Lo siento, no se han encontrado entradas') ?>
        
            <?php endif; ?>
            
        </div>

        <div class="side">
            
            <?php if(is_active_sidebar('sidebar')): ?>
                <?php dynamic_sidebar('sidebar');  ?>
                
            <?php endif; ?>

        </div>

    </div>

<?php get_footer(); ?>

