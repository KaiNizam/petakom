<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('homepage');
});

Route::get('/homepage', function(){
    return view('homepage');
});

// Route for Manage Registration
Route::get('/Manage Registration/RegNewMem', function(){
    return view('Manage Registration/RegNewMem');
});

Route::get('/Manage Registration/Lecturer/addLecturerProfile', function () {
    return view('Manage Registration/Lecturer/addLecturerProfile');
});

Route::get('/Manage Registration/Student/addStudentProfile', function () {
    return view('Manage Registration/Student/addStudentProfile');
});

Route::get('/Manage Registration/Student/addStudentProfile', function () {
    return view('Manage Registration/Student/addStudentProfile');
});

Route::get('/Manage Registration/SearchProfileOption', function () {
    return view('Manage Registration/SearchProfileOption');
});

Route::get('/Manage Registration/Lecturer/SearchLecturer', function () { //route for search lecturer page
    return view('Manage Registration/Lecturer/SearchLecturer');
});

Route::get('/Manage Registration/Student/SearchStudent', function () { //route for search student page
    return view('Manage Registration/Student/SearchStudent');
});

Route::get('/Manage Registration/Student/studentSearchResult', function () { 
    return view('Manage Registration/Student/studentSearchResult');
});

Route::get('/Manage Registration/Lecturer/lecturerSearchResult', function () { 
    return view('Manage Registration/Lecturer/lecturerSearchResult');
});

Route::get('/Manage Registration/loginPage', function(){
    return view('Manage Registration/loginPage');
});
// end manage register

Route::get('/Manage Committee Election/Student/StudCandidateListPage', function () {
    return view('Manage Committee Election/Student/StudCandidateListPage');
});

Route::get('/Manage Committee Election/Student/VotingPage', function () {
    return view('Manage Committee Election/Student/VotingPage');
});

Route::get('/ElectionResultPage', function () {
    return view('ElectionResultPage');
});

Route::get('/Manage Committee Election/Committee/CandidateListPage', function () {
    return view('Manage Committee Election/Committee/CandidateListPage');
});

Route::get('/Manage Committee Election/Student/StudCandidateProfilePage', function () {
    return view('Manage Committee Election/Student/StudCandidateProfilePage');
});

//Routes for Manage Activity
Route::get('/Manage Activity/activityListCommitteePage', function(){
    return view('Manage Activity/activityListCommitteePage');
});

Route::get('/Manage Activity/activityDetailsCommitteePage', function(){
    return view('Manage Activity/activityDetailsCommitteePage');
});

Route::get('/Manage Activity/addActivityPage', function(){
    return view('Manage Activity/addActivityPage');
});

Route::get('/Manage Activity/editActivityPage', function(){
    return view('Manage Activity/editActivityPage');
});

Route::get('/Manage Activity/activityListUsersPage', function(){
    return view('Manage Activity/activityListUsersPage');
});

Route::get('/Manage Activity/activityDetailsUsersPage', function(){
    return view('Manage Activity/activityDetailsUsersPage');
});

//Routes for Manage Bulletin
Route::get('/Manage Bulletin/viewBulletinListCommittee', function(){
    return view('/Manage Bulletin/viewBulletinListCommittee');
});

Route::get('/Manage Bulletin/addBulletin', function(){
    return view('/Manage Bulletin/addBulletin');
});

Route::get('/Manage Bulletin/editBulletin', function(){
    return view('/Manage Bulletin/editBulletin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
