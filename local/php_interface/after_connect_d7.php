<?php
/* Ansible managed: /etc/ansible/roles/web/templates/after_connect_d7.php.j2 modified on 2016-06-23 13:19:43 by root on dev.p-w-d.ru */
$connection = \Bitrix\Main\Application::getConnection();

$connection->queryExecute("SET NAMES 'utf8'");
$connection->queryExecute("SET collation_connection = 'utf8_unicode_ci'");

