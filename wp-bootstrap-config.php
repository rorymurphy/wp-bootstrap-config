<?php
/*
Plugin Name: WordPress Bootstrap Config
Description: Gives users the power to tweak all of the settings available in the Bootstrap variables file.
Author: Rory Murphy
Author URI: https://github.com/rorymurphy/
Version: 1.0.0
License: Modified MIT License - See LICENSE.TXT
*/

require_once('fields.php');

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    define('LESS_COMMAND', __DIR__ . '/lessc.bat');
} else {
    define('LESS_COMMAND', __DIR__ . '/lessc');
}

class WPBootstrapConfig {
    const CURRENT_SETTINGS_OPTION = 'wp-bootstrap-config-settings';
    const VERSIONS_OPTION = 'wp-bootstrap-config-versions';
    const SETTINGS_VERSION_PATT = 'wp-bootstrap-config-settings-%1$s';
    
    function __construct(){
        $this->register_hooks();
    }
    
    function register_hooks(){
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles'));
        add_filter('print_styles_array', array($this, 'filter_styles'));
    }
    
    function enqueue_scripts_and_styles()
    {
        $screen = get_current_screen();
        if($screen->base=='appearance_page_wp_bootstrap_config'){
            wp_deregister_script('jquery');
            wp_enqueue_script('jquery', plugin_dir_url(__FILE__) . 'js/jquery-1.8.3.min.js', null, '1.8.3');
            wp_enqueue_style('wp-bootstrap-config', plugin_dir_url(__FILE__) . 'css/wp_bootstrap_config.css');
            //wp_enqueue_script('underscore', plugin_dir_url(__FILE__) . 'js/underscore.js');
            wp_enqueue_script('underscore');
            wp_enqueue_script('bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'));
            wp_enqueue_script('wp-bootstrap-config', plugin_dir_url(__FILE__) . 'js/bootstrap-config.js', array('jquery', 'bootstrap', 'underscore'), null, true);
        }
    }
    function add_admin_menu(){
        add_submenu_page('themes.php', 'Bootstrap Settings', 'Bootstrap Settings', 'manage_options', 'wp_bootstrap_config', array($this, 'admin_page') );
    }
    
    public function admin_page(){
        if(isset($_POST) && array_key_exists('wp-bootstrap-config', $_POST)){
            $this->save_settings();
        }
        
        $settings = $this->get_settings();

        $displayFields = array_map(function($a){
            return array_keys($a);
        }, $settings);

        $displayFields = array_map(function($a){ return array_keys($a); }, array_values($settings));
        $displayFields[] = array_keys($settings);
        $displayFields = call_user_func_array('array_merge', $displayFields);
        $displayFields = apply_filters('bootstrap_config_display_fields', $displayFields);
        
        print '<div class="wrap"><div class="row-fluid"><h2>Bootstrap Settings</h2></div>';
        print '<form id="wp-config-settings" method="POST"><div class="row-fluid">';
        $columns = array('<div class="span3">','<div class="span3">','<div class="span3">','<div class="span3">');
        $colIter=0;

        foreach($settings as $cat=>$items){
            if(count($items)===0 || !in_array($cat, $displayFields)){continue;}
            $fieldCount = 0;
            $slug = strtolower(str_replace(' ', '-', $cat));
            $item = sprintf('<a data-toggle="collapse" href="#%2$s"><h3>%1$s<i class="icon-white indicator"></i></h3></a><div id="%2$s" class="collapse">', $cat, $slug);
            foreach($items as $itm){
                if(!in_array($itm['name'], $displayFields) || (array_key_exists('editable', $itm) && $itm['editable'] === false)){continue;}
                $item .= $this->get_input_field($itm);
                $fieldCount++;
            }
            $item .= '</div>';
            if(0 !== $fieldCount){
                $columns[$colIter] .= $item;
                $colIter = ($colIter + 1)%4;
            }
            $item=null;
        }
        
        foreach($columns as $col){
            print $col;
            print '</div>';
        }
        print '</div>';
        print '<div class="row-fluid"><div class="span12"><button type="submit" class="btn btn-primary">Save</button></div></div>';
        wp_nonce_field('save', 'wp-bootstrap-config');
        print '</form>';
        
        /* To be completed in a future version */
//        $versions = get_option(self::VERSIONS_OPTION, array());
//        print '<form method="POST"><div class="row-fluid"><div class="span12">';
//        print '<h2>Restore a previous version</h2>';
//        print '<select name="version">';
//        foreach($versions as $v){
//            printf('<option value="%1$s">%2$s</option>', $v, date('Y-m-d H:i', $v));
//        }
//        print '</select>';
//        
//        print '</form>';
        printf('<script type="text/javascript">var wp_bootstrap_config_settings = %1$s;</script>', json_encode($settings));?>

        <?php
        //End wrap
        print '</div>';
    }
    
    function get_input_field($item){
        $input = null;
        switch($item['type'])
        {
            default:
                $input = sprintf('<input type="text" name="settings[%1$s]" class="%2$s" value="%3$s"/>', htmlspecialchars($item['name']), htmlspecialchars($item['type']), htmlspecialchars($item['value']));
                break;
        }

        $title = $item['name'];
        if(array_key_exists('title', $item)){
            $title = $item['title'];
        }
        return sprintf('<div class="form-field %2$s"><label><a href="#" data-toggle="tooltip" title="%4$s (%5$s)">%1$s</a></label>%3$s</div>', $title, $item['type'], $input, $item['name'], $item['type']);
    }
    function get_settings(){
        $settings = get_bootstrap_default_settings();
        $values = get_option(self::CURRENT_SETTINGS_OPTION, null);
        if($values===null){return $settings;}
        
        foreach($settings as $category=>$items){
            foreach($items as $name=>$itm){
                if(array_key_exists($itm['name'], $values)){
                    $itm['value'] = $values[$itm['name']];
                }
                $settings[$category][$name]=$itm;
            }
        }

        return $settings;
    }
    
    function save_settings(){
        $settings = get_bootstrap_default_settings();
        $values = array();
        $timestamp = time();
        $versions = get_option(self::VERSIONS_OPTION, array());
        
        foreach($settings as $category=>$items){
            foreach($items as $name=>$itm){
                if(array_key_exists('editable', $itm) && $itm['editable']==false){
                    unset($values[$itm['name']]);
                    continue;
                }
                $values[$itm['name']] = stripslashes( $_POST['settings'][$itm['name']] );
                $settings[$category][$name]['value'] = $values[$itm['name']];
            }
        }

        /* To be implemented in a future version */
//        $versions[] = $timestamp;
        update_option(self::CURRENT_SETTINGS_OPTION, $values);
//        update_option(sprintf(self::SETTINGS_VERSION_PATT, $timestamp), $values);
//        update_option(self::VERSIONS_OPTION, $versions);
        $outputdir = $this->get_output_dir();
        if(!file_exists($outputdir)){
            mkdir($outputdir);
        }
        //require_once 'variables.php';
        
        $bootstrap = $this->generate_variables_less_file($settings);
        $filename = $outputdir . '/variables.less';
        file_put_contents($filename, $bootstrap);
        
        if(file_exists(get_stylesheet_directory() . '/less/bootstrap.less')){
            $source_dir = get_stylesheet_directory();
          
        }elseif(file_exists(get_template_directory() . '/less/bootstrap.less')){
            $source_dir = get_template_directory();          
        }
        
        if(isset($source_dir)){
            $source_less = $source_dir . '/less';
            $source = $source_less . '/bootstrap.less';
            $bootstrap = file_get_contents($source);
            $relpath = $this->get_relative_path($outputdir . '/', $source_less);
            $bootstrap = preg_replace('/@import\s+"(.+\.less)";/', sprintf('@import "%1$s/$1";', $relpath), $bootstrap);
            $bootstrap = preg_replace('/@import\s+"(.+\/)?variables\.less";/', '@import "variables.less";', $bootstrap);             
        }else{
            require_once 'bootstrap.php';
            $relpath = $this->get_relative_path($outputdir . '/', __DIR__ . '/less');
            $bootstrap = generate_bootstrap_less_file($relpath, $options);
        }
        
        $relpath = $this->get_relative_path($outputdir . '/', $source_dir);
        
        
        file_put_contents($outputdir . '/bootstrap.less', $bootstrap);
        
        $command = sprintf('%1$s %2$s/bootstrap.less', LESS_COMMAND, $outputdir);
        //var_dump($command);
        $bootstrap = shell_exec($command);
        //var_dump($bootstrap);
        if($bootstrap== null || strlen($bootstrap) === 0){
            $error = shell_exec(sprintf('%1$s %2$s/bootstrap.less 2>&1 1> /dev/null', LESS_COMMAND, $outputdir));
            printf('<div class="error"><p>An error occurred while compiling LESS. Message: %1$s </p></div>', $error);
        }else{
            $matches = array();
            $bootstrap = preg_replace('/url\s*\(["\']?([^\'"\)]+)["\']?\)/', sprintf('url("%1$s/$1")', $relpath), $bootstrap);
            $filename = sprintf('%1$s/bootstrap-%2$s.css', $outputdir, $timestamp);
            file_put_contents($outputdir . '/bootstrap.css', $bootstrap);
            file_put_contents($filename, $bootstrap);
            print '<div class="updated"><p>Updates Saved.</p></div>';
        }
        
        //unlink($outputdir . '/bootstrap.less');
        //unlink($outputdir . '/variables.less');
    }
    
    function get_output_dir(){
        $uploaddir = wp_upload_dir();
        return $uploaddir['basedir'] . '/wp-bootstrap-config';
    }
    
    function get_output_url(){
        $uploaddir = wp_upload_dir();
        $result = $uploaddir['baseurl'] . '/wp-bootstrap-config';
        $result = is_ssl()?str_replace('http://', 'https://', $result):$result;
        return $result;
    }

    function filter_styles($handles){
        global $wp_styles;
        $uploaddir = $this->get_output_dir();
        $filename = $uploaddir . '/bootstrap.css';
        if(is_admin() || !file_exists($filename)){return $handles;}
        foreach($handles as $h){
            $s = $wp_styles->registered[$h];
            if($h === 'bootstrap'){
                $s->src = $this->get_output_url() . '/bootstrap.css?cachetoken=' . filemtime($filename);
            }
        }
        
        return $handles;
    }
    
    function get_relative_path($from, $to)
    {
        $from     = explode('/', $from);
        $to       = explode('/', $to);
        $relPath  = $to;

        foreach($from as $depth => $dir) {
            // find first non-matching dir
            if($dir === $to[$depth]) {
                // ignore this directory
                array_shift($relPath);
            } else {
                // get number of remaining dirs to $from
                $remaining = count($from) - $depth;
                if($remaining > 1) {
                    // add traversals up to first matching dir
                    $padLength = (count($relPath) + $remaining - 1) * -1;
                    $relPath = array_pad($relPath, $padLength, '..');
                    break;
                } else {
                    $relPath[0] = './' . $relPath[0];
                }
            }
        }
        return implode('/', $relPath);
    }

    function generate_variables_less_file($settings){

        $list=array();
        foreach($settings as $key=>$val){
            foreach($val as $name=>$itm){
                $list[] = $itm;
            }
        }
        
        uasort($list, function($a, $b){
            return $a['order'] - $b['order'];
        });
        
        $output = '';
        foreach($list as $val){
            $output .= $val['name'] . ':' . $val['value'] . ";\n";
        }
        
        return $output;
    }
    
}

$bsconfig=new WPBootstrapConfig();