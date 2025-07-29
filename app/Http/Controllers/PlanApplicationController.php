<?php
namespace App\Http\Controllers;

use App\Models\PlanApplication;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PlanApplicationController extends Controller
{

   


   public function index()
{
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
    }

    // Get logged-in user ID
    $userId = Auth::id();

    // Total amount paid by user
    $totalPlansAmount = Payment::where('user_id', $userId)->sum('amount');

    // Total number of payment attempts
    $totalApplications = Payment::where('user_id', $userId)->count();

    // Number of successful transactions
    $completedTransactions = Payment::where('user_id', $userId)
        ->where('payment_status', 'success')
        ->count();

    // Number of pending transactions
    $pendingTransactions = Payment::where('user_id', $userId)
        ->where('payment_status', 'Pending')
        ->count();

    // Get recent payment records
    $applications = Payment::where('user_id', $userId)
        ->latest()
        ->take(5)
        ->get();

    return view('index', compact(
        'totalPlansAmount',
        'applications',
        'completedTransactions',
        'pendingTransactions',
        'totalApplications'
    ));
}






    public function plan()
    {
        return view('monthly-plan');
    }


    public function notifications()
    {
        return view('notifications');
    }


    public function help()
    {
        return view('help');
    }



    public function settings()
    {
        return view('settings');
    }





    public function PlanApplication()
    {
        $userId = Auth::id(); // Get the logged-in user's ID

        // Get ALL transactions for this user
        $applications = Payment::where('user_id', $userId)
            ->latest()
            ->get();

        return view('transactions', compact('applications'));
    }






public function transactions(Request $request)
{

    /*dd($request->all());*/

    $query = Payment::query();

    // Filter by reference number (exact)
    if ($request->filled('reference')) {
        $query->where('reference', $request->input('reference'));
    }

    // Filter by date (exact date)
    if ($request->filled('date')) {
        $query->whereDate('created_at', $request->input('date'));
    }

    // Filter by status (exact match)
    if ($request->filled('status')) {
        $query->where('payment_status', $request->input('status'));
    }

    $applications = $query->latest()->get();

    return view('transactions', compact('applications'));
}





    

    // Admin: View all applications
    public function viewApplications()
    {
        $applications = Payment::all();
        return view('admin.applications', compact('applications'));
    }




    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
