# Symfony5Base
# Framework: Symfony 5

#### First Install composer and Symfony CLI that will make your life easy as global 
--------------------------------------------------------------------------------
##### Install a  new project:
Skeleton has all the basic installaction packages
```
$ composer create-project symfony/website-skeleton my-project       
OR 
$  symfony new my_project_name --demo
$   symfony new my_project
$ composer create-project symfony/skeleton my_project
```

Go to the project  directory and check:
```
$ git status
$ git log
$ git show --name-only     ->exit: qq
$ symfony check:requirements
```
• Install a package into syfony:
	• Install internationalization : From <https://symfony.com/doc/current/components/intl.html
	$  composer require symfony/intl
• Creating a new project :  https://symfonycasts.com/screencast/symfony/setup
• To run server on browser : http://127.0.0.1:8000 , Our web project root directory should be in public folder
$  php -S 127.0.0.1:8000 -t public/

To get to know when the file modified: 
 ``` 
 git log -- src/Controller/ConferenceController.php
 ```
To Run Server:
```
$ symfony server:start
symfony server:start -d
symfony server:stop
symfony open:local```


To Check autowired available services:
 ``` 
 php bin/console debug:autowiring
 ```
 
 Maker bundle only use to create CRUD by command Line: 
 ```symfony composer req maker --dev
 ```

Show all list that symfony make command can do: 
```$ symfony console list make
$symfony console make:entity Blog
$symfony console make:crud Blog
```

List of works php bin/console can do:
 ```$php bin/console
 ```




