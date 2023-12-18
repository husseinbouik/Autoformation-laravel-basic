@extends('base')
@section('content')
    
<h2>Connection</h2>

<div class="card">
    <div class="card-body">
        <form action="{{ route('auth.login') }}" method="POST" class="vstack gap-3">
            @csrf
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" class="form-control" value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" name="password" class="form-control" value="{{old('password')}}">
        @error('password')
            {{$message}}
        @enderror
            </div>
            <button class="btn btn-primary">connect </button>
        </form>
    </div>
</div>
@endsection