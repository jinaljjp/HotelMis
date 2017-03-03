<?php
print "<br/><b>PHP date() with date format characters returns.</b><br/>";
print date('d-m-y H:i:s');
print "<br/><br/><b>PHP date() with date constants returns.</b><br/>";
print date(DATE_ISO8601);

print "<br/><b>PHP gmdate() with date format characters returns.</b><br/>";
print gmdate('d-m-y H:i:s');
print "<br/><br/><b>PHP gmdate() with date constants returns.</b><br/>";
print gmdate(DATE_ISO8601);

print "<br/><br/><b>PHP getdate() returns current date components.</b><br/>";
$current_date_components = getdate();
print "<PRE>";
print_r($current_date_components);
print "</PRE>";

print "<br/><br/><b>PHP idate() returns two digit integer represents day.</b><br/>";
print idate('d');
print "<br/><br/><b>PHP idate() returns two digit integer represents month.</b><br/>";
print idate('m');
print "<br/><br/><b>PHP idate() returns four digit integer represents year.</b><br/>";
print idate('Y');
?>