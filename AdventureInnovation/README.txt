HOW TO INSTALL

Before installation of local dev you need to have a webserver with php 7.0.23 installed!

On a Local Dev machine
======================
1. navigate to the source code zip (AdventureInnovation-NoVendor) and unzip it at the root of your web server
2. Go to https://getcomposer.org/
3. Click download and click the link in "Download and run Composer-Setup.exe"
4. Open the windows command prompt
5. navigate to where you unzipped the source code via the cd command (ex. cd C:\Bitnami\wampstack-7.0.23-0\apache2\htdocs\AdventureInnovation)
6. type composer install and laravel

IF errors occur:

Go to Laravel 5.5's installation guide:
-https://laravel.com/docs/5.5/installation

And follow the guide until step laravel create new. Do not run this command! Extract (AdventureInnovation) into the folder
where laravel was installed and navigate to localhost:8080/AdventureInnovation/public/ 


On shared hosting (Amazon Web Services)
=======================================

https://www.youtube.com/watch?v=ISVaMijczKc
