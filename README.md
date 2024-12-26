# Finance Manager

Finance Manager is a web-based application that allows users to record and manage their financial details. This application is built using HTML, CSS, JavaScript, PHP, and MySQL database to provide a seamless and intuitive interface for managing personal finances.

## Features

- **Record Financial Details**: Add, view, edit, and delete income and expense records.
- **Categorization**: Categorize transactions (e.g., rent, food, entertainment, etc.).
- **Real-Time Summary**: Get an overview of income, expenses, and savings.
- **Search and Filter**: Search transactions by keywords or filter them by date, category, or amount.
- **User Authentication**: Secure login and registration functionality.

## Technologies Used

- **Frontend**:
  - HTML: Structure of the web application.
  - CSS: Styling and layout.
  - JavaScript: Interactivity and dynamic content.

- **Backend**:
  - PHP: Server-side logic and handling user requests.
  - MySQL: Database for storing financial records.

## Setup Instructions

### Prerequisites
- Install a local server environment like XAMPP, WAMP, or MAMP.
- Ensure MySQL is installed and running.

### Installation Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/finance-manager.git
   ```
2. Navigate to the project directory:
   ```bash
   cd finance-manager
   ```
3. Place the project folder in the `htdocs` directory (for XAMPP) or equivalent.
4. Create a MySQL database named `finance_manager`.
5. Import the provided `database.sql` file into the `finance_manager` database.
6. Start your local server and open the application in your browser:
   ```
   http://localhost/finance-manager
   ```

## Usage

1. Register or log in to the application.
2. Add financial records using the provided form.
3. View your financial summary on the dashboard.
4. Search or filter records as needed.
5. Update or delete records to keep your data accurate.

## Screenshots

### Login Page
![Login Page]("screenshots/login.png")

### Dashboard
![Dashboard](screenshots/dashboard.png)

### Add Transaction
![Add Transaction](screenshots/add-transaction.png)

## Future Enhancements

- Add data visualization features like graphs and charts for better insights.
- Implement budget tracking and alerts.

## License

This project is licensed under the [MIT License](LICENSE).



