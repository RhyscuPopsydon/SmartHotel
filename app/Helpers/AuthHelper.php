<?php
namespace App\Helpers;

class AuthHelper
{
    // Redirect logged-in users away from guest-only pages
    public static function guestOnly()
    {
        if (session()->has('user_id')) {
            header('Location: /dashboard');
            exit;
        }
    }

    // Optional: Protect pages that need login
    public static function authOnly()
    {
        if (!session()->has('user_id')) {
            header('Location: /login');
            exit;
        }
    }
}
