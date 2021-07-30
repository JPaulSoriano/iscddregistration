@extends('layouts.app')
@section('content')
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('registrations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card">
                <div class="card-header bg-primary text-white">Student Info</div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>School Year:</label>
                                    <small class="text-lead">Example: 2020-2021</small>
                                    <input type="text" name="school_year" class="form-control" placeholder="School Year">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Last Name:</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>First Name:</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Middle Name:</label>
                                    <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Grade:</label>
                                    <input type="text" name="grade" class="form-control" placeholder="Grade">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label>Address:</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Tel. No. | Mobile:</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Tel. No. | Mobile">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Age:</label>
                                    <input type="number" name="age" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Sex:</label>
                                    <small class="text-lead">Example: M or F</small>
                                    <input type="text" name="sex" class="form-control" placeholder="Sex">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Date of Birth:</label>
                                    <input type="date" name="birthday" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Place of Birth:</label>
                                    <input type="text" name="birth_place" class="form-control" placeholder="Place of Birth">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nationality:</label>
                                    <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Religion:</label>
                                    <input type="text" name="religion" class="form-control" placeholder="Religion">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No of Brothers:</label>
                                    <input type="number" name="brothers" class="form-control" placeholder="No of Brothers">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Age(s):</label>
                                    <small class="text-lead">Example: 4, 7, 21</small>
                                    <input type="text" name="brother_ages" class="form-control" placeholder="Age(s)">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>No of Sisters:</label>
                                    <input type="number" name="sistes" class="form-control" placeholder="No of Sisters">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Age(s):</label>
                                    <small class="text-lead">Example: 4, 7, 21</small>
                                    <input type="text" name="sister_ages" class="form-control" placeholder="Age(s)">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header bg-primary text-white">Parents</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Father:</label>
                                <input type="text" name="father" class="form-control" placeholder="Father">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Occupation:</label>
                                <input type="text" name="father_occupation" class="form-control" placeholder="Occupation">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Tel. No. | Mobile:</label>
                                <input type="number" name="father_phone" class="form-control" placeholder="Tel. No. | Mobile">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Mother:</label>
                                <input type="text" name="mother" class="form-control" placeholder="Mother">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Occupation:</label>
                                <input type="text" name="mother_occupation" class="form-control" placeholder="Occupation">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Tel. No. | Mobile:</label>
                                <input type="number" name="mother_phone" class="form-control" placeholder="Tel. No. | Mobile">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Address:</label>
                                <input type="text" name="parent_address" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header bg-primary text-white">Guardian (Optional)</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="guardian" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Occupation:</label>
                                <input type="text" name="guardian_occupation" class="form-control" placeholder="Occupation">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Tel. No. | Mobile:</label>
                                <input type="number" name="guardian_phone" class="form-control" placeholder="Tel. No. | Mobile">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Address:</label>
                                <input type="text" name="guardian_address" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
                            <div class="mt-5">
                                <p class="text-lead">Note: The following details are to be provided in order to finalize your registration. </br>You Can leave this blank and pay later. We will be sending you an email to finalize your registration.</p>
                            </div>

                            <div class="card border-0 shadow-sm my-3">
                                <div class="card-header bg-primary text-white">Payment</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label>Payment Method</label>
                                                    <input type="text" name="payment_method" class="form-control" placeholder="Payment Method">
                                                </div>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label>Ref No</label>
                                                    <input type="text" name="payment_ref" class="form-control" placeholder="Payment Reference No">
                                                </div>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label>Screenshot | Picture</label>
                                                    <input  class="form-control" type="file" name="image">
                                                </div>
                                            </div>

                                        </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <p class="text-lead">Note: Provide payee information in case the enrollee didn't process the payment himself.</p>
                            </div>

                            <div class="card border-0 shadow-sm my-3">
                                <div class="card-header bg-primary text-white">Payment Authorization</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" name="auth_first_name" class="form-control" placeholder="First Name">
                                                </div>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" name="auth_middle_name" class="form-control" placeholder="Middle Name">
                                                </div>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name="auth_last_name" class="form-control" placeholder="Last Name">
                                                </div>
                                            </div>


                                        </div>
                                </div>
                            </div>

        <div class="col-sm-12 text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
        </form>
</div>
@endsection