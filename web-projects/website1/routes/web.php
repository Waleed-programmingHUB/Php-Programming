<?php

use Illuminate\Support\Facades\Route as Links;
use App\Http\Controllers\IndexController as IndexPage;
use App\Http\Controllers\Page1Controller as Page1;
use App\Http\Controllers\WelcomeController as WelcomePage;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/users/{id}', function ($id) {
//     switch ($id){
//         case 1:
//             echo "<table>";
//             echo "<thread>";
//             echo "<th>";
//             echo "Name";
//             echo "</th>";
//             echo "<th>";
//             echo "Language";
//             echo "</th>";
//             echo "</thread>";

//             echo "<tr>";
//             echo "<td>";
//             echo "Waleed";
//             echo "</td>";
//             echo "<td>";
//             echo "Php | Laravel";
//             echo "</td>";
//             echo "</tr>";
//             echo "</table>";
//             break;
//         case 2:
//             echo "<table>";
//             echo "<thread>";
//             echo "<th>";
//             echo "Name";
//             echo "</th>";
//             echo "<th>";
//             echo "Language";
//             echo "</th>";
//             echo "</thread>";

//             echo "<tr>";
//             echo "<td>";
//             echo "Ahdas";
//             echo "</td>";
//             echo "<td>";
//             echo "Graphics | Designer";
//             echo "</td>";
//             echo "</tr>";
//             echo "</table>";
//             break;

//             default:
//                 echo "No such user";
//             break;
//     }
// });
// Route::get('/user/{name}/{id?}', function ($name,int $id = 0 ) {
//     $mydata = compact('name','id');
//     return view('user')->with($mydata);
// });

// // sending data in the url
// Route::get('/page1/{username?}/{title?}', function (
//     $username = "Waleed" ,
//     $title = "<h3>Learning Laravel to advanced development.</h3>")
//     {
//         $data = compact('username','title');
//         return view('page1')->with($data);
//     }
// );

// MVC pattern
// type of page calling
Links::get('/', [IndexPage::class  ,'Index']); // type 1 
Links::get('/page1', 'App\Http\Controllers\Page1Controller@Page'); // type 2 
Links::get('/welcome', WelcomePage::class); // type 2 
