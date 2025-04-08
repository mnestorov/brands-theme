# Brands Theme

A custom WordPress theme for displaying brands with a modern design and responsive layout.

## Installation

1. **Download the Theme**:
   - Clone or download the theme files into your WordPress installation directory under `wp-content/themes/brands`.

2. **Install Dependencies**:
   - Open a terminal in the theme directory and run:
     ```bash
     npm install
     ```

3. **Compile SCSS**:
   - To compile SCSS into CSS, run:
     ```bash
     npm run scss
     ```
   - To watch for changes and automatically compile SCSS, run:
     ```bash
     npm run scss:watch
     ```

4. **Activate the Theme**:
   - Log in to your WordPress admin dashboard.
   - Navigate to **Appearance > Themes**.
   - Locate the "Brands Theme" and click **Activate**.

---

## Creating a Brands Page

1. **Add a New Page**:
   - Go to **Pages > Add New** in the WordPress admin dashboard.
   - Enter a title for your page (e.g., "Brands").

2. **Select the Template**:
   - In the **Page Attributes** section on the right, select the `Brands Page` template from the dropdown.

3. **Add Content**:
   - Use the Advanced Custom Fields (ACF) plugin to add content to the page, such as:
     - Hero title
     - Hero description
     - Hero image
     - Data points
     - Logos

4. **Publish the Page**:
   - Click **Publish** to make the page live.

---

## Setting the Brands Page as the Front Page

1. **Navigate to Reading Settings**:
   - Go to **Settings > Reading** in the WordPress admin dashboard.

2. **Set a Static Front Page**:
   - Under the **Your homepage displays** section, select **A static page**.
   - For the **Homepage**, choose the page you created for the Brands (e.g., "Brands").

3. **Save Changes**:
   - Click **Save Changes** to apply the settings.

---

## Features

- **Responsive Design**: Fully responsive layout for all devices.
- **Swiper Integration**: Smooth slider functionality for showcasing brands.
- **Custom Fields**: Easily manage content using the ACF plugin.
- **Custom Post Type**: Supports a "Brands" custom post type for managing brand entries.

---

**Author**: Martin Nestorov  
**Email**: [mbnestorov@gmail.com](mailto:mbnestorov@gmail.com)  