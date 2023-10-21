<?php
/**
 * Created by Sublime Text 2.
 * User: thanhhiep992
 * Date: 12/08/15
 * Time: 10:20 AM
 */
if(!function_exists('th_set_theme_config')){
    function th_set_theme_config(){
        global $th_dir,$th_config,$redux_option;
        /**************************************** BEGIN ****************************************/
        $th_dir = get_template_directory_uri();
        $redux_option = true;
        $th_config = array();
        $th_config['dir'] = $th_dir;
        $th_config['css_url'] = $th_dir . '/assets/css/';
        $th_config['js_url'] = $th_dir . '/assets/js/';
        $th_config['bootstrap_ver'] = '3';
        $th_config['nav_menu'] = array(
            'primary' => esc_html__( 'Primary Navigation', 'coffeehouse' ),
        );
        $th_config['mega_menu'] = '1';
        $th_config['sidebars']=array(
            array(
                'name'              => esc_html__( 'Blog Sidebar', 'coffeehouse' ),
                'id'                => 'blog-sidebar',
                'description'       => esc_html__( 'Widgets in this area will be shown on all blog page.', 'coffeehouse'),
                'before_title'      => '<h3 class="widget-title">',
                'after_title'       => '</h3>',
                'before_widget'     => '<div id="%1$s" class="sidebar-widget widget %2$s">',
                'after_widget'      => '</div>',
            )
        );
        if(class_exists("woocommerce")){
            $th_config['sidebars'][] = array(
                'name'              => esc_html__( 'WooCommerce Sidebar', 'coffeehouse' ),
                'id'                => 'woocommerce-sidebar',
                'description'       => esc_html__( 'Widgets in this area will be shown on all woocommerce page.', 'coffeehouse'),
                'before_title'      => '<h3 class="widget-title">',
                'after_title'       => '</h3>',
                'before_widget'     => '<div id="%1$s" class="sidebar-widget widget %2$s">',
                'after_widget'      => '</div>',
            );
        }
        $th_config['import_config'] = array(
                'demo_url'                  => 'coffeehouse.ththeme.net',
                'homepage_default'          => 'Coffee House 1',
                'blogpage_default'          => 'Blog',
                'menu_replace'              => 'Main Menu',
                'menu_locations'            => array("Main Menu" => "primary"),
                'set_woocommerce_page'      => 1
            );
        $th_config['import_theme_option'] = '{"last_tab":"1","th_header_page":"187","th_footer_page":"1685","th_404_page":"","th_404_page_style":"","th_show_breadrumb":"","th_bg_breadcrumb":{"background-color":"","background-repeat":"","background-size":"","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"breadcrumb_text":{"font-family":"","font-options":"","google":"1","font-weight":"","font-style":"","subsets":"","text-align":"","font-size":"","line-height":"","color":""},"breadcrumb_text_hover":{"font-family":"","font-options":"","google":"1","font-weight":"","font-style":"","subsets":"","text-align":"","font-size":"","line-height":"","color":""},"show_preload":"","preload_bg":{"color":"","alpha":"1","rgba":""},"preload_style":"","show_scroll_top":"","show_wishlist_notification":"","show_too_panel":"","remove_style_content":"","tool_panel_page":"","body_bg":{"color":"","alpha":"1","rgba":""},"main_color":{"color":"","alpha":"1","rgba":""},"main_color2":{"color":"","alpha":"1","rgba":""},"th_page_style":"","container_width":"","before_append_post":"193","after_append_post":"","th_sidebar_position_blog":"right","th_sidebar_blog":"","blog_default_style":"list","blog_style":"","blog_title":"1","blog_number_filter":"1","blog_number_filter_list":[{"title":" ","number":" "}],"blog_type_filter":"1","post_list_size":"","post_list_item_style":"style2","post_grid_column":"3","post_grid_size":"","post_grid_excerpt":"80","post_grid_item_style":"","post_grid_type":"","th_sidebar_position_post":"right","th_sidebar_post":"blog-sidebar","post_single_thumbnail":"1","post_single_size":"","post_single_meta":"1","post_single_author":"1","post_single_navigation":"1","post_single_related":"1","post_single_related_title":"","post_single_related_number":"","post_single_related_item":"","post_single_related_item_style":"","th_sidebar_position_page":"no","th_sidebar_page":"","th_sidebar_position_page_archive":"right","th_sidebar_page_archive":"blog-sidebar","th_sidebar_position_page_search":"","th_sidebar_page_search":"","th_add_sidebar":[{"title":" ","widget_title_heading":"h3"}],"th_custom_typography":[{"typo_area":"body","typo_heading":"","typography_style":{"font-family":"","font-options":"","google":"1","font-weight":"","font-style":"","subsets":"","text-align":"","font-size":"","line-height":"","color":""}}],"th_sidebar_position_woo":"right","th_sidebar_woo":"woocommerce-sidebar","shop_default_style":"grid","shop_gap_product":"","woo_shop_number":"12","sv_set_time_woo":"","shop_style":"","shop_ajax":"","shop_thumb_animation":"","shop_number_filter":"1","shop_number_filter_list":[{"number":" "}],"shop_type_filter":"1","shop_list_size":"","shop_list_item_style":"","shop_grid_column":"3","shop_grid_size":"","shop_grid_item_style":"style2","shop_grid_type":"","cart_page_style":"style2","checkout_page_style":"style2","th_header_page_woo":"","th_footer_page_woo":"","before_append_woo":"185","after_append_woo":"","product_single_style":"","sv_sidebar_position_woo_single":"no","sv_sidebar_woo_single":"","product_image_zoom":"","product_tab_detail":"","show_excerpt":"1","show_latest":"0","show_upsell":"0","show_related":"1","show_single_number":"6","show_single_size":"","show_single_itemres":"","show_single_item_style":"style2","before_append_woo_single":"185","before_append_tab":"","after_append_tab":"","after_append_woo_single":"","redux-backup":1}';
        $th_config['import_widget'] = '{"blog-sidebar":{"search-2":{"title":""},"block-4":{"content":"<!-- wp:heading {\"level\":3,\"className\":\"block-widget-title\"} -->\n<h3 class=\"block-widget-title\">Categories<\/h3>\n<!-- \/wp:heading -->"},"block-7":{"content":"<!-- wp:categories \/-->"},"woocommerce_products-2":{"title":"New Products","number":5,"show":"","orderby":"date","order":"desc","hide_free":0,"show_hidden":0},"block-8":{"content":"<!-- wp:heading {\"level\":3,\"className\":\"block-widget-title\"} -->\n<h3 class=\"block-widget-title\">Tag Clouds<\/h3>\n<!-- \/wp:heading -->"},"block-9":{"content":"<!-- wp:tag-cloud \/-->"}},"woocommerce-sidebar":{"woocommerce_product_search-1":{"title":""},"woocommerce_product_categories-1":{"title":"Categories","orderby":"name","dropdown":0,"count":0,"hierarchical":1,"show_children_only":0,"hide_empty":0,"max_depth":""},"woocommerce_products-1":{"title":"On Sale","number":5,"show":"onsale","orderby":"date","order":"desc","hide_free":0,"show_hidden":0},"woocommerce_product_tag_cloud-2":{"title":"Product tags"}}}';
        $th_config['elementor_settings'] = '{"template":"default","system_colors":[{"_id":"primary","title":"Primary","color":"#333333"},{"_id":"secondary","title":"Secondary","color":"#BE9C79"},{"_id":"text","title":"Text","color":"#555555"},{"_id":"accent","title":"Accent"}],"custom_colors":[],"system_typography":[{"_id":"primary","title":"Primary","typography_typography":"custom","typography_line_height":{"unit":"em","size":1.3,"sizes":[]}},{"_id":"secondary","title":"Secondary","typography_typography":"custom"},{"_id":"text","title":"Text","typography_typography":"custom","typography_line_height":{"unit":"em","size":1.5,"sizes":[]}},{"_id":"accent","title":"Accent","typography_typography":"custom"}],"custom_typography":[],"default_generic_fonts":"Sans-serif","button_typography_typography":"custom","button_text_color":"#FFFFFF","button_background_color":"#BE9C79","button_hover_background_color":"#333333","page_title_selector":"h1.entry-title","activeItemIndex":1,"viewport_md":768,"viewport_lg":1025,"button_border_radius":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":true},"button_hover_text_color":"#FFFFFF","body_typography_typography":"custom","active_breakpoints":["viewport_mobile","viewport_tablet","viewport_tablet_extra","viewport_laptop"],"body_background_background":"classic","container_width":{"unit":"px","size":1620,"sizes":[]},"button_typography_font_size":{"unit":"px","size":16,"sizes":[]},"button_border_width":{"unit":"px","top":"1","right":"1","bottom":"1","left":"1","isLinked":true},"button_border_color":"#FFC200"}';
        $th_config['import_category'] = '';

        /**************************************** PLUGINS ****************************************/
        $th_config['require-plugin'] = array(
            array(
                'name'      => esc_html__( 'Core THTheme', 'coffeehouse'),
                'slug'      => 'core-ththeme',
                'required'  => true,
                'source'    => get_template_directory().'/plugins/core-ththeme.zip',
            ),
            array(
                'name'      => esc_html__( 'Slider Revolution', 'coffeehouse'),
                'slug'      => 'revslider',
                'required'  => true,
                'source'    => get_template_directory().'/plugins/revslider.zip',
            ),        
            array(
                'name'      => esc_html__( 'Elementor', 'coffeehouse'),
                'slug'      => 'elementor',
                'required'  => true,
            ),
            array(
                'name'      => esc_html__( 'Redux Framework', 'coffeehouse'),
                'slug'      => 'redux-framework',
                'required'  => true,
            ),
            array(
                'name'      => esc_html__( 'WooCommerce', 'coffeehouse'),
                'slug'      => 'woocommerce',
                'required'  => true,
            ),
            array(
                'name'      => esc_html__( 'Contact Form 7', 'coffeehouse'),
                'slug'      => 'contact-form-7',
                'required'  => false,
            ),
            array(
                'name'      => esc_html__('MailChimp for WordPress Lite','coffeehouse'),
                'slug'      => 'mailchimp-for-wp',
                'required'  => false,
            ),
            array(
                'name'      => esc_html__('Yith WooCommerce Compare','coffeehouse'),
                'slug'      => 'yith-woocommerce-compare',
                'required'  => false,
            ),
            array(
                'name'      => esc_html__('Yith WooCommerce Wishlist','coffeehouse'),
                'slug'      => 'yith-woocommerce-wishlist',
                'required'  => false,
            ),
        );

    /**************************************** PLUGINS ****************************************/
        
        
    }
}
th_set_theme_config();