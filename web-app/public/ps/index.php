<?php
    define("notmain", "");
    include($_SERVER["DOCUMENT_ROOT"] . "/index.php");
?>
<!DOCTYPE html><html><head><title>PS!</title><meta name="viewport" content="width=device-width,initial-scale=1.0"><style>body{text-align:center;}form{margin:1%;}form *:not(:first-child){margin-top:1%;}form,form *{max-width:90%;}form,label{display:inline-block;padding:2px;border:2px solid #0000ff;}label{font-size:25px;background:none;font-weight:bold;}label:active{border-color:#0080ff;}</style></head><body><h1><a href="../" style="text-decoration:none;"><span style="color:#0000ff;">P</span><span style="color:#ff0000;">S!</span></a></h1><form method="post" enctype="multipart/form-data"><label for="a"><img width="32" height="32" src="../images/photovideo.svg">&nbsp;choose file(s)</label><br><input type="file" name="photovideo[]" accept="image/*,video/*" id="a" required multiple><br><label for="c"><img width="32" height="32" src="../images/uploadicon.svg">&nbsp;upload</label><br><button name="ps" id="c">upload</button><br><label style="font-size:16px;font-weight:normal;"><input type="checkbox" name="location" value="1" checked><img width="16" height="16" src="../images/location.svg"><img width="16" height="16" src="../images/uploadicon.svg">&nbsp;attach my location</label></form><form method="post"><label for="b"><img width="32" height="32" src="../images/link.svg">&nbsp;enter link</label><br><input type="url" name="filelink" id="b" required><br><label for="d"><img width="32" height="32" src="../images/uploadicon.svg">&nbsp;upload</label><br><button type="submit" name="ps" id="d">upload</button><br><label style="font-size:16px;font-weight:normal;"><input type="checkbox" name="location" value="1"><img width="16" height="16" src="../images/location.svg"><img width="16" height="16" src="../images/uploadicon.svg">&nbsp;attach my location</label></form></body></html>
<?php echoConsoleWarningScript(); ?>