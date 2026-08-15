# NovaTech Solutions Company Profile Website

Project: week03-company-profile

Framework: Laravel MVC

Course: ITST 302 - Client-Server Technologies

Mini Project: MP02 - Company Profile Website


## Project Overview

NovaTech Solutions is a fictional technology company created for this Laravel MVC project.

The website presents the company's background, mission, vision, services, and contact information through a professional multi-page company profile website.

The project demonstrates Laravel MVC architecture, Laravel routing, controllers, Blade templating, reusable Blade layouts, reusable Blade components, responsive web design, and Git and GitHub version control.


## Introduction

A company profile website introduces an organization to visitors. It commonly presents the company's identity, history, mission, vision, services, team, and contact information.

A professional online presence helps businesses communicate their identity, explain their products and services, provide contact information, build credibility, and reach potential customers.

The purpose of this project is to develop a multi-page company profile website using Laravel's Model-View-Controller architecture.


## Project Objectives

1. Create a responsive multi-page company profile website using Laravel.
2. Create and manage application routes.
3. Connect routes to a CompanyController.
4. Build reusable Blade layouts and components.
5. Apply MVC separation of concerns.
6. Create Home, About, Services, and Contact pages.
7. Use Git and GitHub for version control.
8. Create technical documentation using Markdown.


## Company Information

### NovaTech Solutions

NovaTech Solutions is a fictional technology company that provides modern digital solutions to businesses.

The company focuses on helping organizations improve their digital presence and technology infrastructure.

### Mission

Our mission is to provide reliable, innovative, and accessible technology solutions that help businesses grow and succeed.

### Vision

Our vision is to become a trusted technology partner for businesses by providing high-quality digital solutions and excellent customer service.

### Core Values

Innovation

Integrity

Customer Focus

Quality

Collaboration

Continuous Improvement


## Website Pages

### Home Page

URL:127.0.0.1:8000

The Home page contains a hero section, company introduction, featured services, call-to-action button, navigation bar, and footer.


### About Page

URL:127.0.0.1:8000/about

The About page contains the company history, mission, vision, core values, and team introduction.


### Services Page

URL:127.0.0.1:8000/services

The Services page contains the following six services:

1. Web Development
2. Mobile Development
3. UI/UX Design
4. Cloud Solutions
5. Cybersecurity
6. IT Consulting

Each service contains a title and description.


### Contact Page

URL:127.0.0.1:8000/contact

The Contact page contains a contact form, company address, email address, phone number, and social media links.


## MVC Architecture

MVC stands for Model, View, and Controller.

The Model handles application data.

The View is responsible for what the user sees.

The Controller receives requests and determines what should happen.

In this project, Laravel Blade files are used as Views and CompanyController handles the main company profile pages.

The request flow is:

Client Browser

Route

CompanyController

Blade View

HTML Response

Browser


## Laravel Routing

Laravel routing determines which part of the application handles a specific URL request.

The project's web routes are located in:

routes/web.php

The project uses four main routes.

```php
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyController::class, 'home'])
    ->name('home');

Route::get('/about', [CompanyController::class, 'about'])
    ->name('about');

Route::get('/services', [CompanyController::class, 'services'])
    ->name('services');

Route::get('/contact', [CompanyController::class, 'contact'])
    ->name('contact');