You can send mail from localhost with sendmail package , sendmail package is inbuild in XAMPP. So if you are using XAMPP then you can easily send mail from localhost.

for example you can configure C:\xampp\php\php.ini and c:\xampp\sendmail\sendmail.ini for gmail to send mail.

in C:\xampp\php\php.ini find extension=php_openssl.dll and remove the semicolon from the beginning of that line to make SSL working for gmail for localhost.

in php.ini file find [mail function] and change

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = informasi.bsm@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
Now Open C:\xampp\sendmail\sendmail.ini. Replace all the existing code in sendmail.ini with following code

[sendmail]

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=informasi.bsm@gmail.com
auth_password=#2Juni2012
force_sender=informasi.bsm@gmail.com


link to auth google open access unsecure app
https://www.google.com/settings/u/0/security/lesssecureapps