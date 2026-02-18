<?php

// include str_replace('microsoft', 'bpo', ABSPATH) . '/wp-content/themes/bpo/functions/head.php';
//include('custom-post-type/post_type_questionnaire.php'); 
function add_css()
{
   wp_register_style('style-css', get_template_directory_uri() . '/assets/css/microsoft.css', false, 3.37, 'all');
   wp_enqueue_style( 'style-css');
}
add_action('wp_enqueue_scripts', 'add_css');

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
// ACF START

// define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf-pro/' );
// define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf-pro/' );

// include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
// add_filter('acf/settings/url', 'my_acf_settings_url');
// function my_acf_settings_url( $url ) {
//     return MY_ACF_URL;
// }

// (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// function my_acf_settings_show_admin( $show_admin ) {
//     return false;
// }
// END ACF


// Adding Custom Post Types
foreach (glob(get_template_directory()."/custom-post-types/*.php") as $filename){
   require_once $filename;
}

// Handling job form submissions
function tt_job_application(){
   global $wpdb;
   $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
   $headers .= 'From: TrangoTech <no-reply@trangotech.com>' . "\r\n";

   $subject = @$data['firstName']." ".@$data['lastName']." - ".@$data['jobName'];
   foreach($data as $key => $value){ if(!in_array($key, ['action', 'jobName'])){ @$message .= ucwords($key).": ".$value."<br>"; } }

   $uploadedfile = $_FILES['resume'];

   $finfo = finfo_open(FILEINFO_MIME_TYPE);
   $mime = finfo_file($finfo, $uploadedfile['tmp_name']);
   if(!in_array($mime, ['application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf'])){
      die("Only PDF/Doc Files are acceptable!");
   }

   $upload_overrides = array('test_form' => false );
   $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

   if($movefile) {
      $attachments = $movefile['file'];
      echo wp_mail("careers@trangotech.com", $subject, $message, $headers, $attachments);
      unlink($attachments);
      die();
   }
   die("Something went wrong. Please try again!");
}   
add_action( 'wp_ajax_tt_job_application', 'tt_job_application' );
add_action( 'wp_ajax_nopriv_tt_job_application', 'tt_job_application');

// Global Settings
function globalSetting() {
   global $globalArr;
   $globalArr['phone']         = '1 (877) 606-2555';
   $globalArr['phone_plus']   = '+1 (877) 606-2555';
    $globalArr['email']   = 'info@trangotech.com';
   $globalArr['facebook']   = 'https://www.facebook.com/trangotech';
   $globalArr['twitter']   = 'https://twitter.com/TrangoTech';
   $globalArr['linkedin']   = 'https://www.linkedin.com/company/trangotech/';
   $globalArr['instagram']   = 'https://www.instagram.com/trango_tech/';
   define('globalArr', $globalArr);
}
add_action( 'after_setup_theme', 'globalSetting' );


// Redirect trangotech.com/sitemap.xml /trangotech.com/sitemap_index.xml


register_nav_menus(
   array(
       'primary_mobile_services' => esc_html__( 'Primary menu Mobile Services', 'twentytwentyone' ),
       'primary_mobile_technology' => esc_html__( 'Primary menu Mobile Technology', 'twentytwentyone' ),
       'primary_mobile_industries' => esc_html__( 'Primary menu Mobile Industries', 'twentytwentyone' ),
       'primary_mobile_locations' => esc_html__( 'Primary menu Mobile Locations', 'twentytwentyone' ),
	   'primary_mobile_gcc_locations' => esc_html__( 'Primary menu Mobile GCC Locations', 'twentytwentyone' ),


       'primary_ecommerce_services' => esc_html__( 'Primary menu Ecommerce Services', 'twentytwentyone' ),
       'primary_ecommerce_adobe_commerce' => esc_html__( 'Primary menu Ecommerce Adobe Commerce', 'twentytwentyone' ),
       'primary_ecommerce_shopify' => esc_html__( 'Primary menu Ecommerce Shopify', 'twentytwentyone' ),
       'primary_ecommerce_woocommerce' => esc_html__( 'Primary menu Ecommerce WooCommerce', 'twentytwentyone' ),
       'primary_ecommerce_bigcommerce' => esc_html__( 'Primary menu Ecommerce BigCommerce', 'twentytwentyone' ),

       'primary_staff' => esc_html__( 'Primary menu Staff Augmentation', 'twentytwentyone' ),
        'primary_bpo' => esc_html__( 'Primary menu Enterprises', 'twentytwentyone' ),
        'primary_company' => esc_html__( 'Primary menu Company', 'twentytwentyone' ),
        'primary_solution' => esc_html__( 'Primary menu Solution', 'twentytwentyone' ),
        'primary_salesforce' => esc_html__( 'Primary menu Salesforce', 'twentytwentyone' ),
        'primary_microsoft' => esc_html__( 'Primary menu Microsoft', 'twentytwentyone' ),
       'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
   )
);


// email sender name hook 
add_filter( 'wp_mail_from_name', function ( $original_email_from ) {
   return 'TrangoTech | Dynamics';
} );





// Add custom fields to the WordPress settings
function custom_global_fields_settings() {
   global $custom_fields;

   foreach ($custom_fields as $section => $fields) {
       foreach ($fields as $field_name => $field_label) {
           register_setting("custom_global_fields_$section", $field_name);
       }
   }
}
add_action('admin_init', 'custom_global_fields_settings');

// Add submenu page for custom global fields
add_action('admin_menu', 'custom_global_fields_admin_menu');
function custom_global_fields_admin_menu() {
   add_submenu_page(
       'options-general.php',
       'All General Info Sections',
       'General Info',
       'manage_options',
       'custom-global-fields',
       'custom_global_fields_page'
   );
}

// Display custom global fields in the WordPress admin settings
function custom_global_fields_page() {
   global $custom_fields;

   $current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'header_number';

   ?>
   <div class="wrap">
       <h2 class="nav-tab-wrapper">
           <?php
           foreach ($custom_fields as $section => $fields) {
               $active_class = ($current_tab === $section) ? 'nav-tab-active' : '';
               echo "<a href='?page=custom-global-fields&tab=$section' class='nav-tab $active_class'>$section</a>";
           }
           ?>
       </h2>
       <form method="post" action="options.php">
           <?php settings_fields("custom_global_fields_$current_tab"); ?>
           <?php do_settings_sections("custom_global_fields_$current_tab"); ?>
           <table class="form-table">
               <?php foreach ($custom_fields[$current_tab] as $field_name => $field_label) : ?>
                   <tr>
                       <th><label for="<?php echo $field_name; ?>"><?php echo $field_label; ?></label></th>
                       <td><input type="text" name="<?php echo $field_name; ?>" id="<?php echo $field_name; ?>" value="<?php echo esc_attr(get_option($field_name)); ?>"></td>
                   </tr>
               <?php endforeach; ?>
           </table>
           <?php submit_button(); ?>
       </form>
   </div>
   <?php
}

// Define your custom fields array
$custom_fields = array(
   'header_number' => array(
       'header_number' => 'Header Number',
   ),
//    'Pakistan' => array(
//        'pak_address' => 'Pak Address',
//        'pak_email' => 'Pak Email',
//        'pak_phone' => 'Pak Phone',

//    ),
//    'New York' => array(
//        'york_address' => 'NewYork Address',
//        'york_email' => 'NewYork Email',
//        'york_phone' => 'NewYork Phone',
//    ),
//    'Hosuton' => array(
//        'houston_address' => 'Houston Address',
//        'houston_email' => 'Houston Email',
//        'houston_phone' => 'Houston Phone',
//    ),
//    'San Jose' => array(
//        'san_jose_address' => 'San Jose Address',
//        'san_jose_email' => 'San Jose Email',
//        'san_jose_phone' => 'San Jose Phone',
//    ),
//    'Utah' => array(
//        'utah_address' => 'Utah Address',
//        'utah_email' => 'Utah Email',
//        'utah_phone' => 'Utah Phone',
//    ),
//    'San Francisco' => array(
//        'san_francisco_address' => 'San Francisco Address',
//        'san_francisco_email' => 'San Francisco Email',
//        'san_francisco_phone' => 'San Francisco Phone',
//    ),
//    'Austin' => array(
//        'austin_address' => 'Austin Address',
//        'austin_email' => 'Austin Email',
//        'austin_phone' => 'Austin Phone',
//    ),
//    'Chicago' => array(
//        'chicago_address' => 'Chiago Address',
//        'chicago_email' => 'Chiago Email',
//        'chicago_phone' => 'Chiago Phone',
//    ),
//    'Dallas' => array(
//        'dallas_address' => 'Dallas Address',
//        'dallas_email' => 'Dallas Email',
//        'dallas_phone' => 'Dallas Phone',
//    ),
//    'Los Angles' => array(
//        'los_angles_address' => 'Los Angeles Address',
//        'los_angles_email' => 'Los Angeles Email',
//        'los_angles_phone' => 'Los Angeles Phone',
//    ),
//    'Urls' => array(
//        'los_angles_address_url' => 'Location Los Angles',
//        'dallas_address_url' => 'Location Dallas',
//        'chicago_address_url' => 'Location Chicago',
//        'austin_address_url' => 'Location Austin',
//        'san_fran_address_url' => 'Location San Francisco',
//        'utah_address_url' => 'Location Utah',
//        'san_jose_address_url' => 'Location San Jose',
//        'california_address_url' => 'Location California',
//        'houston_address_url' => 'Locaction Houston',
//        'newyork_address_url' => 'Location Newyork',
//        'pakistan_address_url' => 'Location Pakistan',
//    ),
   'Cost Notification' => array(
       'cost_calcultor_title' => 'Cost Title',
       'cost_calcultor_button_title' => 'Cost Button Title',
       'cost_calcultor_button_url' => 'Cost Button Link'
   ),
   
   
   'Portfolio Multiple Banner Images' => array(
       'portfolio_banner_title' => 'Title',
       'portfolio_banner_image_1' => 'Image 1 Link',
       'portfolio_banner_image_2' => 'Image 2 Link',
       'portfolio_banner_image_3' => 'Image 3 Link',
       'portfolio_banner_image_4' => 'Image 4 Link',
       'portfolio_banner_image_5' => 'Image 5 Link',
       'portfolio_banner_image_6' => 'Image 6 Link',
       'portfolio_banner_image_7' => 'Image 7 Link',
       'portfolio_banner_image_8' => 'Image 8 Link',
       'portfolio_banner_image_9' => 'Image 9 Link',
       'portfolio_banner_image_10' => 'Image 10 Link',
       'portfolio_banner_image_11' => 'Image 11 Link',
       'portfolio_banner_image_12' => 'Image 12 Link',
       'portfolio_banner_image_13' => 'Image 13 Link',
       'portfolio_banner_image_14' => 'Image 14 Link',
       'portfolio_banner_image_15' => 'Image 15 Link',
       'portfolio_banner_image_16' => 'Image 16 Link',
       'portfolio_banner_image_17' => 'Image 17 Link',
       'portfolio_banner_image_18' => 'Image 18 Link',
       'portfolio_banner_image_19' => 'Image 19 Link',
       'portfolio_banner_image_20' => 'Image 20 Link',
   )


);

add_action('acf/init', function () {

    if ( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'  => 'footer general info',
            'menu_title'  => 'footer general info',
            'menu_slug'   => 'footer-general-info',
            'parent_slug' => 'options-general.php',
            'redirect'    => false,
        ));
    }

});

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65b9f0db97e6b',
	'title' => 'footer general information',
	'fields' => array(
		array(
			'key' => 'field_65b9f0dc977be',
			'label' => 'tabs USA',
			'name' => 'tabs_us',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Row',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_65b9f15a33122',
					'label' => 'USA',
					'name' => '',
					'aria-label' => '',
					'type' => 'accordion',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'open' => 0,
					'multi_expand' => 0,
					'endpoint' => 0,
					'parent_repeater' => 'field_65b9f0dc977be',
				),
				array(
					'key' => 'field_65b9f31b526ab',
					'label' => 'Country Location Name',
					'name' => 'tab_name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f0dc977be',
				),
				array(
					'key' => 'field_65b9f39e95098',
					'label' => 'Address Name',
					'name' => 'address_name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f0dc977be',
				),
				array(
					'key' => 'field_65ca2e4d00138',
					'label' => 'Url',
					'name' => 'url',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f0dc977be',
				),
				array(
					'key' => 'field_65b9f3ab95099',
					'label' => 'Email',
					'name' => 'email',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f0dc977be',
				),
				array(
					'key' => 'field_65b9f3b99509a',
					'label' => 'Phone',
					'name' => 'phone',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f0dc977be',
				),
			),
		),
		array(
			'key' => 'field_65b9f414312fc',
			'label' => 'tabs Asia',
			'name' => 'tabs_asia',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Row',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_65b9f414312fd',
					'label' => 'Asia',
					'name' => '',
					'aria-label' => '',
					'type' => 'accordion',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'open' => 0,
					'multi_expand' => 0,
					'endpoint' => 0,
					'parent_repeater' => 'field_65b9f414312fc',
				),
				array(
					'key' => 'field_65b9f414312fe',
					'label' => 'Country Location Name',
					'name' => 'tab_name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f414312fc',
				),
				array(
					'key' => 'field_65b9f414312ff',
					'label' => 'Address Name',
					'name' => 'address_name',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f414312fc',
				),
				array(
					'key' => 'field_65ca2e8100139',
					'label' => 'Url',
					'name' => 'url',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f414312fc',
				),
				array(
					'key' => 'field_65b9f41431300',
					'label' => 'Email',
					'name' => 'email',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f414312fc',
				),
				array(
					'key' => 'field_65b9f41431301',
					'label' => 'Phone',
					'name' => 'phone',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_65b9f414312fc',
				),
			),
		),
        array(
            'key' => 'field_65b9f414312fx', // Unique key for the UK repeater
            'label' => 'tabs UK',
            'name' => 'tabs_uk',
            'aria-label' => '',
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => array(
                array(
                    'key' => 'field_65b9f414312fy', // Unique key for accordion
                    'label' => 'UK',
                    'name' => '',
                    'aria-label' => '',
                    'type' => 'accordion',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'open' => 0,
                    'multi_expand' => 0,
                    'endpoint' => 0,
                    'parent_repeater' => 'field_65b9f414312fx',
                ),
                array(
                    'key' => 'field_65b9f414312fz',
                    'label' => 'Country Location Name',
                    'name' => 'tab_name',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_65b9f414312fx',
                ),
                array(
                    'key' => 'field_65b9f414312aa',
                    'label' => 'Address Name',
                    'name' => 'address_name',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_65b9f414312fx',
                ),
                array(
                    'key' => 'field_65b9f414312bb',
                    'label' => 'Url',
                    'name' => 'url',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_65b9f414312fx',
                ),
                array(
                    'key' => 'field_65b9f414312cc',
                    'label' => 'Email',
                    'name' => 'email',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_65b9f414312fx',
                ),
                array(
                    'key' => 'field_65b9f414312dd',
                    'label' => 'Phone',
                    'name' => 'phone',
                    'aria-label' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'parent_repeater' => 'field_65b9f414312fx',
                ),
            ),
        ), 
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'footer-general-info',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );


// Custom field 'meta_links' create karein
function custom_meta_links_field() {
    add_meta_box(
		'meta_links_field',
		'Meta Links',
		'display_meta_links_field',
		'page', // Change 'post' to 'page'
		'normal',
		'high'
	);
	
}
add_action( 'add_meta_boxes', 'custom_meta_links_field' );

// Display function for the meta box
// Display function for the meta box
function display_meta_links_field( $post ) {
    $value = get_post_meta( $post->ID, 'meta_links', true );
    ?>
    <label for="meta_links">Meta Links:</label>
    <textarea id="meta_links" name="meta_links" rows="5" style="width: 100%;"><?php echo esc_textarea( $value ); ?></textarea>
    <?php
}
// Save function for the meta box
function save_meta_links_field( $post_id ) {
    if ( isset( $_POST['meta_links'] ) ) {
        $meta_links = wp_kses( $_POST['meta_links'], array(
            'a' => array(
                'href' => array(),
                'rel' => array(),
                'hreflang' => array(),
            ),
            'link' => array(
                'rel' => array(),
                'href' => array(),
                'hreflang' => array(),
            )
        ));
        update_post_meta( $post_id, 'meta_links', $meta_links );
    }
}
add_action( 'save_post', 'save_meta_links_field' );










// integration features
add_action('init', 'integration_features_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function integration_features_post_type() {
    $labels = array(
        'name' => _x('Integration Features', 'post type general name'),
        'singular_name' => _x('Integration Features', 'post type singular name'),
        'add_new' => _x('Add New Integration Features', 'Team Member'),
        'add_new_item' => __('Add Integration Features'),
        'edit_item' => __('Edit Integration Features'),
        'new_item' => __('New Integration Features'),
        'view_item' => __('View Integration Features'),
        'search_items' => __('Search Integration Features'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title','editor','thumbnail','page-attributes')
    ); 
    register_post_type( 'integration_features' , $args );
}


function integration_features_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'integration_features_categories', array( 'integration_features' ), $args );
}
add_action( 'init', 'integration_features_taxonomies', 0 );
// integration features




// integration partners
add_action('init', 'integration_partners_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function integration_partners_post_type() {
    $labels = array(
        'name' => _x('Integration Partners', 'post type general name'),
        'singular_name' => _x('Integration Partners', 'post type singular name'),
        'add_new' => _x('Add New Integration Partners', 'Team Member'),
        'add_new_item' => __('Add Integration Partners'),
        'edit_item' => __('Edit Integration Partners'),
        'new_item' => __('New Integration Partners'),
        'view_item' => __('View Integration Partners'),
        'search_items' => __('Search Integration Partners'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title','editor','thumbnail','page-attributes')
    ); 
    register_post_type( 'integration_partners' , $args );
}


function integration_partners_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'integration_partners_categories', array( 'integration_partners' ), $args );
}
add_action( 'init', 'integration_partners_taxonomies', 0 );
// integration partners








// Mobility Solutions
add_action('init', 'mobility_solutions_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function mobility_solutions_post_type() {
    $labels = array(
        'name' => _x('Mobility Solutions', 'post type general name'),
        'singular_name' => _x('Mobility Solutions', 'post type singular name'),
        'add_new' => _x('Add New Mobility Solutions', 'Team Member'),
        'add_new_item' => __('Add Mobility Solutions'),
        'edit_item' => __('Edit Mobility Solutions'),
        'new_item' => __('New Mobility Solutions'),
        'view_item' => __('View Mobility Solutions'),
        'search_items' => __('Search Mobility Solutions'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title','editor','thumbnail','page-attributes')
    ); 
    register_post_type( 'mobility_solutions' , $args );
}


function mobility_solutions_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'mobility_solutions_categories', array( 'mobility_solutions' ), $args );
}
add_action( 'init', 'mobility_solutions_taxonomies', 0 );
// Mobility Solutions






// MS DYNAMICS INTEGRATION
add_action('init', 'dynamics_integration_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function dynamics_integration_post_type() {
    $labels = array(
        'name' => _x('Dynamics Integration', 'post type general name'),
        'singular_name' => _x('Dynamics Integration', 'post type singular name'),
        'add_new' => _x('Add New Dynamics Integration', 'Team Member'),
        'add_new_item' => __('Add Dynamics Integration'),
        'edit_item' => __('Edit Dynamics Integration'),
        'new_item' => __('New Dynamics Integration'),
        'view_item' => __('View Dynamics Integration'),
        'search_items' => __('Search Dynamics Integration'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title','editor','thumbnail','page-attributes')
    ); 
    register_post_type( 'dynamics_integration' , $args );
}


function dynamics_integration_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'dynamics_integration_categories', array( 'dynamics_integration' ), $args );
}
add_action( 'init', 'dynamics_integration_taxonomies', 0 );
// MS DYNAMICS INTEGRATION




// DYNAMICS ERP
add_action('init', 'dynamics_erp_post_type');
/**
 * Creating the custom post type
 *
 * This functions is attached to the 'init' action hook.
 */
function dynamics_erp_post_type() {
    $labels = array(
        'name' => _x('Dynamics ERP', 'post type general name'),
        'singular_name' => _x('Dynamics ERP', 'post type singular name'),
        'add_new' => _x('Add New Dynamics ERP', 'Team Member'),
        'add_new_item' => __('Add Dynamics ERP'),
        'edit_item' => __('Edit Dynamics ERP'),
        'new_item' => __('New Dynamics ERP'),
        'view_item' => __('View Dynamics ERP'),
        'search_items' => __('Search Dynamics ERP'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 8,
        'supports' => array('title','editor','thumbnail','page-attributes')
    ); 
    register_post_type( 'dynamics_erp' , $args );
}


function dynamics_erp_taxonomies() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Categories' ),
    );

    $args = array(
        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categories' ),
    );

    register_taxonomy( 'dynamics_erp_categories', array( 'dynamics_erp' ), $args );
}
add_action( 'init', 'dynamics_erp_taxonomies', 0 );
// DYNAMICS ERP

function enqueue_intl_tel_input() {
    // Enqueue the intl-tel-input CSS
    wp_enqueue_style('intl-tel-input-css', get_template_directory_uri() . '/assets/css/intlTelInput.css');

    // Enqueue the intl-tel-input JS
    wp_enqueue_script('intl-tel-input-js', get_template_directory_uri() . '/assets/js/intlTelInput.min.js', array('jquery'), null, true);

	
    // Enqueue the utils script for intl-tel-input
    wp_enqueue_script('intl-tel-input-utils-js', get_template_directory_uri() . '/assets/js/utils.js', array('intl-tel-input-js'), null, true);


    // Enqueue custom script to initialize intl-tel-input
   // wp_enqueue_script('custom-intl-tel-input', get_template_directory_uri() . '/js/custom-intl-tel-input.js', array('intl-tel-input-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_intl_tel_input');



function is_modal_link($link) {
    $attributes = '';

    if (
        is_string($link) &&
        (substr($link, 0, 1) == '#') &&
        str_contains($link, 'modal')
        ) {
        $attributes = 'data-bs-toggle="modal" data-bs-target="' . $link . '"';
    }

    return $attributes;
}



/**
 * Return width="" and height="" attributes for an image
 *
 * @param $source either image id or image url
 * @param $by url as default if url is passed or id if id is passed
 * 
 */ 
function get_image_dimensions($source, $by = 'url', $add_alt = true) {

    if (empty($source)) return $source;

    $image_id = $by == 'id' ? $source : attachment_url_to_postid($source);
    $width = get_field('width', $image_id);
    $height = get_field('height', $image_id);
    $dimension_attr = '' . (!empty($width) ? "width=\"$width\"" : "") . (!empty($height) ? " height=\"$height\"" : "");

    if ($add_alt) {
        $alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        $alt = !empty($alt) ? $alt : get_the_title($image_id);

        $dimension_attr .= " alt=\"$alt\"";
    }

    return $dimension_attr;
}
add_action('template_redirect', function () {
  ob_start(function ($html) {
    // remove data-aos="..."
    $html = preg_replace('/\sdata-aos="[^"]*"/i', '', $html);
    // remove data-aos-duration="..."
    $html = preg_replace('/\sdata-aos-duration="[^"]*"/i', '', $html);
    // optional: remove other aos attrs
    $html = preg_replace('/\sdata-aos-[a-z-]+="[^"]*"/i', '', $html);

    return $html;
  });
});


// Add width/height to ALL <img> tags (ACF + uploads + theme assets)
add_action('template_redirect', function () {
    ob_start('mm_add_dimensions_to_all_images');
  });
  
  function mm_add_dimensions_to_all_images($html) {
  
    if (stripos($html, '<img') === false) return $html;
  
    return preg_replace_callback('~<img[^>]+>~i', function ($m) {
  
        $tag = $m[0];
  
        // Skip if width & height already exist
        if (strpos($tag, 'width=') !== false && strpos($tag, 'height=') !== false) {
            return $tag;
        }
  
        // Extract src
        if (!preg_match('~src=["\']([^"\']+)["\']~i', $tag, $src_match)) {
            return $tag;
        }
  
        $src = $src_match[1];
        $clean_src = strtok($src, '?');
  
        // Try Media Library first
        $id = attachment_url_to_postid($clean_src);
  
        if ($id) {
            $meta = wp_get_attachment_metadata($id);
            if (!empty($meta['width']) && !empty($meta['height'])) {
                return preg_replace(
                    '~<img~i',
                    '<img width="'.$meta['width'].'" height="'.$meta['height'].'"',
                    $tag,
                    1
                );
            }
        }
  
        // STATIC IMAGE FALLBACK (theme assets)
        $theme_path = get_template_directory();
        $relative_path = str_replace(get_template_directory_uri(), $theme_path, $clean_src);
  
        if (file_exists($relative_path)) {
            $size = @getimagesize($relative_path);
            if (!empty($size[0]) && !empty($size[1])) {
                return preg_replace(
                    '~<img~i',
                    '<img width="'.$size[0].'" height="'.$size[1].'"',
                    $tag,
                    1
                );
            }
        }
  
        return $tag;
  
    }, $html);
}