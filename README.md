#pythech-repo

password protected repo script

![LEAK ENDER](http://i.imgur.com/pM2z1GN.png)

##setup

* make a regular apt repo.
* edit `.htaccess` and change `/beta/` with the directory (under the website directory) your repo is in. (e.g. if your repo is at `https://goeo.pink/wowsupersecretrepo` make it `/wowsupersecretrepo/`)
* edit `config.php`, what you should do are //commented
* edit your `Packages` file, add `Depiction: https://link-to-your-re.po/depiction.php` to every package. If your package already has a depiction, make it `https://link-to-your-re.po/depiction.php?iframe=<olddepiction>`
* move all the files to the repo directory
* run `setup.sh`
* make whoever runs php able to write to auth, you can usually 
`chown $(whoami):www-data; chmod u+rwx,g+rwx,o+rx-w`

##todo

* google authenticator 2/1fa support
* different users for each package
* remove last step from setup; add it to the setup script
