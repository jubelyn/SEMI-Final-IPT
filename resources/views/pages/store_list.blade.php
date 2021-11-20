@extends('layouts.app')
@section('content')

<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
            <th scope="col">Owner</th>
            <th scope="col">Net Worth</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($stores as $list)
                <tr>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->location }}</td>
                    <td>{{ $list->owner }}</td>
                    <td>{{ $list->net_worth }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
