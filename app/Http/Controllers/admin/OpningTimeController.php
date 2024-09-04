<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use App\Models\OpningTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OpningTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        return view('admin.opening_time.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::all();
        return view('admin.opening_time.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $daysOfWeek = [
            'saturday',
            'sunday',
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday'
        ];

        foreach ($daysOfWeek as $day) {
            if ($request->has("{$day}_start_time") && $request->has("{$day}_end_time")) {
                DB::table('opning_times')->insert([
                    'store_id' => $request->store_id,
                    'day_of_week' => $day,
                    'start_time' => $request->input("{$day}_start_time"),
                    'end_time' => $request->input("{$day}_end_time"),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return redirect()->route('opening-time.index')->with('success', 'Opening times added successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($storeId)
    {
        $stores = Store::all();
        // Fetch the opening times for the specific store
        $openingTimes = OpningTime::where('store_id', $storeId)->get();
        return view('admin.opening_time.edit', compact('stores', 'openingTimes', 'storeId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $storeId)
    {
        $request->validate([
            'store_id' => 'required|exists:stores,id',
            'saturday_start_time' => 'nullable|date_format:H:i',
            'saturday_end_time' => 'nullable|date_format:H:i',
            'sunday_start_time' => 'nullable|date_format:H:i',
            'sunday_end_time' => 'nullable|date_format:H:i',
            'monday_start_time' => 'nullable|date_format:H:i',
            'monday_end_time' => 'nullable|date_format:H:i',
            'tuesday_start_time' => 'nullable|date_format:H:i',
            'tuesday_end_time' => 'nullable|date_format:H:i',
            'wednesday_start_time' => 'nullable|date_format:H:i',
            'wednesday_end_time' => 'nullable|date_format:H:i',
            'thursday_start_time' => 'nullable|date_format:H:i',
            'thursday_end_time' => 'nullable|date_format:H:i',
            'friday_start_time' => 'nullable|date_format:H:i',
            'friday_end_time' => 'nullable|date_format:H:i',
        ]);

        // Define an array of days
        $days = ['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'];

        // Update each day's opening times
        foreach ($days as $day) {
            $startTime = $request->input("{$day}_start_time");
            $endTime = $request->input("{$day}_end_time");

            // Find or create an opening time record for the store and day
            OpningTime::updateOrCreate(
                [
                    'store_id' => $storeId,
                    'day_of_week' => $day
                ],
                [
                    'start_time' => $startTime,
                    'end_time' => $endTime
                ]
            );
        }

        // Redirect back with a success message
        return redirect()->route('opening-time.edit', $storeId)
                         ->with('success', __('admin.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the store by ID
        $store = Store::findOrFail($id);

        // Delete all opening times for the given store
        OpningTime::where('store_id', $store->id)->delete();

        // Redirect back with a success message
        return response()->json("true");
        return redirect()->route('opening-time.index')->with('success', __('admin.delete_success'));
    }

}
