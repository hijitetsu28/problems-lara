<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $items = People::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, People::$rules);
        $form = $request->all();
        People::create($form);
        return view('thanks');
    }
}
