set_error_handler("supportHandler", E_ALL);

function supportHandler ($errno, $msg, $file, $line) {
    if (error_reporting() == 0) {
    $msgtext = "\n".$msg." in file ".$file." on line ".$line." (number ".$errno.")";
    error_log($msgtext, 3, "/home/USER/domains/DOMAIN/public_html/shlog.log");
}
}
