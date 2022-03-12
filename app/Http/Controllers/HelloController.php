<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class HelloController extends Controller
{
    /**
     * お問い合わせフォームを表示する
     * @return view
     */
    public function index (Request $request) 
    {
        $items = Person::all();
        return view('layouts.index', ['items' => $items]);
    }

    public function check (Request $request)
    {
        return view('layouts.check');
    }

    public function send (Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/hello/thanks');
    }
}
