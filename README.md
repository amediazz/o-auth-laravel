## Table of Contents

- [Prerequisites](#prerequisites)

- [Benefits of Using Google Auth in a Laravel App](#benefits-of-using-google-auth-in-a-laravel-app)

- [How to Set Up Laravel Google Login](#how-to-set-up-laravel-google-login)
    - [STEP 1](#step-1--setup-a-google-cloud)
    - [STEP 2](#step-2-create-a-new-laravel-project-and-install-the-laravel-socialite-package)
    - [STEP 3](#step-3-configure-environment-variables)
    - [STEP 4](#step-4-update-the-config-files)
    - [STEP 5](#step-5-create-controllers-and-routes-for-authentication)
    - [STEP 6](#step-6-test-laravel-google-authentication-in-your-project)
- [Conclusion](#conclusion)

## Prerequisites
in this application we will use:

- Laravel 11
- A Google Developer account.
- Basic knowledge of Laravel and authentication.
- Composer for managing packages


## Benefits of Using Google Auth in a Laravel App

- Simplified integration with Socialite
- Seamless user authentication
- Improved security
- Customizable user flow
- Improved scalability
- Solid ecosystem support
- Easier maintenance

## How to Set Up Laravel Google Login
To integrate google authentication on laravel application we must follow this steps:

### STEP 1 : setup a google cloud
- Go to the Google Cloud Console and create a new project.
- Click on the "Navigation menu" (three horizontal lines in the top left corner) and select
"APIs & Services" > "Dashboard".
- Click on the "Enable APIs and Services" button.
- Search for "Google Sign-In API" and click on the result.
- Click on the "Enable" button.
- Click on the "Create credentials" button.
- Select "OAuth client ID".
- Select "Web application".
- Enter a authorized JavaScript origins (e.g. http://localhost:8000).
- Click on the "Create" button.
- You will receive a client ID and client secret.

### Step 2: Create a new Laravel project and Install the Laravel Socialite package

create th project with composer 
`composer create-project laravel/laravel Oauth-laravel "11.*"`

to intsegrate google authentification in ou our laravel project we must install socialite laravel package 

`composer require laravel/socialite`

### Step 3: Configure environment variables
in this step i will configure laravel application to use google Oauth that we collected in step 1

- Open the `.env` file and add the following lines:
bash
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URL=http://your-domain.com/auth/google/callback

## Step 4: Update the config files
- Open the `config/services.php` file and add the following lines:
php
'google' => [
    'client_id' => env('GOOGLE_CLIENT_ID'),        // Your Google Client ID
    'client_secret' => env('GOOGLE_CLIENT_SECRET'), // Your Google Client Secret
    'redirect' => env('GOOGLE_REDIRECT_URL'),      // Your Google Redirect URL
]
## Step 5: Create controllers and routes for authentication.

in this step i will create a controller GoogleAuthController to handel google OAuth

`php artisan make:controller GoogleAuthController`

this controller contain two functions

- `redirect` function to redirect user to google auth page
- `callback` function to handle google auth callback

define the routes of redirect and callback in the file routes/web.php

## Step 6: Test Laravel Google authentication in your project.

to test our application we must create a button in home page that redirect us to login with our googleAuth

- create view home with a button login with google

## Conclusion
You’ve now set up Google authentication in your Laravel application using Socialite! You can extend this method to include other OAuth providers like Facebook, Twitter, or GitHub by adding additional configurations to the config/services.php file.

Google OAuth integration is a common feature for modern web applications, and Laravel Socialite makes it easy to implement.

In case you need more social login options like GitHub, Twitter, and Facebook, then you can consider ready-to-use Laravel SaaS boilerplates.

Most of the pre-built Laravel SaaS boilerplates offer seamless integration with popular platforms such as Google, GitHub, Facebook, and Twitter. For example, there are some premium and open source resources like:

- Laravel Starter Kit (Premium)

    - Based on Tailwind CSS
    - Comes with One Click Magic Link Setup
    - Supports various authentication methods including the traditional email/password login
    - 2FA Authentication

- SaaS Boilerplate (Open Source)

    - Single Database Multi-tenancy
    - Developer Panel
    - Manage Personal Access Tokens

- Laranuxt (Open Source)

    - Nuxt UI a collection of components built by the NuxtJS team, powered by Tailwind CSS
    - Authentication library to assist with user sessions and logging in/out
    - Example Authentication Middleware

- Laravel Vue Boilerplate (Open Source)

    - WebSockets with Laravel Echo and Pusher.
    - Workbox for better PWA development.
    - Laravel GraphQL

Using one of these Laravel SaaS boilerplates can speed up your workflows as you don’t need to set up everything from scratch.

Special thanks to Deep Kumbhare, an experienced Laravel Developer and enthusiast, who has helped me with preparing this article.

I hope this article helps you with setting up Google Login with Laravel.
