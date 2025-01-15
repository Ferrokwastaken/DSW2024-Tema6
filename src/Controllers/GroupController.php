<?php

namespace Dsw\Tema6\Controllers;

use Dsw\Tema6\Dao\GroupImplement;

class GroupController extends Controller {
  public function index() {
    $groupDAO = new GroupImplement();
    $groups = $groupDAO->showAll();
    echo $this->blade->view()->make('group.index', compact('groups'))->render();
  }

  public function show ($param) {
    $id = $param['id'];
    $groupDAO = new GroupImplement();
    $group = $groupDAO->findById($id);
    $data = [
      'group' => $group,
      'title' => 'grupo'
    ];
    echo $this->blade->view()->make('group.show', $data)->render();
  }

  public function create() {
    echo $this->blade->view()->make('group.create')->render();
  }

  public function post() {
    $name = $_POST['name'];
    $groupDAO = new GroupImplement();
    $groupDAO->create($name);
    $this->index();
  }
}