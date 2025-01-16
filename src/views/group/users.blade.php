@extends('layouts.app')

@section('title', 'Modificando los usuarios del grupo')

@section('content')

@if ($group)
  <h2>{{ $group->getGroupName() }}</h2>

  <form action="/group/{{ $group->getGroupId }}/users" method="post">
    <ul>
      @foreach ($users as $user)
        <li>
          @php
            $checked = (in_array($user->getId(), $usersBelongId)) ? 'checked' : '';
          @endphp
          <input type="checkbox" name="usersid[]" id="user_{{ $user->getId() }}" value="{{ $user->getId() }}" {{$checked}}>
          <label for="user_{{ $user->getId() }}">{{ $user->getName() }}</label>
        </li>
      @endforeach
    </ul>
    <input type="submit" value="Guardar">
  </form>
@else
<h2>Grupo no encontrado</h2>
@endif
@endsection