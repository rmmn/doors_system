<?php

get_template_part('settings/menu_walkers/header', 'walker');
get_template_part('settings/menus');
// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'theme_name_scripts');
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts()
{
    wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.min.css');

    wp_enqueue_script('jq', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '3.3.1', true);
    wp_enqueue_script('jqui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array("jq"), '3.3.1', true);
    wp_enqueue_script('lifhtslider', get_template_directory_uri() . '/assets/js/lightslider.js', array("jqui"), '3.3.1', true);
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('lifhtslider'), '1.8.1', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array("slick"), '1.0', true);
}

// function my_styles_method()
// {
//     $custom_css = "
// 		html{
//             margin: 0;
//             padding: 0;
// 		}";
//     wp_add_inline_style('custom-style', $custom_css);
// }
// add_action('wp_enqueue_scripts', 'my_styles_method');

add_action('rest_api_init', 'add_custom_fields');
function add_custom_fields()
{
    register_rest_field(
        'post',
        'custom_fields', //New Field Name in JSON RESPONSEs
        array(
            'get_callback'    => 'get_custom_fields', // custom function name 
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

function get_custom_fields($object, $field_name, $request)
{
    //your code goes here
    return $customfieldvalue;
}

// text editor

if (!class_exists('WP_Customize_Control'))
    return NULL;
/**
 * Class to create a custom tags control
 */
class Text_Editor_Custom_Control extends WP_Customize_Control
{
    /**
     * Render the content on the theme customizer page
     */
    public function render_content()
    {
?>
<label>
    <span class="customize-text_editor"><?php echo esc_html($this->label); ?></span>
    <input class="wp-editor-area" type="hidden" <?php $this->link(); ?>
        value="<?php echo esc_textarea($this->value()); ?>">
    <?php
            $settings = array(
                'textarea_name' => $this->id,
                'media_buttons' => false,
                'drag_drop_upload' => false,
                'teeny' => true,
                'quicktags' => false,
                'textarea_rows' => 5,
            );
            $this->filter_editor_setting_link();
            wp_editor($this->value(), $this->id, $settings);
            ?>
</label>
<?php
        do_action('admin_footer');
        do_action('admin_print_footer_scripts');
    }
    private function filter_editor_setting_link()
    {
        add_filter('the_editor', function ($output) {
            return preg_replace('/<textarea/', '<textarea ' . $this->get_link(), $output, 1);
        });
    }
}

function editor_customizer_script()
{
    wp_enqueue_script('wp-editor-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), rand(), true);
}
add_action('customize_controls_enqueue_scripts', 'editor_customizer_script');

add_theme_support('post-thumbnails');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('align-wide');
add_theme_support('editor-styles'); // обязателен для работы следующей строки
add_theme_support('dark-editor-style');

get_template_part('settings/options');
get_template_part('settings/post_types');