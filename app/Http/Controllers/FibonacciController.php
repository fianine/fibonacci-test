<?php

namespace App\Http\Controllers;

use App\Jobs\FibonacciJob;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class FibonacciController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function index(Request $request)
    {
        FibonacciJob::dispatch($request->get('n'));
    }
}
