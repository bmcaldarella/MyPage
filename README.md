# 💼 Portfolio Website — Built with Astro.js, Bootstrap & PHP

This is a responsive and professional portfolio website built using the **Astro.js** framework. It showcases projects, skills, and contact information for a full-stack developer. The site uses **Bootstrap 5** for layout and design, and a **PHP backend** to handle form submissions via email.

---

## 🚀 Tech Stack

- 🌠 **Astro.js** – Static site generator for fast, modern websites
- 🎨 **Bootstrap 5.3** – Fully responsive and mobile-friendly UI
- ✉️ **PHP (send-mail.php)** – Handles email form submissions securely
- 🧩 **JavaScript** – Adds interactivity (navigation, transitions, animations)
- 📁 **HTML/CSS** – Component-based layout and style

---

## ✨ Main Features

- 🧑‍💻 "About Me" section with SVG tech icons
- 📂 Featured projects section with image previews
- 📄 Downloadable resume
- 📬 Contact form with email sending via PHP
- 🖥️ Responsive design for all screen sizes (desktop, tablet, mobile)
- ⚡ Fast performance and smooth transitions (optional preloader)

---

## 📁 Project Structure

portfolio-astro/
│
├── public/ # Static assets (images, favicon, etc.)
├── src/
│ ├── components/ # Astro components (Navbar, Footer, About, etc.)
│ ├── layouts/ # Main layout templates
│ ├── pages/ # Pages like index.astro, contact.astro, etc.
│ └── styles/ # Global CSS and custom styles
├── php/
│ └── send-mail.php # PHP mail handler for contact form
├── package.json
├── astro.config.mjs
└── README.md



---

## ⚙️ How to Run Locally

### 1. Clone the repository

```bash
git clone https://github.com/your-username/portfolio-astro.git
cd portfolio-astro

npm install

npm run dev

Visit the site at: http://localhost:4321

📬 Set Up PHP Mail
Place send-mail.php inside the /php or public root directory of your server

Update the form’s action="/php/send-mail.php" in your contact component

Make sure your hosting supports PHP (e.g., 1&1 Ionos, Hostinger, etc.)

Configure your mail settings inside send-mail.php (recipient, headers)

🌍 Deployment
To deploy, you can use:

Netlify / Vercel (for the Astro front-end)

1&1 Ionos / cPanel hosting (for PHP mail functionality)

You can also manually upload the built files using:

npm run build
| Action                       | Expected Result                                    |
| ---------------------------- | -------------------------------------------------- |
| Fill and submit contact form | PHP script sends the email, success alert is shown |
| Resize browser window        | Layout adapts to screen size using Bootstrap grid  |
| Click on projects            | Opens project details or link in new tab           |
| Navigate between sections    | Smooth transitions or animations (if enabled)      |

📝 License
MIT License — you are free to use, modify, and distribute.

👨‍💻 Author
Brandon Míchel Caldarella
Full Stack Developer | Software Engineering Student

