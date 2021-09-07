<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listEvent = Event::all();
        return view('user.list', ['list' => $listEvent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.from');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->firstName = $request->get('firstName');
        $event->lastName = $request->get('lastName');
        $event->phone = $request->get('phone');
        $event->email = $request->get('email');
        $event->address = $request->get('address');
        $event->username = $request->get('username');
        $event->password = $request->get('password');
        $event->status = $request->get('status');
        $event->save();
        return redirect('/user/index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $obj = Event::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        return view('user.edit', ['obj' => $obj]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Event::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->firstName = $request->get('firstName');
        $obj->lastName = $request->get('lastName');
        $obj->phone = $request->get('phone');
        $obj->email = $request->get('email');
        $obj->email = $request->get('address');
        $obj->email = $request->get('username');
        $obj->email = $request->get('password');
        $obj->status = $request->get('status');
        $obj->save();
        return redirect('/user/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Event::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->delete();
        return redirect('/user/index');
    }

}
