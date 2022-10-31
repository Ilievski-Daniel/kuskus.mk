@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/create-item" method="POST" role="form">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        {{ csrf_field() }}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Име на храна</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Пица маргарита">
          </div>
          <div class="form-group col-md-6">
            <label for="price">Цена</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Во денари">
          </div>
          <div class="form-group col-md-12">
            <label for="description">Опис</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Доматен сос, гауда кашкавал, печурки.."></textarea>
          </div>
          <div class="form-group ml-1">
            <button type="submit" name="submit" class="btn btn-primary">Додади</button>
          </div>
        </div>        
    </form>
</div>
@endsection
