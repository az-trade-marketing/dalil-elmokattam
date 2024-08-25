<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Subscription;
use App\Models\Tag;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->hasRole('stores')) {
            return abort(404);
        }
        $stores = Store::count();
        $usersCounts = User::count();
        $categories = Category::count();
        $areas = Zone::count();

        $users = User::select(DB::raw('COUNT(*) as count'), DB::raw('MONTH(created_at) as month'))
                ->groupBy('month')
                ->get();

        $subscriptions = Subscription::select(DB::raw('COUNT(*) as count'), 'type')
                ->groupBy('type')
                ->get();
        return view('admin.home',compact("stores","users","categories","areas","usersCounts","subscriptions"));
    }
}
