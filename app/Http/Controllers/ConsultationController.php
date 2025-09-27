<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationMail;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'notes' =>  'nullable',
        ]);
        $consultation = Consultation::create($request->all());
        Mail::to($consultation->email)
            ->cc('shivanshdargarhlts@gmail.com')
            ->send(new ConsultationMail($consultation));
        return redirect('appointment')->with('success', 'Consultation Saved successfully');
    }

    public function index(Request $request)
    {
        $q         = trim($request->input('q', ''));
        $from      = $request->input('date_from'); // YYYY-MM-DD
        $to        = $request->input('date_to');   // YYYY-MM-DD
        $perPage   = (int) $request->input('per_page', 10);

        // Allow only sane values
        $allowedPerPage = [10, 25, 50, 100, 250];
        if (! in_array($perPage, $allowedPerPage)) {
            $perPage = 10;
        }

        $query = \App\Models\Consultation::query();

        // 🔎 Search across name/email/phone/notes
        if ($q !== '') {
            $query->where(function ($w) use ($q) {
                $w->where('name', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%")
                    ->orWhere('phone', 'like', "%{$q}%")
                    ->orWhere('notes', 'like', "%{$q}%");
            });
        }

        // 📅 Filter by consultation date range
        if ($from) {
            $query->whereDate('date', '>=', $from);
        }
        if ($to) {
            $query->whereDate('date', '<=', $to);
        }

        // Sort: date desc, time desc, then created_at desc
//        $query->orderByDesc('date')->orderByDesc('time')->orderByDesc('created_at');

        // ✅ Keep query string on pagination
        $consultations = $query->orderBy('created_at', 'desc')->paginate($perPage)->withQueryString();

        return view('consultations.index', compact('consultations', 'allowedPerPage'));
    }

}
