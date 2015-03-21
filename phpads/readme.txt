// ----------------------------------------------------------------------
// Copyright (c) 2005- 2008 by Nile Flores
// PHPads Version 2.0 based on Pixelledads 1.0 by Nile Flores
// http://blondish.net/
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software for non-commercial usage; You cannot
// redistribute it, but you can modify it.  
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
//
//
// If you are a party that wishes to redistribute this script, you must
// obtain permission. If you are a 3rd party installer that makes money
// to sell a product that offers one-click install of PHPads, you will
// need to purchase a commercial license.
// ----------------------------------------------------------------------

Files:

admin.php
ads.inc.php
ads.php
click.php
stats.php
js.php
install.php
ads.dat
readme.txt


Requirements:

at least PHP4


Installation:


1. Open each of the following: admin.php, ads.php, click.php, js.php, and stats.php in a Notepad.
Edit the lines that read:
     $bannerAdsPath = '/home/yourdomain/Public_html/ads/ads.dat';
     require '/home/yourdomain/Public_html/ads/ads.inc.php';

You should change the absolute paths to coordinate your directory structure.

2. Upload all files, into a subfolder named "ads" or another name you have specified above.
All files should be uploaded in ASCII mode.

3. CHMOD ads.dat 777.

4. Visit install.php in your web browser (example: http://www.yourdomain.com/ads/install.php)
and follow the instructions given.

5. If you have done everything correctly, you should get no errors, so delete install.php from
your server.


Use:

Log in:

Username= admin
password= ads

------