#!/bin/bash
mkdir auth
dir="$(pwd)/auth"
cron="*/10 * * * * find $dir -mmin +5 -exec rm {} \;"
(crontab -l; echo "$cron") | crontab -
mv setup.sh .setup.sh
cat << EOF > remove.sh
rm -rf $dir
crontab -l | sed -e "s@$cron@@g" | crontab -
rm -f .setup.sh remove.sh
EOF
