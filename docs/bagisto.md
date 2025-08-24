========================
CODE SNIPPETS
========================
TITLE: Run Bagisto Installation Script
DESCRIPTION: Starts the Bagisto installation process via the Artisan command. It handles database setup and initial configuration, prompting for details if the .env file is missing.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/introduction/installation.md#_snippet_1

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Access Bagisto on Production Server
DESCRIPTION: Example URL to access the Bagisto application on a production server after installation and configuration.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_6

LANGUAGE: text
CODE:
```
https://example.com/
```

----------------------------------------

TITLE: Run Composer Create (GUI Method 2)
DESCRIPTION: After manually downloading and extracting Bagisto, this command is run in the project root to finalize the Composer setup and install dependencies. It's an alternative to `create-project` when starting from a downloaded archive.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/installation.md#_snippet_1

LANGUAGE: sh
CODE:
```
composer create
```

----------------------------------------

TITLE: Bagisto Artisan Installer Prompts
DESCRIPTION: Examples of the questions asked by the `php artisan bagisto:install` command to configure application URL, admin URL, locale, timezone, currency, and database details.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_5

LANGUAGE: text
CODE:
```
- Please Enter the APP URL :
- Please Enter the Admin URL : 
- Please select the default locale or press enter to continue [en]:
- Please enter the default timezone [Asia/Kolkata]:
- Please enter the default currency [USD]:
- What is the database name to be used by Bagisto?:
- What is your database username?:
- What is your database password?:
```

----------------------------------------

TITLE: Run Bagisto Artisan Installer
DESCRIPTION: Executes the Bagisto-specific Artisan command to complete the installation process, including database migration and initial setup.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_4

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Run Bagisto Installer Artisan Command
DESCRIPTION: This command initiates the Bagisto command-line installer. It guides the user through configuring database connections, application settings, and creating the initial admin user, automating setup steps after the project files are in place.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Run Bagisto Artisan Installer
DESCRIPTION: Execute this Artisan command after creating the project via Composer to complete the command-line installation process, which includes database setup and initial configuration.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_3

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Serve Bagisto Locally
DESCRIPTION: Starts a local development server for Bagisto using the Artisan command, making the application accessible on your local device.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Access Bagisto GUI Installer Locally
DESCRIPTION: URL to open in a web browser to launch the Bagisto GUI installer after configuring the web server to point to the public directory.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_1

LANGUAGE: text
CODE:
```
http://localhost/bagisto/public/
```

----------------------------------------

TITLE: Access Bagisto GUI Installer Locally
DESCRIPTION: After configuring your HTTP server to point to the public directory, access this URL in your browser to launch the graphical installation wizard for Bagisto.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_1

LANGUAGE: url
CODE:
```
http://localhost/bagisto/public/
```

----------------------------------------

TITLE: Run Bagisto Installer Artisan Command
DESCRIPTION: Executes the Bagisto-specific Artisan command to complete the installation process, including database setup and initial configuration via interactive prompts.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_3

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Running Bagisto Docker Setup Script
DESCRIPTION: This Bash command executes the setup script, typically named `setup.sh`, which orchestrates the process of building and starting the Docker containers defined in the `docker-compose.yml` file.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/docker.md#_snippet_4

LANGUAGE: Bash
CODE:
```
sh setup.sh
```

----------------------------------------

TITLE: Starting Local Bagisto Server (PHP)
DESCRIPTION: Run this Artisan command from the project root to start a local development server for Bagisto. Ensure your HTTP server is configured to point to the 'public/' directory before running this command.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/installation.md#_snippet_3

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Start Local PHP Development Server
DESCRIPTION: Starts a local PHP development server for the Bagisto application, making it accessible via a local URL (usually http://localhost:8000).

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_4

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Create Bagisto Project using Composer (GUI Method 1 & Composer Install)
DESCRIPTION: This command uses Composer to create a new Bagisto project in the current directory. It downloads the necessary files and sets up the initial project structure. This is the primary method for starting a new Bagisto installation.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Start Local Development Server
DESCRIPTION: Use this Artisan command to quickly start a built-in PHP development server for Bagisto, making it accessible locally without needing a separate HTTP server configuration.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_5

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Start PHP Development Server for Bagisto
DESCRIPTION: Runs the Laravel Artisan command to start a local PHP development server, making the Bagisto application accessible via a local URL.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_7

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Start Local PHP Development Server (sh)
DESCRIPTION: Starts PHP's built-in development server to serve the Bagisto application locally. This command is useful for quickly testing the application without configuring a full web server like Apache or Nginx. Requires PHP to be installed.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/introduction/installation.md#_snippet_3

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Start Local PHP Development Server
DESCRIPTION: Use this Artisan command to quickly start a local development server for Bagisto. This is useful for testing the application without configuring a full web server like Apache or Nginx.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/introduction/installation.md#_snippet_3

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Create Bagisto Project using Composer (sh)
DESCRIPTION: Installs Bagisto by creating a new project directory and downloading the necessary files via Composer. This is a standard method for setting up a new Bagisto instance. Requires Composer to be installed.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Create Bagisto Project with Composer
DESCRIPTION: Use this command to create a new Bagisto project in the current directory using Composer. This is the standard way to initialize a Bagisto installation.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Run Bagisto Installation Script
DESCRIPTION: Execute the Bagisto-specific Artisan command to complete the installation process. This script handles database setup, configuration, and initial data population, prompting for necessary details like database credentials and admin user information.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Create Bagisto Project via Composer
DESCRIPTION: Use this command to create a new Bagisto project directory and download the core files using Composer. This is the standard way to initialize a new Bagisto installation.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Install Composer Dependencies for Bagisto
DESCRIPTION: Runs the Composer install command to download and install the project's dependencies as defined in the composer.json file.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer install
```

----------------------------------------

TITLE: Install Flutter Dependencies
DESCRIPTION: Runs the Flutter command to fetch and install all required packages and dependencies listed in the project's pubspec.yaml file.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_7

LANGUAGE: sh
CODE:
```
flutter pub get
```

----------------------------------------

TITLE: Install Bagisto Package Generator (Shell)
DESCRIPTION: Installs the Bagisto Package Generator using Composer. Run this command in the root directory of your Bagisto application.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/packages/create-package.md#_snippet_0

LANGUAGE: Shell
CODE:
```
composer require bagisto/bagisto-package-generator
```

----------------------------------------

TITLE: Serve Bagisto Locally using Artisan
DESCRIPTION: This command starts a local development server for the Bagisto application. It's a convenient way to test the application on your machine without configuring a separate web server like Apache or Nginx, typically serving from the `public/` directory.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/installation.md#_snippet_3

LANGUAGE: sh
CODE:
```
php artisan serve
```

----------------------------------------

TITLE: Install Flutter Dependencies
DESCRIPTION: Run this command within the Flutter project directory to fetch and install all required packages and dependencies listed in the project's pubspec.yaml file.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/introduction/installation.md#_snippet_6

LANGUAGE: sh
CODE:
```
flutter pub get
```

----------------------------------------

TITLE: Default Admin Credentials
DESCRIPTION: These are the default credentials provided for the admin user if you used the `php artisan bagisto:install` command during setup.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_7

LANGUAGE: text
CODE:
```
Email: admin@example.com
Password: admin123
```

----------------------------------------

TITLE: Run Bagisto Installer Artisan Command (sh)
DESCRIPTION: Executes the Bagisto-specific Artisan command to complete the installation process. This command handles database setup, configuration, and initial data population, often prompting for details like database credentials and admin user information. Requires PHP and Artisan to be available.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Create Bagisto Project via Composer (GUI Method 1)
DESCRIPTION: Runs the Composer command to create a new Bagisto project in the current directory. This is the first step for the GUI installation Method 1.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Install Bagisto Package Generator
DESCRIPTION: Installs the Bagisto Package Generator using Composer, adding it as a development dependency to the root of your Bagisto application.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/packages/create-package.md#_snippet_0

LANGUAGE: shell
CODE:
```
composer require bagisto/bagisto-package-generator
```

----------------------------------------

TITLE: Install Bagisto Package Generator (Shell)
DESCRIPTION: Use Composer to add the Bagisto Package Generator dependency to your project's root directory.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/packages/create-package.md#_snippet_0

LANGUAGE: shell
CODE:
```
composer require bagisto/bagisto-package-generator
```

----------------------------------------

TITLE: Install Bagisto using Composer
DESCRIPTION: Uses Composer, the PHP dependency manager, to create a new Bagisto project directory and download the necessary files.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Install Dependencies with Composer (Shell)
DESCRIPTION: Runs the Composer create-project command to install all necessary dependencies for the latest version of Bagisto.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/prologue/upgrade-guide.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project
```

----------------------------------------

TITLE: Run Bagisto Docker Setup Script (Bash)
DESCRIPTION: Execute this bash command to run the setup script. This script is responsible for starting the Docker containers defined in the docker-compose.yml file, setting up the necessary services to run Bagisto.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/docker.md#_snippet_1

LANGUAGE: bash
CODE:
```
sh setup.sh
```

----------------------------------------

TITLE: Creating Bagisto Project with Composer (Shell)
DESCRIPTION: Use this command in your terminal to create a new Bagisto project directory and download the necessary files using Composer. This is the standard method for installing Bagisto via Composer or as the first step for the GUI installer Method 1.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/installation.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Install Bagisto Dependencies (Composer)
DESCRIPTION: Runs the Composer `create-project` command to install the necessary dependencies for the new Bagisto version.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/prologue/upgrade-guide.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project
```

----------------------------------------

TITLE: Getting a Product by ID (Example) (Bagisto API)
DESCRIPTION: An example GET request to retrieve the product with ID 1 from the Bagisto API.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/products.md#_snippet_21

LANGUAGE: http
CODE:
```
GET http(s)://example.com/api/products/1
```

----------------------------------------

TITLE: Install Dependencies with Composer (Bagisto)
DESCRIPTION: Runs the Composer create-project command to install all necessary dependencies for the latest Bagisto version.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/prologue/upgrade-guide.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project
```

----------------------------------------

TITLE: Create Bagisto Project via Composer (Composer Method)
DESCRIPTION: Initiates the creation of a new Bagisto project using Composer. This is the initial step when installing Bagisto directly via Composer.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Running Bagisto Installation Artisan Command (PHP)
DESCRIPTION: Execute this Artisan command from the project root directory after creating the project with Composer. It initiates an interactive installation process to configure the database, application settings, and create the initial admin user.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
php artisan bagisto:install
```

----------------------------------------

TITLE: Running Bagisto Docker Setup Script
DESCRIPTION: This command executes the `setup.sh` script, which is responsible for starting the Docker containers defined in the `docker-compose.yml` file and potentially performing other setup tasks for the Bagisto application.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/introduction/docker.md#_snippet_4

LANGUAGE: bash
CODE:
```
sh setup.sh
```

----------------------------------------

TITLE: Run Composer Create (Method 2)
DESCRIPTION: After downloading and extracting Bagisto manually, navigate to the project root and run this command. Note: 'composer create' might be a typo and 'composer install' is typically used after cloning or extracting.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/introduction/installation.md#_snippet_1

LANGUAGE: sh
CODE:
```
composer create
```

----------------------------------------

TITLE: Get Flutter Package Dependencies (sh)
DESCRIPTION: Fetches all the packages listed as dependencies in the 'pubspec.yaml' file for the Flutter project. This command downloads and installs the required libraries and tools for the mobile application. Requires Flutter and Dart SDKs to be installed and configured.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/introduction/installation.md#_snippet_6

LANGUAGE: sh
CODE:
```
flutter pub get
```

----------------------------------------

TITLE: Install Flutter Dependencies
DESCRIPTION: Run this command within the mobile app project directory to fetch and install all required Flutter packages and dependencies listed in the project's pubspec.yaml file.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_11

LANGUAGE: sh
CODE:
```
flutter pub get
```

----------------------------------------

TITLE: Access Customer Registration Page
DESCRIPTION: Customers can register for a new account by visiting this URL path on your Bagisto domain.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_8

LANGUAGE: url
CODE:
```
https://example.com/customer/register
```

----------------------------------------

TITLE: Create New Bagisto Project via Composer
DESCRIPTION: Uses Composer to create a new Bagisto project in the current directory, downloading the latest stable version.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
composer create-project bagisto/bagisto
```

----------------------------------------

TITLE: Run Composer Create Command (sh)
DESCRIPTION: Executes the 'composer create' command. This command is typically used to create a project from a package and is part of a manual installation process after downloading a zip file. Requires Composer to be installed.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/introduction/installation.md#_snippet_1

LANGUAGE: sh
CODE:
```
composer create
```

----------------------------------------

TITLE: Installing Flutter Dependencies (Shell)
DESCRIPTION: Navigate into the cloned Bagisto mobile app project directory and run this command to fetch and install all the required packages and dependencies listed in the project's pubspec.yaml file.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/installation.md#_snippet_6

LANGUAGE: sh
CODE:
```
flutter pub get
```

----------------------------------------

TITLE: Installing Bagisto Package Generator (Shell)
DESCRIPTION: Installs the Bagisto Package Generator Composer package into the root directory of your Bagisto application. This tool helps automate the creation of package boilerplate.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/packages/create-package.md#_snippet_0

LANGUAGE: shell
CODE:
```
composer require bagisto/bagisto-package-generator
```

----------------------------------------

TITLE: Install Bagisto Package Generator (Shell)
DESCRIPTION: Installs the Bagisto Package Generator Composer package into the root directory of your Bagisto application. This tool helps automate the package creation process.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/packages/create-package.md#_snippet_0

LANGUAGE: shell
CODE:
```
composer require bagisto/bagisto-package-generator
```

----------------------------------------

TITLE: Run Composer Create (GUI Method 2)
DESCRIPTION: This command is listed as part of the GUI installation Method 2 after extracting the zip file. Note: This command appears incomplete and likely intended to be 'composer create-project bagisto/bagisto'.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_2

LANGUAGE: sh
CODE:
```
composer create
```

----------------------------------------

TITLE: Install Bagisto via Sail Artisan
DESCRIPTION: Runs the Bagisto installation command using the `artisan` command within the Sail PHP container. This command sets up the database, runs migrations, and performs other necessary installation steps.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/sail.md#_snippet_8

LANGUAGE: Bash
CODE:
```
vendor/bin/sail artisan bagisto:install
```

----------------------------------------

TITLE: Install Bagisto Dependencies sh
DESCRIPTION: Runs the composer create-project command to install all necessary PHP dependencies for the latest Bagisto version.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/prologue/upgrade-guide.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project
```

----------------------------------------

TITLE: Install Bagisto Dependencies with Composer
DESCRIPTION: Runs the Composer command to create a new project, which effectively installs all required dependencies for the latest Bagisto version in the current directory.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/prologue/upgrade-guide.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project
```

----------------------------------------

TITLE: Installing Bagisto REST API Documentation (Bash)
DESCRIPTION: Running the Artisan command to configure and install the L5-Swagger documentation for the Bagisto REST API.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/api/getting-started-with-the-api.md#_snippet_2

LANGUAGE: bash
CODE:
```
php artisan bagisto-rest-api:install
```

----------------------------------------

TITLE: Run Bagisto Docker Setup Script
DESCRIPTION: This command executes the `setup.sh` script, which is used to start the Docker containers defined in the `docker-compose.yml` file after configuration adjustments have been made.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/docker.md#_snippet_4

LANGUAGE: bash
CODE:
```
sh setup.sh
```

----------------------------------------

TITLE: Verify Elasticsearch Installation (JSON Output)
DESCRIPTION: Example JSON response expected when accessing Elasticsearch via HTTP, confirming successful installation and providing version details.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/advanced/indexing-products-to-elasticsearch.md#_snippet_0

LANGUAGE: json
CODE:
```
{
  "name" : "webkul-pc",
  "cluster_name" : "elasticsearch",
  "cluster_uuid" : "suPotT8zQjCOlq9dteWKyQ",
  "version" : {
    "number" : "8.6.2",
    "build_flavor" : "default",
    "build_type" : "deb",
    "build_hash" : "2d58d0f136141f03239816a4e360a8d17b6d8f29",
    "build_date" : "2023-02-13T09:35:20.314882762Z",
    "build_snapshot" : false,
    "lucene_version" : "9.4.2",
    "minimum_wire_compatibility_version" : "7.17.0",
    "minimum_index_compatibility_version" : "7.0.0"
  },
  "tagline" : "You Know, for Search"
}
```

----------------------------------------

TITLE: Install Bagisto Package Generator (Shell)
DESCRIPTION: Installs the Bagisto Package Generator Composer package into your Bagisto application's root directory, adding it as a development dependency. This tool simplifies the process of creating new Bagisto packages.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/packages/create-package.md#_snippet_0

LANGUAGE: shell
CODE:
```
composer require bagisto/bagisto-package-generator
```

----------------------------------------

TITLE: Run Bagisto Docker Setup Script
DESCRIPTION: This bash command executes the `setup.sh` script, which is responsible for orchestrating the Docker setup process. It typically builds the images and starts the containers defined in the `docker-compose.yml` file.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/docker.md#_snippet_4

LANGUAGE: bash
CODE:
```
sh setup.sh
```

----------------------------------------

TITLE: Install Bagisto REST API Documentation (Shell)
DESCRIPTION: Execute this Artisan command to finalize the Bagisto REST API installation, which includes setting up the L5-Swagger documentation for both the admin and shop API endpoints.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/api/getting-started-with-the-api.md#_snippet_2

LANGUAGE: Shell
CODE:
```
php artisan bagisto-rest-api:install
```

----------------------------------------

TITLE: Run Flutter Project (sh)
DESCRIPTION: Builds and launches the Flutter application on a connected device or emulator.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/installation.md#_snippet_9

LANGUAGE: sh
CODE:
```
flutter run
```

----------------------------------------

TITLE: Install Bagisto Dependencies via Composer
DESCRIPTION: Runs the Composer create-project command to install all necessary dependencies for the new Bagisto version. This should be executed in the root directory of the extracted Bagisto folder.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/prologue/upgrade-guide.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project
```

----------------------------------------

TITLE: Running Composer Create Command (Shell)
DESCRIPTION: This command is specified as part of the GUI installer Method 2 after downloading and extracting the Bagisto zip file. Note that the command 'composer create' might be a typo in the source documentation and 'composer install' might be intended depending on the zip file contents.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/installation.md#_snippet_1

LANGUAGE: sh
CODE:
```
composer create
```

----------------------------------------

TITLE: Install Dependencies with Composer (Bagisto Upgrade)
DESCRIPTION: Run this command in the terminal from the root of the extracted Bagisto folder to install all necessary project dependencies for the latest version.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/prologue/upgrade-guide.md#_snippet_0

LANGUAGE: sh
CODE:
```
composer create-project
```

----------------------------------------

TITLE: Install Bagisto REST API Documentation
DESCRIPTION: Run this Artisan command to configure and install the L5-Swagger documentation for the Bagisto REST API endpoints.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/api/getting-started-with-the-api.md#_snippet_2

LANGUAGE: Shell
CODE:
```
php artisan bagisto-rest-api:install
```

----------------------------------------

TITLE: Clone Bagisto Mobile App Repository
DESCRIPTION: Clones the official Bagisto open-source mobile app repository from GitHub into the current directory.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_5

LANGUAGE: sh
CODE:
```
git clone https://github.com/bagisto/opensource-ecommerce-mobile-app.git
```

----------------------------------------

TITLE: Access Bagisto on Production Server
DESCRIPTION: This is the typical URL format to access your Bagisto store once it is deployed and configured on a production web server.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/introduction/installation.md#_snippet_4

LANGUAGE: url
CODE:
```
https://example.com/
```

----------------------------------------

TITLE: Installing Bagisto REST API via Composer (Bash)
DESCRIPTION: Command to install the Bagisto REST API package using Composer. This fetches the package from the repository.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/api/getting-started-with-the-api.md#_snippet_0

LANGUAGE: bash
CODE:
```
composer require bagisto/rest-api dev-master
```

----------------------------------------

TITLE: Example JSON Response for New Products Query
DESCRIPTION: Example JSON structure returned by the newProducts GraphQL query, showing the data format for a list of new products with their attributes.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/graphql-shop-api/homepage.md#_snippet_1

LANGUAGE: JSON
CODE:
```
{
     "data": {
        "newProducts": [
            {
                "id": "8",
                "sku": "e-book",
                "name": "e-book",
                "description": "<p>Home Decor Description<\/p>",
                "shortDescription": "<p>Home Decor Short Description<\/p>",
                "urlKey": "e-book",
                "new": true,
                "featured": true,
                "status": true,
                "visibleIndividually": true,
                "thumbnail": null,
                "price": 12.55,
                "cost": 11.5,
                "specialPrice": 11.3,
                "specialPriceFrom": "2021-02-08",
                "specialPriceTo": "2021-02-28",
                "weight": 5.2,
                "color": 3,
                "colorLabel": "Yellow",
                "size": 9,
                "sizeLabel": "XL",
                "locale": "en",
                "channel": "default",
                "productId": "8",
                "parentId": null,
                "minPrice": 11.295,
                "maxPrice": 11.295,
                "metaTitle": "Home Decor Meta Title",
                "metaKeywords": "Home Decor Meta Keywords",
                "metaDescription": "Home Decor Meta Description",
                "width": 30,
                "height": 24,
                "depth": 11,
                "product": {
                    "id": "8"
                },
                "variants": [],
                "parent": null,
                "createdAt": "2021-05-27 12:52:39",
                "updatedAt": "2021-05-27 12:52:39"
            },
            {
                "id": "12",
                "sku": "event-booking",
                "name": "Music Show",
                "description": "<p>Home Decor Description<\/p>",
                "shortDescription": "<p>Home Decor Short Description<\/p>",
                "urlKey": "music-show",
                "new": true,
                "featured": true,
                "status": true,
                "visibleIndividually": true,
                "thumbnail": null,
                "price": 12.55,
                "cost": 11.5,
                "specialPrice": null,
                "specialPriceFrom": null,
                "specialPriceTo": null,
                "weight": 5.2,
                "color": 3,
                "colorLabel": "Yellow",
                "size": 9,
                "sizeLabel": "XL",
                "locale": "en",
                "channel": "default",
                "productId": "12",
                "parentId": null,
                "minPrice": 11.295,
                "maxPrice": 11.295,
                "metaTitle": "Home Decor Meta Title",
                "metaKeywords": "Home Decor Meta Keywords",
                "metaDescription": "Home Decor Meta Description",
                "width": 30,
                "height": 24,
                "depth": 11,
                "product": {
                    "id": "12"
                },
                "variants": [],
                "parent": null,
                "createdAt": "2021-05-27 16:04:24",
                "updatedAt": "2021-05-27 16:04:24"
            },
            {
                "id": "9",
                "sku": "bundle-demo",
                "name": "Bundle Box",
                "description": "<p>Home Decor Description<\/p>",
                "shortDescription": "<p>Home Decor Short Description<\/p>",
                "urlKey": "bundle-demo",
                "new": true,
                "featured": true,
                "status": true,
                "visibleIndividually": true
            }
        ]
    }
}
```

----------------------------------------

TITLE: Install REST API Documentation - Artisan
DESCRIPTION: Run this Artisan command to configure and publish the necessary files for the L5-Swagger documentation for the Bagisto REST API endpoints.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/api/getting-started-with-the-api.md#_snippet_2

LANGUAGE: PHP
CODE:
```
php artisan bagisto-rest-api:install
```

----------------------------------------

TITLE: Example Response: Get Product Reviews API
DESCRIPTION: Example JSON response body returned by the GET /api/reviews endpoint when retrieving product reviews for a specific product ID.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/reviews.md#_snippet_7

LANGUAGE: JSON
CODE:
```
{
    "data": [
        {
            "id": 4,
            "title": "Great product & Service!!!",
            "rating": "4.0",
            "comment": "Beautiful bangles. Better than I expected.",
            "name": "John Doe",
            "status": "approved",
            "product": {...}
        },
        {
            "id": 3,
            "title": "Very good product.. Recommend to all",
            "rating": "5.0",
            "comment": "I have ordered 2 sets. The product i received was good, i loved it..",
            "name": "Peter Doe",
            "status": "approved",
            "product": {...}
        }
    ],
    "links": {...},
    "meta": {...}
}
```

----------------------------------------

TITLE: Example Response for Get Account Info Query (JSON)
DESCRIPTION: An example JSON response object returned by the 'accountInfo' GraphQL query, showing the structure and typical data fields for a customer account.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/graphql-shop-api/getting-started-with-the-api.md#_snippet_4

LANGUAGE: JSON
CODE:
```
{
    "data": {
        "accountInfo": {
            "id": "3",
            "firstName": "test",
            "lastName": "test",
            "name": "Test Test",
            "gender": null,
            "dateOfBirth": null,
            "email": "test@webkul.com",
            "phone": null,
            "password": "$2y$10$QSz44sL1TcKwNYBHcX6go.OIMjxN1eakuJnHYrB.Rj0jyM172yfXW",
            "apiToken": "wWFsZbvoXPdL0NdWxK4cR23SAd6UJnVDDqsMrBgYmUeJvoCzEJDl4b9rn7eR9ckFC5mIaZmVg9vmXamd",
            "customerGroupId": 2,
            "subscribedToNewsLetter": false,
            "isVerified": true,
            "token": "4274363173b91b41790653255c037bbd",
            "notes": null,
            "status": true,
            "createdAt": "2021-05-28 11:59:21",
            "updatedAt": "2021-05-28 11:59:21"
        }
    }
}
```

----------------------------------------

TITLE: Example Response for Getting Product Configurable Attributes and Variants (Bagisto API)
DESCRIPTION: An example JSON response showing the structure for configurable attributes, options, and variant prices returned by the Bagisto API.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/products.md#_snippet_25

LANGUAGE: json
CODE:
```
{
  "data": {
    "attributes": [
      {
        "id": 24,
        "code": "size",
        "label": "Size",
        "swatch_type": null,
        "options": [
          {
            "id": 7,
            "label": "M",
            "swatch_value": null,
            "products": [4]
          }
        ]
      }
    ],
    "variant_prices": {
      "4": {
        "regular_price": {
          "formated_price": "$45.00",
          "price": 45
        },
        "final_price": {
          "formated_price": "$45.00",
          "price": 45
        }
      }
    }
  }
}
```

----------------------------------------

TITLE: Example JSON Response for Order Query
DESCRIPTION: Example JSON structure representing the response from the GraphQL order query, showing the paginator information and a sample order data entry. Note: This is a partial response example.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/graphql-admin-api/sales.md#_snippet_7

LANGUAGE: json
CODE:
```
{
   "data": {
      "orders": {
          "paginatorInfo": {
              "count": 1,
              "currentPage": 1,
              "lastPage": 1,
              "total": 1
          },
          "data": [
              {
                  "id": 1,
                  "incrementId": "1",
                  "status": "pending",
                  "channelName": "Default",
                  "isGuest": 1,
                  "customerEmail": "naresh.verma3271@webkul.com",
                  "customerFirstName": "Naresh",
                  "customerLastName": "Verma",
                  "customerCompanyName": null,
                  "customerVatId": null,
                  "shippingMethod": "flatrate_flatrate",
                  "shippingTitle": "Flat Rate - Flat Rate",
                  "shippingDescription": "Flat Rate Shipping",
                  "couponCode": null,
                  "isGift": 0,
                  "totalItemCount": 1,
                  "totalQtyOrdered": 1,
                  "baseCurrencyCode": "USD",
                  "channelCurrencyCode": "USD",
                  "orderCurrencyCode": "USD",
                  "grandTotal": 14.5,
                  "baseGrandTotal": 14.5,
                  "grandTotalInvoiced": 0,
                  "baseGrandTotalInvoiced": 0,
                  "grandTotalRefunded": 0,
                  "baseGrandTotalRefunded": 0,
                  "subTotal": 4.5,
                  "baseSubTotal": 4.5,
                  "subTotalInvoiced": 0,

```

----------------------------------------

TITLE: Generate Package using Artisan (Shell)
DESCRIPTION: Run this Artisan command to create the basic directory structure and files for a new package using the generator. Replace 'Webkul/Blog' with your desired vendor and package name.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/packages/create-package.md#_snippet_1

LANGUAGE: shell
CODE:
```
php artisan package:make Webkul/Blog
```

----------------------------------------

TITLE: Example GraphQL Response for Home Categories
DESCRIPTION: This JSON object shows an example response structure returned by the `homeCategories` GraphQL query, detailing a category with its attributes and translations.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/graphql-shop-api/homepage.md#_snippet_11

LANGUAGE: JSON
CODE:
```
{
    "data": {
        "homeCategories": [
            {
                "id": "2",
                "name": "Shop",
                "description": "<p>Test Category</p>",
                "slug": "shop",
                "urlPath": "shop",
                "image": "category/2/veI5gArm9nBKUFPwvvmmoRccLdtlJXhHBtaGzL4a.jpg",
                "imageUrl": "http://localhost/graphql/public/storage/category/2/veI5gArm9nBKUFPwvvmmoRccLdtlJXhHBtaGzL4a.jpg",
                "metaTitle": "",
                "metaDescription": "",
                "metaKeywords": "",
                "position": 1,
                "status": true,
                "displayMode": "products_and_description",
                "parentId": "1",
                "additional": null,
                "filterableAttributes": [
                    {
                        "id": "11",
                        "code": "price",
                        "adminName": "Price",
                        "type": "price",
                        "validation": "decimal",
                        "position": 13,
                        "isFilterable": 1
                    },
                    {
                        "id": "23",
                        "code": "color",
                        "adminName": "Color",
                        "type": "select",
                        "validation": null,
                        "position": 26,
                        "isFilterable": 1
                    },
                    {
                        "id": "24",
                        "code": "size",
                        "adminName": "Size",
                        "type": "select",
                        "validation": null,
                        "position": 27,
                        "isFilterable": 1
                    },
                    {
                        "id": "25",
                        "code": "brand",
                        "adminName": "Brand",
                        "type": "select",
                        "validation": null,
                        "position": 28,
                        "isFilterable": 1
                    }
                ],
                "translations": [
                    {
                        "id": "2",
                        "name": "Shop",
                        "slug": "shop",
                        "description": "<p>Test Category</p>",
                        "metaTitle": "",
                        "metaDescription": "",
                        "metaKeywords": "",
                        "category_id": "2",
                        "locale": "en",
                        "localeId": "1",
                        "urlPath": "shop"
                    },
                    {
                        "id": "3",
                        "name": "Shop",
                        "slug": "shop",
                        "description": "<p>Test Category</p>",
                        "metaTitle": "",
                        "metaDescription": "",
                        "metaKeywords": "",
                        "category_id": "2",
                        "locale": "nl",
                        "localeId": "3",
                        "urlPath": "shop"
                    },
                    {
                        "id": "4",
                        "name": "Shop",

```

----------------------------------------

TITLE: Creating BlogServiceProvider in PHP
DESCRIPTION: Defines the basic structure for a Bagisto package service provider, extending `Illuminate\Support\ServiceProvider` with empty `boot` and `register` methods. This file should be placed in the `src/Providers` directory of your package.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.1/packages/create-package.md#_snippet_8

LANGUAGE: php
CODE:
```
<?php

namespace Webkul\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
```

----------------------------------------

TITLE: Install Mobile App Dependencies with Flutter
DESCRIPTION: This command is run within the mobile app project directory to fetch and install all the dependencies listed in the project's `pubspec.yaml` file. It's a crucial step for setting up the Flutter development environment for the Bagisto mobile app.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/installation.md#_snippet_6

LANGUAGE: sh
CODE:
```
flutter pub get
```

----------------------------------------

TITLE: Example Response for Getting a Product by ID (Bagisto API)
DESCRIPTION: An example JSON response object returned by the Bagisto API when requesting a single product by its ID.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/products.md#_snippet_22

LANGUAGE: json
CODE:
```
{
  "data": {
    "id": 1,
    "type": "simple",
    "name": "Adorable Cream Teddy Bear",
    "url_key": "adorable-cream-teddy-bear",
    "price": "10.0000",
    "formated_price": "$10.00",
    "short_description": "<p>Buy Adorable Cream Teddy Bear online at best price<\/p>",
    "description": "<p>Buy Adorable Cream Teddy Bear online at best price<\/p>",
    "sku": "80971254",
    "images": [
      {}
    ],
    "base_image": {},
    "variants": [],
    "in_stock": true,
    "reviews": {},
    "is_saved": false,
    "created_at": "2020-09-08T23:52:02.000000Z",
    "updated_at": "2020-09-08T23:52:02.000000Z"
  }
}
```

----------------------------------------

TITLE: Manual PostRepository Setup (PHP)
DESCRIPTION: Example code for manually setting up the `PostRepository` class. It extends `Webkul\Core\Eloquent\Repository` and implements the `model()` method to specify the associated contract class (`Webkul\Blog\Contracts\Post`), which is used for database interactions.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/packages/store-data-through-repositories.md#_snippet_2

LANGUAGE: php
CODE:
```
<?php

namespace Webkul\Blog\Repository;

use Webkul\Core\Eloquent\Repository;

class PostRepository extends Repository
{
    /**
    * Specify the Model class name
    *
    * @return string
    */
    function model(): string
    {
        return 'Webkul\Blog\Contracts\Post';
    }
}
```

----------------------------------------

TITLE: Example: Get Attribute by ID 1 (HTTP)
DESCRIPTION: Concrete example demonstrating how to fetch the attribute with ID 1 using an HTTP GET request.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/attributes.md#_snippet_9

LANGUAGE: HTTP
CODE:
```
GET http(s)://example.com/api/attributes/1
```

----------------------------------------

TITLE: Get Attributes API Response Example
DESCRIPTION: An example of the JSON response returned by the 'Get Attributes' API endpoint, showing the data structure for attributes, pagination links, and metadata.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/attributes.md#_snippet_3

LANGUAGE: JSON
CODE:
```
{
    "data": [
        {
          "id":27,
          "code":"product_number",
          "type":"text",
          "name":"Product Number",
          "swatch_type":null,
          "options":[],
          "created_at":"2021-05-24T05:09:12.000000Z",
          "updated_at":"2021-05-24T05:09:12.000000Z"
        },
        {...},
        {...}
    ],
    "links": {
        "first": "https://example.com/api/attributes?page=1",
        "last": "https://example.com/api/attributes?page=3",
        "prev": null,
        "next": "https://example.com/api/attributes?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "links": [...],
        "path": "https://example.com/api/attributes",
        "per_page": 10,
        "to": 10,
        "total": 27
    }
}
```

----------------------------------------

TITLE: Example GET Route Definition (PHP)
DESCRIPTION: Demonstrates defining a basic route that responds to a GET HTTP request, mapping the '/posts' URL to the 'index' method of the `PostController`.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/packages/routes.md#_snippet_3

LANGUAGE: php
CODE:
```
// Define a route that responds to a GET request
Route::get('/posts', [PostController::class, 'index']);
```

----------------------------------------

TITLE: Example PHPDoc Block (PHP)
DESCRIPTION: An example of a valid PHPDoc block in Bagisto, demonstrating the required format for documenting functions and their parameters according to coding standards (PSR-2 and PSR-4).

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/prologue/contribution-guide.md#_snippet_1

LANGUAGE: php
CODE:
```
/**
 * Register a service with CoreServiceProvider.
 *
 * @param  string|array  $loader
 * @param  \Closure|string|null  $concrete
 * @param  bool  $shared
 */
protected function registerFacades($loader, $concrete = null, $shared = false): void
{
    //
}
```

----------------------------------------

TITLE: Example Response: Get All CMS Pages (GraphQL)
DESCRIPTION: Example JSON response showing the structure when querying multiple CMS pages via the GraphQL API. It includes details like translations, channels, and metadata for each page.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/graphql-admin-api/cms.md#_snippet_3

LANGUAGE: json
CODE:
```
{
    "data": {
        "cmsPages": [
            {
                "id": "9",
                "layout": null,
                "createdAt": "2021-05-05 15:36:49",
                "updatedAt": "2021-05-05 15:36:49",
                "translations": [
                    {
                        "id": "9",
                        "urlKey": "privacy-policy",
                        "metaDescription": "",
                        "metaTitle": "Privacy Policy",
                        "pageTitle": "Privacy Policy",
                        "metaKeywords": "privacy, policy",
                        "htmlContent": "<div class=\"static-container\"><div class=\"mb-5\">Privacy Policy page content</div></div>",
                        "locale": "en",
                        "cmsPageId": "9"
                    }
                ],
                "channels": [],
                "success": null
            },
            {
                "id": "10",
                "layout": null,
                "createdAt": "2021-05-05 15:36:49",
                "updatedAt": "2021-05-05 15:36:49",
                "translations": [
                    {
                        "id": "10",
                        "urlKey": "shipping-policy",
                        "metaDescription": "",
                        "metaTitle": "Shipping Policy",
                        "pageTitle": "Shipping Policy",
                        "metaKeywords": "shipping, policy",
                        "htmlContent": "<div class=\"static-container\"><div class=\"mb-5\">Shipping Policy  page content</div></div>",
                        "locale": "en",
                        "cmsPageId": "10"
                    }
                ],
                "channels": [],
                "success": null
            }
        ]
    }
}
```

----------------------------------------

TITLE: Run Flutter Project (Shell)
DESCRIPTION: Builds and deploys the Flutter application to a connected physical device or running emulator. This command compiles the code and launches the app.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/installation.md#_snippet_9

LANGUAGE: sh
CODE:
```
flutter run
```

----------------------------------------

TITLE: Install Bagisto REST API Documentation (Shell)
DESCRIPTION: Runs the Bagisto Artisan command to configure and install the L5-Swagger documentation for the REST API. This command sets up the necessary routes and files to access the API documentation.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/api/getting-started-with-the-api.md#_snippet_2

LANGUAGE: Shell
CODE:
```
php artisan bagisto-rest-api:install
```

----------------------------------------

TITLE: Navigate to Project Directory
DESCRIPTION: Use the cd command to change the current directory to the root of the cloned repository. Replace <repository-name> with the actual directory name created by git clone.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.0/introduction/installation.md#_snippet_5

LANGUAGE: sh
CODE:
```
cd <repository-name>
```

----------------------------------------

TITLE: Creating Blog Service Provider (PHP)
DESCRIPTION: Defines the basic structure for a Bagisto service provider for a blog package. It includes the `boot` and `register` methods required by the `ServiceProvider` class. This file is placed in the `src/Providers` directory of the package.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/packages/create-package.md#_snippet_8

LANGUAGE: php
CODE:
```
<?php

namespace Webkul\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
```

----------------------------------------

TITLE: Example Request URL - Orders API
DESCRIPTION: Example GET request URL to fetch orders for a specific customer ID with pagination parameters.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/orders.md#_snippet_9

LANGUAGE: http
CODE:
```
GET http(s)://example.com/api/orders?customer_id=2&limit=5&page=1
```

----------------------------------------

TITLE: Navigate to Project Directory (Shell)
DESCRIPTION: Changes the current directory in the terminal to the project's root directory. Replace `<repository-name>` with the actual name of the project folder.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_8

LANGUAGE: Shell
CODE:
```
cd <repository-name>
```

----------------------------------------

TITLE: Default Bagisto Admin Credentials
DESCRIPTION: Default email and password for the admin user created by the `php artisan bagisto:install` command.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.5.x/introduction/installation.md#_snippet_8

LANGUAGE: text
CODE:
```
Email: admin@example.com
Password: admin123
```

----------------------------------------

TITLE: Run Bagisto REST API Installation Command
DESCRIPTION: Executes the Artisan command provided by the Bagisto REST API package. This command typically handles database migrations, configuration publishing, and setting up the L5-Swagger documentation.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/api/getting-started-with-the-api.md#_snippet_2

LANGUAGE: Shell
CODE:
```
php artisan bagisto-rest-api:install
```

----------------------------------------

TITLE: Run Flutter Project (Shell)
DESCRIPTION: Builds and runs the Flutter application on a connected device or emulator. This command compiles the code and deploys it.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.2/introduction/installation.md#_snippet_10

LANGUAGE: Shell
CODE:
```
flutter run
```

----------------------------------------

TITLE: Install Bagisto via Sail Artisan
DESCRIPTION: Runs the Bagisto installation command using the Sail CLI's artisan command. This command executes the Bagisto installer within the running Sail PHP container.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/sail.md#_snippet_8

LANGUAGE: bash
CODE:
```
vendor/bin/sail artisan bagisto:install
```

----------------------------------------

TITLE: Install Laravel Sail via Composer (Existing Project)
DESCRIPTION: Installs Laravel Sail as a development dependency using the local Composer installation. This command is used when working on an existing project that already has Composer set up.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/sail.md#_snippet_1

LANGUAGE: bash
CODE:
```
composer require laravel/sail --dev
```

----------------------------------------

TITLE: Navigate Project Directory (sh)
DESCRIPTION: Changes the current directory to the project's repository folder. Replace <repository-name> with the actual directory name.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.3/introduction/installation.md#_snippet_7

LANGUAGE: sh
CODE:
```
cd <repository-name>
```

----------------------------------------

TITLE: Navigate to Project Directory (Shell)
DESCRIPTION: Changes the current directory in the terminal to the project's repository directory. Replace `<repository-name>` with the actual directory name where the project is located.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/master/introduction/installation.md#_snippet_7

LANGUAGE: sh
CODE:
```
cd <repository-name>
```

----------------------------------------

TITLE: JSON Example: Attribute Data Structure
DESCRIPTION: Example JSON structure representing an attribute with multiple options and translations, likely the attribute targeted for deletion in the subsequent example.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/graphql-admin-api/attributes.md#_snippet_14

LANGUAGE: JSON
CODE:
```
{
    "data": {
        "attribute": {
            "id": "28",
            "adminName": "Age Validation",
            "type": "select",
            "options": [
                {
                    "id": "12",
                    "adminName": "Option 1",
                    "swatchValue": null,
                    "sortOrder": 1,
                    "attributeId": "28",
                    "attribute": {
                        "id": "28",
                        "adminName": "Multi Option Attr"
                    },
                    "translations": [
                        {
                            "id": "16",
                            "locale": "en",
                            "label": "Option 1",
                            "attributeOptionId": "12"
                        },
                        {
                            "id": "17",
                            "locale": "nl",
                            "label": "Optie 1",
                            "attributeOptionId": "12"
                        },
                        {
                            "id": "18",
                            "locale": "tr",
                            "label": "seçenek 1",
                            "attributeOptionId": "12"
                        }
                    ]
                },
                {
                    "id": "13",
                    "adminName": "Option 2",
                    "swatchValue": null,
                    "sortOrder": 2,
                    "attributeId": "28",
                    "attribute": {
                        "id": "28",
                        "adminName": "Multi Option Attr"
                    },
                    "translations": [
                        {
                            "id": "19",
                            "locale": "en",
                            "label": "Option 2",
                            "attributeOptionId": "13"
                        },
                        {
                            "id": "20",
                            "locale": "nl",
                            "label": "Optie 2",
                            "attributeOptionId": "13"
                        },
                        {
                            "id": "21",
                            "locale": "tr",
                            "label": "seçenek 2",
                            "attributeOptionId": "13"
                        }
                    ]
                },
                {
                    "id": "14",
                    "adminName": "Option 3",
                    "swatchValue": null,
                    "sortOrder": 3,
                    "attributeId": "28",
                    "attribute": {
                        "id": "28",
                        "adminName": "Multi Option Attr"
                    },
                    "translations": [
                        {
                            "id": "22",
                            "locale": "en",
                            "label": "Option 3",
                            "attributeOptionId": "14"
                        },
                        {
                            "id": "23",
                            "locale": "nl",
                            "label": "Optie 3",
                            "attributeOptionId": "14"
                        },
                        {
                            "id": "24",
                            "locale": "tr",
                            "label": "seçenek 3",
                            "attributeOptionId": "14"
                        }
                    ]
                }
            ],
            "translations": [
                {
                    "id": "28",
                    "locale": "en",
                    "name": "Age Validation",
                    "attributeId": "28"
                },
                {
                    "id": "29",
                    "locale": "nl",
                    "name": "Leeftijd validatie",
                    "attributeId": "28"
                },
                {
                    "id": "30",
                    "locale": "tr",
                    "name": "Yaş Doğrulaması",
                    "attributeId": "28"
                }
            ]
        }
    }
}
```

----------------------------------------

TITLE: Publish Package Assets and Config (Shell)
DESCRIPTION: Publishes the assets, configuration files, and other publishable resources from the package's service provider ('Webkul\Blog\Providers\BlogServiceProvider') to the main application directories.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/2.x/packages/create-package.md#_snippet_7

LANGUAGE: Shell
CODE:
```
php artisan vendor:publish --provider=Webkul\Blog\Providers\BlogServiceProvider
```

----------------------------------------

TITLE: Example Response - Products Page 1 - JSON
DESCRIPTION: Example JSON response structure when fetching products for a specific page. Includes product data, pagination links, and meta information.

SOURCE: https://github.com/bagisto/bagisto-docs/blob/master/docs/1.x/api/products.md#_snippet_1

LANGUAGE: JSON
CODE:
```
{
    "data": [
      {
        "id": 3,
        "type": "simple",
        "name": "Lenovo IdeaPad Yoga 500 15 Hybrid (2-in-1) White",
        "url_key": "lenovo-ideapad-yoga-500-15-hybrid-2-in-1-white",
        "price": "600.0000",
        "formated_price": "$600.00",
        ...
        "sku": "5626",
        "images": [
          {...}
        ],
        "base_image": {...},
        "variants": [],
        "in_stock": true,
        "reviews": {...},
        "is_saved": false,
        "created_at": "2020-09-09 03:31:47",
        "updated_at": "2020-09-09 03:31:47"
      },
      {...},
      {...}
    ],
    "links": {...},
    "meta": {...}
}
```