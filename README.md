<p align="center">
    <h1 align="center">Yii 2 Advanced Project Template with 2amigos/Usuario Module</h1>
    <br>
</p>


## Steps to Install and Implement Yii2 Advanced Template with the 2amigos/Usuario module (for Windows)
### 1. Download and Install PHP IDE and Composer
- Reccomended PHP IDE is [PHP Storm](https://www.jetbrains.com/phpstorm/download/)
- [Composer download instructions](https://github.com/yiisoft/yii2/blob/master/docs/guide/start-installation.md#installing-composer)
### 2. Download and Install [Wamp Server (x64)](https://sourceforge.net/projects/wampserver/files/)
### 3. Install the [Yii2 Advanced Application Template using Composer](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md#installing-using-composer)
 - Install the template using Composer
 - Complete only steps 1 and 2 of the Preparing Application Section
   - To create a database, [use the command line and MySQL](https://www.a2hosting.com/kb/developer-corner/mysql/managing-mysql-databases-and-users-from-the-command-line)
   - The 'db' array should look something like this
   - >'db' => [
                'class' => 'yii\db\Connection',<br/>
                'dsn' => 'mysql:host=localhost;dbname=yii_app_db',<br/>
                'username' => 'Yii_User',<br/>
                'password' => 'heloworld',<br/>
                'charset' => 'utf8',<br/>
            ],
 
### 4. 



DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
