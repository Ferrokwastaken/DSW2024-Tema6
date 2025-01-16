@extends('layouts.app')

@section('title', "Editar grupo con id: " . $group->getGroupId())

@section('content')

<form action="/group/{{ $group->getGroupId() }}" method="post">
  <input type="hidden" name="_method" value="put">
  <p>
    <input type="text" name="name" placeholder="Nombre..." value="{{ $group->getGroupName() }}">
  </p>
  <p>
    <input type="submit" value="Guardar">
    <input type="reset" value="Restablecer">
  </p>
</form>
@endsection