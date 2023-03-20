@extends('layouts.app')

@section('content')
    <div class="container">
    

    @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                   <li class="list-group-item list-group-item-warning p-2">
                   {{$error}}
                   </li>
                @endforeach
            </div>
    @endif

        <form method="post" >
            @csrf 

            <h1 class="h3">Add more articles</h1>

            <div class="mb-2">
                <label for="">Article Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="mb-2">
                <label>Article Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>

            <div class="mb-2">
                <label for="">Article Category</label>
                <select name="category_id" id="" class="form-select">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection