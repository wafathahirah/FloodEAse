<!-- resources/views/profile/show.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Your existing profile display code goes here -->

    <!-- Button to trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfileModal">
        Edit Profile
    </button>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your form fields for updating the profile -->
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        
                </div>
            </div>
        </div>
    </div>
@endsection
