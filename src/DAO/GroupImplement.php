<?php

namespace Dsw\Tema6\Dao;

use Dsw\Tema6\Database\Database;
use Dsw\Tema6\Models\Group;
use PDO;

class GroupImplement {
  private Database $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function showAll(): array {
    $query = 'SELECT * FROM `groups`';
    $statement = $this->db->getConnection()->prepare($query);
    $statement->execute();
    $groups = [];
    while ($groupRecord = $statement->fetch(PDO::FETCH_ASSOC)) {
      $group = new Group(
        $groupRecord['id'],
        $groupRecord['name']
      );
      $groups[] = $group;
    }

    return $groups;
  }

  public function findById(int $id): Group | null {
    $query = 'SELECT * FROM `groups` WHERE id = :id';
    $statement = $this->db->getConnection()->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();
    $groupRecord = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$groupRecord) {
      return null;
    } else {
      return new Group(
        $groupRecord['id'],
        $groupRecord['name']
      );
    }
  }

  public function create (string $name) {
    $query = 'INSERT INTO `groups` (name) VALUES (:name)';
    $statement = $this->db->getConnection()->prepare($query);
    $statement->bindParam(':name', $name);
    $statement->execute();
  }

  public function delete(int $id) {
    $query = 'DELETE FROM `groups` WHERE id = :id';
    $statement = $this->db->getConnection()->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();
  }

  public function update (int $id, string $name) {
    $query = 'UPDATE `groups` SET name=:name WHERE id = :id';
    $statement = $this->db->getConnection()->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':name', $name);
    $statement->execute();
  }

  public function findGroupsByUserId(int $id) {
    $query = 'SELECT id, name FROM `groups` INNER JOIN group_user ON `groups`.id = group_user.id_group WHERE group_user.id_user = :id_user';
    $statement = $this->db->getConnection()->prepare($query);
    $statement->bindParam(':id_user', $id);
    $statement->execute();
    $groups = [];
    while ($groupRecord = $statement->fetch(PDO::FETCH_ASSOC)) {
      $group = new Group(
        $groupRecord['id'],
        $groupRecord['name']
      );
      $groups[] = $group;
    }

    return $groups;
  }
}