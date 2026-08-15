README — Week 3 Company Profile Website
Project: week03-company-profile
Framework: Laravel MVC
Course: ITST 302 – Client-Server Technologies
Mini Project: MP02 – Company Profile Website

This README is prepared as the project documentation for the Laravel Week 3 laboratory activity. It follows the requirements in the provided Week 3 activity guide, including the four required pages, MVC architecture, reusable Blade components, GitHub requirements, screenshots, problems and solutions, reflection, and references.

1. Project Title
NovaByte Solutions — Company Profile Website
NovaByte Solutions is a fictional technology company created for this Laravel MVC project. The website presents the company, its services, background, and contact information through a professional multi-page interface.

2. Introduction
What is a Company Profile Website? A company profile website is a website that introduces an organization to visitors. It commonly presents the company's identity, history, mission, vision, services, team, and contact information. Why businesses need one. A professional online presence helps businesses communicate their identity, explain what they offer, provide contact information, and make their organization easier for potential customers and partners to discover. Purpose of this project. This project demonstrates Laravel's MVC architecture, URL routing, controller logic, reusable Blade layouts/components, and responsive web design.

3. Objectives
• Create a responsive multi-page company profile website using Laravel.
• Create and manage application routes.
• Connect routes to a CompanyController.
• Build reusable Blade layouts and components.
• Apply MVC separation of concerns.
• Create Home, About, Services, and Contact pages.
• Use Git and GitHub with meaningful commits.
• Produce technical documentation using Markdown/README.

4. Required Pages and Features
Home: hero banner, company introduction, featured services, and a call-to-action button.
About: company history, mission, vision, core values, and team introduction. Services: at least six services. NovaByte Solutions presents Web Development, Mobile Development, UI/UX Design, Cloud Solutions, Cybersecurity, and IT Consulting. Each service has a title and description and can include an icon/image. Week 3 Laravel Company Profile — README | Page 2 Contact: contact-form UI, address, email, phone number, social links, and optional embedded map.

5. MVC Architecture
What is MVC? MVC means Model-View-Controller. It separates an application into responsibilities so that request handling,
presentation, and data/business logic can be organized independently.
Why Laravel uses MVC. Laravel uses MVC to keep applications organized and maintainable. Routes receive requests,
controllers coordinate the request, and Blade views present the response.
Advantages: separation of concerns, easier maintenance, reusable components, clearer project structure, easier
teamwork, and better scalability.
Client (Browser)
|
v
Route (routes/web.php)
|
v
CompanyController
|
v
Blade View
|
v
HTML Response
|
v
Browser

6. Laravel Routing
Routing maps incoming URLs to the appropriate controller method. This project uses GET routes for the four required pages
and named routes for easier navigation.
use App\Http\Controllers\CompanyController;
Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
Required screenshot: routes/web.php showing the route definitions.

7. Controllers
The CompanyController handles requests for the four pages. Each controller method returns the corresponding Blade view.
<?php
namespace App\Http\Controllers;
class CompanyController extends Controller
{
public function home()
{
return view('pages.home');
}
public function about()
{
return view('pages.about');
Week 3 Laravel Company Profile — README | Page 3
}
public function services()
{
return view('pages.services');
}
public function contact()
{
return view('pages.contact');
}
}
Required screenshot: CompanyController.php.

8. Blade Templating Engine
Blade is Laravel's templating engine. This project uses a reusable layout and reusable navbar/footer components instead of
duplicating the same navigation and footer code on every page.
@extends allows a page to use a layout. @section supplies page-specific content. @yield defines where that content
appears in the layout. @include inserts reusable Blade components such as the navigation bar and footer.
{{-- resources/views/layouts/app.blade.php --}}
<body>
@include('components.navbar')
<main>
@yield('content')
</main>
@include('components.footer')
</body>
{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')
@section('content')
<h1>Welcome to NovaByte Solutions</h1>
<p>Technology solutions for modern businesses.</p>
@endsection

9. Laravel Folder Structure
week03-company-profile/
nnn app/
n nnn Http/
n nnn Controllers/
n nnn CompanyController.php
nnn resources/
n nnn views/
n nnn layouts/
n nnn components/
n nnn pages/
nnn routes/
n nnn web.php
nnn public/
nnn screenshots/
nnn documentation/
nnn README.md
• app/ — application code such as controllers and models.
• routes/ — route definitions, including web.php.
Week 3 Laravel Company Profile — README | Page 4
• resources/ — Blade views and frontend resources.
• public/ — publicly accessible assets and the application's web entry point.
• bootstrap/ — Laravel application bootstrapping files.
• config/ — application configuration files.

10. Project File Organization
• app/Http/Controllers/CompanyController.php
• resources/views/layouts/app.blade.php
• resources/views/components/navbar.blade.php
• resources/views/components/footer.blade.php
• resources/views/pages/home.blade.php
• resources/views/pages/about.blade.php
• resources/views/pages/services.blade.php
• resources/views/pages/contact.blade.php
• routes/web.php

11. GitHub Repository
Repository name: week03-company-profile
The activity guide requires the repository to be public and to contain at least eight meaningful commits. The following
nine-commit history is recommended for this completed project:
1. feat: create Laravel project
2. feat: add company routes
3. feat: create CompanyController
4. feat: build reusable Blade layout and components
5. feat: build Home page
6. feat: build About page
7. feat: build Services page
8. feat: build Contact page
9. docs: update README and project documentation
Git commands:
git add .
git commit -m "feat: create Laravel project"
git push origin main
Repeat the add/commit/push process with the appropriate message for each project milestone. Do not combine all milestones into one
commit if the instructor requires meaningful commit history.

12. Problems Encountered and Solutions
Controller namespace / class loading error
The CompanyController file was checked so that the namespace appears immediately after the opening PHP tag and before
the class declaration. The file was then saved and the Laravel server was restarted/tested.
View not found / missing Blade file
The required files were created under resources/views/pages and the view names returned by the controller were matched
to the actual Blade filenames.
Route or application loading issue
The routes in routes/web.php were checked against the controller methods and the application was tested through the
Laravel development server at http://127.0.0.1:8000.
Reusable navigation and footer
The navbar and footer were moved into resources/views/components and included from the main layout so they do not need
to be duplicated on every page.

13. Reflection
Developing the Company Profile Website helped me understand how Laravel applies the Model-View-Controller architecture
in a practical web application. Before working with Laravel, it was easy to think of a web page as one large piece of code.
Through this project, I learned that separating responsibilities makes an application easier to understand and maintain. In
MVC, routes identify where a request should go, the controller handles the request and decides which view should be
Week 3 Laravel Company Profile — README | Page 6
returned, and the view is responsible for presenting the information to the user. I learned that separation of concerns is
important because different parts of an application have different responsibilities. The routes should not contain large
amounts of presentation code, and the Blade templates should not be responsible for handling application logic. Keeping
these responsibilities separate makes it easier to find errors and change one part of the system without unnecessarily
affecting other parts. It also makes teamwork easier because developers can work on different parts of the application with
less conflict. The project also gave me practical experience with Laravel routing. I created separate GET routes for Home,
About, Services, and Contact and connected them to methods inside CompanyController. This showed me the request flow
from the browser to web.php, then to the controller, and finally to a Blade view that produces the HTML response. I also
learned why reusable Blade layouts and components are useful. Instead of copying the navigation bar and footer into every
page, I created reusable components and included them through the main layout. Another important lesson was project
organization. Laravel's folder structure gives each type of file a logical location. Controllers are placed in app, routes are
placed in routes, and Blade templates are placed in resources/views. This organization makes the project easier to navigate
and supports professional development practices. Finally, Git and GitHub helped me understand the importance of recording
project progress. Meaningful commits show how the project was developed step by step instead of presenting only the final
result. The same MVC and version-control practices can be applied to larger enterprise systems because large applications
also benefit from clear responsibilities, reusable components, organized folders, and a traceable development history.
Overall, this project gave me a stronger foundation for developing more complex Laravel applications in future activities.

14. Architecture Diagram
Client (Browser)
|
v
Route (web.php)
|
v
CompanyController
|
v
Blade View
|
v
HTML Response
|
v
Browser
Save the final visual architecture diagram in the documentation/ folder. The activity guide allows tools such as Draw.io, Lucidchart, Canva,
Microsoft Visio, or Figma.

15. LinkedIn Portfolio Post
Week 3 – Client-Server Technologies
This week, I developed a multi-page Company Profile Website using Laravel's MVC architecture. I implemented routing,
controllers, and Blade templates to create a clean and organized application while learning how Laravel processes client
requests and serves dynamic web pages.
Through this project, I gained a deeper understanding of separation of concerns and reusable web components—essential
skills for enterprise web development.
GitHub Repository: INSERT YOUR GITHUB LINK HERE
#Laravel #MVC #PHP #Blade #GitHub #WebDevelopment #ClientServer #SoftwareEngineering #ComputerScience

16. Submission Checklist
Week 3 Laravel Company Profile — README | Page 7
n Four required web pages completed.
n Laravel routes configured correctly.
n CompanyController implemented.
n Reusable Blade layout and components.
n Responsive navigation and footer.
n Public GitHub repository.
n Minimum of 8 meaningful Git commits (this plan uses 9).
n Complete README.md documentation.
n Architecture diagram included.
n Screenshots folder completed.
n LinkedIn post published.
n Repository link submitted through the LMS.

17. References
Laravel. (n.d.). Laravel documentation. https://laravel.com/docs
PHP Documentation Group. (n.d.). PHP documentation. https://www.php.net/docs.php
MDN Web Docs. (n.d.). MDN Web Docs. https://developer.mozilla.org/
Tailwind Labs. (n.d.). Tailwind CSS documentation. https://tailwindcss.com/doc