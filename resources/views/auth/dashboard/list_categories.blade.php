@extends('layouts.app')

@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<h1>Категории:</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Категорија:</th>
        <th scope="col">Измени:</th>
        <th scope="col">Избриши:</th>
      </tr>
    </thead>
    <tbody>
        @php $categoriesCount = 1 @endphp
        @foreach ($categories as $category)
        <tr>
            <th scope="row">@php echo $categoriesCount++ @endphp</th>
            <td>{{$category->name}}</td>
            <td>
                <form method="GET" action='/edit-category/{{$category->id}}'>
                    @csrf
                        <input type="hidden" name="editCategoryID" value={{$category->id}}>
                        <button style="border: none; background-color: inherit" type="submit" class="submitbtn" name="editCategory">📝</button>
                </form>                
            </td>
            <td>
                <form method="POST" action='/delete-category/{{$category->id}}'>
                    @csrf
                        <input type="hidden" name="deleteCategoryID" value={{$category->id}}>
                        <button style="border: none; background-color: inherit" type="submit" class="submitbtn" name="deleteCategory">🗑️</button>
                </form>
            </td>
        </tr>  
        @endforeach
    </tbody>
</table>
@endsection

