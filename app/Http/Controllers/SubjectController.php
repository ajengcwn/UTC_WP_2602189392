<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail;
use App\Models\Publisher;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $subjectall = Subject::all();
        $details = Detail::all();
        return view('home', ['categories' => $categories, 'details' => $details, 'subjectall' => $subjectall]);
    }
    public function category($id)
    {
        $categories = Category::all();
        $details = Detail::all();
        $subjectall = Subject::all();
        $subjects = Subject::where('id', $id)->first();
        return view('category', ['categories' => $categories, 'details' => $details, 'subjects' => $subjects, 'subjectall' => $subjectall]);
    }
    public function writer()
    {
        $subjects = Subject::all();
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('writer', ['categories' => $categories, 'publishers' => $publishers, 'subjects' => $subjects]);
    }

    public function about()
    {
        return view('aboutus');
    }
}
