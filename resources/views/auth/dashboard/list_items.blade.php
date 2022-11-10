@extends('layouts.app')

@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@foreach ($categories as $category) 
    <h1>{{$category->name}}:</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Име на храна/пијалок:</th>
            <th scope="col">Измени:</th>
            <th scope="col">Избриши:</th>
          </tr>
        </thead>
        <tbody>
            
            @php $itemsCount = 1 @endphp
            @foreach ($items as $item)
            @if ($item->category_id == $category->id)
            <tr>
                <th scope="row">@php echo $itemsCount++ @endphp</th>
                <td>{{$item->name}}</td>
                <td>
                    <form method="GET" action='/edit-item/{{$item->id}}'>
                        @csrf
                            <input type="hidden" name="editItemID" value={{$item->id}}>
                            <button style="border: none; background-color: inherit" type="submit" class="submitbtn" name="editItem">📝</button>
                    </form>                
                </td>
                <td>
                    <form method="POST" action='/delete-item/{{$item->id}}'>
                        @csrf
                            <input type="hidden" name="deleteItemID" value={{$item->id}}>
                            <button style="border: none; background-color: inherit" type="submit" class="submitbtn" name="deleteItem">🗑️</button>
                    </form>
                </td>
            </tr>  
            @endif
            @endforeach
        </tbody>
    </table>
@endforeach
@endsection

