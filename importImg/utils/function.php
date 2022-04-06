<?php
function get_file_extension($file) {
    return substr(strrchr($file,'.'),1);
}
?>