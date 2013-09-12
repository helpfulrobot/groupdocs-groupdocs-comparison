<?php

class groupdocsComparison_Result extends ViewableData {
	protected $width = false;
	protected $height = false;
	protected $guid_embed = false;
	protected $guid_redline = false;

	
	public function __construct($width, $height, $guid_embed_redline) {
		$this->width = $width;
		$this->height = $height;
		$this->guid_embed_redline = $guid_embed_redline;
		parent::__construct();
	}
	
	public function forTemplate() {
		return "<iframe src='http://apps.groupdocs.com/document-comparison/embed/" . $this->guid_embed_redline . "?&referer=silverstripe/1.0.0' frameborder='0' width='" . $this->width . "' height='" . $this->height ."'></iframe>";
	}
	
}
