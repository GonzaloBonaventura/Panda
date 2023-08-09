# PANDA Website - Responsive Design and Technology Overview

## Introduction

The PANDA (Proteccion a Animales Nativos De America) website is a static platform that promotes the protection of native animals in the Americas. The website features a responsive design, allowing users to access content seamlessly across a range of devices.

## Contents

The PANDA website comprises several pages and features designed to engage visitors:

### Homepage (index.php)

The homepage serves as the central hub for information and engagement:

- An overview of PANDA's mission and objectives.
- Introduction to a selection of native animals, each linked to their respective profiles.
- A membership form that enables visitors to join the organization.

### Animal Profiles

Each animal has a dedicated profile page with dynamically generated content:

- Detailed information about the animal's characteristics, habitat, and importance to the ecosystem.
- High-quality images that showcase the animal's appearance and behavior.
- Visitors can navigate to these profiles from the homepage.

### Membership Form (formulariosocio.php)

The membership form enables visitors to become PANDA members:

- Visitors can input their name and email to join the organization.
- Server-side PHP validation ensures accurate and complete submissions.
- Submitted data is integrated into a MySQL database for record-keeping.

### Database Integration (pandaDB.php)

The MySQL database integration handles membership data:

- Submitted membership information is securely inserted into the "socios" table of the "progwebinicial" database.
- This allows PANDA to maintain a list of active members.

### Photo Gallery

The website showcases native animals using the Lightbox photo gallery plugin:

- Clicking on animal images opens a visually appealing and user-friendly lightbox overlay.
- This feature enhances the website's visual appeal and provides a captivating experience.

## Responsive Design Techniques

To ensure optimal user experience across devices, the website employs responsive design techniques:

- CSS media queries are used to load different CSS files based on screen width.
- Four breakpoints are defined:
  - `1023.css` for 600px to 1023px screens.
  - `599.css` for 426px to 599px screens.
  - `425.css` for 300px to 425px screens.
  - `299.css` for screens under 300px.
- The following adjustments are made for responsiveness:
  - Font sizes adjust for readability.
  - Image dimensions adapt to prevent distortion.
  - Layout columns reorganize to maintain coherence.
  - Navbar buttons stack on mobile screens.
  - Certain elements are hidden on smaller screens.
  - Widths are specified in percentages for relative sizing.

## Technologies Used

The PANDA website incorporates a range of technologies to deliver its functionality:

- *HTML, CSS*: The foundation of the website's structure and visual styling.
- *PHP*: Server-side scripting for form validation, database integration, and dynamic content generation.
- *JavaScript + jQuery*: Enables interactive features and enhances user experience.
- *MySQL Database*: Stores membership data submitted through the membership form.
- *Lightbox Photo Gallery Plugin*: Enhances visual content presentation.
- *Responsive Design Techniques*: Implemented using CSS media queries and percentage-based widths.

## Testing and Conclusion

Thorough testing across different devices and screen sizes is essential to ensure the responsive design functions as intended. By adopting responsive design techniques and leveraging various technologies, the PANDA website provides a seamless and engaging experience to visitors, fostering a deeper connection with native American animals and promoting the organization's mission
## Author

* *Bonaventura Gonzalo*  - [Linkedin](https://www.linkedin.com/in/gonzalo-bonaventura) -  [GitHub](https://github.com/GonzaloBonaventura)
