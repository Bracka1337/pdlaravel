<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kurss;
use Illuminate\Http\Request;

class KurssController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'banner_url' => 'required|string',
            'student_count'=> 'required|integer',
        ]);
        
        $post = Kurss::create($validated);

        return response()->json($post);

    }

    public function index() {
        return response()->json(Kurss::all());
    }

}
