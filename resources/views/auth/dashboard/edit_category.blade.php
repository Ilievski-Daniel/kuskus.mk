@extends('layouts.app')
@section('content')
    <div class="container">
    
        <form action="/update-category/{{$category->id}}" method="POST" role="form">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
              {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Име на категорија:</label>
              <input name="name" value={{$category->name}} style="width: 50%" type="text" class="form-control" id="name" placeholder={{$category->name}}>
              @error('name')
                <div style="color: red; margin-top: 1%">{{ $message }}</div>
              @enderror
              <input type="hidden" name="categoryID" value={{$category->id}}>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Потврди измена</button>
          </form>
    </div>
@endsection

