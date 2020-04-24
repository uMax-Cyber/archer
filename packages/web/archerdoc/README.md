# ARCHERProject starting point

## Introduction

 ARCHER is a free open-source cloning/imaging solution/rescue suite. ARCHER can be used to image Windows XP, Vista, Windows 7 and Window 8 PCs using PXE, PartClone, and a Web GUI to tie it together. Includes features like memory and disk test, disk wipe, av scan & task scheduling.

## Install Stable

0. Install and update your chosen linux server

1. Download the file(s)

 - All that is needed to start installation is to download the files to perform the install. Choose one of the following methods you prefer;

 - **git** ` git clone https://github.com/xstall/archer/archerproject.git archer_stable/`

2. Go into the downloaded source/bin folder

 - `cd archer_stable/bin`

3. Run the Install and follow all prompts accordingly

 - `sudo ./installarcher.sh`

4. Enjoy

## Install Development AKA trunk

0. Install and update your chosen linux server


1. Download the file(s)

 - All that is needed to start installation is to download the files to perform the install. Choose one of the following methods you prefer;

2. Go into the downloaded source/bin folder

 - ### Initial setup

 - **git** `git clone https://github.com/xstall/archer/archerproject.git trunk/; git checkout dev-branch; cd trunk/bin/`

 - **Update setup**

 - **git** `cd trunk/; git pull; cd bin/`

3. Run the Install and follow all prompts accordingly

 - **Manual prompts** (NOTE: Recommended to run this if fresh install)

 - `sudo ./installarcher.sh`

 - **Auto-Accepted**

 - `sudo ./installarcher.sh -y`

4. Enjoy

All should now be installed and you can start configuring and registering systems. Please see: http://archerproject.org/wiki/index.php/Managing_ARCHER to assist you in setting up further.

There are many resources for assistance.
 - **Wiki:** http://archerproject.org/wiki for any information.
 - **Forum:** http://archerproject.org/forum.
 - **Email:** A Developer directly. If a dev permit it they have added themselves on the wiki/Credits page.

## Development

 Download the source with git and checkout the `working` for the latest code or a more specific feature branch you would like to help work on.

 As you are running a development branch, please post bugs to either:

 - A new issue on https://github.com/xstall/archer/archerproject/issues
 - https://forums.archerproject.org/category/17/bug-reports

 If you would like to create a pull request, please make the pull request into the `working` branch.
