<?php

/*
  Plugin Name: Our Test Plugin demo
  Description: A truly amazing plugin.
  Version: 1.0
  Author: Test 01
  Author URI: 
*/

class WordCountAndTimePlugin
{
  function __construct()
  {
    add_action('admin_menu', array($this, 'adminPage'));
  }

  function adminPage()
  {
    add_options_page('Word Count Settings', 'Word Count Nehad', 'manage_options', 'word-count-settings-page', array($this, 'ourHTML'));
  }

  function ourHTML()
  { ?>
    <div class="wrap">
      <h1>Word Count Settings</h1>
    </div>
<?php }
}

$wordCountAndTimePlugin = new WordCountAndTimePlugin();
