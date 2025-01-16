@extends('layouts.app')

@section('title', $title)

@section('content')
@if ($group)
<h2>Un grupo</h2>
<p>{{ $group->getGroupId() }}</p>
<h3>{{ $group->getGroupName() }}</h3>
<p>
<div>
  <a href="/group/{{ $group->getGroupId() }}/edit"><button>Editar</button></a>
  <form action="/group/{{ $group->getGroupId() }}" method="post" class="inline">
          <input type="hidden" name="_method" value="delete">
          <input type="submit" value="eliminar">
  </form>
</div>
</p>
<h3>Usuarios</h3>
<ul>
  @foreach($group->users() as $user)
  <li>{{ $user->getName() }}</li>
  @endforeach
</ul>
@else
<h2>Grupo no encontrado</h2>
@endif
@endsection