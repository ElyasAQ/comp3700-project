# Nasagh - Premium Arabian Perfumes E-Commerce Website

**نسغ - عصارة العود الخالدة**

## 📋 Project Information

- **Course**: COMP3700 - Introduction to Web Computing
- **Semester**: Fall 2025
- **Institution**: Sultan Qaboos University
- **Instructor**: Dr. Ahmad Soleimani
- **Project Phase**: Part 2 - Static Website Development

## 👥 Team Members (WEB Crafters Team)

| Name | Student ID | Role |
|------|-----------|------|
| Elyas Alquwatie | 142537 | Full-Stack Developer |
| Hisham Alhinai | 150229 | Frontend Developer |
| Almuhannad Alhinai | 144759 | Backend Developer |

## 📖 Project Overview

Nasagh is a niche e-commerce website specializing in premium, artisanal Arabian perfumes and scented goods. The platform bridges traditional Arabian perfumery heritage with modern web technologies, focusing on authenticity, quality, and cultural pride.

## 🌐 Live Websites

- **GitHub Pages**: [Your GitHub Pages URL]
- **Free Hosting**: [Your hosting URL]
- **GitHub Repository**: [Your Repository URL]

## 📁 Project Structure

```
nasagh-website/
│
├── index.html              # Home page
├── shop.html               # Products listing page
├── product-detail.html     # Product details page
├── about.html              # About Us page (with email link)
├── contact.html            # Contact Us page (with form)
├── account.html            # User account page
├── newsletter.html         # Newsletter subscription page
├── styles.css              # External CSS stylesheet
├── images/                 # Image directory
│   └── logo.png
├── README.md              # This file

```

## ✨ Key Features Implemented

### HTML Requirements ✅
- [x] **7 HTML Pages** (exceeds minimum of 5):
  1. index.html - Home page with featured products
  2. shop.html - Product catalog with filters
  3. product-detail.html - Individual product information
  4. about.html - Company story with email link
  5. contact.html - Contact form
  6. account.html - Login/Registration forms
  7. newsletter.html - Newsletter subscription

- [x] **Navigation**: Uniform navigation menu on all pages
- [x] **Email Links**: Implemented in About Us and Contact pages
- [x] **Valid Content**: Paragraphs, headers, footers, lists, images, hyperlinks

### Forms Requirements ✅
- [x] **4+ Forms** (all submit to https://httpbin.org/get):
  1. **Product Search & Filter** (shop.html)
  2. **Add to Cart** (product-detail.html)
  3. **Contact Us** (contact.html) - sends to email
  4. **Scent Finder Quiz** (account.html)
  5. **Newsletter Subscription** (newsletter.html)
  6. **Login Form** (account.html)
  7. **Registration Form** (account.html)

- [x] **All Form Controls Used**:
  - Text inputs
  - Email inputs
  - Password inputs
  - Tel inputs
  - Date inputs
  - Number inputs
  - Textarea
  - Select dropdowns
  - Radio buttons
  - Checkboxes
  - Range sliders
  - Color pickers
  - Submit buttons
  - Reset buttons

### Tables Requirements ✅
- [x] **3+ Tables** with formatting:
  1. **Product Comparison Table** (shop.html) - cell spacing, borders
  2. **Product Specifications** (product-detail.html) - colspan, merged cells
  3. **Ingredients Table** (product-detail.html) - column formatting
  4. **Team Members Table** (about.html) - row coloring
  5. **Statistics Table** (about.html) - merged header cells
  6. **Office Locations** (contact.html) - cell padding
  7. **Order History** (account.html) - alternating row colors
  8. **Newsletter Archive** (newsletter.html) - borders and colors

### CSS Requirements ✅

#### Three Types of CSS:
1. **External CSS** (styles.css) - Main stylesheet
2. **Internal CSS** (`<style>` tags) - Page-specific styles
3. **Inline CSS** (`style=""` attribute) - Element-specific overrides

#### Seven CSS Selectors:
1. **Universal Selector** (`*`) - Reset styles
2. **Element Selector** (`header`, `footer`, `table`)
3. **Class Selector** (`.container`, `.form-group`, `.product-card`)
4. **ID Selector** (`#main-content`)
5. **Attribute Selector** (`input[type="text"]`, `input[required]`)
6. **Pseudo-class Selector** (`:hover`, `:focus`, `:nth-child()`)
7. **Descendant Selector** (`nav ul li a`, `.footer-content h3`)

#### Seven CSS Property Categories (2+ properties each):
1. **Typography**: `font-family`, `font-size`, `font-weight`, `line-height`, `letter-spacing`, `text-transform`
2. **Layout**: `display`, `flex`, `grid`, `position`, `width`, `max-width`
3. **Spacing**: `margin`, `padding`, `gap`
4. **Colors/Backgrounds**: `color`, `background-color`, `background`, `gradient`
5. **Borders**: `border`, `border-radius`, `border-collapse`
6. **Visual Effects**: `box-shadow`, `text-shadow`, `opacity`
7. **Animation/Transitions**: `transition`, `transform`, `animation`

### Design Features ✅
- [x] Uniform logo on all pages
- [x] Consistent navigation menu
- [x] Consistent footer content
- [x] Responsive design (mobile, tablet, desktop)
- [x] Professional color scheme (beige, brown, gold)
- [x] Proper font hierarchy
- [x] Accessibility considerations

## 🎨 Design Choices

### Color Palette
- **Primary**: #5D4E37 (Dark Brown) - Represents oud wood
- **Secondary**: #8B7355 (Medium Brown) - Warmth and authenticity
- **Accent**: #D4A574 (Gold/Beige) - Luxury and desert heritage
- **Background**: #FFF8F0 (Off-white) - Cleanliness and purity
- **Highlight**: #F5E6D3 (Light beige) - Subtle elegance

### Typography
- **Headers**: Georgia serif - Traditional, elegant
- **Body**: Segoe UI sans-serif - Modern, readable
- **Logo**: Arabic calligraphy style

### Layout Strategy
- **Grid System**: Responsive CSS Grid and Flexbox
- **Mobile-First**: Adapts to all screen sizes
- **Consistent Spacing**: Using padding and margins systematically

## 🔧 Technologies Used

- **HTML5**: Semantic markup
- **CSS3**: Styling and layout
  - Flexbox
  - CSS Grid
  - Media Queries
  - Transitions & Transforms
  - Gradients
- **Form Validation**: HTML5 form attributes
- **Responsive Design**: Mobile, Tablet, Desktop support

## 📝 Form Submission Setup

All forms submit to `https://httpbin.org/get` as per project requirements. The Contact Us form is also configured to send to `info@nasagh.om` using `mailto:`.

## 🚀 Deployment Instructions

### GitHub Pages Deployment
1. Push all files to your GitHub repository
2. Go to repository Settings → Pages
3. Select main branch as source
4. Save and wait for deployment
5. Access via: `https://username.github.io/repository-name/`

### Free Hosting Options
Choose one of these platforms:
- **Netlify**: Drag and drop deployment
- **Vercel**: Connect GitHub repository
- **InfinityFree**: Traditional FTP upload
- **000webhost**: Free hosting with cPanel

## 📊 Requirements Checklist

### Part 2 Requirements
- [x] GitHub account created and shared with instructor
- [x] Repository created with organized structure
- [x] Regular commits from all team members
- [x] 5+ web pages (we have 7)
- [x] index.html as home page
- [x] Email link in About Us page
- [x] Contact Us form
- [x] 3+ additional forms (we have 6)
- [x] All form controls types used
- [x] 3+ tables (we have 8)
- [x] Cell merges and formatting in tables
- [x] Uniform logo, nav, footer
- [x] External CSS stylesheet
- [x] All 3 CSS types used
- [x] All 7 CSS selectors used
- [x] 2+ properties from 7 categories
- [x] Responsive design
- [x] Published on GitHub Pages
- [x] Published on free hosting
- [x] Complete project report

## 👨‍💻 Team Contributions

| Team Member | Contributions |
|-------------|---------------|
| **Elyas Alquwatie** | Home page design, CSS architecture, forms implementation, GitHub setup |
| **Hisham Alhinai** | Shop page, product details, UI/UX design, responsive layout |
| **Almuhannad Alhinai** | About page, contact forms, tables design, documentation |

## 📧 Contact Information

**Email**: info@nasagh.om  
**Phone**: +968 1234 5678  
**Address**: Muscat, Sultanate of Oman

## 📄 License

This project is created for educational purposes as part of COMP3700 coursework at Sultan Qaboos University.

---

**© 2025 Nasagh Inc. | WEB Crafters Team | Sultan Qaboos University**
