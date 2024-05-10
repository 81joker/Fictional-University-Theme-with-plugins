<?php

/*
  Plugin Name: Our Test Plugin demo test 02
  Description: A truly amazing plugin.
  Version: 1.0
  Author: Test 02
  Author URI: https://www.udemy.com/nehad/
*/

class WordCountAndTimePlugin
{
  function __construct()
  {
    add_action('admin_menu', array($this, 'adminPage'));
    add_action('admin_init', array($this, 'settings'));
  }

  function settings()
  {
    // add_settings_section( id, title, callback, page );
    add_settings_section('wcp_first_section', null, null, 'word-count-settings-page');

    // add_settings_field( $id:string, $title:Html label title or Text, $callback:Funciton for display the counstom html from function, $page:slug page , $section:string, $args:array )
    // add_settings_field( id, title, callback, page, section, args )
    add_settings_field('wcp_location', 'Display Location label', array($this, 'locationHtml'), 'word-count-settings-page', 'wcp_first_section');

    // register_setting( $option_group:string, $option_name:string, $args:array )
    // register_setting( option_group, option_name, sanitize_callback )
    register_setting('wordcountplugin', 'wcp_location', array('sanitize_callback' => 'sanitize_text_field', 'default' => '0'));


    add_settings_field('wcp_headline', 'Display Headline label', array($this, 'headlineHtml'), 'word-count-settings-page', 'wcp_first_section');
    register_setting('wordcountplugin', 'wcp_headline', array('sanitize_callback' => 'sanitize_text_field', 'default' => 'Post statistics'));

    add_settings_field('wcp_wordcount', 'Word Count', array($this, 'WordcountHtml'), 'word-count-settings-page', 'wcp_first_section');
    register_setting('wordcountplugin', 'wcp_wordcount', array('sanitize_callback' => 'sanitize_text_field', 'default' => '1'));
  }

  function WordcountHtml()
  { ?>
    <input type="checkbox" name="wcp_wordcount" value="1" <?php checked(get_option('wcp_wordcount') , '1') ?>> 


  <?php }

  function headlineHtml()
  { ?>
    <input type="text" name="wcp_headline" value="<?php echo esc_attr(get_option('wcp_headline')) ?>">

  <?php }
  function locationHTML()
  { ?>
    <select name="wcp_location">
      <option value="0" <?php selected(get_option('wcp_location', '0')) ?>>Beginning of post</option>
      <option value="1" <?php selected(get_option('wcp_location', '1')) ?>>End of post</option>
    </select>
  <?php }

  function adminPage()
  {
    add_options_page('Word Count Settings', 'Word Count nehad', 'manage_options', 'word-count-settings-page', array($this, 'ourHTML'));
  }

  function ourHTML()
  { ?>
    <div class="wrap" style="color:blue">
      <h1>Word Count Settings</h1>
      <form action="options.php" method="POST">
        <?php
        settings_fields('wordcountplugin');
        do_settings_sections('word-count-settings-page');
        submit_button();
        ?>
      </form>
    </div>
<?php }
}
// function WordCountAndTimePlugin()
// {
//   return WordCountAndTimePlugin::get_instance();
// }

$wordCountAndTimePlugin = new WordCountAndTimePlugin();
