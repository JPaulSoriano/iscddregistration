@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row justify-content-center">
            <div class="col-sm-4">
                <a href="{{ route('registrations.index') }}" type="button" class="btn btn-lg btn-block btn-primary p-5"><h3>Registrations</h3><h1 class="font-weight-bold text-info">{{ $total}}</h1></a>
            </div>
        </div>
    </div>


</div>
@endsection
