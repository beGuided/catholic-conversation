# Catholic Conversation

## Overview
**Catholic Conversation** is a dynamic web application designed for sharing and downloading multimedia content such as videos, podcasts, and documents. The platform can be used for religious media distribution, educational resources, or general vlog-style content sharing.

The system provides a simple and flexible structure built with PHP, making it adaptable for different types of content management and media distribution needs.

---

## Features
- Upload and download multimedia content (videos, podcasts, and files)
- Organized resource sharing platform
- Simple and lightweight PHP architecture
- Suitable for educational platforms, media blogs, or content repositories

---

## Technology Stack
- **Backend:** PHP  
- **Database:** MySQL  
- **Server Environment:** WAMP / Apache  
- **Version Control:** Git

---

## Installation

Follow the steps below to run the project on your local machine.

### 1. Clone the Repository
```bash
git clone https://github.com/beGuided/catholic-conversation.git
```

### 2. Move Project to WAMP Directory
1. Open your WAMP installation directory (example: `C:\wamp64\www`).
2. Move the cloned repository folder into the `www` directory.
3. Rename the folder if necessary (e.g., `catholic-conversation`).

### 3. Start WAMP Server
- Open the **WAMP control panel**
- Ensure **Apache and MySQL services are running**
- Confirm the server status shows **Online**

### 4. Setup the Database
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`)
2. Create a new database
3. Import the provided **SQL file** from the project folder into the database.

### 5. Run the Application
Open your browser and visit:

```
http://localhost/catholic-conversation
```

The application should now be running locally.

### HomePage

---

## Requirements
- PHP 7.0 or higher
- MySQL
- WAMP, XAMPP, or any PHP local development server
- Modern web browser

---

## Troubleshooting

If the project does not run correctly:

- Ensure **WAMP server is running and online**
- Confirm the project folder is inside the `www` directory
- Verify that the **database has been imported correctly**
- Check your **PHP version compatibility**

---

## Contributing
Contributions are welcome. If you would like to improve this project:

1. Fork the repository
2. Create a new branch
3. Submit a pull request

You can also open an issue for bug reports or feature suggestions.

---

## License
This project is open-source and available for learning and development purposes.
