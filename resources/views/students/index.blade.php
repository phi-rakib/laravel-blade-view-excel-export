@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-12 justify-content-center">
            <h1>Students</h1>
            <div class="mt-5 mb-2 float-right">
                <a href="{{ route('students.export') }}" class="btn btn-success">Exports All</a>
            </div>

            @include('exports.students')
        </div>
    </div>
@endsection