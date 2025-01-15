<?php

namespace Dsw\Tema6\Models;

class Group {
  private int $id;
  private string $name;

  public function __construct(int $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function getGroupId() {
    return $this->id;
  }

  public function getGroupName() {
    return $this->name;
  }
}