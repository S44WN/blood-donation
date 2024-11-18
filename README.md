# Blood Donation Management System

## Overview

The Blood Donation Management System is a web application designed to facilitate the process of finding blood donors and managing donor registrations. It allows users to register as donors, search for donors based on blood group, and view donor details.

## Features

- **Donor Registration**: Users can register as blood donors by providing their personal details, including full name, date of birth, gender, blood group, mobile number, email, town, and state.
- **Find Donors**: Users can search for blood donors by selecting a blood group from a dropdown menu. The system displays a list of donors matching the selected blood group.
- **Donor Details**: The system displays detailed information about each donor, including their name, blood group, email, mobile number, and city.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Usage

- **Register as a Donor**:
  - Navigate to the "Be A Donor" page.
  - Fill out the registration form with the required details and submit.
- **Find a Donor**:
  - Navigate to the "Find Donor" page.
  - Select a blood group from the dropdown menu to view a list of matching donors.

## File Structure

- `index.php`: The main landing page of the application.
- `register.php`: The registration page for new donors.
- `find_blood.php`: The page for finding donors based on blood group.
- `getuser.php`: The script to fetch and display donor details based on the selected blood group.
- `db_connection.php`: The database connection script.
- `script.js`: JavaScript functions for handling user interactions.
- `main.css`: The main stylesheet for the application.
- `sql/donors.sql`: SQL script to create the `donors` table and insert sample data.

## Contributing

Contributions are welcome! Please fork the repository and create a pull request with your changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
