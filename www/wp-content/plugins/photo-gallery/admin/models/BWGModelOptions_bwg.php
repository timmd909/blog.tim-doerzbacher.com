<?php

class BWGModelOptions_bwg {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  
  public function get_row_data($reset) {
    global $wpdb;
    $row = $wpdb->get_row($wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'bwg_option WHERE id="%d"', 1));
    $row->old_images_directory = $row->images_directory;
    if ($reset) {
      $upload_dir = wp_upload_dir();
      if (!is_dir($upload_dir['basedir'] . '/photo-gallery')) {
        mkdir($upload_dir['basedir'] . '/photo-gallery', 0777);
      }
      $row->images_directory = str_replace(ABSPATH, '', $upload_dir['basedir']);
      $row->masonry = 'vertical';
      $row->image_column_number = 5;
      $row->images_per_page = 30;
      $row->thumb_width = 180;
      $row->thumb_height = 90;
      $row->upload_thumb_width = 300;
      $row->upload_thumb_height = 300;
      $row->image_enable_page = 1;
      $row->image_title_show_hover = 'none';

      $row->album_column_number = 5;
      $row->albums_per_page = 30;
      $row->album_title_show_hover = 'hover';
      $row->album_thumb_width = 120;
      $row->album_thumb_height = 90;
      $row->album_enable_page = 1;
      $row->extended_album_height = 150;
      $row->extended_album_description_enable = 1;

      $row->image_browser_width = 800;
      $row->image_browser_title_enable = 1;
      $row->image_browser_description_enable = 1;

      $row->blog_style_width = 800;
      $row->blog_style_title_enable = 1;
      $row->blog_style_images_per_page = 5;
      $row->blog_style_enable_page = 1;

      $row->slideshow_type = 'fade';
      $row->slideshow_interval = 5;
      $row->slideshow_width = 800;
      $row->slideshow_height = 500;
      $row->slideshow_enable_autoplay = 0;
      $row->slideshow_enable_shuffle = 0;
      $row->slideshow_enable_ctrl = 1;
      $row->slideshow_enable_filmstrip = 1;
      $row->slideshow_filmstrip_height = 90;
      $row->slideshow_enable_title = 0;
      $row->slideshow_title_position = 'top-right';
      $row->slideshow_enable_description = 0;
      $row->slideshow_description_position = 'bottom-right';
      $row->slideshow_enable_music = 0;
      $row->slideshow_audio_url = '';

      $row->popup_width = 800;
      $row->popup_height = 500;
      $row->popup_type = 'fade';
      $row->popup_interval = 5;
      $row->popup_enable_filmstrip = 1;
      $row->popup_filmstrip_height = 70;
      $row->popup_enable_ctrl_btn = 1;
      $row->popup_enable_fullscreen = 1;
      $row->popup_enable_comment = 1;
      $row->popup_enable_email = 0;
      $row->popup_enable_captcha = 0;
      $row->popup_enable_download = 0;
      $row->popup_enable_fullsize_image = 0;
      $row->popup_enable_facebook = 1;
      $row->popup_enable_twitter = 1;
      $row->popup_enable_google = 1;

      $row->watermark_type = 'none';
      $row->watermark_position = 'bottom-left';
      $row->watermark_width = 90;
      $row->watermark_height = 90;
      $row->watermark_url = WD_BWG_URL . '/images/watermark.png';
      $row->watermark_text = 'web-dorado.com';
      $row->watermark_link = 'http://web-dorado.com';
      $row->watermark_font_size = 20;
      $row->watermark_font = 'arial';
      $row->watermark_color = 'FFFFFF';
      $row->watermark_opacity = 30;

      $row->built_in_watermark_type = 'none';
      $row->built_in_watermark_position = 'middle-center';
      $row->built_in_watermark_size = 15;
      $row->built_in_watermark_url = WD_BWG_URL . '/images/watermark.png';
      $row->built_in_watermark_text = 'web-dorado.com';
      $row->built_in_watermark_font_size = 20;
      $row->built_in_watermark_font = 'arial';
      $row->built_in_watermark_color = 'FFFFFF';
      $row->built_in_watermark_opacity = 30;

      $row->image_right_click = 0;
      $row->popup_fullscreen = 0;
      $row->gallery_role = 0;
      $row->album_role = 0;
      $row->image_role = 0;
    }
    return $row;
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}