# PHP Challenge

## Required enviroment

You will require:
* PHP 7.3+ (7.4 recommended)
* Apache Server
* Enable php sockets extension on php.ini file
* Mysql
* Composer
(An easy way is to install XAMPP/LAMPP as have almost all required items. Laragon is also a good option for windows users for easy virtual hosts.)

## Getting the code

Move to the folder where you will host the app (/opt/lampp/htdocs in case of lampp. c/laragon/www in case of laragon)
Run the next statement (replacing "folder_name"):
`git clone https://github.com/eagiraldor94/PHP_challenge "folder_name"`

## Installing the app

Run: `composer install` to get the packages

## Creating database and data

Go to your Mysql client and create a new database

Use the ".env.sample" file to create a ".env" file. Is mandatory to fill details related to database, JWT secret (any string you want), and Swift mailer details. Also please note you will require an active ssl certificate (even if self signed) in order swift_mailer works properly. (Suggested laragon for certs, and gmail with application password).

Run the seeders (path based on project root "folder_name"):
* `php database/create_users_table.php`
* `php database/create_tickers_table.php`
* `php database/create_logs_table.php`

Note: remember to setup you virtual host at public folder.

# App Usage

## Available Endpoints

### User creation
METHOD: POST 
PATH: '/user/create' 
REQUIRED PARAMS(body):
	- name: string
	- email: string with email format
	- username: string
	- password: string

**Screenshot of postman request for user creation**
![User_Creation](https://deletreamos.com/images/userCreate1.png)

### User login (to get JWT Token)
METHOD: POST 
PATH: '/user/login' 
REQUIRED HEADERS: 
	- Authentication: Basic http auth ("Basic base64_encode(user:password)")

**Screenshot of postman request for user login (Obtaining JWT)**
![User_Login](https://deletreamos.com/images/userLogin1.png)

### Stock request
METHOD: GET 
PATH: '/stock' 
REQUIRED HEADERS: 
	- Authentication: JWT ("Bearer JWT_token")
REQUIRED PARAMS(url):
	- q: string with the ticker or symbol of the stock

**Screenshot of postman request for stock (Headers)**
![Stock_Headers](https://deletreamos.com/images/stock2.png)

**Screenshot of postman request for stock (Params)**
![Stock_Params](https://deletreamos.com/images/stock1.png)

### Historic request
METHOD: GET 
PATH: '/history' 
REQUIRED HEADERS: 
	- Authentication: JWT ("Bearer JWT_token")

**Screenshot of postman request for history (Headers)**
![History_Headers](https://deletreamos.com/images/history1.png)

## Available URL to use API
Api is already deployed in https://api.deletreamos.com and can be used for test purposes.

### Testing tips
* Postman recommended to test api endpoints.
* Swiftmailer parameters, specially smtp provider, ports and the ssl/tls configuration may cause an issue in email sending. Currently working at the provided URL.
