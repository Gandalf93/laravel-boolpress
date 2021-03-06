@extends('layouts.app')

@section('content')
    <div class="container">
       
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($words as $word) 
                <tr>
                    <th scope="row">{{ $word->id }}</th>
                    <td>{{ $word->title }}</td>
                    <td>
                        <a href="" class="btn btn-primary">Show</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <form action="" method="word" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
@endsection