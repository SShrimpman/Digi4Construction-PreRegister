@extends('components.master.main')

@section('content')
    @if(session('success'))
        @component('components.success.success')
        @endcomponent
    @else
        @component('components.form.form')
        @endcomponent
    @endif
@endsection