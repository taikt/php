#php
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

-- access mysql cmd
mysql -u root -p (pw at)
mysql>

2. apache2
sudo apt-get install apache2

--testing apache
open web brower, 
http://localhost/

3. php7
-- install php
==> https://askubuntu.com/questions/705880/how-to-install-php-7

-- install phpmyadmin
==> https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04
https://stackoverflow.com/questions/37717174/warning-module-ini-file-doesnt-exist-under-etc-php-7-0-mods-available

==> run http://localhost/phpmyadmin/
[usr: root, pw: at, set when mysql setup]

==> error
- when openning table in db
"phpmyadmin - count(): Parameter must be an array or an object that implements Countable"
https://stackoverflow.com/questions/48001569/phpmyadmin-count-parameter-must-be-an-array-or-an-object-that-implements-co


-- test php
cd /var/www/html/
vi checkphp.php
<?php
	phpinfo();
?>
run localhost/checkphp.php

-- Changing apache2 document root
==> https://julienrenaux.fr/2015/04/06/changing-apache2-document-root-in-ubuntu-14-x/


-- remove php, apache, phpadmin
https://askubuntu.com/questions/906550/lamp-server-phpmyadmin-is-showing-demo-page

##Ref
https://en.wikipedia.org/wiki/Programming_languages_used_in_most_popular_websites
https://www.upwork.com/blog/2017/11/top-web-development-languages-2018/
https://www.fullstackacademy.com/blog/nine-best-programming-languages-to-learn-2018

--tutorial php
https://www.youtube.com/watch?v=yMclPkD4sQg&list=PLS1QulWo1RIZc4GM_E04HCPEd_xpcaQgg

--turorial javascript
https://www.youtube.com/watch?v=gdGmpTcNZXQ&list=PLr6-GrHUlVf96NLj3PQq-tmEB6woZjwEl&index=14



