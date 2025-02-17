<?php



    // Post Type »Filme«

    function wpv_cpt_filme() {

        $labels = array(
            'menu_name'             => 'Filme',
            'name_admin_bar'        => 'Filme',
            'all_items'             => 'Alle Filme',
            'add_new'               => 'Neuen Film hinzufügen',
          
        );
        $args = array(
            'label'                 => '',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields', ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 20,
            'menu_icon'             => 'dashicons-format-video',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'filme', $args );

    }
    add_action( 'init', 'wpv_cpt_filme', 0 );





    // Register Custom Taxonomy
    function wpv_ct_genre() {

        $labels = array(
            'menu_name'                  => 'Genre',
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'genre', array( 'filme' ), $args );

    }
    add_action( 'init', 'wpv_ct_genre', 0 );




 // Register Custom Taxonomy
    function wpv_ct_sprachen() {

        $labels = array(
            'menu_name'                  => 'Sprachen',
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'sprachen', array( 'filme' ), $args );

    }
    add_action( 'init', 'wpv_ct_sprachen', 0 );



    // Custom Header

    $defaults = array(
        'width'                  => 1100,
        'height'                 => 200,
        'flex-height'            => true,
        'flex-width'             => true,
    );

    add_theme_support( 'custom-header', $defaults );


    // Custom Backgrounds

    $defaults = array(
        'default-color'  => '#122F00',
    );

    add_theme_support( 'custom-background' , $defaults );


    // Beitragsbilder
    // 

    add_theme_support( 'post-thumbnails' );
    add_image_size( 'filme', 210, 294 );

if ( ! function_exists( 'theme_slug_setup' ) ) :
    /**
     * Sets up theme and registers support for various WordPress features.
     */
    
    /**
     * Sets up theme and registers support for various WordPress features.
     */
    function theme_slug_setup() {
        // Other Theme Setup code...

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Set detfault Post Thumbnail size.
        set_post_thumbnail_size( 300, 200, true );

        // Add custom image size for single posts.
        add_image_size( 'theme-slug-single-post', 800, 9999 );
    }
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );

    // Navi

    add_action( 'after_setup_theme', 'wpv_register_nav' );

    function wpv_register_nav() {
      register_nav_menu('nav_main','Navigation links am Desktop');
      register_nav_menu('nav_social','Navigation links im Footer am Desktop');
      register_nav_menu('nav_secondary','Navigation rechts im Footer am Desktop');
    }

/* automatisch ein Suchfeld zum wp-nav-menu hinzufügen. */
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {

        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();

        $items .= '<li>' . $searchform . '</li>';

    return $items;
}

    // Beitragsformate

    add_theme_support( 'post-formats', array( 'video', 'gallery' ) );



    // Sidebars / Widgets

    add_action( 'widgets_init', 'wpv_register_sidebar' );

    function wpv_register_sidebar() {
        register_sidebar( 
            array(
                'name' => 'Sidebar 1',
                'id' => 'sidebar-1',
                'description' => 'Rechts vom Inhalt, bzw. unter dem Inhalt',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="widgettitle">',
                'after_title'   => '</h5>',
                )
            );
    }


    // Kommentare

    function wpv_comments( $comment, $args, $depth ) { $GLOBALS['comment'] = $comment; ?>

    <li class="single-comment">
     <?php echo get_avatar( $comment, $size='64' ); ?>
     <p><?php echo get_comment_author_link(); ?></p>
     <p><?php echo get_comment_date("d.m.Y"); ?>, <?php echo get_comment_time(); ?> Uhr</p>
     <?php comment_text(); ?>
        
        <div class="reply">
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
         </div>
       
    <?php }


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}
function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}    

// 
// // Styles and Scripts

    add_action( 'wp_enqueue_scripts', 'wpv_register_styles' );

    function wpv_register_styles() {
  
		
        wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
        wp_enqueue_style( 'normalize' );
        
        wp_register_style( 'style', get_stylesheet_uri());
        wp_enqueue_style( 'style' );
        
        wp_register_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
        wp_enqueue_style( 'slick' );
        
        wp_register_style( 'lightbox', get_template_directory_uri() . '/css/lightbox.css' );
        wp_enqueue_style( 'lightbox' );
    }


    function wpv_register_scripts() {
     wp_register_script('slick', get_template_directory_uri() . '/js/slick.js', '', null, true);
     wp_enqueue_script('slick');
        
     wp_register_script('lightbox', get_template_directory_uri() . '/js/lightbox.js', '', null, true);
     wp_enqueue_script('lightbox');
     }

    add_action('wp_enqueue_scripts', 'wpv_register_scripts');




    // HTML5

    $args = array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    );
    add_theme_support( 'html5', $args );

    // Content Width

    if ( ! isset( $content_width ) ) {
        $content_width = 507;
    }


    // Add Shortcode
    function wpv_shortcode1( $atts ) {

        // Attributes
        extract( shortcode_atts(
            array(
                'htmltag' => 'h3',
            ), $atts )
        );

       
        return '<' . $htmltag . '>In diesem Film kostet Popcorn nur 2 Euro!</' . $htmltag . '>';
    }
    add_shortcode( 'popcorn', 'wpv_shortcode1' );








    // Add Shortcode
    function wpv_shortcode2( $atts, $content = null ) {
       
        return '<div class="infobox"><h3>Info:</h3>'.$content.'</div>';
    }

    add_shortcode( 'infobox', 'wpv_shortcode2' );






    // Customizer
    require_once(get_template_directory() . '/customizer.php');

    

    // Custom TinyMCE

    // Callback function to insert 'styleselect' into the $buttons array
    function my_mce_buttons_2( $buttons ) {
        array_unshift( $buttons, 'styleselect' );
        return $buttons;
    }
    // Register our callback to the appropriate filter
    add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );


    // Callback function to filter the MCE settings
    function my_mce_before_init_insert_formats( $init_array ) {  
        // Define the style_formats array
        $style_formats = array(  
            // Each array child is a format with it's own settings
            array(  
                'title' => 'Button',  
                'classes' => 'btn',
                'selector' => 'a'
            ), 
        );  
        // Insert the array, JSON ENCODED, into 'style_formats'
        $init_array['style_formats'] = json_encode( $style_formats );  

        return $init_array;  

    } 
    // Attach callback to 'tiny_mce_before_init' 
    add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  







    function wpv_add_editor_styles() {
        add_editor_style( 'style-editor.css' );
    }

    add_action( 'admin_init', 'wpv_add_editor_styles' );






    /**
     * Add a widget to the dashboard.
     *
     * This function is hooked into the 'wp_dashboard_setup' action below.
     */
    function wpv_add_dashboard_widget() {

        wp_add_dashboard_widget(
                     'example_dashboard_widget',         // Widget slug.
                     'Dokumentation für dieses Theme',         // Title.
                     'wpv_dashboard_widget_content' // Display function.
            );	
    }
    add_action( 'wp_dashboard_setup', 'wpv_add_dashboard_widget' );



    /**
     * Create the function to output the contents of our Dashboard Widget.
     */
    function wpv_dashboard_widget_content() {

        // Display whatever it is you want to show.
        echo '<p>Es können folgende Shortcodes verwendet werden:</p><ul><li>[infobox]</li><li>[popcorn htmltag=""]</li></ul>';
    }



    function wpv_login_styles() { ?>
        
        <style>
        
            body.login {
                background-color: #122F00;
                background-image: radial-gradient(circle, white, transparent);
                background-size: cover;
                background-attachment: fixed;
                background-blend-mode: soft-light;
            }
            
            body.login h1 {
                -webkit-filter: grayscale(1) brightness(3);
                filter: grayscale(1) brightness(3);
            }
        
        </style>
        
    <?php } 

    add_action('login_enqueue_scripts','wpv_login_styles');


    
?>