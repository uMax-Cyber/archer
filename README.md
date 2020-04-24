# ARCHERProject starting point

## Introduction

 ARCHER is a free open-source cloning/imaging solution/rescue suite. ARCHER can be used to image Windows XP, Vista, Windows 7, Window 8, and Windows 10 PCs using PXE, PartClone, and a Web GUI to tie it together. Includes features like memory and disk test, disk wipe, av scan, task scheduling, inventory management, and remote installation of software packages. Features can be triggered remotely from the web GUI, once the machine has been registered.

## Install stable version

0. Install and update your chosen linux server

1. Download the file(s)

* All that is needed to start installation is to download the files to perform the install. Choose one of the following methods you prefer;

  * **ZIP archive** `wget https://github.com/xstall/archer/archerproject/archive/master.zip; unzip master.zip`

  * **TAR/GZ archive** `wget https://github.com/xstall/archer/archerproject/archive/master.tar.gz; tar xzf master.tar.gz`

  * **git** `git clone https://github.com/xstall/archer/archerproject.git archerproject-master`

2. Run the install script **as root** and follow all prompts accordingly

```
sudo -i
cd /path/to/archerproject-master/bin
./installarcher.sh
```

3. Enjoy

## Install latest development version

0. Install and update your chosen linux server

1. Download the file(s)

* All that is needed to start the installation is to download the files to perform the install. Choose one of the following methods you prefer;

  * **git** `git clone https://github.com/xstall/archer/archerproject.git archerproject-dev-branch; cd archerproject-dev-branch; git checkout dev-branch` (**recommended if you want to keep up with current developments!**

  * **ZIP archive** `wget https://github.com/xstall/archer/archerproject/archive/dev-branch.zip; unzip dev-branch.zip`

  * **TAR/GZ archive** `wget https://github.com/xstall/archer/archerproject/archive/dev-branch.tar.gz; tar xzf dev-branch.tar.gz`

2. Run the install script **as root** and follow all prompts accordingly

```
sudo -i
cd /path/to/archerproject-dev-branch/bin
./installarcher.sh
```
3. Enjoy

All should now be installed and you can start configuring and registering systems. Please see: http://archerproject.org/wiki/index.php/Managing_ARCHER to assist you in setting up further.

There are many resources for assistance.
 - **Wiki:** http://archerproject.org/wiki for any information.
 - **Forum:** http://archerproject.org/forum.
 - **Email:** A Developer directly. If a dev permit it they have added themselves on the wiki/Credits page.

## Development

 Download the source with git and checkout the branch `dev-branch` for the latest code or a more specific feature branch you would like to help work on.

 As you are running a development branch, please post bugs to either:

 - A new issue on https://github.com/xstall/archer/archerproject/issues
 - https://forums.archerproject.org/category/17/bug-reports

 If you would like to create a pull request, please make the pull request into the `dev-branch` branch.
