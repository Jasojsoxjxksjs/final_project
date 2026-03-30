# E-SHOP - Full E-commerce Website Project

A complete, modern, and responsive E-commerce store built with HTML, CSS, JavaScript, Bootstrap, PHP, and MySQL.

## 🚀 Features
- **Responsive Design**: Optimized for mobile, tablet, and desktop.
- **Dynamic Catalog**: Products and categories fetched from a MySQL database.
- **Search & Filter**: Find products by name, description, or category.
- **Interactive Shopping Cart**: Add/remove items and update quantities with real-time total calculations.
- **Professional Checkout**: Multi-step checkout form with validation.
- **Toast Notifications**: Modern feedback system for user actions.
- **Contact Form**: Functional frontend contact system with validation.

## 🛠️ Technologies Used
- **Frontend**: HTML5, CSS3, JavaScript (ES6+), Bootstrap 5, Font Awesome.
- **Backend**: PHP 7.4+.
- **Database**: MySQL.

## 📂 Project Structure
```text
FINAL/
├── assets/
│   ├── css/        # Custom styles
│   ├── js/         # Main logic and cart management
│   └── images/     # Product and UI images
├── includes/
│   ├── db.php      # Database connection
│   ├── header.php  # Reusable navigation and header
│   └── footer.php  # Reusable footer and scripts
├── index.php       # Home page
├── products.php    # Product listing and search
├── product-details.php # Detailed product view
├── cart.php        # Shopping cart page
├── checkout.php    # Order processing page
├── about.php       # Company information
├── contact.php     # Contact page
└── database.sql    # Database schema and sample data
```

## ⚙️ Setup Instructions

### 1. Database Setup
1. Open your MySQL management tool (e.g., phpMyAdmin).
2. Create a new database named `shop_db`.
3. Import the provided `database.sql` file into the database.

### 2. Configuration
Open `includes/db.php` and update the database credentials to match your local server environment:
```php
$servername = "localhost";
$username = "root";     // Your MySQL username
$password = "";         // Your MySQL password
$dbname = "shop_db";
```

### 3. Running the Project
1. Move the project folder to your local server directory (e.g., `C:\xampp\htdocs\FINAL`).
2. Start the Apache and MySQL modules in XAMPP Control Panel.
3. Open your browser and navigate to `http://localhost/FINAL`.

## 📝 Presentation Points
- **Architecture**: Separated concerns using a modular `includes` approach.
- **State Management**: Used `localStorage` for the shopping cart to persist data across sessions without requiring a login.
- **Responsiveness**: Leveraged Bootstrap's grid system and utility classes for a "mobile-first" approach.
- **User Experience**: Integrated modern UI elements like sticky navigation, card hover effects, and toast notifications.

## 📄 License
This project is for educational purposes as part of the Full E-commerce Website Project.
