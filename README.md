# Inventory Management System (IMS)
- The Inventory Management System (IMS) is a project I developed during the summer of 2019, for the company Asia Cabs where I was interning
- This project was meant to be able to integrate into the company's intranet
- **This project is not meant to be deployed in any form! It is only a proof of concept I created for Asia Cabs**

## Features
1. Ability to withdraw and return inventory
2. Ability to see who is in possession of certain items
3. Ability to see inventory in real-time on a webpage, without having to refer to the database
4. Admins can directly add and remove inventory without having to do it in the database
5. Basic dashboard where admins can add notices and company-related news items
6. Users can change basic information, such as username, password and email without having to contact the Admin

## Prerequisites
1. Download and install [XAMPP](https://www.apachefriends.org/index.html)

## Installation
Pulling from github
1. Navigate to XAMPP's htdocs folder (C:\xampp\htdocs)
2. Pull project into folder

Downloading as zip file
1. Download zip and extract in XAMPP's htdocs folder (C:\xampp\htdocs)

Setting up the database
1. Open the XAMPP Control Panel
2. Start the Apache and MySQL modules
3. Click on the 'Admin' button for MySQL (This redirects you to the database webpage)
4. On the webpage, click 'Import'
5. Choose the file called ims.sql (this is in the inventory_management_system folder)
6. Click 'go' at the bottom of the webpage

## Usage
1. Before usage, XAMPP Control Panel must be opened
2. Start the Apache and MySQL modules
3. Open your preferred browser
4. Type http://localhost/inventory_management_system/index/landing.php into your search bar
5. Login using
```
username: admin
password: 12345
```
6. Alternatively you can choose to create your own account
