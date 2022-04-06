@extends('disseny')
@section('content')
<h1>Llista d'socis</h1>
<div>
  @if(session()->get('success'))
    <div class="mt-5">
      {{ session()->get('success') }}
    </div>
  @endif
  <table  class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Correu</td>
        </tr>
    </thead>
    <tbody>
        @foreach($soci as $soc)
        <tr>
            <td>{{$soc->id}} </td>
            <td>{{$soc->nom}} </td>
            <td>{{$soc->cognoms}} </td>
            <td>{{$soc->correu}} </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
