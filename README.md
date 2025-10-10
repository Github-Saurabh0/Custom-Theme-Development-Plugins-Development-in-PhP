# Custom Theme Development & Plugins Development in PHP

This repository is a complete guide and codebase for mastering **custom WordPress theme** and **plugin development** using **pure PHP**, following the latest **WordPress coding standards**, **security practices**, and **performance optimization** techniques.

---

## Overview

WordPress powers over 40% of the web, and custom development is what sets professionals apart.  
This repo is designed for **developers who want to build scalable, secure, and high-performing WordPress solutions** from scratch.

You’ll find:
- Custom Theme Development Structure  
- Plugin Architecture and Boilerplate Code  
- REST API Integration and Custom Endpoints  
- WordPress Hooks (Actions & Filters) Usage  
- Shortcodes, Widgets, and Custom Post Types  
- Database Interaction using `$wpdb`  
- AJAX in WordPress (Frontend ↔ Backend Communication)  
- Security Best Practices (CSRF, XSS, SQL Injection Prevention)  
- Deployment and Optimization Tips  

---

## Project Structure

```bash
📁 wp-content/
 ┣ 📂 themes/
 ┃ ┗ 📂 custom-theme/
 ┃   ┣ 📜 functions.php
 ┃   ┣ 📜 index.php
 ┃   ┣ 📜 header.php
 ┃   ┣ 📜 footer.php
 ┃   ┣ 📜 style.css
 ┃   ┗ 📂 template-parts/
 ┃       ┗ 📜 content.php
 ┣ 📂 plugins/
 ┃ ┗ 📂 custom-plugin/
 ┃   ┣ 📜 custom-plugin.php
 ┃   ┣ 📜 uninstall.php
 ┃   ┣ 📂 includes/
 ┃   ┣ 📂 assets/
 ┃   ┗ 📜 readme.txt
```

---

## Features

- Custom theme from scratch  
- Modular plugin development pattern  
- Enqueue scripts & styles properly  
- REST API-based data handling  
- Advanced use of WordPress hooks  
- Secure form handling with nonce  
- Admin dashboard menu & settings page creation  
- Database CRUD operations using `$wpdb`  
- Multi-language (WPML / Polylang) compatibility ready  
- Code structured for easy maintenance and scalability  

---

## Learning Outcomes

By exploring this repository, you’ll learn to:

- Build your **own WordPress theme** with reusable templates.  
- Create **custom plugins** that extend WordPress functionality.  
- Integrate **AJAX, REST APIs**, and **custom database tables**.  
- Follow **WordPress coding standards (PSR-12 + WP Guidelines)**.  
- Secure your code against common vulnerabilities.  
- Optimize performance and deploy on production servers.

---

## Tech Stack

| Layer | Technology |
|-------|-------------|
| Backend | PHP (7.x+), MySQL |
| Frontend | HTML5, CSS3, JavaScript, jQuery |
| Platform | WordPress CMS |
| APIs | REST API, JSON |
| Tools | VS Code, Git, Composer |
| DevOps | AWS / cPanel / LocalWP |

---

## Getting Started

### 1️. Prerequisites
- PHP 7.4+  
- MySQL 5.7+  
- WordPress latest version  
- Local server (XAMPP / LocalWP / Laragon)  
- Git installed  

### 2️. Setup Instructions
```bash
# Clone this repo
git clone https://github.com/Github-Saurabh0/Custom-Theme-Development-Plugins-Development-in-PhP.git

# Move into your WordPress installation
cd wp-content

# Copy the theme and plugin folders accordingly
```

### 3️. Activate Theme & Plugin
- Go to **WordPress Dashboard → Appearance → Themes** → Activate *Custom Theme*  
- Go to **Plugins → Installed Plugins** → Activate *Custom Plugin*  

---

## 🔒 Security Guidelines

- Always validate and sanitize user inputs (`sanitize_text_field`, `esc_html`, etc.)  
- Use WordPress nonces for forms and AJAX requests  
- Never expose sensitive info in public API endpoints  
- Escape all outputs (`esc_url`, `esc_attr`)  

---

### Custom Shortcode
```php
function wearl_custom_greeting() {
    return "<h3>Welcome to Custom Theme Development!</h3>";
}
add_shortcode('wearl_greet', 'wearl_custom_greeting');
```

### Custom REST API Endpoint
```php
add_action('rest_api_init', function() {
    register_rest_route('wearl/v1', '/data', [
        'methods' => 'GET',
        'callback' => function() {
            return ['status' => 'success', 'message' => 'Custom API working fine!'];
        },
    ]);
});
```

---

## Author

**Developed by:** [Saurabh Kushwaha](https://www.linkedin.com/in/saurabh884095/)  
**Company:** [Wearl Technologies](https://wearl.co.in)  
**Email:** Saurabh@wearl.co.in 

---

## Support & Contribution

If you find this repo helpful:
- Star this repository  
- Fork and enhance it  
- Submit pull requests with improvements  

> Let’s make WordPress development more modular, secure, and professional!

---

### Connect With Me
- [LinkedIn](https://www.linkedin.com/in/saurabh884095/)
- [Instagram - @dev.wearl](https://www.instagram.com/dev.wearl)
- [Wearl Technologies](https://wearl.co.in)

---

### License
This project is licensed under the **MIT License** – you’re free to use, modify, and distribute with attribution.

---
