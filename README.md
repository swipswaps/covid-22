# COVID-19 Stats

An [AppGini](https://bigprof.com/appgini/)-based app for analysis of COVID-19 (Coronavirus) infection stats.

Data source for this app is [humdata.org](https://data.humdata.org/dataset/novel-coronavirus-2019-ncov-cases). The app allows you to easily import new data through an easy import tool (we plan to automate this in future updates, but you can already automate the procedure using tools like [iMacros](https://imacros.net/)).

### [⇩ Download the latest release](https://github.com/bigprof-software/covid-19/releases/latest)

##### [_Changelog_](https://github.com/bigprof-software/covid-19/releases)

## Features

* View, explore and analyze COVID-19 daily stats (number of infections, recoveries and deaths) by country/province.

This application was created using AppGini, and therefore it shares the features of any AppGini application as well, including:

* Responsive Bootstrap apps that work beautifully on any device.
* Support for multiple users and user groups, with easy-to-configure per-table permissions.
* Quick and advanced search.
* Export your data to CSV to work on them in Excel or other spreadsheets.
* Import already-existing data from CSV files through a powerful import wizard.

*Disclaimer: AppGini itself is not an open source application, but applications generated by AppGini can be distributed as open source with any license of choice.*

## Installation

This is a PHP/MySQL web application that you run from a browser. You can install it either locally on your own PC, or to a web/intranet server.

### 1. Installing to a PC

#### System requirements

This application can be installed on Windows, Linux and MacOS. Before installing, you should have the following software set up and running:

* A webserver (Apache, IIS, nginx, ... etc)
* PHP 5.5 or higher.
* MySQL 5.5 and above; or MariaDB 5.1 and above.

If you don't have the above software installed, we recommend installing
[Xampp latest version](http://www.apachefriends.org/).

#### Installation steps

1. Download the latest release as a zip file from the download link at the top of this document.

2. Extract the contents of the zip file into a folder inside your document root. (*[more info about how to find your 'document root'](http://www.karelia.com/sandvox/help/z/Document_Root.html)*).

3. In your web browser, go to: `http://localhost/app-folder/` (change `app-folder` above to the name of the folder inside your document root where you extracted the zip in step 2).

4. You should now see the setup wizard in your browser. Just follow the steps!

### 2. Installing to a web/intranet server

#### System requirements

This application can be installed on both Windows and Linux servers. Before installing, make sure your server has the following software:

* PHP 5.5 or higher
* MySQL 5.5 and above; or MariaDB 5.1 and above.
	
Make sure your has access to a MySQL/MariaDB database. You might need to set up one in your server control panel. Please refer to your server documentation or the technical support staff	for help on this if necessary.

If your server has cPanel installed, here is a [screencast explaining how to install your application using cPanel](https://bigprof.com/appgini/screencasts/how-to-upload-your-appgini-web-application-to-a-web-server-using-ftp-and-cpanel).

#### Installation steps

1. Download the latest release as a zip file from the download link at the top of this document.

2. Extract the contents of the zip file and upload them to a folder inside your server document root. (*[more info about how to find your 'document root'](http://www.karelia.com/sandvox/help/z/Document_Root.html)*).

3. In your web browser, visit `http://server.com/app-folder/` (change `server.com` above to the actual domain name or IP address of your server, and change `app-folder` to the name of the folder inside your document root where you uploaded the files in step 2).

4. You should now see the setup wizard in your browser. Just follow the steps!

## Customization

Since this application was created using AppGini, you can easily customize it by opening the included AXP project file in AppGini. Examples of possible customization you can do from there include:

* [Changing the application theme](https://bigprof.com/appgini/screencasts/how-to-easily-change-your-appgini-application-theme).
* Adding more fields to existing tables, or entirely new tables to fit your use cases.
* Changing the options/behavior of any table/field in your application.
* For more details, check [the AppGini tutorials](https://bigprof.com/appgini/screencasts/).

You can also perform more advanced customization, like adding reports, changing validation rules, adding business logic, ... etc. through hooks. Please refer to the [hooks documentation](https://bigprof.com/appgini/help/advanced-topics/hooks) for more details.

_**Contributions to this project are always welcome :)**_
