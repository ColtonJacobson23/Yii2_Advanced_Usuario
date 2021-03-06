<p align="center">
    <h1 align="center">Yii 2 Advanced Project Template with 2amigos/Usuario Module</h1>
    <br>
</p>


## Steps to Install and Implement Yii2 Advanced Template with the 2amigos/Usuario module (for Windows)
### 1. Download and Install PHP IDE and Composer
- Recommended PHP IDE is [PHP Storm](https://www.jetbrains.com/phpstorm/download/)
- [Composer download instructions](https://github.com/yiisoft/yii2/blob/master/docs/guide/start-installation.md#installing-composer)
### 2. Download and Install [Wamp Server (x64)](https://sourceforge.net/projects/wampserver/files/)
 - In order to use PHP or MySQL from the command line, you must complete steps below __(For Windows 10)__:
   - Go into the environment variables for your computer, and under the __System Variables__, select the __Path__ variable, and click __Edit__ (click [here](https://www.java.com/en/download/help/path.xml) to learn how to find your environment variables)
   - Click __New__, and then in the text box, put the __absolute path__ of the __\wamp64\bin\php__ folder
   - Repeat the previous step, this time using the __absolute path__ of the __\wamp64\bin\mysql__ folder
   - Click __OK__, and exit out of the Environment Variables window
### 3. Install the [Yii2 Advanced Application Template using Composer](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/start-installation.md#installing-using-composer)
 - Install the template using Composer
 - Complete only steps 1 and 2 of the Preparing Application Section (do NOT apply the migration)
   - To create a database, [use the command line and MySQL](https://www.a2hosting.com/kb/developer-corner/mysql/managing-mysql-databases-and-users-from-the-command-line)
   - You will also need to create a database user, which is included in the link above
   - The 'db' array should look something like this
   - >'db' => [
                'class' => 'yii\db\Connection',<br/>
                'dsn' => 'mysql:host=localhost;dbname=database_name',<br/>
                'username' => 'database_user_name',<br/>
                'password' => 'database_password',<br/>
                'charset' => 'utf8',<br/>
            ],
#### Once you finish the database configurations, move the entire project file into the wamp64/www/folder, so that wamp will be able to recognize and run your website.
### 4. Download and Install the 2amigos/Usuario Module
 - Complete steps 1-2 [here](http://yii2-usuario.readthedocs.io/en/latest/installation/advanced-application-template/)
 - Configure the authManager
   - Go to __common/config/main.php__ in the template
   - Insert the code below into the 'components' array</br>
   >'authManager' => [</br>
   'class' => 'yii\rbac\DbManager',</br>
   ],</br>
 - Then exit out of the __common/config/main.php__ file and go to __frontend/config/main.php__ file
   - Inside the 'user' array, change the identity class from</br>
   'identityClass' => 'common\models\User' </br>
   to </br>
   'identityClass' => 'Da\User\Model\User'</br>
   - This will point the frontend to the Usuario User Class instead of the one provided by the Yii2 Advanced Template
   - To apply this to the backend as well, repeat previous step inside the __backend/config/main.php__ file
 - Then apply the followng migrations to your database from inside the project directory
   - Migrations should be done in the command line, proper commands are below<br/>
   yii migrate --migrationNamespaces=Da\User\Migration<br/>
   yii migrate --migrationPath=@yii/rbac/migrations<br/>
   yii migrate<br/>

### 5. Add the 'status' column to the User table in the database
 - Go into the MySQL interface in the command line
 - Switch to the database created in step 3
 - Type the following code to add the status column</br>
 >alter table user add column status smallint not null default 10;
### 6. Use the Usuario [list of available actions](http://yii2-usuario.readthedocs.io/en/latest/installation/available-actions/) to configure the template to access the Usuario module webpages
 - In the Frontend and Backend folders, go to the views/layouts/main.php file, and then use the list of available actions to replace current file-paths in the main.php files
 - Example:
   - Change:</br>$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];</br>to</br>
   $menuItems[] = ['label' => 'Signup', 'url' => ['/user/registration/register']];
### 7. Running the website
 - Click on the wamp64 application and run it
 - Using a browser, go to the URL localhost/project_file/frontend/web, which will take you to the frontend webpage of the template
 - To access the backend, repeat the URL above except use 'backend' instead of 'frontend'


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
