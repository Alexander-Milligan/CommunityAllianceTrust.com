
# CommunityAllianceTrust.com: Project Record

![GitHub last commit](https://img.shields.io/github/last-commit/Alexander-Milligan/CommunityAllianceTrust.com)
![GitHub repo size](https://img.shields.io/github/repo-size/Alexander-Milligan/CommunityAllianceTrust.com)
![GitHub contributors](https://img.shields.io/github/contributors/Alexander-Milligan/CommunityAllianceTrust.com)

This repository is set up to record the development of CommunityAllianceTrust.com.

---

## Starting Point
**Date:** 31/01/2024  
**Brief:**  
To initiate the project, I first prepared a website evaluation report and conducted a meeting with the Community Alliance Trust to gather a development requirements brief. Both of these steps were essential in creating the following fields, which adhere to the standards of major project planning and workflow.

Below is a list of documentation created to finalise and agree upon the Scope, Timescale, Cost, Development, and Maintenance:
1. Website Evaluation Report
2. Development Requirements Report
3. Website Requirements Specification
4. Website Design Specification
5. Project Password-Protected Details
6. Hosting and Domain Pricing Report

> If you are an employer, a template for these documents can be provided on request.

---

## Website & Database Setup
**Date:** 03/02/2024  
**Brief:**  
Once all paperwork was discussed and agreed upon, I began to create the HTML, CSS/Bootstrap, and PHP framework to develop the website with database-driven content. This ensured that when I introduced the database table to the CMS framework, all components were easily integrated together.

Below is my preferred workflow for this phase, which helps maintain project control and compatibility:
1. Website Views Databases and create admin database users
2. Website Framework and image design/creation
3. Insert Website Database content and set up Database Connection
4. Create a post-cleaning script, selection script, and a secure HTTPS folder
5. Insert and integrate PHP code with the database content into each page
6. Create a contact form and emailing system
7. Conduct incremental testing for functionality, non-functionality, user-friendliness, purposeful content, copyrights, and browser/server compatibility

Once these steps were completed, I conducted an in-house alpha testing phase with three participants. The hosting and domain setup were deferred until a working demo was available for the client to verify requirements and provide feedback.

---

## CAT Blog System
**Date:** 07/02/2024  
**Brief:**  
The blog system was developed to allow users to view the latest news/events. A posting form was placed in the reserved homepage area, created using HTML, Bootstrap, and PHP. User inputs are sanitised and verified through HTML validation, PHP filters, and PDO blind variables for security.

The tasks completed during this phase included:
1. Posting form and database creation
2. Full cleaning and sanitising of user inputs
3. Creation of insertion, selection, and display scripts
4. Integration of the form into the website layout
5. Running a full test sequence for layout and functionality
6. Incremental testing after rendering testing was complete

---

## Updates and Changes
**Date:** (These updates where over the period of 15/01/2024 to now and ongoing.)  
**Brief:** Below are the key updates made to the project:

### CRUD System Updates
1. Enhanced `CMSNoticeBoardFunctions.php` to streamline noticeboard management.
2. Updated `CMS_Functions.php` to improve data handling with additional validation.
3. Improved database posting via changes in `DBPosting.php`.

### Blog Updates
1. Integrated a new design for blog areas with assets like `BlogLogo.png`.
2. Updated `Blog.php` to allow more secure user post submissions.
3. Added advanced search capabilities via `Blog_Search.php`.

### Noticeboard Updates
1. Redesigned noticeboard sections with assets like `CATNoticeBoard.png`.
2. Improved functionality for `Noticeboardlogo.png` integration into layouts.

### Newsletter Updates
1. Updated `NewsLetterArea.php` to include new newsletter management options.
2. Refined newsletter design reflected in `NewsletterDraftDec24v2.pdf`.

### Login System Updates
1. Enhanced login security with updates in `LoginBuffer.php`.
2. Refactored `Regform.php` for cleaner code and better usability.
3. Improved authentication processes in `secureFunctions.php`.

## Recent Updates and Changes

### **Date: 21/02/2025**

### **Website Updates**
- **Removed Blog Section**: Deleted the blog page, removed the navigation button, and cleaned up function scripts.
- **Event Enhancements**: Made the "Get to Know Your Neighbourhood" event more prominent.
- **Text Update**: Changed "What we have been doing?" to "What we do" for clarity.

### **Emergency Numbers Integration**
- **New Front Page Section**: Added an emergency numbers container featuring key contacts such as:
  - **Electricity**: 0800 40 40 90
  - **Power Cut**: 105
  - **Gas Leaks**: 0800 111 999
  - **Scottish Water**: 0800 0778 778
  - **Flood Line**: 0345 988 1188
  - **NHS24**: 111
  - **Crime Stoppers**: 0800 555 111
  - **Police Scotland**: Emergency 999 / Non-emergency 101
  - **Council Emergency Number**: 0131 200 2000 (24/7)
  - **Emergency Housing**: 0800 032 5968
  - **Social Care**: 0800 731 6969 (Freephone) or +44 131 553 8286 (Outside UK)
  - **Other Support Numbers**: Council Tax, Debt Recovery, Environmental, Registration Services, and more.

### **Structural Improvements**
- **Noticeboard Removal**: Completely removed all noticeboards from the system.
- **Contact Forms Optimization**: Removed redundant forms, keeping only the one on the contact page.
- **Community Gardening Update**: Removed Facebook integration from this section.
- **Homepage Adjustments**: Redesigned layout for improved structure and user experience.

### **Content Adjustments**
- **Pantry Page Update**: Removed outdated £15 pricing.
- **Events Page Update**: Added "Know Your Neighbourhood" event to the event listings.

---
This document will continue to be updated as further improvements and new features are implemented.


This document will continue to be updated as the project evolves.
