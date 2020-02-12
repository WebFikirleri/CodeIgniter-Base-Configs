<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['useragent'] = 'CodeIgniter';
$config['protocol'] = 'smtp';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_crypto'] = 'ssl';
$config['smtp_host'] = 'smtp.googlemail.com';
$config['smtp_user'] = 'youremailname@gmail.com';
$config['smtp_pass'] = 'youremailpassword';
$config['smtp_port'] = 587; 
$config['smtp_timeout'] = 5;
$config['smtp_keepalive'] = FALSE;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 80;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['validate'] = FALSE;
$config['priority'] = 3;
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;
$config['dsn'] = FALSE;

/* End of file email.php */
/* Location: ./application/config/email.php */
