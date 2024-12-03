<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BirthdayWish;

class BirthdayWishController extends Controller
{
    public function store(Request $request) {

        $validated = $request->validate([
            'user_first_name' => 'required|string|max:255',
            'user_last_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'birthday_date' => 'required|date',
            'birthday_boy_first' => 'required|string|max:255',
            'birthday_boy_last' => 'required|string|max:255',
            'birthday_email' => 'required|email|max:255',
            'birthday_message' => 'required|string',
        ]);

        BirthdayWish::create($validated);

        return redirect()->back()->with('success', 'Birthday wish stored successfully!');
    }
}
