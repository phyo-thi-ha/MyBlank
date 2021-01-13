@extends('layouts.app')
@section('content')

    <div class="container">
        @if($errors->any())
            <div class="alert alert-warning">
                <ol>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif
        
        <form method="POST">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>body</label>
            <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label >Category</label>
            <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">
                        {{ $category['name'] }}
                    </option>
                @endforeach
            </select>
        </div>
        <input type="submit" name="" id="" value="Add Article" class="btn btn-primary">

        </form>
    </div>
@endsection