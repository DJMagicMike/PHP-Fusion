<?php
// Delete blacklisted user
$locale['400'] = "Удалить пользователя из чёрного списка";
$locale['401'] = "Пользователь удалён из чёрного списка";
$locale['402'] = "Вернуться в управление чёрным списком";
$locale['403'] = "Перейти в начало админпанели";
$locale['404'] = "Пожалуйста, введите IP-адрес или электропочту";
$locale['405'] = "Введённая электропочта не является корректным адресом.";
// Add/Edit Blacklist Titles
$locale['420'] = "Добавление в чёрный список";
$locale['421'] = "Изменить пользователя из чёрного списка";
// Add/Edit blacklist form
$locale['440'] = "Ввод IP-адреса позволяет предотвратить посещение сайта пользователями, у которых адрес совпадает с введённым.
Можно ввести как целый IP-адрес, например, <em>123.45.67.89</em>, так и его часть, например, <em>123.45.67</em> или <em>123.45</em>.
Пожалуйста, обратите внимание, что адреса IPv6 преобразуются на сайте в формат с полной длиной, 
то есть, адрес <em>ABCD:1234:5:6:7:8:9:FF</em> будет показак как <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Смешанные IP-адреса (содержащие части как IPv6, так и IPv4) не будут проверяться на частичное совпадение.
<br /><br />
Ввод адреса электропочты предотвращает регистрацию участников с ипользованием этого адреса.
Можно ввести как целый адрес, например, <em>foo@bar.com</em>, так и почтовый домен, например <em>bar.com</em>.";
$locale['441'] = "IP-адрес для блокирования: <strong>или</strong>";
$locale['442'] = "Адрес электропочты:";
$locale['443'] = "Причина добавления";
$locale['444'] = "Добавить в чёрный список";
// Current blacklisted users
$locale['460'] = "Пользователи в чёрном списке";
$locale['461'] = "Информация о блокировке";
$locale['462'] = "Действия";
$locale['463'] = "Изменить";
$locale['464'] = "Удалить";
$locale['465'] = "Чёрный список пустой.";
$locale['466'] = "Нет данных";
$locale['467'] = "Администратор";
$locale['468'] = "Дата";
/*
// IPv6 secific
$locale['480'] = "IPv6 options";
$locale['481'] = "The specified IPv6 address contains a shortcut (::) therefore cannot be determined unequivocally.";
$locale['482'] = "Which version would you use?";
$locale['483'] = "Save";
*/
?>