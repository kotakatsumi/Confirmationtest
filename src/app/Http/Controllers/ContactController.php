<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $fullName = $request->input('first-name') . ' ' . $request->input('last-name');
        $tell = $request->input('first-tel') . $request->input('center-tel') . $request->input('last-tel');

        $contact = $request->only(['gender', 'email', 'first-tel', 'center-tel', 'last-last', 'address', 'building', 'category_id', 'detail']);

        session()->put('_old_input', $request->all());

        return view('confirm', compact('contact', 'fullName', 'tell'));
    }

    public function fix(Request $request)
    {
        $keys = ['first-name', 'last-name', 'gender', 'email', 'firstTel', 'centerTel', 'lastTel', 'address', 'building', 'category_id', 'detail'];

        $request->session()->flash('_old_input', $request->only($keys));

        return redirect('/');
    }

    public function store(Request $request)
    {
        $genderMapping = ['男性' => 1, '女性' => 2, 'その他' => 3];
        $categoryMapping = [
            '商品のお届けについて' => 1,
            '商品の交換について' => 2,
            '商品トラブル' => 3,
            'ショップへのお問い合わせ' => 4,
            'その他' => 5,
        ];

        $gender = $genderMapping[$request->input('gender')];
        $category_id = $categoryMapping[$request->input('category_id')];

        $form = $request->all();
        $form["gender"] = $gender;
        $form["category_id"] = $category_id;

        $request->session()->flush();

        Contact::create($form);

        return view('thanks');
    }
}
