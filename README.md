URL Shortener
A simple URL shortener implemented in PHP. This project includes a basic HTML form to input a URL, and a PHP script that generates a shortened URL and redirects users to the original one.

Table of Contents
Usage
Files
How it Works
Installation
Dependencies
Contributing
License
Usage
Clone the repository to your local machine:

bash
Copy code
git clone https://github.com/LYNAPPS/dali_code_1.git
Ensure that PHP is installed on your server or local environment.

Open index.php in a web browser to access the URL shortener form.

Enter a valid URL and click the "Shorten URL" button.

The shortened URL will be displayed on the page. Clicking on the shortened URL will redirect you to the original one.

Files
index.php: HTML form for user input.
shortener.php: PHP script for URL shortening logic.
How it Works
The user inputs a URL in the form and submits it.

The PHP script (shortener.php) generates a short code for the URL using generateShortCode().

It checks for collisions and regenerates the short code if necessary.

The script stores the mapping of the short code to the original URL in a JSON file (shorturls.json).

The HTML response includes a meta refresh tag for redirection to the original URL.

The shortened URL is displayed on the page, and clicking on it redirects to the original URL.

Installation
Clone the repository:

bash
Copy code
git clone https://github.com/LYNAPPS/dali_code_1.git
Ensure PHP is installed on your server or local environment.

Open index.php in a web browser.

Dependencies
None
Contributing
Feel free to contribute by opening issues or submitting pull requests.