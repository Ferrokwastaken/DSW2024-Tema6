@extends('layouts.app')

@section('title', 'Grupos')

@section('content')
  <p>Hay {{ count($groups) }} grupos</p>
  @if (count($groups))
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($groups as $group)
      <tr>
        <td>{{ $group->getGroupId() }}</td>
        <td>{{ $group->getGroupName() }}</td>
        <td>
        <a href="/group/{{ $group->getGroupId() }}"><button>Mostrar</button></a>
        <a href="/group/{{ $group->getGroupId() }}/edit"><button>Editar</button></a>
        <form action="/group/{{ $group->getGroupId() }}" method="post" class="inline">
          <input type="hidden" name="_method" value="delete">
          <input type="submit" value="eliminar">
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <p>No hay grupos</p>
  @endif
@endsection