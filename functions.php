<?php 
    //Theme support
    
    function adv_theme_support (){

        //Featured Image Suport

        add_theme_support('post-thumbnails');

        register_nav_menus(array (
            'primary' => __('Menu Priamrio'),
            'footer' => __('Menu Footer')
        ));

        // Post Format Support. Añadimos distintos tipos de formatos para post que luego saldrá en las formatos de post

        add_theme_support('post-formats', array('aside', 'gallery', 'link'));
    }

    add_action('after_setup_theme', 'adv_theme_support');

    // Widget locations. Activamos la localicación de un widget en el sidbar

    function init_widgets ($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id'   => 'sidebar',
            'before_widget' => '<div class="block side-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        register_sidebar(array(
            'name' => 'Showcase',
            'id'   => 'showcase',
            'before_widget' => '<div class="showcase">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        register_sidebar(array(
            'name' => 'Box 1',
            'id'   => 'box1',
            'before_widget' => '<div class="box box1">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        register_sidebar(array(
            'name' => 'Box 2',
            'id'   => 'box2',
            'before_widget' => '<div class="box box2">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));

        register_sidebar(array(
            'name' => 'Box 3',
            'id'   => 'box3',
            'before_widget' => '<div class="box box3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        ));
    }
   
   // Inicializamos el widget donde el primer parámetro es el hook y el segundo la función de registrar el sidebar
   add_action('widgets_init', 'init_widgets');

    //Escerpt length

    function adv_set_excerpt_length(){
        return 25;
    }

    add_filter('excerpt_length', 'adv_set_excerpt_length');


    //Creamos la función get_top_parent para obtener los hijos de una pagina

    function get_top_parent(){
        global $post;
        if ($post -> post_parent){
            $ancestors = get_post_ancestors($post->ID);
            return $ancestors [0];
        }
        return $post -> ID;
    }


    function page_is_parent(){
        global $post;

        $pages = get_pages('child_of='.$post->ID);
        return count($pages);
    }


