<?php

/*

    Class that handles generating video thumbnails for various formats and encoders.

*/

class VideoThumbnail {
    function run($input, $output) {
        if ('which ffmpeg') { $this->ffmpeg($input,$output); }
    }

    private function passthrough($temp) {

    }

    function ffmpeg($input, $output = "auto") {
        $inputn = preg_replace('/\\.[^.\\s]{3,4}$/', '', $input); //Strip out extension.
        $output = ($output == "auto") ? THUMB_DIR . "/" . $inputn . ".jpg" : $output;

        //Command formatting.
        $quiet = '-v 0'; //A lot of stuff still pops up on the log.
        $cmd = "$quiet -y -i '$input' -vframes 1 -vf scale='min({$this->config['width']} \, iw):-1' $output";

        exec("ffmpeg $cmd", $status, $return);

        if ($return > 0) {
            error("FFmpeg encountered a problem ($return)<br>$cmd", $dest);
        } else {
            return $output;
        }
    }
}

?>