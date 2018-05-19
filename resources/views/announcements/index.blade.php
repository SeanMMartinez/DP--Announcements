@extends('layouts.app')
@section('content')
<h3>Announcements</h3>
@if(count($announcements)>0)
@foreach($announcements as $announcement)
<div class="well">
    <h5>Title:   .  {{$announcement->announcement_title}}</h5>
    <h5>Creator:    . {{$announcement->name}}</h5>
    <h5>Role:  .   {{$announcement->role_name}}</h5>
    <p></p>
</br>
</div>
    @endforeach
    @else <p>No Announcement found</p>
    @endif
@endsection
