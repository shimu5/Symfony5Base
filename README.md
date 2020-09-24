# Symfony5Base
# Framework: Symfony 5

First Install composer and Symfony CLI that will make your life easy as global and Xampp:
-------------------------------------------------------------------------------------------------------------------------------------
Install a  new project:
Skeleton has all the basic installaction packages
$ composer create-project symfony/website-skeleton my-project       
OR 
$  symfony new my_project_name --demo
$   symfony new my_project
$ composer create-project symfony/skeleton my_project

Go to the project  directory and check:

$ git status
$ git log
$ git show --name-only     ->exit: qq
$ symfony check:requirements

• Install a package into syfony:
	• Install internationalization : From <https://symfony.com/doc/current/components/intl.html
	$  composer require symfony/intl
• Creating a new project :  https://symfonycasts.com/screencast/symfony/setup
• To run server on browser : http://127.0.0.1:8000 , Our web project root directory should be in public folder
$  php -S 127.0.0.1:8000 -t public/


