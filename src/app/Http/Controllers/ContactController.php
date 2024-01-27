<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $category_id = $request->input('category_id');
        $contact = $request->only(['category_id','first_name','last_name','gender', 'email', 'tell_part1','tell_part2','tell_part3','address','building','detail']);
        $categories = Category::find($category_id);
        $request->flash();

        return view('confirm',compact('contact','categories'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['category_id','first_name','last_name','gender', 'email', 'tell_part1','tell_part2','tell_part3','address','building','detail']);
        Contact::create($contact);

        return view ('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }

}
