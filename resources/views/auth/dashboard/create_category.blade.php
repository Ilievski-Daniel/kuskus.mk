@extends('layouts.app')

@section('content')

<div class="container">
    
    <form action="/create-category" method="POST" role="form">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
          {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Внеси име на нова категорија:</label>
          <input name="name" style="width: 50%" type="text" class="form-control" id="name" placeholder="Пица, Салата итн.">
          @error('name')
            <div style="color: red; margin-top: 1%">{{ $message }}</div>
          @enderror
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Потврди</button>
      </form>
</div>
@endsection
