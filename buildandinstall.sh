#!/bin/bash
phpize
./configure --enable-spotify
make
make install
/etc/init.d/apache2 restart
