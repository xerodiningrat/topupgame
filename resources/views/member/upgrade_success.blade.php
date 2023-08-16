<!-- resources/views/member/upgrade_success.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-success">
            Your membership has been successfully upgraded to {{ $newMembershipLevel }} level!
        </div>
    </div>
@endsection
