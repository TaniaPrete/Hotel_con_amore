<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\BookingController; // Booking per i clienti
use App\Http\Controllers\Frontend\BookingController as FrontBookingController; // Booking per la gestione interna
use App\Http\Controllers\SpaController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

use App\Http\Controllers\EventController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::post('/logout', function (Request $request) {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/'); // Reindirizza alla homepage
})->name('logout');


// 🏠 Dashboard interna (Protetta da Login)
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // 📅 Prenotazioni INTERNE gestite dallo staff
    Route::get('/admin/bookings', [FrontBookingController::class, 'index'])->name('admin.bookings.index');
    Route::get('/admin/bookings/create', [FrontBookingController::class, 'create'])->name('admin.bookings.create');
    Route::post('/admin/bookings', [FrontBookingController::class, 'store'])->name('admin.bookings.store');

    // 👤 Profilo utente
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🎭 Eventi - Sezione amministrativa
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    });
});

// 📌 Rotte Pubbliche
Route::middleware(['web'])->group(function () {
    Route::get('/', [PageController::class, 'welcome'])->name('welcome');
    Route::get('/contact', fn () => view('contact'))->name('contact');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
    Route::get('/faq', fn () => view('faq'))->name('faq');
    Route::get('/services', fn () => view('services', [
        'services' => [
            ['name' => 'Camere eleganti', 'description' => 'Comfort e lusso.', 'link' => route('rooms.index')],
            ['name' => 'Ristorazione', 'description' => 'Cucina di alta qualità.', 'link' => route('dining')],
            ['name' => 'Spa e relax', 'description' => 'Centro benessere esclusivo.', 'link' => route('spa')],
        ]
    ]))->name('services');
    Route::get('/whois', fn () => view('whois'))->name('whois');
    Route::get('/work-with-us', [JobApplicationController::class, 'showForm'])->name('work-with-us');
    Route::post('/work-with-us', [JobApplicationController::class, 'submitApplication'])->name('job.submit');
    Route::get('/gallery', fn () => view('gallery'))->name('gallery');
    Route::get('/spa', fn () => view('spa'))->name('spa');
    Route::get('/spa-booking', [SpaController::class, 'index'])->name('spa-booking');
    Route::post('/confirm-spa-booking', [SpaController::class, 'confirm'])->name('confirm-spa-booking');
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/dining', fn () => view('dining'))->name('dining');

    // 📅 Prenotazioni CLIENTI (per gli utenti pubblici)
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::post('/confirm-booking', [BookingController::class, 'confirm'])->name('confirm_booking');

    // 🎭 Eventi
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

    // 📱 Post Social
    Route::get('/social/posts', [SocialController::class, 'index'])->name('social.posts');

    // 🧑‍💼 Gestione Utenti
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // 🛡️ Registrazione utenti
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

    // ⚡ Importiamo le rotte di autenticazione di Laravel Breeze
    require __DIR__.'/auth.php';
});
