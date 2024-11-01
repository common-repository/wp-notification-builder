<?php

/**
 * Clase principal
 *
 * @link 			http://wpaccuracy.com
 * @since 			1.0
 * @package 		Footer fuction select if enable to customiz checkout or not
 *
 */
defined ('ABSPATH') or exit;
add_action( 'wp_footer', 'wpnb_load_html' );
function wpnb_load_html() {
  if (get_option('_enable_notification') != 'on') {
   return false;
 }
 $title_text_color = esc_attr (get_option ('_title_text_color'));
 $title_background_color = esc_attr (get_option ('_title_background_color'));
 $message_text_color = esc_attr (get_option ('_message_text_color'));
 $message_background_color = esc_attr (get_option ('_message_background_color'));
 $notification_time_set = esc_attr (get_option ('_notification_time_set'));
 $overlay_background_color = esc_attr (get_option ('_overlay_background_color'));
 ?>
 <div class="modal fade " id="wp-notification-overlay" style="background-color: <?php echo $overlay_background_color;?> ;">
  <div class="modal-dialog wp-notification-bulder" id="exampleModal">
    <div class="modal-content">
      <input type="hidden" name="set-time-feed-out" value="<?php echo ($notification_time_set) ? $notification_time_set : ''; ?>">
      <div class="modal-header notificaton-title" style="background-color: <?php echo $title_background_color; ?> ">
        <?php 
        $notificaton_messag = esc_attr (get_option ('_notificaton_messag'));
        $notification_complete_message = esc_attr (get_option ('_notification_complete_message')); ?>
        <h4 class="modal-title" style="color: <?php echo $title_text_color; ?> "><?php echo $notificaton_messag; ?></h4> <br>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body notificaton-message" style=" background-color: <?php echo $message_background_color;?> ; color: <?php echo $message_text_color;?> ">
        <?php
        echo apply_filters( 'the_content', get_option('_notification_complete_message') );
        ?>
      </div>
    </div>
  </div>
</div>
<?php           
};  