<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
volu| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tst', function(){
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
    {
        $message->to('muyaedward@gmail.com', 'K P')->subject('Hello there, how are you?');
    });
    echo "string";
});

Route::get('/', function () {
    return view('pages.index');
})->name('home');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Route::post('volunteer-signup', [ContactusController::class, 'volunteer']);

Route::get('/newsletter', function () {
    return redirect()->route('newsletter_24_apr_preview');
})->name('newsletter');

Route::get('/volunteer-signup', function () {
    return view('pages.volunteer_signup');
})->name('volunteer-signup');

Route::get('/newsletter-23-dec', function () {
    return view('pages.newsletter_23_dec');
})->name('newsletter_23_dec');

Route::get('/newsletter-24-feb', function () {
    return view('pages.newsletter_24_feb');
})->name('newsletter_24_feb');

Route::get('/newsletter-24-apr', function () {
    return view('pages.newsletter_24_apr');
})->name('newsletter_24_apr');

Route::get('/newsletter-24-may', function () {
    return view('pages.newsletter_24_apr_preview');
})->name('newsletter_24_apr_preview');

Route::get('/newsletter-24-jun-preview', function () {
    return view('pages.newsletter-24-jun-preview');
})->name('newsletter-24-jun-preview');

Route::get('/newsletter-24-jun', function () {
    return view('pages.newsletter_24_jun');
})->name('newsletter_24_jun');

Route::get('/newsletter-24-aug', function () {
    return view('pages.newsletter_24_aug');
})->name('newsletter_24_aug');

Route::get('/newsletter-24-oct', function () {
    return view('pages.newsletter_24_oct');
})->name('newsletter_24_oct');

Route::get('/newsletter-24-dec', function () {
    return view('pages.newsletter_24_dec');
})->name('newsletter_24_dec');


Route::get('/newsletter/signup', function () {
    return view('pages.new_letter_sign_up');
})->name('new_letter_sign_up');

Route::get('/mission', function () {
    return view('pages.mission');
})->name('mission');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/onboarding', function () {
    return view('pages.onboarding');
})->name('onboarding');



//  Route::get('/reading-portal', function () {
//      return view('pages.reading_portal');
//  })->name('reading_portal');

Route::get('/book-collection', function () {
    return view('pages.book_collection');
})->name('book_collection');

Route::get('/succes-stories', function () {
    return view('pages.succes_stories');
})->name('succes_stories');



Route::get('/policy-privacy', function () {
    return view('pages.policy-privacy');
})->name('policy-privacy');

Route::get('/policy-sms', function () {
    return view('pages.policy-sms');
})->name('policy-sms');

Route::get('/live-help', function () {
    return view('pages.live-help');
})->name('live-help');







// Route::get('/about', function () {
//     return view('pages.about');
// })->name('home');

Route::get('/sponsors', function () {
    return view('pages.sponsors');
})->name('sponsors');

Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/make-a-donation', function () {
    return view('pages.donate_now');
})->name('donate_now');

Route::get('/contact-us', function () {
    return view('pages.contact_us');
})->name('contact_us');

Route::get('/volunteer', function () {
    return view('pages.volunteer');
})->name('volunteer');


Route::post('contact-us', [ContactusController::class, 'submit']);

Route::post('volunteer', [VolunteerController::class, 'submit']);

Route::post('newsletter/signup', [NewsletterController::class, 'submit']);



Route::get('/school-partnerships', function () {
    return view('pages.school_partnerships');
})->name('school_partnerships');

// Route::get('/reading-buddies', function () {
//     return view('pages.reading_buddies');
// })->name('reading_buddies');

Route::get('/reading-buddiess', [ContactusController::class, 'displayError']);


Route::match(['get', 'post'], '/reading-buddies', [ContactusController::class, 'our_kids_register'])->name('reading-buddies');

Route::get('/national-book-donation-events', function () {
    return view('pages.national_book_donation_events');
})->name('national_book_donation_events');

Route::get('/free-book-festivals', function () {
    return view('pages.free_book_festivals');
})->name('free_book_festivals');

Route::get('/free-book-festival-allentown', function () {
    return view('pages.free_book_festival_allentown');
})->name('free_book_festival_allentown');

// new pages start
Route::get('/free-book-festival-microsoft-bringyour-2024', function () {
    return view('pages.new.free-book-festival-microsoft-bringyour-2024');
})->name('free_book_festival_page1');
Route::get('/free-book-festival-nyc-bissel-2024', function () {
    return view('pages.new.free-book-festival-nyc-bissel-2024');
})->name('free_book_festival_page2');
Route::get('/free-book-festival-richmond-public-library', function () {
    return view('pages.new.free-book-festival-richmond-public-library');
})->name('free_book_festival_page3');
Route::get('/free-book-festival-dabc-nyc', function () {
    return view('pages.new.free-book-festival-dabc-nyc');
})->name('free_book_festival_page4');
Route::get('/free-book-festival-nyc-somos-2024', function () {
    return view('pages.new.free-book-festival-nyc-somos-2024');
})->name('free_book_festival_page5');
Route::get('/free-book-festival-pitt-jasmine', function () {
    return view('pages.new.free-book-festival-pitt-jasmine');
})->name('free_book_festival_page6');
// new pages end

Route::get('/free-book-festival-baltimore-glenmount', function () {
    return view('pages.free_book_festival_baltimore_glenmount');
})->name('free_book_festival_baltimore_glenmount');

Route::get('/free-book-festival-nyc-amber', function () {
    return view('pages.free_book_festival_nyc_amber');
})->name('free_book_festival_nyc_amber');

Route::get('/free-book-festival-la-wlcac', function () {
    return view('pages.free_book_festival_la_wlcac');
})->name('free_book_festival_la_wlcac');

Route::get('/free-book-festival-pureunions-2024', function () {
    return view('pages.free_book_festival_pureunions_2024');
})->name('free_book_festival_pureunions_2024');

Route::get('/make-a-donation-nyc-amber', function () {
    return view('pages.make_a_donation_nyc_amber');
})->name('make_a_donation_nyc_amber');

Route::get('/make-a-donation-baltimore-glenmount', function () {
    return view('pages.make_a_donation_baltimore_glenmount');
})->name('make_a_donation_baltimore_glenmount');

Route::get('/make-a-donation-allentown', function () {
    return view('pages.make_a_donation_allentown');
})->name('make_a_donation_allentown');

Route::get('/make-a-donation-la-wlcac', function () {
    return view('pages.make_a_donation_la_wlcac');
})->name('make_a_donation_la_wlcac');

Route::get('/make-a-donation-pureunions-2024', function () {
    return view('pages.make_a_donation_pureunions_2024');
})->name('make_a_donation_pureunions_2024');

Route::get('/make-a-donation-richmond-library-2024', function () {
    return view('pages.new.make-a-donation-richmond-library-2024');
})->name('make-a-donation-richmond-library-2024');


Route::get('/make-a-donation-dabc-nyc-2024', function () {
    return view('pages.new.make-a-donation-dabc-nyc-2024');
})->name('make-a-donation-dabc-nyc-2024');


Route::get('/make-a-donation-microsoft-bringyour-2024', function () {
    return view('pages.new.make-a-donation-microsoft-bringyour-2024');
})->name('make-a-donation-microsoft-bringyour-2024');


Route::get('/make-a-donation-bissel-gardens-2024', function () {
    return view('pages.new.make-a-donation-bissel-gardens-2024');
})->name('make-a-donation-bissel-gardens-2024');

Route::get('/make-a-donation-ford-detroit-2024', function () {
    return view('pages.new.make-a-donation-ford-detroit-2024');
})->name('make-a-donation-ford-detroit-2024');

Route::get('/make-a-donation-nyree-summer-2024', function () {
    return view('pages.new.make-a-donation-nyree-summer-2024');
})->name('make-a-donation-nyree-summer-2024');


Route::get('/free-book-festival-detroit-frec-2024', function () {
    return view('pages.new.free-book-festival-detroit-frec-2024');
})->name('free-book-festival-page7');


// -------
Route::group(['prefix' => 'reading-portal'], function () {
    Route::post('/', [UserController::class, 'our_kids_register'])->name('reading-portal-register');
    Route::get('/register', [UserController::class, 'our_kids_register_form'])->name('reading-portal-register-form');

    Route::get('/', [UserController::class, 'our_kids_login_form'])->name('reading-portal-login-form');
    Route::post('/login', [UserController::class, 'our_kids_login'])->name('reading-portal-login');

    Route::post('/reset-password', [UserController::class, 'ResetPassword'])->name('reset-password');
    Route::get('/reset-password', [UserController::class, 'ResetPasswordForm'])->name('reset-password-form');

    Route::middleware(['auth.session.user'])->group(function () {
        Route::post('/logout', [UserController::class, 'our_kids_logout'])->name('reading-portal-logout');
        Route::get('/onboarding', [UserController::class, 'dashboard'])->name('main-dashboard');
        Route::get('/home', [UserController::class, 'home'])->name('home-dashboard');
        
        Route::post('/dashboard/step1/update', [UserController::class, 'updateStep1'])->name('first-step-update');
        Route::post('/dashboard/step2/update', [UserController::class, 'updateStep2'])->name('second-step-update');
        Route::post('/dashboard/step3/update', [UserController::class, 'updateStep3'])->name('third-step-update');
        Route::post('/dashboard/step3/update/image', [UserController::class, 'updateStep3Image'])->name('third-step-update-image');
        Route::post('/dashboard/step5/update', [UserController::class, 'updateStep5'])->name('fifth-step-update');
        Route::post('/dashboard/step6/update', [UserController::class, 'updateStep6'])->name('sixth-step-update');

        Route::get('/dashboard/training', [UserController::class, 'training'])->name('training');
        Route::get('/dashboard/training/video/{id}', [UserController::class, 'trainingVideo'])->name('training-video');

        Route::prefix('dashboard/student')->middleware(['student'])->group(function () {
            Route::get('step1', [StudentController::class, 'StudentStep1'])->name('student.first-step');
            Route::get('step2', [StudentController::class, 'StudentStep2'])->name('student.second-step');
            Route::get('step3', [StudentController::class, 'StudentStep3'])->name('student.third-step');
            Route::get('step4', [StudentController::class, 'StudentStep4'])->name('student.fifth-step');
            Route::post('step4/update', [StudentController::class, 'updateStep4'])->name('student.forth-step-update');

        });
        Route::prefix('dashboard/reader')->middleware(['reader'])->group(function () {
            Route::get('step1', [UserController::class, 'step1'])->name('reader.first-step');
            Route::get('step2', [UserController::class, 'step2'])->name('reader.second-step');
            Route::get('step3', [UserController::class, 'step3'])->name('reader.third-step');
            Route::get('step4', [UserController::class, 'step4'])->name('reader.forth-step');
            Route::get('step5', [UserController::class, 'step5'])->name('reader.fifth-step');
            Route::get('step6', [UserController::class, 'step6'])->name('reader.sixth-step');
        
            Route::post('step4/update', [UserController::class, 'updateStep4'])->name('reader.forth-step-update');

        });
    });
});
// -------