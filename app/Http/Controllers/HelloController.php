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
        $items = $request->all();
        return view('layouts.check', ['items' => $items]);
    }

    public function send (Request $request)
    {
        $person = new Person;
        $items = $request->all();
        unset($items['_token']);
        $person->fill($items)->save();
        return redirect('/thanks');
    }

    public function thanks ()
    {
        $items = Person::all();
        return view('layouts.thanks',);
    }

    public function listView (Request $request)
    {
        $items = Person::all();
        return view('layouts.list', ['items' => $items]);
    }

    public function delete (Request $request)
    {
        $items = Person::all();
        return view('layouts.list', ['items' => $items]);
        // $person = Person::find($request->id);
    }

    public function remove (Request $request)
    {
        $items = Person::all();
        foreach ($items as $item) {
            foreach ($item->all() as $person)
            {
                Person::find($person->all()[$request->id - 1])->delete();
            } 
        }
        return redirect('thanks', ['items' => $items]);
    }
}
