<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CekPesananController;
use App\Http\Controllers\HargaControlle;
use App\Http\Controllers\KakulatorController;
use App\Http\Controllers\MlController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TopUpController;



Route::middleware(['auth', 'admin.role'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware(['auth', 'admin.access'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil',[ProfilController::class,'index'])->name('profil');
Route::get('/cekpesanan',[CekPesananController::class,'index'])->name('cekpesanan');
Route::get('/harga',[HargaControlle::class,'index'])->name('harga');
Route::get('/kalkulator',[KakulatorController::class,'index'])->name('kalkulator');
Route::get('/wallet',[WalletController::class,'index'])->name('wallet');
Route::get('/transaction',[TransactionController::class,'index'])->name('transaction');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/ml',[MlController::class,'index'])->name('ml');
Route::post('/ml', [MlController::class, 'store'])->name('ml.store');
Route::post('/upgrade-membership', [PaymentController::class, 'successfulPayment'])->name('upgrade.membership');
Route::get('/membership', [PaymentController::class, 'showPaymentPage'])->name('membership.page');
Route::post('/upgrade-membership', [MembershipController::class, 'upgradeMembership'])->name('upgrade.membership');

Route::get('/affiliate', 'AffiliateController@index')->middleware('auth')->name('affiliate');
Route::get('/top-up', [TopUpController::class, 'showTopUpForm'])->name('top-up');
Route::post('/top-up', [TopUpController::class, 'processTopUp'])->name('top-up.process');

