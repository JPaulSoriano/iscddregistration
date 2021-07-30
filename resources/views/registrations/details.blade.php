@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Details</div>

                <div class="card-body text-center p-5">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend text-center">
                    <div class="input-group-text bg-primary text-white">Name:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->full_name }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Email:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->email }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Address:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->address }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Phone:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->phone }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Father:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->father }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Phone:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->phone }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Mother:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->mother }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Phone:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->phone }}" disabled>
                </div>
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white">Address:</div>
                    </div>
                    <input type="text" class="form-control border-0" value="{{ $registration->parent_address }}" disabled>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection