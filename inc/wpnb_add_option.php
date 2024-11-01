<?php
/**
 * Clase principal
 *
 * @link 			http://wpaccuracy.com
 * @since 			1.0
 * @package 		Add notification title and message option save using carbon fields
 *
 */
 
if ( ! defined( 'ABSPATH' ) ):
	exit;
endif;

use Carbon_Fields\Container;
use Carbon_Fields\Field;
/*
* Add Function save the Option filds and Add action hook
*/
add_action( 'carbon_fields_register_fields', 'wpwc_notification_options' );
function wpwc_notification_options() {
    Container::make( 'theme_options', 'WP Notification' )
       ->set_icon( 'dashicons-carrot' )
        ->add_tab(__('Notification','wp-admin'), array(
            Field::make("checkbox", "enable_notification",__( "Enable Notification"))
           ->set_option_value('on'),
		   Field::make('text', 'notificaton_messag', __("Enter Your Notification Title")),
		   Field::make( 'rich_text', 'notification_complete_message', 'Enter Your Notification Message' ),
        ))
		->add_tab(__('Customization','wp-admin'), array(
                Field::make('color', 'title_text_color', __("Title Text Color")),
				Field::make('color', 'title_background_color', __("Title Background Color")),
				Field::make( 'separator', 'customization_separatore_message', 'Notification Message Customization' ),
                Field::make('color', 'message_text_color', __("Message Text Color")),
				Field::make('color', 'message_background_color', __("Message Background Color")),
				Field::make( 'separator', 'separatore_overlay_background', 'Overlay Background Customization' ),
				Field::make('color', 'overlay_background_color', __("Overlay Background Color")),
				Field::make( 'separator', 'separatore_notification_time_set', 'Notification Time Set' ),
				Field::make('text', 'notification_time_set', __("Notifiation Set display time 1000 = 1sec"))
				 ->set_attribute( 'placeholder', 'More the 700 time duration is valid, ...' ),
			
        ));
}