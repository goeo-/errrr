#!/bin/bash

mkdir auth
dir="$(pwd)/auth"
user="$(whoami)"
line="*/10 * * * * find $dir -mmin +5 -exec rm {} \;"
(crontab -u $user -l; echo "$line" ) | crontab -u userhere -
mv setup.sh .setup.sh