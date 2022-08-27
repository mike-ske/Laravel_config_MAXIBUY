
# Larvel Cache for MAXIBUY

A packeage to maintain database by imlplementing spatie library. This is a test package, a test library 
that implements Spiritix/LadaCache library.

## Requirements
- **php version 8**
- **laravel 9**
- **mysql (maria DB)**

## Setup and installation

1. clone the repository 
 **[git clone https://github.com/mike-ske/Laravel_config_MAXIBUY.git
]**

2. Create database and name it **maxibuy**
3. Set the **DB_NAME** in your **.env** file to **maxibuy**
4. Open **shell** / **cmd** in your code editor (vscode, sublime etc) run 
**php artisan migrate**
5. Run **php artisan optimize** 

## Implementation

Open **laravel tinker** and type the following

```shell
php artisan tinker

$user = User::find(2) // returns all users

$user->address()->address_name  // get address for a particular user

$user->profile()->name // get profile for a user


```

#### Built with love for MAXIBUY test project

