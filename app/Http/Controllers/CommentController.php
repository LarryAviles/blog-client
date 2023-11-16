<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function export(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');


        try {
            $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::post($url.'/comments/export', [
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $comments = $response->json();
        
            return response()->json($comments);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al realizar la solicitud.']);
        }

        
    }
}
