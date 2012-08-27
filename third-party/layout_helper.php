<?php

JS::set_defaults(array(
	'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
	'modernizr2.6.1',
	'app'		
));

/*
* Class to faciliate easily printing out javascript
* @author Scott Dover <scott@madmonkinteractive.com>
* @since Tue May 29 10:06:16 EDT 2012
*/
class JS {
	public static $inst;
	/* The default javascript files...these are printed out on every page load */
	private $_defaults = null;
	private $_extra_js = array();
	private $_assets_root;
	private $_extra = '';
	
	private function __construct() {
		$this->_assets_root = site_url() . '/assets/';
	}
	
	public static function inst() {
		if ( ! self::$inst ) self::$inst = new self;
		return self::$inst;
	}
	
	public function set_defaults($array) {
		$obj = self::inst();
		$obj->_defaults = $array;
	}
	
	/*
	* This function adds a single file or array of files to the javascript queue
	* @author Scott Dover <scott@madmonkinteractive.com>
	* @since Tue May 29 10:07:02 EDT 2012
	* @returns <void> 
	*/
	public static function add($file_or_array) {
		$obj = self::inst();
		if (is_array($file_or_array)) $obj->_extra_js = array_merge($obj->_extra_js, $file_or_array);
		else $obj->_extra_js[] = $file_or_array;
	}
	
	/*
	* This outputs a single javascript files
	* @author Scott Dover <scott@madmonkinteractive.com>
	* @since Tue May 29 10:07:26 EDT 2012
	* @returns <void> 
	*/
	public static function prnt($script) {
		$obj = self::inst();
		$file = '';
		if (strpos($script, 'http://') !== FALSE) $file = $script;
		else $file = $obj->_assets_root.'js/'.$script.'.js'.$obj->_extra;
		echo '<script src="',$file,'" type="text/javascript"></script>',"\n";
	}
	
	/*
	* This outputs the javascript queue (invoked from application's footer)
	* @author Scott Dover <scott@madmonkinteractive.com>
	* @since Tue May 29 10:07:41 EDT 2012
	* @returns <void> 
	*/
	public static function output() {
		$obj = self::inst();
		$scripts = array_merge($obj->_defaults, $obj->_extra_js);
		foreach ($scripts as $script) {
			# Check for http://
			# Assume everything else lacks .js
			self::prnt($script);
		}
	}	
}

/*
* This class assists in printing out CSS 
* @author Scott Dover <scott@madmonkinteractive.com>
* @since Tue May 29 10:05:25 EDT 2012
*/
class CSS {
	public static function prnt($file) {
		$file = site_url() . '/assets/css/'.$file.'.css';
		echo '<link rel="stylesheet" type="text/css" href="',$file,'" />',"\n";
	}
}

/*
* This class assists in printing out LESS stylesheets
* @author Scott Dover <scott@madmonkinteractive.com>
* @since Tue May 29 10:05:10 EDT 2012
*/
class LESS {
	public static function prnt($file) {
		$file = site_url() . '/assets/css/'.$file.'.less';
		echo '<link rel="stylesheet/less" type="text/css" href="',$file,'" />',"\n";
	}
}
