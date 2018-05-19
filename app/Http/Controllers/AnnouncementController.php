<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\User;
use App\Role;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $users = DB::table('users')
        //->join('roles','roles.id','=','users.role_id');

        return $announcements = DB::table('announcements')
            ->join('users', 'users.id', '=', 'announcements.user_id')
            ->join('roles','roles.id','=','users.role_id')
            ->select( 'announcements.id', 'announcements.announcement_title','users.name','roles.role_name')
            ->get();
        
        
        return view ('announcements.index')->with('announcements',$announcements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['announcement_title' =>'required'] );
       
        $announcement = new Announcement;
        
        $announcement->announcement_title = $request->input('announcement_title');
        $announcement->user_id = Auth::user()->id;
        $announcement->save();

        return redirect ('/announcement');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
