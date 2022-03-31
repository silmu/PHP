<?php
$path = 'img/logo.png';
$pathinfo = pathinfo($path);
?>
<?php include 'includes/header.php'; ?>

<p><?= "File type: " .filetype($path);?></p>
<p><?= "Writable: " .is_writable($path);?></p>
<p><?= "Readable: " .is_readable($path);?></p>
<p><?= "Time stamp: " .filemtime($path);?></p>
<p><?= "File name: " .$pathinfo['filename'];?></p>
<p><?= "Basename: " .$pathinfo['basename'];?></p>
<p><?= "Extension: " .$pathinfo['extension'];?></p>
<p><?= "Directory: " .$pathinfo['dirname'];?></p>
<p><?= "MIME type: " .mime_content_type($path);?></p>
<p><?= "Size: " .filesize($path) . ' bytes';?></p>
<p><?= "Path to file: " . realpath($path);?></p>


<?php include 'includes/footer.php'; ?>