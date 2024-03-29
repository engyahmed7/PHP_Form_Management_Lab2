# Lab 2: PHP Form Management

**Overview:**
This repository contains Lab 2 PHP code for the ITI course. The project focuses on form management in PHP. Users can submit their information via a form, and the submitted data is validated and stored. Additionally, users can view all submitted information.

**File Structure:**
- `index.php`: Main PHP file responsible for rendering the form, processing submissions, and displaying user information.
- `config.php`: Configuration file containing constants for maximum name and message lengths, thank you message, default view, and file path for storing submitted data.
- `functions.php`: Contains PHP functions for storing and displaying data.
- `submit_file.php`: File to handle form submissions.
- `style.css`: CSS stylesheet for styling the web pages.

**Usage:**
1. Fill out the form with your name, email, and message.
2. Click the "Submit" button.
3. If there are errors in the form, error messages will be displayed.
4. Upon successful submission, a thank you message will be displayed.
5. To view all submitted information, click the "Display" button.

**Installation:**
1. Clone the repository to your local machine.
2. Ensure you have Composer installed.
3. Run `composer install` to install dependencies.
4. Configure your web server to serve the project directory.
5. Access the project via your web browser.

**Configuration:**
You can modify the configuration settings in `config.php`:
- `MAX_NAME_LENGTH`: Maximum allowed length for the name field.
- `MAX_MESSAGE_LENGTH`: Maximum allowed length for the message field.
- `THANK_YOU_MESSAGE`: Message displayed upon successful form submission.
- `DEFAULT_VIEW`: Default view mode for the application.
- `submit_file`: File path for storing submitted data.

**Screenshots:**

![image](https://github.com/engyahmed7/PHP_Web_Application_Lab/assets/68815210/feb53c9e-3723-4849-8e32-12a33ccb8a85)

![image](https://github.com/engyahmed7/PHP_Web_Application_Lab/assets/68815210/82ebc9a9-3da1-42fe-b0ab-f34945b14a4b)


