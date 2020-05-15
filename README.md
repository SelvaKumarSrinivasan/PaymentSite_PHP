# Payment Site -QA Automation
* Login page of a payment site is automated through Codeception framework

* IDE used - PhpStorm 2020.1

# Extra packages used

* Downloaded Composer to manage dependencies

* Installed Codeception using the command ```composer require "codeception/codeception" --dev```

* Installed Webdriver using the command ```composer require codeception/module-webdriver --dev```

* Installed PHP dotenv using the command ```composer require vlucas/phpdotenv```

# Project Structure

* Tests are coded in ```tests\acceptance\LoginPageCest.php``` file

* Page Objects are maintained in ```tests\_support\Page\Acceptance\LoginPage.php``` file

* Email address and phone number are stored in ```.env``` file which is configured to the project through ```codeception.yml``` file

* I have used chrome browser to run the tests which can be changed in ```tests\acceptance.suite.yml file```

# Steps to run the tests

* Clone the project to your computer by running the command ""

* Change the values in .env file to update valid/invalid email address or Phone number.
