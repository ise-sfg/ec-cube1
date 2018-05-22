 <?php
mb_output_handler("pass");
$file='/app/pdf/aaa.pdf';
header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename=download.pdf");
readfile($file);
exit();
//$path_parts = pathinfo('/app/pdf/aaa.pdf');
//echo $path_parts['basename'].'<br/>';
//echo $path_parts.'<br/>';
//header('Content-Type: application/pdf');
//header('Content-Disposition: inline; filename="' . $path_parts['basename'] . '"');
//header('Content-Length: ' . filesize($path_parts));
//readfile($pdf_path);
