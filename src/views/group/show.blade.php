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
</div>
</p>
@else
<h2>Grupo no encontrado</h2>
@endif
@endsection