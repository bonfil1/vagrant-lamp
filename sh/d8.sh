#!/usr/bin/env bash

echo Commencing dumping the data...
/usr/bin/mysqldump -u root -p'vagrant' d8 > /vagrant/backup/d8.sql
echo Dumping data finished.