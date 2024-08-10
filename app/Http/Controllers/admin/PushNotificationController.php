<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PushNotification;
use App\Jobs\SendPushNotification;
use App\Http\Controllers\Controller;

class PushNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.notification.index');

    }
    public function data()
    {
        $results = PushNotification::orderByDesc("id")->get();
        $permissions = [
            'canCreate' => auth()->user()->can('push_notification Create'),
            'canDelete' => auth()->user()->can('push_notification Delete')
        ];
        return response()->json([
            'data' => $results,
            'permissions' => $permissions
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(Request $request)
        {
dd(77777);
            $users = User::all();

            foreach ($users as $user) {
                $pushNotification = PushNotification::create([
                    'user_id' => $user->id,
                    'title' => $request->title,
                    'message' => $request->message,
                    'image' => $request->image,
                    'link' => $request->link,
                ]);

                SendPushNotification::dispatch($pushNotification);
            }
            return response()->json(['message' => 'Push notifications sent successfully.']);

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
        $request->validate([
            'title' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'image' => 'nullable|url',
            'link' => 'nullable|url',
        ]);

        $pushNotification = PushNotification::find($id);

        if (!$pushNotification) {
            return response()->json(['error' => 'Push notification not found.'], 404);
        }

        $pushNotification->update([
            'title' => $request->title,
            'message' => $request->message,
            'image' => $request->image,
            'link' => $request->link,
        ]);

        SendPushNotification::dispatch($pushNotification);

        return response()->json(['message' => 'Push notification updated and sent successfully.']);
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
