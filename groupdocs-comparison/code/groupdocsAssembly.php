<?php

class groupdocsComparison {
	
	public static function handle_shortcode($arguments, $url, $parser, $shortcode) {
		$width = 600 ;
		$height = 800;

		if(isset($arguments['width']) && !empty($arguments['width'])) {
			$width = $arguments['width'];
		}

		if(isset($arguments['height']) && !empty($arguments['height'])) {
			$height = $arguments['height'];
		}

		$grpComparison = new groupdocsComparison_Result($width, $height, $url);
		return $grpComparison->forTemplate();
	}
}
