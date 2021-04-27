@extends('layouts.app')

@section('content')
    <h1>Contacts</h1>
    <form action="{{route('form-submit')}}" method="POST">
      @csrf
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" >
  </div>
  <button>Submite</button>
  </form>
@endsection
