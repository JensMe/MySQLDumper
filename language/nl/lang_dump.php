<?php
$lang['dump_headline']="maak backup...";
$lang['gzip_compression']="GZip Compression";
$lang['saving_table']="Saving table ";
$lang['of']="of";
$lang['actual_table']="Huidige tabel";
$lang['progress_table']="Progress of table";
$lang['progress_over_all']="Overall Progress";
$lang['entry']="Entry";
$lang['done']="Gereed!";
$lang['dump_successful']="met succes aangemaakt.";
$lang['upto']="up to";
$lang['email_was_send']="Email was successfully sent to ";
$lang['back_to_control']="verder";
$lang['back_to_overview']="Database overzicht";
$lang['dump_filename']="Backup bestand";
$lang['withpraefix']="with prefix";
$lang['dump_notables']="Er zijn geen tabellen in de Databank '<b>%s</b>' gevonden.";
$lang['dump_endergebnis']="Er zijn <b>%s</b> tabellen met <b>%s</b> Databankentries opgeslagen.<br>";
$lang['mailerror']="Sending of email failed!";
$lang['emailbody_attach']="In de bstandsaanhang vind u een backup van uw MySQL-Database.<br>Backup van de Databank '%s' <br><br>Het volgende bestand is aangamaakt:<br><br>%s <br><br>Groetjes<br><br>MySQLDumper<br>";
$lang['emailbody_mp_noattach']="A Multipart Backup was created.<br>The Backup files are not attached to this email!<br>Backup of Database `%s`
<br><br>Following Files were created:<br><br>%s
<br><br>Kind regards<br><br>MySQLDumper<br>";
$lang['emailbody_mp_attach']="A Multipart Backup was created.<br>The Backup files are attached to separate emails.<br>Backup of Database `%s`
<br><br>Following Files were created:<br><br>%s <br><br>Kind regards<br><br>MySQLDumper<br>";
$lang['emailbody_footer']="<br><br><br>Groetjes<br><br>MySQLDumper<br>";
$lang['emailbody_toobig']="The Backup file exceeded the maximum size of %s and was not attached to this email.<br>Backup of Database `%s`
<br><br>Following File was created:<br><br>%s
<br><br>Kind regards<br><br>MySQLDumper<br>";
$lang['emailbody_noattach']="Files are not attached to this email!<br>Backup of Database `%s`
<br><br>Following File was created:<br><br>%s
<br><br>Kind regards<br><br>MySQLDumper<br>";
$lang['email_only_attachment']=" ... attachment only.";
$lang['tableselection']="Table selection";
$lang['selectall']="Select All";
$lang['deselectall']="Keuses opheffen";
$lang['startdump']="Start Backup";
$lang['lastbufrom']="last update from";
$lang['not_supported']="This backup doesn't support this function.";
$lang['multidump']="Multidump: Backup of <b>%d</b> Databases done.";
$lang['filesendftp']="send file via FTP... please be patient. ";
$lang['ftpconnerror']="FTP connection not established! Connection with ";
$lang['ftpconnerror1']=" as user ";
$lang['ftpconnerror2']=" not possible";
$lang['ftpconnerror3']="FTP Upload failed! ";
$lang['ftpconnected1']="Connected with ";
$lang['ftpconnected2']=" on ";
$lang['ftpconnected3']=" transfer successful";
$lang['nr_tables_selected']="- with %s selected tables";
$lang['nr_tables_optimized']="<span class=\"small\">%s tables have been optimized.</span>";
$lang['dump_errors']="<p class=\"error\">%s errori riscontrati: <a href=\"log.php?r=3\">verdere</a></p>";
$lang['fatal_error_dump']="Fatal error: the CREATE-Statement of table '%s' in database '%s' couldn't be read!<br>
Check this table for errors.";


?>