# CompuZone - Computer Components Educational Website

![Website Screenshot](assets/img/hero-img.png)

CompuZone is an educational website designed to teach users about various computer components and peripherals. It features detailed information about computer hardware, interactive quizzes, and a feedback system.

## 🌐 Live Demo
Access the website at:  
http://info.tm.edu.ro:8088/~aemandi/Site%20Atestat/

## ✨ Features
- **Responsive Design**: Works on mobile, tablet, and desktop devices
- **Interactive Elements**: 
  - FAQ section with toggleable questions
  - Computer knowledge quiz
  - Feedback form with email integration
- **Comprehensive Content**:
  - Detailed information about processors, graphics cards, motherboards, storage, and peripherals
  - Organized into logical sections for easy navigation
- **Modern UI**: 
  - Clean, professional design using Bootstrap
  - Smooth animations and transitions

## 🛠️ Technologies Used
- **Front-end**:
  - HTML5, CSS3 (with Flexbox/Grid)
  - JavaScript (ES6)
  - Bootstrap 5.3.3
  - Swiper.js for client carousel
  - AOS (Animate On Scroll) library
- **Back-end**:
  - PHP for form processing
  - PHPMailer (v6.9.3) for email functionality
- **Design**:
  - Custom CSS styling
  - Google Fonts (Open Sans, Poppins, Jost)
  - Bootstrap Icons

## 📂 Project Structure
```
Site Atestat/
├── index.php                # Main homepage
├── assets/
│   ├── css/                 # CSS stylesheets
│   ├── img/                 # Images and icons
│   ├── js/                  # JavaScript files
│   └── vendor/              # Third-party libraries
├── php-fb/                  # Feedback form processing
├── php-quiz/                # Quiz system
├── Periferice.html          # Peripherals page
├── Plăci de bază.html       # Motherboards page
├── Plăci video.html         # Graphics cards page
├── Procesoare.html          # Processors page
├── Stocare.html             # Storage devices page
└── starter-page.html        # Template page
```

## 🚀 Setup Instructions
To run this project locally:
1. Clone or download the repository
2. Set up a local PHP server (XAMPP, WAMP, or MAMP)
3. Place the files in your server's root directory
4. For email functionality:
   - Configure SMTP settings in `php-fb/insert.php`
   - Ensure PHPMailer is properly installed via Composer

## 📝 Content Sections
1. **Homepage**: Overview of computers with hero section and client logos
2. **About**: Basic information about computers
3. **FAQ**: Frequently asked questions about computers
4. **Quiz**: Interactive computer knowledge test
5. **Components**:
   - Processors
   - Graphics Cards
   - Motherboards
   - Storage Devices
   - Peripherals (keyboards, mice, monitors, etc.)
6. **Feedback**: Contact form with email integration

## 📧 Feedback System
The website includes a PHP-based feedback form that:
- Stores submissions in a database
- Sends email notifications
- Displays submission statistics

## 📜 License
This project is for educational purposes only. The template is based on Arsha Bootstrap Template licensed under MIT.

## 👨‍💻 Contact
Email: help.compuzone@gmail.com
