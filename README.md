# Goofy-Grandad

The Goofy Grandad website is dedicated to facilitating Joe Heckstall's vision 
of love and happiness. It gives users an easy way to learn more about the 
philosophies and services of Joe (the Goofy Grandad) and connect with him for 
potential opportunities.

## Release Notes version Goofy-Grandad 1.0

### NEW FEATURES
- Made the questions on the FAQ page clickable by themselves to expand the answers.
- Created a separate page for contacting Joe about real estate opportunities that is
accessible on www.goofygrandad.com/real-estate
(not essential to this project but requested by Joe).


### BUG FIXES
- Fixed Youtube icon only appearing in footer for one second after loading page.
- Fixed the booking button on the events page unresponsive in certain browsers.
- Modified the yellow color of “happiness” on the home page so that it does 
not appear washed out for certain types of monitors. 
- Fixed contact page displaying white flash on being redirected to from the 
events page and the reviews page.


### KNOWN BUGS
- When a user clicks on a question on the FAQ page, the page will reload and 
scroll back to top instead of staying on the question just clicked.

## Install Guide Goofy-Grandad 1.0

### PRE-REQUISITES

#### For all
- An up-to-date web browser:  Google Chrome, Firefox, Microsoft Edge, 
Internet Explorer, Safari, etc

#### For running the website on a local server
- You must have PHP (with at least version 5) installed on your computer. 
You can follow applicable installation guides from http://php.net/manual/en/install.php.
However, you might not need to install PHP separately, since many local web server
distributions can be installed bundled with PHP. See [INSTALL](https://github.com/benxgh1996/Goofy-Grandad/blob/master/README.md#install) for more details.
- You must have a web server installed on your computer and enable the web server 
to run PHP. See [INSTALL](https://github.com/benxgh1996/Goofy-Grandad/blob/master/README.md#install) for more details.

#### For running the website on a remote server
- You must have access to a remote server that has PHP installed.


### DEPENDENCIES
No dependent libraries required for running this website.


### DOWNLOAD
1. Navigate to https://github.com/benxgh1996/Goofy-Grandad in your browser.
2. Click on the green **Clone or download** button on the right of the page.
3. Click **Download ZIP**, and save the Zip file to your preferred location.
4. Unzip the ZIP file. The unzipped folder shall have a name of 
**Goofy-Grandad-master**. Rename it to **Goofy-Grandad**.

### BUILD
No build required for running this website. 

### INSTALL
If you are not familiar with installing a local web server, here are some 
recommended approaches to doing so. You do not need to install PHP separately if you
follow any of these approaches.

#### For macOS only
Your operating system should already have an Apache web server and PHP pre-installed. 
To enable the pre-installed web server with PHP, follow the following steps:
1. Open the terminal.
2. Execute the command `cd /etc/apache2/`
3. Open **httpd.conf** in the current directory with an text editor, such as vim.
4. Uncomment the following line (remove #):<br />
`LoadModule php5_module libexec/apache2/libphp5.so`

Now the Apache web server on your macOS system should be able to run the PHP files 
of the Goofy Grandad website.

#### For Windows/macOS/Linux
Install XAMPP, which is an Apache distribution containing PHP (so that you do not 
need to install PHP separately), from https://www.apachefriends.org/download.html. 
Documentations on installing and using XAMPP can be found on the same web page.


### RUN
#### Run the official Goofy Grandad website
- Navigate to www.goofygrandad.com in your browser to access the most updated 
official Goofy Grandad website.

#### Run the website using the pre-installed Apache server on macOS
1. Move the Goofy-Grandad folder to /Library/WebServer/Documents.
2. Open the terminal.
3. Run the command `sudo apachectl start`. You will need to type in your password 
to complete this command.
4. Open a new tab in a web browser.
5. Navigate to http://localhost/Goofy-Grandad/. Then you can see the website running.
6. To stop the Apache web server, run `sudo apachectl stop` in the terminal. 
You will need to type in your password again to complete this command.

#### Run the website using XAMPP on Windows
1. Locate where you have installed the **xampp** folder after downloading it.
2. Move the entire Goofy-Grandad folder into a folder called **htdocs** within the 
**xampp** folder.
3. Run XAMPP by double clicking on the file **xampp_start.exe**, located in the 
**xampp** folder. The XAMPP control panel should pop up shortly after.
4. Next to the Apache module on the XAMPP control panel, click the start button next to 
it to start running your local server. Verify that the Apache text turns green 
after clicking start (you may have to wait a few seconds for it to turn from 
yellow to green).
5. Enter http://localhost/Goofy-Grandad/index.php into your browser to access 
the Goofy Grandad website.

Please reference https://www.apachefriends.org/faq_windows.html for more information
about using XAMPP on Windows.

#### Run the website using XAMPP on Linux/macOS
Running XAMPP on Linux/macOS is similar to running XAMPP on Windows. You need to 
1. Move the Goofy-Grandad folder into the htdocs directory under the corresponding 
XAMPP directory
2. Run XAMPP
3. Use your browser to navigate to http://localhost/Goofy-Grandad/index.php to view
the website

For details on how to locate the corresponding XAMPP directories and 
how to run XAMPP on the respective operating systems, please reference
- For Linux: https://www.apachefriends.org/faq_linux.html
- for macOS: https://www.apachefriends.org/faq_osx.html

#### Run the website using a remote web server
1. You need to make sure the remote web server supports PHP of at least version 5.
2. Consult with the remote web server provider about how to host and access a website 
on that server.


### TROUBLESHOOTING
- If the website is not displaying correctly, make sure you are not using an 
out-of-date browser (such as older versions of Internet Explorer).
- If the Facebook timeline on the events page is scaling incorrectly, refresh 
the web page. The third-party code provided by Facebook only allows the Facebook
timeline to be rescaled after the web page is loaded.
- If the contact form notifies you of an email sending failure, verify that you are 
connected to the Internet and try again.
- If the embedded youtube video is not displaying, verify that the video link 
is still valid.
- If the website is taking a long time to load when you run it locally, restart
your local web server and refresh the website on your browser.
- If you have made changes to the web page and the changes are not being reflected 
after you refresh the page on the browser, restart your local web server and refresh 
the page again.
