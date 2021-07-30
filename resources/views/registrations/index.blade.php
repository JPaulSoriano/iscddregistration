@extends('layouts.app')
@section('content')
<div class="container">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

<div class="card">
    <div class="card-header bg-primary text-white">Registrations</div>
    <div class="card-body">
    <table class="table table-sm">
        <tr>
            <th>No</th>
            <th>Registraion No</th>
            <th>School Year</th>
            <th>Name</th>
            <th>Grade</th>
            <th>Payment Method</th>
            <th>Reference No</th>
            <th width="50px">Screenshot</th>
            <th width="50px">Payment</th>
            <th width="50px">Admission</th>
            <th width="50px">Enroll</th>
            <th width="50px">Action</th>
        </tr>
        @foreach ($registrations as $registration)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $registration->reg_ref }}</td>
            <td>{{ $registration->school_year }}</td>
            <td>{{ $registration->full_name }}</td>
            <td>{{ $registration->grade }}</td>
            <td>{{ $registration->payment_method }}</td>
            <td>{{ $registration->payment_ref }}</td>
            <td>
                <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modal-{{ $registration->id }}">View</button>
            </td>
            <td>
                @if($registration->status == 1)
                <form action="{{ route('unverify', $registration) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-block">Unverify</button>
                </form>
                @else
                <a href="{{ route('verify', $registration) }}"
                    class="btn btn-sm btn-primary btn-block">Verify</a>
                @endif
            </td>
            <td>
                @if($registration->status_admission == 1)
                <form action="{{ route('unadmit', $registration) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-block">Unadmit</button>
                </form>
                @else
                <a href="{{ route('admit', $registration) }}"
                    class="btn btn-sm btn-primary btn-block">Admit</a>
                @endif
            </td>
            <td>
                @if($registration->status_enrollment == 1)
                <form action="{{ route('unenroll', $registration) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-block">Unenroll</button>
                </form>
                @else
                <a href="{{ route('enroll', $registration) }}"
                    class="btn btn-sm btn-primary btn-block">Enroll</a>
                @endif
            </td>
            <td>
                <form action="{{ route('registrations.destroy',$registration->id) }}" method="POST">
                    <a class="btn btn-primary btn-sm  btn-block" href="{{ route('details',$registration->id) }}">Details</a>
                    @csrf
                    @method('DELETE')
    
                    <button type="submit" class="btn btn-sm btn-danger  btn-block my-1">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $registrations->links() !!}
    </div>
</div>


@foreach ($registrations as $registration)
        <!-- Modal -->
        <div class="modal fade" id="modal-{{ $registration->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-body">
            @if(!$registration->image)
           <p class="text-center h2">No Payment Yet</p>
            @else
            <img src="{{asset('storage/'.$registration->image)}}" style="height: 35vw; width: 100%;" class="img-fluid" alt="{{ $registration->payment_ref }}">
                @if(!$registration->auth_first_name)
                    <p class="h4 font-weight-bold my-3">Student Process the Payment himself</p>
                @else
                <p class="h4 font-weight-bold my-3">Payment Authorization: <span class="font-weight-light">{{ $registration->auth_last_name }}, {{ $registration->auth_first_name }} {{ $registration->auth_middle_name }}</span></p>
                @endif
            @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
    @endforeach



</div>
@endsection