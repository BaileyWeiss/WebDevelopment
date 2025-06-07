# Prehistoric Pals Toys | Shopify Components  
[PrehistoricPalsToys.com](https://prehistoricpalstoys.com)

This repository contains two custom Shopify Liquid components designed for **Prehistoric Pals Toys**, a fun and inclusive toy brand focused on hybrid dinosaur-vehicle characters. The components were created to enhance user engagement and improve the Shopify storefront experience.

These pieces were built using **Liquid, HTML, CSS, and JavaScript**, and integrated directly into the Shopify theme as modular sections.

---

## Project Overview

The goal of this mini-project was to create **interactive, visually engaging storefront sections** that felt cohesive with the brand’s colorful and playful identity. While this wasn’t a full website build, I developed and deployed the following two key elements:

- A **testimonial slideshow** featuring real customer reviews, to build trust and highlight product satisfaction
- A **newsletter popup CTA** offering a 20% discount to first-time subscribers, built to appear only once per session unless dismissed

Both pieces were built from scratch and tailored to Prehistoric Pals’ tone: fun, bold, and parent-friendly.

As with all of my Shopify work, this was a **solo project**. I handled:

- **Design and development of the Liquid templates**
- **Custom JS logic for user experience behavior**
- **Styling consistent with brand look and feel**
- **Shopify integration and testing**

---

## Tech Stack

| Category     | Tools Used                               |
|--------------|-------------------------------------------|
| Platform     | Shopify (Custom Theme Integration)        |
| Markup       | Liquid, HTML5                             |
| Styling      | CSS3                                      |
| Interactivity| JavaScript (session logic, animations)    |
| UX Behavior  | `sessionStorage` API                      |
| CTA Delivery | Shopify Email Opt-In + Code Trigger       |

> **Note on Custom Functionality:**  
> The popup is **non-intrusive** and user-friendly. If a visitor closes it, it stays hidden until their next session thanks to `sessionStorage`. This ensures smooth UX without repeated interruptions.

---

## Files Included

This repository includes:

- [`sections/reviews.liquid`](sections/reviews.liquid)  
  *Slideshow of rotating customer reviews with smooth transitions and responsive layout.*

- [`sections/newsletter.liquid`](sections/newsletter.liquid)  
  *Popup newsletter signup modal offering 20% off first purchase, includes session-based hide functionality and styled CTA.*

---

## Folder Breakdown

This is a lightweight component set and does **not include the full Shopify theme**. It includes:

[Custom Review Slideshow](sections/reviews.liquid)  
[Newsletter Popup CTA](sections/newsletter.liquid)

These files were built with the specific Shopify theme in mind, so the client can drop them directly into the 'edit code' section of Shopify's backend.

---

## Final Notes

This project highlights my ability to build **modular Shopify components** that are both brand-consistent and user-conscious. I focused on **small but high-impact elements** that elevate the storefront without needing a full theme overhaul.
