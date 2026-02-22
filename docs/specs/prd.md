# Product Requirements Document (PRD): Portal Crolimacallao

## 1. Product Overview

**The Pitch:** A unified, professional digital ecosystem for the Colegio Regional de Obstetras III Lima-Callao (CROLIMA). It serves as the authoritative source of institutional information, regulatory governance, and a centralized hub for professional services, transforming a fragmented web presence into a high-performance, accessible, and secure portal.

**For:** Obstetricians in Lima and Callao, health students, academic institutions, and the general public who need a reliable platform for professional habilitation, academic training, and administrative procedures.

**Objective:** To modernize the institutional image, simplify user journeys for common procedures (colegiatura, habilitación), and provide a robust content management system (CMS) for real-time updates of laws, news, and events.

**Design Direction:** "Institutional Trust & Professional Excellence" - A clean, modern, and authoritative aesthetic using a professional color palette (Deep Blue and Gold/Teal accents), emphasizing clarity, data security, and ease of navigation.

---

## 2. Target Audience & Stakeholders

| Audience | Needs |
| :--- | :--- |
| **Colegiados (Obstetricians)** | Proof of habilitation, continuous training, fee payments, digital credentials. |
| **New Members (Students)** | Clear requirements for colegiatura, online registration forms, tracking of applications. |
| **General Public** | Search for verified professionals (Busca Obstetra), institutional transparency, public health news. |
| **Institutional Admin** | Efficient management of news, events, normative documents, and member database. |

---

## 3. Core Features & Functionality

### 3.1 Institutional Hub
- **Who We Are:** Comprehensive history, symbols, and mission of CROLIMA.
- **Board of Directors:** Dynamic listing of current authorities (2025-2028).
- **Transparency Portal:** Categorized repository for annual reports, financial statements, and strategic plans.

### 3.2 Services & Procedures
- **Digital Procedures:** Structured guides and online triggers for Habilitación, Colegiatura, Specialty registrations, and Master/Doctorate recognition.
- **Virtual Mailbox (Mesa de Partes):** Secure file upload and tracking system for official documentation.
- **Member Portal:** Private area for members to update profiles, view status, and access exclusive resources.

### 3.3 Knowledge & Education
- **Normative Repository:** Searchable database for Laws, Technical Norms, and Guild Regulations.
- **Events & News:** Real-time CMS for webinars, workshops, and institutional announcements.
- **Virtual Classroom Integration:** Seamless link to Moodle for continuous professional development.

### 3.4 Professional Database
- **Search Obstetra:** Public-facing tool to verify status and habilitation of professionals in the region.

---

## 4. User Experience (UX) Goals
- **Accessibility:** Compliance with WCAG 2.1 AA standards.
- **Mobile First:** Fully responsive design ensuring 100% functionality on mobile devices.
- **Consistency:** Unified design across the main portal and functional sub-systems.
- **Performance:** Fast loading times (Core Web Vitals) to reduce user drop-off on administrative flows.

---

## 5. Success Metrics (KPIs)
- **Procedure Efficiency:** 30% reduction in time taken for members to find and complete an application.
- **Engagement:** Increased views on Normative and Academic sections.
- **Trust:** Significant reduction in "Outdated content" complaints from users.
- **SEO Authority:** Top 3 search rankings for relevant professional terms in the Lima-Callao region.

---

## 6. Constraints & Risks
- **Legacy Migration:** Ensuring 100% of critical data from the current PHP site is safely migrated to the new Laravel system.
- **Security:** Handling sensitive professional data (DNI, degrees) requires strict adherence to Peruvian data protection laws.
- **Domain Consistency:** Resolving the fragmentation between www and non-www versions and subdomains.
