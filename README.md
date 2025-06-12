# Nusantara-Journeys
INFO 3305 WEB APPLICATION DEVELOPMENT

SEMESTER 2, 2024/2025

SECTION 1

# GROUP PROJECT PROPOSAL 

GROUP E

LINK GITHUB: https://github.com/NikuAfreak/Nusantara-Journeys

PROTOTYPE LINK: https://sites.google.com/view/nusantarajourneys/home

YOUTUBE LINK:
https://www.youtube.com/watch?v=-o1n_LA-XiI

TITLE: Nusantara Journey

Group Members:

AHMAD HAZIEM BIN AIMIE KHUSAIRIE
(2314145)

AMIRUL AFIQ BIN ASHARYZAL 
(2118123)

MUHAMMAD NUBHAN BIN MUHAMMAD AMINUDIN 
(2216873)

BAKOUR IMAN 
(2217230)

ABDIWAHAB BALQIS MOHAMED 
(2227796)

LECTURER

MOHD KHAIRUL AZMI BIN HASSAN 

## INTRODUCTION
In today's digital era, tourism has evolved significantly with technology playing a pivotal role in transforming how travelers discover, plan, and experience destinations. Malaysia, with its rich cultural heritage, diverse landscapes, and vibrant cities, represents an ideal tourism destination that can benefit from enhanced digital accessibility. Our web application aims to bridge the gap between Malaysia's tourism offerings and potential visitors by providing a comprehensive, user-friendly platform that showcases the country's attractions while simplifying the travel planning process.

This Laravel-based tourism web application seeks to elevate Malaysia's tourism industry by creating a centralized platform where users can explore destinations, view detailed information about attractions, book tour packages, and share their experiences. By leveraging modern web technologies and responsive design principles, our application will be accessible across various devices, ensuring that users can plan their Malaysian adventures whether they're at home on a desktop computer or on the go with mobile devices.

The application will serve multiple stakeholders within the tourism ecosystem - from travelers seeking authentic Malaysian experiences to tour operators looking to showcase their packages and administrators who need efficient tools to manage content and user interactions. Through intuitive interfaces, interactive features, and secure transaction capabilities, this platform aims to streamline the tourism experience while promoting Malaysia's diverse attractions to a global audience.

## Objectives

- Create a comprehensive tourism platform that showcases Malaysia's diverse destinations, cultural experiences, and natural attractions through engaging visual content and detailed information.

- Develop a secure and user-friendly booking system that allows travelers to browse, select, and purchase tour packages with instant confirmation and electronic receipts.

- Implement a responsive design framework that ensures optimal user experience across desktop computers, tablets, and mobile devices, accommodating various screen sizes and resolutions.

- Establish a robust user authentication system that enables personalized experiences, secure transactions, and the ability for users to save preferences and submit reviews.

- Design an efficient administrative dashboard that empowers content managers to update destination information, manage tour packages, and moderate user-generated content without technical expertise.

## FEATURES & FUNCTIONALITIES

The purpose of this tourism web application is to make it easy for users to plan trip packages and discover stunning locations in Malaysia. It is easy to use and compatible with both PCs and phones. Visitors may locate tourist attractions, read about them, reserve travel packages, and post reviews. The website can be updated and managed by admin users. The key characteristics are listed below:

| Features      | Description |
| ----------- | ----------- |
| Tourist Places      | See pictures and information about Malaysian locations like Langkawi, Penang, or KL.       |
| Tour Packages   | View various packages together with their costs, schedules, and available dates.        |
| User Login & Signup      | To book and review, users must first register and log in. Content is managed by administrators.       |
| Online Booking   | Get a confirmation email when you book a tour package.        |
| User Reviews      | Places and packages can be rated and reviewed by users.       |
| Media Gallery      | Displays lovely images and brief films for every location.       |


## Sequence Diagram

![sequence](/assets/sequencediagram.png "Sequence Diagram")

## CAPTURED SCREEN & EXPLANATION

### Home Page

This is the home page we created. Overall you can see a dark orange color has been used for all the highlights. This is to match the logo that we designed.  Our logo is actually a traditionally designed Malay building that shows Malay’s traditional architecture. The Navigation bar will have a different color and include an underline depending on which page is being shown to the user. The first thing that users see is the large image of people kayaking. It is one of our activities in one of our destinations. Beside it, the description of this website is shown along with features of our services.


Underneath, the page shows our services. The services provided are WorldWide transactions, comfortable stays, travel guides, and event management. Every package a customer buys will include all of these features.

Additionally, the user can see our most popular destinations from our website. A gallery format is used to showcase all the pictures from different destinations. The user can click on any of the images to redirect themselves to the respected page. There are also small texts on the corner showing our bestseller along with a budget choice, which is a package that is much cheaper compared to others. 

Here, we can see all of our travel guides that will be alongside our clients. They will help you with anything you need, from accommodation to restaurants. They are trained for maximum hospitality. 

Lastly, there is a testimonial section where reviews and comments from previous buyers are shown. Our customers come from all over the world, showing the capability to host anyone from anywhere. 

### 3 Day Packages

The first screen I worked on is the 3-Day Travel Packages page. This is where visitors can view all the short travel packages offered by Nusantara. Each package is shown in a card layout. The card includes a beautiful image of the destination, the name of the package, the location, a short description, and the price in Malaysian Ringgit. I also added a brown “Book Now” button that users can click to start booking. I made the design simple but professional by using Bootstrap for layout and spacing. The whole page has a background image of the ocean and forest to match the travel theme and make it feel more relaxing and attractive.

### Login and Register Page

The Login page allows users to enter their email and password, which are then verified against the database. If the credentials do not match any existing account, an error message is displayed.

If a user is not registered, they can navigate to the Register page and enter their details to create a new account. The system requires a password that is more than 6 characters long.

If a user attempts to register with information that already exists in our database, an error message will appear to notify them.

### 7 Day Packages

The first screen I worked on is the 7-Day Travel Packages page. This is where visitors can view all the short travel packages offered by Nusantara. Each package is shown in a card layout. The card includes a beautiful image of the destination, the name of the package, the location, a short description, and the price in Malaysian Ringgit. I also added a brown “Book Now” button that users can click to start booking. I made the design simple but professional by using Bootstrap for layout and spacing. The whole page has a background image of the ocean and forest to match the travel theme and make it feel more relaxing and attractive.

### Checkout Page

After the user clicks the Book Now button, the user will be directed to the check out page. The user must complete all the required information and choose a payment method. After all that, the user must click the Complete Booking button for Tour Booking confirmation.

After that, the confirmation page will popup.

## CHALLENGES AND DIFFICULTIES DEVELOPING THE SITE

### Home Page and Layout

1. Getting the route links for every page to Navbar
Every page in the project needs to be routed along with its controller before it can be shown in the Navbar.
2. Active Site in Navbar
When a page is shown to the user, the corresponding page in the Navbar must be a different colour and highlighted to show that it is the active page being shown. I used
{{ Route::is('threedaypackage') ? 'active' : '' }}
to check if the selected page active, then it will change the color by itself. 
3. Layout Yields
The layout had to be created by properly dividing the HTML template so it can be shown in all pages.
4. Bootstrap Colors
Since I am using Bootstrap, I need to change all the colors used in icons and elements so there aren’t any conflicts between the original template and the one we created. 

### Login/Register Page

1. Handling Validation and Errors Gracefully
Another challenge was validating user input (like email and password), showing meaningful error messages. Laravel provides tools, but it took effort to use them properly in Blade templates.
2. Setting Up and Linking Routes Correctly
One difficulty was making sure that the GET or POST routes for login and registration were properly defined and linked to the correct controller functions. A missing route name or typo could easily result in a 404 error or Laravel exception

### 3 Day Packages Page

While building this booking application, I faced a few challenges that taught me a lot. One of the biggest problems was getting the images to show properly. At first, they didn’t appear on the page because I had placed them in the wrong folder or used the wrong file name. I had to rename the images and make sure they were stored in the correct public/img folder so Laravel could find them.
Another challenge was when users filled in the booking form — the data wasn’t saving into the database. I later found out it was because I had used the package title instead of the package ID, which caused errors. I fixed this by changing the hidden input field and updating the controller to store the right value.
Styling the form and thank-you page was also not easy. I wanted both pages to look professional and beautiful, so I searched for a nice ocean and forest background and carefully applied it using Bootstrap and CSS. I also made the form appear in a clean, centered card for better design.
One more challenge was with GitHub. I had difficulty pushing my work and connecting it with the team repository. Alhamdulillah, one of my friends from the group kindly helped me understand how to use GitHub and commit my changes properly. That support made things easier, and now I feel more confident using it.
Lastly, getting the success message to show after booking was another step that took time to work correctly. But after trying and testing again and again, I was happy to see it working with the user’s name and a soft confirmation message.

### 7 Day Packages

1. Attention to details
I always forgot to put some component of the code for the code to run, especially the formatting for the images

2. Put element to make images more appeal for user
This really put me back to studying Web Technology about html, css and javascript. Some of it like how to make the size of the image consistent even with the css part already set up, usage of the images also important to make it standardized Overall for the Laravel part, I have no big issues with it since I just learned it in class.

### Checkout Page

I stumbled upon a problem where I have to keep adding stuff to the project to make it work smoothly without hiccups. I spent an entire night not sleeping to figure out the problems and it made me learn something valuable. To enjoy the process.


## References

Stapylton-Smith, L. (2025, April 9). The most beautiful places to visit in Malaysia | Unforgettable travel company. Unforgettable Travel Company. https://unforgettabletravel.com/blog/the-most-beautiful-places-to-visit-in-malaysia/

55 Places To Visit In Malaysia | Malaysia Tourist Attractions. (n.d.). https://www.thrillophilia.com/. https://www.thrillophilia.com/places-to-visit-in-malaysia

48 places to visit in Malaysia | Tourist places in Malaysia | Holidify. (n.d.). https://www.holidify.com/country/malaysia/places-to-visit.html
