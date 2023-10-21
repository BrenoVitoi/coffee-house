<?php
/**
 * Created by Sublime Text 2.
 * User: thanhhiep992
 * Date: 12/08/15
 * Time: 10:20 AM
 */
if(!class_exists('Th_HeaderController'))
{
    class Th_HeaderController{

        static function _init()
        {
            if(function_exists('stp_reg_post_type'))
            {
                add_action('init',array(__CLASS__,'_add_post_type'));
            }
        }

        static function _add_post_type()
        {
            $labels = array(
                'name'               => esc_html__('Header Page','coffeehouse'),
                'singular_name'      => esc_html__('Header Page','coffeehouse'),
                'menu_name'          => esc_html__('Header Page','coffeehouse'),
                'name_admin_bar'     => esc_html__('Header Page','coffeehouse'),
                'add_new'            => esc_html__('Add New','coffeehouse'),
                'add_new_item'       => esc_html__( 'Add New Header','coffeehouse' ),
                'new_item'           => esc_html__( 'New Header', 'coffeehouse' ),
                'edit_item'          => esc_html__( 'Edit Header', 'coffeehouse' ),
                'view_item'          => esc_html__( 'View Header', 'coffeehouse' ),
                'all_items'          => esc_html__( 'All Header', 'coffeehouse' ),
                'search_items'       => esc_html__( 'Search Header', 'coffeehouse' ),
                'parent_item_colon'  => esc_html__( 'Parent Header:', 'coffeehouse' ),
                'not_found'          => esc_html__( 'No Header found.', 'coffeehouse' ),
                'not_found_in_trash' => esc_html__( 'No Header found in Trash.', 'coffeehouse' )
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'th_header' ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'menu_icon'          => get_template_directory_uri() . "/assets/admin/image/header-icon.png",
                'supports'           => array( 'title', 'editor', 'revisions' )
            );

            stp_reg_post_type('th_header',$args);
        }
    }

    Th_HeaderController::_init();

}