<?php


declare( strict_types=1 );

namespace Swt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

const SWT_VER  = '1.1.0';
const SWT_SLUG = 'kafco';
const SWT_NAME = 'kafco';
const SWT_PFX  = 'swt';
const SWT_LOC  = 'kafco';
const SWT_NS   = __NAMESPACE__ . '\\';
const SWT_DS   = DIRECTORY_SEPARATOR;
const SWT_DIR  = __DIR__ . SWT_DS;

/**
 * Setup base functions
 */
require_once SWT_DIR . 'inc/utilities/all.php';
// require_once SWT_DIR . 'inc/theme-options.php';
// require_once SWT_DIR . 'inc/theme-updater.php';
require_once SWT_DIR . 'inc/scripts.php';
require_once SWT_DIR . 'inc/blocks/all.php';
require_once SWT_DIR . 'inc/compatibility/all.php';
require_once SWT_DIR . 'inc/extensions/all.php';
// require_once SWT_DIR . 'inc/block-styles/all.php';

/**
 * Admin functions
 */

require_once SWT_DIR . 'inc/admin/welcome-notice.php';
require_once SWT_DIR . 'inc/admin/settings.php';





class PlaceholderBlock {
  function __construct($name) {
    $this->name = $name;
    add_action('init', [$this, 'onInit']);
  }

  function ourRenderCallback($attributes, $content) {
    ob_start();
    require get_theme_file_path("/our-blocks/{$this->name}.php");
    return ob_get_clean();
  }

  function onInit() {
    wp_register_script($this->name, get_stylesheet_directory_uri() . "/our-blocks/{$this->name}.js", array('wp-blocks', 'wp-editor'));
    
    register_block_type("ourblocktheme/{$this->name}", array(
      'editor_script' => $this->name,
      'render_callback' => [$this, 'ourRenderCallback']
    ));
  }
}

class JSXBlock {
  function __construct($name, $renderCallback = null, $data = null) {
    $this->name = $name;
    $this->data = $data;
    $this->renderCallback = $renderCallback;
    add_action('init', [$this, 'onInit']);
  }

  function ourRenderCallback($attributes, $content) {
    ob_start();
    require get_theme_file_path("/our-blocks/{$this->name}.php");
    return ob_get_clean();
  }

  function onInit() {
    wp_register_script($this->name, get_stylesheet_directory_uri() . "/build/{$this->name}.js", array('wp-blocks', 'wp-editor'));
    
    if ($this->data) {
      wp_localize_script($this->name, $this->name, $this->data);
    }

    $ourArgs = array(
      'editor_script' => $this->name
    );

    if ($this->renderCallback) {
      $ourArgs['render_callback'] = [$this, 'ourRenderCallback'];
    }

    register_block_type("ourblocktheme/{$this->name}", $ourArgs);
  }
}

new JSXBlock('ourvalues',false, ['fallbackimage' => get_theme_file_uri('/images/ourvalue-bg.png')]);
new JSXBlock('ourvaluescard',false, ['fallbackimage' => get_theme_file_uri('/images/caring-hands.png')]);
new JSXBlock('ourvaluescards');
new JSXBlock('genericheading');
new JSXBlock('genericbutton');
new JSXBlock('kafcotext');
new JSXBlock('slideshow', true);
new JSXBlock('maincontainer', true);
new JSXBlock('slide', true, ['themeimagepath' => get_theme_file_uri('/images/')]);
new JSXBlock('kafco-slide', true);
new JSXBlock('kafco-slider-container', true);

class PublicClientSideBlock {
  function __construct($name) {
    $this->name = $name;
    add_action('init', [$this, 'adminAssets']);
  }

  function adminAssets() {
    wp_register_style($this->name, get_stylesheet_directory_uri() . "/build/{$this->name}-admin.css");
    wp_register_script($this->name, get_stylesheet_directory_uri() . "/build/{$this->name}-admin.js", array('wp-blocks', 'wp-element', 'wp-editor'));
    register_block_type('ourplugin/' . $this->name, array(
      'editor_script' => $this->name,
      'editor_style' => $this->name,
      'render_callback' => array($this, 'theHTML')
    ));
  }

  function theHTML($attributes) {
    if (!is_admin()) {
      wp_enqueue_script("{$this->name}-frontend", get_stylesheet_directory_uri() . "/build/{$this->name}-frontend.js", array('wp-element'), '1.0', true);
      wp_enqueue_style("{$this->name}-frontend", get_stylesheet_directory_uri() . "/build/{$this->name}-frontend.css");
    }    

    ob_start(); ?>
    <div class="<?php echo $this->name ?>-update-me"><pre style="display: none;"><?php echo wp_json_encode($attributes) ?></pre></div>
    <?php return ob_get_clean();
  }
}

// Add a custom block catogery
add_filter( 'block_categories_all' , function( $categories ) {
	$categories[] = array(
		'slug'  => 'kafco-blocks',
		'title' => 'Kafco Blocks'
	);

	return $categories;
} );


// add_filter( 'default_wp_template_part_areas', 'wpdocs_template_part_areas' );

// function wpdocs_template_part_areas( array $areas ) {
//     $areas[] = array(
//         'area'        => 'kafcoHome',
//         'area_tag'    => 'section', // Valid elements: div, header, main, section, article, aside and footer.
//         'label'       => __( 'kafco Home', 'kafcotheme' ),
//         'description' => __( 'Template part area description', 'merged-theme' ),
//         'icon'        => 'sidebar' // Default icons: header, footer and sidebar.
//     );
//     return $areas;
// }





// const SWT_NS   = __NAMESPACE__ . '\\';

// /**
//  * Pattern categories.
//  *
//  * @since 1.0.0
//  *
//  * @return void
//  */
// function pattern_categories(): void {

// 	register_block_pattern_category(
// 		'pages',
// 		array( 'label' => esc_html__( 'Pages', 'kafco' ) )
// 	);

// 	register_block_pattern_category(
// 		'contact',
// 		array( 'label' => esc_html__( 'Contact', 'kafco' ) )
// 	);

// 	register_block_pattern_category(
// 		'pricing',
// 		array( 'label' => esc_html__( 'Pricing', 'kafco' ) )
// 	);

// }

// add_action( 'init', SWT_NS . 'pattern_categories' );



