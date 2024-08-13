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

        $users = User::all();
        if (!empty($users)) {
            foreach ($users as $user) {
                if ($request->hasFile('image') && $request->file('image')->isValid()) {
                    $avatar = $request->file('image');
                    $image = upload($avatar);
                }else{
                    $image = null;
                }
                $pushNotification = PushNotification::create([
                    'user_id' => $user->id,
                    'title' => $request->title,
                    'message' => $request->message,
                    'image' => $image,
                    'link' => $request->link,
                ]);

                SendPushNotification::dispatch($pushNotification);
            }
            return response()->json(['message' => 'Push notifications sent successfully.']);
        }
        return response()->json(['message' => 'no found users.']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PushNotification::findOrFail($id);
        return response()->json($data);
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
        $pushNotification = PushNotification::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image = upload($image);
        } else {
            $image = $pushNotification->image;
        }


        if (!$pushNotification) {
            return response()->json(['error' => 'Push notification not found.'], 404);
        }

        $pushNotification->update([
            'title' => $request->title,
            'message' => $request->message,
            'image' => $image,
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
        $push = PushNotification::findOrFail($id);
        $push->delete();
    }
}
