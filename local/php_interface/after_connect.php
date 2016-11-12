<?php
/* Ansible managed: /etc/ansible/roles/web/templates/after_connect.php.j2 modified on 2016-06-23 13:19:43 by root on dev.p-w-d.ru */
$DB->Query("SET NAMES 'utf8'");
$DB->Query('SET collation_connection = "utf8_unicode_ci"');
