<?php
// GroupDocs Comparison
// Version 1.0.0
//

// Usage:

// As a minimum, the snippet requires a GroupDocs Form ID
// [[GroupDocsComparison? &form=`towd9vZWDJgtowd9vZWDJgtowd9vZWDJ`]]

/* Parameters

Required - either one or the other must be supplied
--------
&form - 

Optional
--------
&width - width in pixels (default 600)
&height - height in pixels (default 800)
*/

//SETTINGS

$width = isset($width)?$width:600;
$height = isset($height)?$height:800;

if( !isset($form) ) {
	return;
}

$iframe = "<iframe src='http://apps.groupdocs.com/document-comparison/embed/$guid_embed/$guid_redline?&referer=modx/1.0.0' frameborder='0' width='" . $width . "' height='" . $height ."'></iframe>";
return $iframe;
?>
