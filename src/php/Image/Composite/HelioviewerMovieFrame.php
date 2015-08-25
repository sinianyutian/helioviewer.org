<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * Image_Composite_HelioviewerMovieFrame class definition
 *
 * @category Image
 * @package  Helioviewer
 * @author   Jeff Stys <jeff.stys@nasa.gov>
 * @author   Keith Hughitt <keith.hughitt@nasa.gov>
 * @license  http://www.mozilla.org/MPL/MPL-1.1.html Mozilla Public License 1.1
 * @link     https://github.com/Helioviewer-Project
 */
require_once HV_ROOT_DIR.'/src/php/Image/Composite/HelioviewerCompositeImage.php';

class Image_Composite_HelioviewerMovieFrame
   extends Image_Composite_HelioviewerCompositeImage {

    /**
     * Helioviewer movie frame
     */
    public function __construct($filepath, $layers, $events, $eventsLabels,
        $scale, $scaleType, $scaleX, $scaleY, $obsDate, $roi, $options) {

        parent::__construct($layers, $events, $eventsLabels, $scale,
            $scaleType, $scaleX, $scaleY, $obsDate, $roi, $options);

        $this->build($filepath);
    }
}
?>