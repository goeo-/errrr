#pythech-repo

password protected repo script

##setup

* Make a regular apt repo.
* Edit `.htaccess` and change `/beta/` with the directory (under the website directory) your repo is in. (e.g. if your repo is at `https://goeo.pink/wowsupersecretrepo` make it `/wowsupersecretrepo/`)
* Edit `config.php`, what you should do are //commented
* Edit your `Packages` file, add `Depiction: https://link-to-your-re.po/depiction.php` to every package. If your package already has a depiction, make it `https://link-to-your-re.po/depiction.php?iframe=<olddepiction>`
* Move all the files to the repo directory
* Create an `auth` directory at the root of your repo
* Make whoever runs php able to write to auth, you can usually 
`chown $(whoami):www-data; chmod u+rwx,g+rwx,o+rx-w`

##todo

* google authenticator 2/1fa support
* different users for each package
* remove last step from setup; add it to the setup script
