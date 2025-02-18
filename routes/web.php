<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImpactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\VacancyResponseController;
use App\Http\Controllers\UkraineBridgeFacilityController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('home');
        Route::get('/signout', [AdminController::class, 'logout'])->name('logout');

        Route::get('/articles/delete/{id}', [AdminController::class, 'destroy'])->name('articles.delete');
        Route::post('/articles/store', [AdminController::class, 'store'])->name('articles.store');

        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.home');
        Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

        Route::get('/products', [ProductsController::class, 'index'])->name('products.home');
        Route::get('/products/delete/{id}', [ProductsController::class, 'destroy'])->name('products.delete');
        Route::post('/products/store', [ProductsController::class, 'store'])->name('products.store');

        Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');
        Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');
        Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');

        Route::get('/news', [NewsController::class, 'index'])->name('news.home');
        Route::get('/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.delete');
        Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');

        Route::get('/impacts', [ImpactController::class, 'index'])->name('impacts.home');
        Route::get('/impacts/delete/{id}', [ImpactController::class, 'destroy'])->name('impacts.delete');
        Route::post('/impacts/store', [ImpactController::class, 'store'])->name('impacts.store');

        Route::get('/ukraine_bridge_facility', [UkraineBridgeFacilityController::class, 'index'])->name('ukraine_bridge_facility.home');
        Route::get('/ukraine_bridge_facility/delete/{id}', [UkraineBridgeFacilityController::class, 'destroy'])->name('ukraine_bridge_facility.delete');
        Route::post('/ukraine_bridge_facility/store', [UkraineBridgeFacilityController::class, 'store'])->name('ukraine_bridge_facility.store');

        Route::get('/contact', [ContactController::class, 'index'])->name('contact.home');
        Route::get('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

        Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancies.home');
        Route::post('/vacancies/store', [VacancyController::class, 'store'])->name('vacancies.store');
        Route::get('/vacancies/delete/{id}', [VacancyController::class, 'destroy'])->name('vacancies.delete');

        Route::get('/vacancy-responses', [VacancyResponseController::class, 'index'])->name('vacancy-responses.home');
        Route::get('/vacancy-responses/delete/{id}', [VacancyResponseController::class, 'destroy'])->name('vacancy-responses.delete');

        Route::get('/team', [EmployeeController::class, 'index'])->name('team.home');
        Route::post('/team/store', [EmployeeController::class, 'store'])->name('team.store');
        Route::get('/team/delete/{id}', [EmployeeController::class, 'destroy'])->name('team.delete');
    });
});

// Other routes
Route::get('/', [HomeController::class, 'index']);
Route::view('/about', 'about');
Route::view('/products', 'products');
Route::view('/offices', 'services/georgia-office');
//Route::get('/change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');


Route::get('/change-language/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'ka'])) {
        abort(400);
    }

    // Set the locale for the current request
    App::setLocale($locale);

    // Store the locale in session for subsequent requests
    session()->put('locale', $locale);

    // Redirect back or to another page as needed
    return redirect()->back();
})->name('change.language');



Auth::routes();

Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/en', [NewsController::class, 'news'])->name('news');
Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/testimonials', [ImpactController::class, 'impact_stories'])->name('social-impacts');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/vacancy', [VacancyResponseController::class, 'store'])->name('vacancy-response.store');
Route::get('/uk_facility', [UkraineBridgeFacilityController::class, 'uk_facility'])->name('uk_facility');
Route::get('/uk_facility/{facility}', [UkraineBridgeFacilityController::class, 'show'])->name('uk_facility.show');
Route::get('/careers', [VacancyController::class, 'careers'])->name('careers');
Route::get('/team', [EmployeeController::class, 'team'])->name('team');

Route::fallback(function () {
    return view('error');
});


