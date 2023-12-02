<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TableCreatorService;


class WelcomeController extends Controller
{
    //start code here
    public function welcome()
    {
        $data = [
            'name' => 'John Doe',
            'age' => 25,
        ];

        return view('welcome', $data);
    }
    // about page
    public function about()
    {
        return view('about');
    }
    // home page
    public function home()
    {
        return view('home');
    }
     // Dynamic model creation
     public function createStudentsTable(TableCreatorService $tableCreator)
     {
         $message = $tableCreator->createStudentsTable();
 
         return response()->json(['message' => $message]);
         // Alternatively, return a view with the message
         // return view('create_students_table', ['message' => $message]);
     }
}
