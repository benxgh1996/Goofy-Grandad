# Goofy-Grandad

The Goofy Grandad website is dedicated to facilitating Joe Heckstall's vision 
of love and happiness. It gives users an easy way to learn more about the 
philosophies and services of Joe (the Goofy Grandad) and connect with him for 
potential opportunities.

## Release Notes version Goofy-Grandad 1.0

### NEW FEATURES
- Made the questions on the FAQ page clickable by themselves to expand the answers.
- Created a separate page for contacting Joe about real estate opportunities 
(not essential to this project but requested by Joe).


### BUG FIXES
- Fixed Youtube icon only appearing in footer for one second after loading page.
- Fixed the booking button on the events page giving no response on click in 
certain browsers.
- Darkened the yellow color of “happiness” on the home page so that it does 
not appear washed out for some types of monitors. 
- Contact page no longer displays white flash on being redirected to from the 
events page and the reviews page.


### KNOWN BUGS
- When a user clicks on a question on the FAQ page, the page will reload and 
scroll back to top instead of staying on the question just clicked.

## Install Guide Goofy-Grandad 1.0

### PRE-REQUISITES

#### For all
- An up-to-date web browser:  Google Chrome, Firefox, Microsoft Edge, 
Internet Explorer, Safari, etc

#### For testing the website on a local server
- You must have PHP (with at least version 5) installed on your computer. 
You can view an installation guide from http://php.net/manual/en/install.php.
However, you might not need to install PHP separately, since many local web server
distributions can be installed bundled with PHP. See INSTALL for more details.
- You must have a web server installed on your computer and enable the web server 
to run PHP. See INSTALL for more details.

#### For testing the website on a remote server
- You must have access to a remote server.


### DEPENDENCIES
No dependent libraries required for running or testing this website.


### DOWNLOAD
1. Navigate to https://github.com/benxgh1996/Goofy-Grandad in your browser.
2. Click on the green **Clone or download** button on the right of the page.
3. Click **Download ZIP**, and save the Zip file to your preferred location.
4. Unzip the ZIP file. The unzipped file shall have a name of 
**Goofy-Grandad-master**. Rename it to **Goofy-Grandad**.

### BUILD
No build required for running or testing this website. 

### INSTALL
If you are not familiar with installing a local web server, here are some 
recommended approaches to doing so. Nowadays, some local web server 
distributions can be installed bundled with PHP, so you might not need to install 
PHP separately.

#### For macOS
Your operating system should already have an Apache web server and PHP pre-installed. 
To enable the pre-installed web server with PHP, follow the following steps:
1. Open the terminal.
2. Execute the command `cd /etc/apache2/`
3. Open **httpd.conf** in the current directory with an text editor, such as vim.
4. Uncomment the following line (remove #):<br />
`LoadModule php5_module libexec/apache2/libphp5.so`

Now the Apache web server on your macOS system should be able to run the PHP files 
of the Goofy Grandad website.




### RUN
Navigate to the directory that contains the index.php file on your server to access site.


### TROUBLESHOOTING
Use Google Chrome's Inspection tool for help debugging if scaling is not functioning as desired.