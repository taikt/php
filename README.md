# php
installation

1. mysql
apt-get install mysql-server
/etc/init.d/mysql start

--check running sockets
find / -type s
/*
/run/mysqld/mysqld.sock
*/

mysqladmin -u root -p status
/*
Enter password: 
mysqladmin: connect to server at 'localhost' failed
error: 'Access denied for user 'root'@'localhost' (using password: YES)'
*/
==> https://superuser.com/questions/603026/mysql-how-to-fix-access-denied-for-user-rootlocalhost

-- Testing MySQL
systemctl status mysql.service
mysqladmin -p -u root version

2. apache2
sudo apt-get install apache2

--testing apache
open web brower, 
http://localhost/

3. php7
-- install php
==> https://askubuntu.com/questions/705880/how-to-install-php-7

-- install phpmyadmin
==> https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-16-04

==> run http://localhost/phpmyadmin/
[usr: root, pw: quehuong123, set when mysql setup]

-- test php
cd /var/www/html/
vi checkphp.php
<?php
	phpinfo();
?>
run localhost/checkphp.php

-- Changing apache2 document root
==> https://julienrenaux.fr/2015/04/06/changing-apache2-document-root-in-ubuntu-14-x/



