# APV Alvier-Werdenberg Website

Website for the APV Alvier-Werdenberg, built with PHP and Bootstrap.

## Features

- **Templating**: Uses PHP includes for Header/Footer to ensure consistency without a heavy templating engine.
- **Contact Form**: Integrated PHPMailer with SMTP support via environment variables.
- **Typography**: Uses 'Manrope' (Google Fonts) locally integrated.
- **Privacy**: No external trackers or CDNs for core assets.

## Requirements

- PHP 8.0 or higher
- Composer

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ursinsaluz/apv-alvier.git
   cd apv-alvier.ch
   ```

2. **Install Dependencies**
   The project uses Composer for PHPMailer and Dotenv.
   ```bash
   cd phpmailer
   composer install
   cd ..
   ```

3. **Configuration (.env)**
   Create a `.env` file in the project root to configure SMTP settings. You can use `.env.example` as a template.

   ```bash
   cp .env.example .env
   ```

   Edit `.env` with your mail server details:
   ```ini
   SMTP_HOST="mail.example.com"
   SMTP_USERNAME="user@example.com"
   SMTP_PASSWORD="secret-password"
   SMTP_PORT=465
   SMTP_FROM_EMAIL="noreply@example.com"
   SMTP_FROM_NAME="Contact Form"
   ```

## Local Development

Start a local PHP server to preview the site:

```bash
php -S localhost:8000
```

Open [http://localhost:8000](http://localhost:8000) in your browser.

## Deployment (Plesk)

1. **Git Deployment**: Set up the Git repository in Plesk to deploy to `httpdocs`.
2. **Environment Variables**:
   - create the `.env` file via the Plesk File Manager in the root directory (`httpdocs`).
   - Paste the contents of your local `.env` (production credentials).
   
   *Alternatively*, you can set environment variables in the PHP Settings configuration in Plesk if `.env` files are not desired.

## Project Structure

- `includes/`: Generic Header (`header.php`), Footer (`footer.php`), and Config (`mail_config.php`).
- `phpmailer/`: Composer dependencies.
- `bootstrap_theme/` & `bootstrap/`: CSS styles.
- `*.php`: Individual pages (index, kontaktaufnahme, etc.).
