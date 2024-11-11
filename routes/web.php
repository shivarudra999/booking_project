<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\FrontendController;
use App\Http\Controllers\UserController\UserController;
use App\Http\Controllers\AdminController\AdminController;
use App\Http\Controllers\EventController\EventController;
use App\Http\Controllers\GalleryController\GalleryController;
use App\Http\Controllers\BlogController\BlogController;
use App\Http\Controllers\OfferController\OfferController;
use App\Http\Controllers\MembershipControlle\MembershipController;


// Route::get('/', function () {
//     return view('welcome');
// });~

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('book-ticket-now/{id}',[EventController::class,'bookticket']);

});

require __DIR__.'/auth.php';

Route::get('/dashboard',function()
{
    return redirect()->to('/');
}
);


Route::get('/', [FrontendController::class,'home'])->name('/');

Route::get('about',[FrontendController::class,'about']);

Route::get('gallery',[FrontendController::class,'gallery']);

Route::get('membership',[FrontendController::class,'membership']);

Route::get('contact',[FrontendController::class,'contact']);

Route::get('offer',[FrontendController::class,'offer']);

Route::get('ticket-pdf',[FrontendController::class,'ticket_pdf']);

Route::get('events-details/{id}',[FrontendController::class,'eventsdetails']);


// Route::get('login',[FrontendController::class,'login']);

// Route::get('signup',[FrontendController::class,'signup']);



Route::prefix('admin')->group(function(){
    Route::get('dashboard',[AdminController::class,'dashboard']);
    Route::get('post-event',[AdminController::class,'PostAdmin']);
    Route::get('post-booking',[AdminController::class,'PostBooking']);
    Route::get('post-gallery',[AdminController::class,'PostGallery']);
    Route::get('post-offer',[AdminController::class,'PostOffer']);
    Route::get('post-membership',[AdminController::class,'PostMembership']);
    Route::get('post-contactus',[AdminController::class,'PostContactus']);
    Route::get('post-contactreply',[AdminController::class,'PostContactReply']);
    Route::get('post-pdfticket',[AdminController::class,'PostPdfTicket']);
    Route::get('post-blog',[AdminController::class,'PostBlog']);
    Route::get('post-user',[AdminController::class,'PostUser']);
    Route::get('view-event',[AdminController::class,'ViewEvent']);
    Route::get('view-membership',[AdminController::class,'ViewMembership']);
    Route::get('view-gallery',[AdminController::class,'ViewGallery']);
    Route::get('view-offer',[AdminController::class,'ViewOffer']);
    Route::get('view-pdfticket',[AdminController::class,'ViewPdf']);
    Route::get('view-contact',[AdminController::class,'ViewContact']);
    Route::get('view-contactreply',[AdminController::class,'ViewContactreply']);
    Route::get('view-booking',[AdminController::class,'ViewBooking']);
    Route::get('view-blog',[AdminController::class,'ViewBlog']);
    Route::get('event-edit/{id}',[AdminController::class,'EventEdit']);
    Route::get('blog-edit/{id}',[AdminController::class,'BlogEdit']);
    Route::get('membership-edit/{id}',[AdminController::class,'MembershipEdit']);
    Route::get('event-application',[AdminController::class,'eventapplication']);

});

Route::get('admin-login',[AdminController::class,'Admin_login']);

Route::post('adminlogin',[AdminController::class,'loginadmin']);

Route::get('admin-logout',[AdminController::class,'Adminlogout']);

Route::post('add-post-gallery',[GalleryController::class,'addpostgallery']);

Route::post('add-post-membership',[MembershipController::class,'addmembership']);
Route::post('add-membership-update',[MembershipController::class,'UpdateMembership']);
Route::get('membership-delete/{id}',[MembershipController::class,'Deletemembership']);


Route::post('add-post-event',[EventController::class,'addeventpost']);
Route::post('update-events-post',[EventController::class,'UpdateEvent']);
Route::get('event-delete/{id}',[EventController::class,'DeleteEvent']);

Route::post('add-post-blog',[BlogController::class,'addblogpost']);
Route::post('add-blog-update',[BlogController::class,'updateBlog']);
Route::get('blog-delete/{id}',[BlogController::class,'DeleteBlog']);


Route::post('add-post-offer',[OfferController::class,'addofferpost']);





Route::post('add-newsletter',[OfferController::class,'addnewsletter']);
Route::post('add-testform',[OfferController::class,'addtestpage']);
Route::get('add-testpage',[FrontendController::class,'testform']);

