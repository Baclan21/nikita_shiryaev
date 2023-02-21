@extends('layouts.app')

@section('content')

@foreach ($spisoks as $spis)
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td> {{ $spis->name }} </td>
        <td> {{ $spis->firstname }}</td>

        <td> <img src="{{ $spis->img }}"> </td>
      </tr>

    </tbody>
  </table>
  @endforeach
@endsection
