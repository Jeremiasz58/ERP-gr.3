<?php

function download($content, $filename = 'download.txt') {
    // Set the appropriate headers for file download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    
    // Output the content
    echo $content;
    
    // Exit to prevent any further output
    exit;
}

?>