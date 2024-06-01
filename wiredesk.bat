@echo off
Rem Change Directory to your project
cd C:\xampp\htdocs\wiredesk


Rem Change Directory to backend
cd C:\xampp\htdocs\wiredesk\backend

Rem Run Artisan Command in a new window
start cmd /k "php artisan serve"

Rem Change Directory to frontend
cd C:\xampp\htdocs\wiredesk\frontend

Rem Run NPM Command in another new window
start cmd /k "npm run dev"
