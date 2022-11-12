@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/update-item/{{$item->id}}" method="POST" role="form">
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
            <label for="name">Име на храна/пијалок</label>
            <input type="text" name="name"  value="{{$item->name}}" class="form-control" id="name" placeholder="{{$item->name}}">
            @error('name')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="price">Цена</label>
            <input type="number" name="price" value="{{$item->price}}" class="form-control" id="price" placeholder="{{$item->price}}">
            @error('price')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="description">Опис</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="{{$item->description}}">{{$item->description}}</textarea>
            @error('description')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="category">Во која категорија спаѓа ова јадење?</label>
            <select class="form-control" id="category" name="category">
              @foreach($categories as $category)
                @if($category->id == $item->category_id)
                <option selected value="{{$category->id}}">{{$category->name}}</option>
                @else
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
              @endforeach
            </select>
            @error('category')
              <div style="color: red; margin-top: 1%">{{ $message }}</div>
            @enderror
          </div>        
          <div class="form-group ml-1">
            <button type="submit" name="submit" class="btn btn-primary">Потврди</button>
          </div>
          <input type="hidden" name="itemID" value={{$item->id}}>
        </div>        
    </form>
</div>
@endsection
