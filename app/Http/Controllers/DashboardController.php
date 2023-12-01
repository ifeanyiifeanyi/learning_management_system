<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        switch (auth()->user()->role){
            case 'instructor':
                return redirect()->route('instructor.view.dashboard');
                break;
            case 'admin':
                return  redirect()->route('admin.view.dashboard');
                break;

            case 'user':
                return redirect()->route('user.view.dashboard');
                break;

            default:
                return redirect()->route('login');
                break;
        }
    }
}
