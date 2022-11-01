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
            @error('name')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="price">Цена</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Во денари">
            @error('price')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="description">Опис</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Доматен сос, гауда кашкавал, печурки.."></textarea>
            @error('description')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="category">Во која категорија спаѓа ова јадење?</label>
            <select class="form-control" id="category" name="category">
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
            @error('category')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>        
          <div class="form-group ml-1">
            <button type="submit" name="submit" class="btn btn-primary">Потврди</button>
          </div>
        </div>        
    </form>
</div>
@endsection
