@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <a style="width: 100%;max-width:100px;background-color:rgb(255,255,255,.2);backdrop-filter:blur(10px);color:#000;border:0;outline:0;" href="{{ route('notes.index')}}" type="button" class="btn btn-primary">My Notes</a>

    </div>
</div>
</div>
@endsection