@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/create-category" method="POST" role="form">
          {{ csrf_field() }}
        <div class="form-group">
          <label for="category">Внеси име на нова категорија:</label>
          <input name="category" style="width: 50%" type="text" class="form-control" id="category" placeholder="Пица, Салата итн.">
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Потврди</button>
      </form>
</div>
@endsection
