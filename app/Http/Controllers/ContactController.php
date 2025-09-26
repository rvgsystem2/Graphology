<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $q       = trim($request->input('q', ''));
        $perPage = (int) $request->input('per_page', 10);

        $allowedPerPage = [10, 25, 50, 100];
        if (! in_array($perPage, $allowedPerPage)) {
            $perPage = 10;
        }

        $query = \App\Models\Contact::query();

        if ($q !== '') {
            $query->where(function ($w) use ($q) {
                $w->where('name', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%")
                    ->orWhere('message', 'like', "%{$q}%");
            });
        }

        $contacts = $query->orderByDesc('created_at')
            ->paginate($perPage)
            ->withQueryString();

        return view('contacts.index', compact('contacts', 'allowedPerPage'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' =>  'nullable',
        ]);
        Contact::create($request->all());
        return back()->with('success', 'Consultation Saved successfully');
    }

}
