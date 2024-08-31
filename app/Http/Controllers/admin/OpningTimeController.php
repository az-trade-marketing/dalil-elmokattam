<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use App\Models\OpningTime;
use Illuminate\Http\Request;
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
        //
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
        dd($request->all());
        $days = [
            'kt_docs_repeater_basic_saturday' => 'Saturday',
            'kt_docs_repeater_basic2_sunday' => 'Sunday',
            'kt_docs_repeater_basic_monday' => 'Monday',
            'kt_docs_repeater_basic_tuesday' => 'Tuesday',
            'kt_docs_repeater_basic_wednesday' => 'Wednesday',
            'kt_docs_repeater_basic_thursday' => 'Thursday',
            'kt_docs_repeater_basic_friday' => 'Friday',
        ];

        foreach ($days as $key => $day) {
            $dayReq = $request->input($key);
            if (!empty($dayReq)) {
                foreach ($dayReq as $i => $req) {
                    $startTime = $req['start_time'] ?? null;
                    $endTime = $req['end_time'] ?? null;

                    if (!empty($startTime) && !empty($endTime)) {
                        OpningTime::create([
                            'store_id' => $request->store_id,
                            'day_of_week' => $day,
                            'start_time' => $this->convertFormat($startTime),
                            'end_time' => $this->convertFormat($endTime),
                            'shift_number' => $i + 1,
                            'work_business' => $i + 1,
                        ]);
                    }
                }
            }
        }

        Session::flash('success', 'Store created successfully');
        return back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
