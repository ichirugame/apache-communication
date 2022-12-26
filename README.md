# apache-communication
apacheの通信カウント
## 使い方
communication.shを定期的にcronとかで動かしてください。

communication.shは通常/var/www/html/www/gb.txtに出力されるため/var/www/html/に以外に出力したい場合は/var/www/html/www/gb.txtを変更してください。

変更した場合はindex.phpも変更してください。
## 使用したソースコード
apacheの転送量

https://blog.apar.jp/linux/3898/

バイトからMB,GBに変換

https://php-archive.net/php/filesize_unit/