<?php

class groupdocsComparison_Result extends ViewableData {
	protected $width = false;
	protected $height = false;
	protected $guid_embed = false;
	protected $guid_redline = false;

	
	public function __construct($width, $height, $guid_embed, $guid_redline) {
		$this->width = $width;
		$this->height = $height;
		$this->guid_embed = $guid_embed;
		$this->guid_redline = $guid_redline;
		parent::__construct();
	}
	
	public function forTemplate() {
		return "<iframe src='http://apps.groupdocs.com/document-comparison/embed/" . $this->guid_embed . "/" . $this->guid_redline . "?&referer=silverstripe/1.0.0' frameborder='0' width='" . $this->width . "' height='" . $this->height ."'></iframe>";
	}
	
}
