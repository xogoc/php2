<?php
namespace components;


abstract class Model
{
    public $table = '';
    protected $title = '';

    public function select($closure = []) {

        $app = App::getInstance();

        $mysqli = $app->db->getConnection();

        $query = 'select * from ' . $this_.$this->table;

        if(!empty($closure['where'])) {
            $query = $query . ' where ' . $closure['where'];
        }

        if(!empty( $closure['orderby'])) {
            $query = $query . ' order by ' . $closure['orderby'];
        }

        if(!empty( $closure['limit'])) {
            $query = $query . ' limit ' . $closure['limit'];
        }

        $select = $mysqli->query($query);

        $result = $select->fetchAll();
        return $result;

    }

    public function insert($closure = []) {
        $app = App::getInstance();

        $conn = $app->db->getConnection();

        $query = 'INSERT INTO ' .$this->table;

        if(!empty( $closure['params'])) {
            $values = [];
            foreach ($closure['params'] as $col => $val) {
                $values[] = $col.'=\''.$val.'\'';
            }
            $query = $query . ' SET ' . implode(',',$values);
        }

        $result = $conn->query($query);
        //throw new \Exception($query."\n".$result);
        return $result;

    }

    public function countAll() {

        $app = App::getInstance();

        $mysqli = $app->db->getConnection();

        $count = $mysqli->query('SELECT count(*) AS count FROM ' . $this->table .';');

        //$result = $count->fetch_assoc();
        $result = $count->fetch();

        return $result['count'];

    }

    public function singleRow($closure = [])
    {
        $result = $this->select($closure);

        if(!empty($result[0])) {
            return $result[0];
        }

        return null;
    }

    public function find($col, $val) {

        $result = $this->select([
            'where' => $col . ' = \'' . $val . '\'',
            'limit' => '1',
        ]);

        if(!empty($result[0])) {
            return $result[0];
        }

        return null;

    }

    public function update($id,$set) {

        $app = App::getInstance();

        $mysqli = $app->db->getConnection();

        $mysqli->query('UPDATE ' . $this->table. ' SET ' . $set . ' WHERE id= ' . $id .' LIMIT 1;');

        return true;
        //$mysqli->query("UPDATE gallery SET views=views+1 WHERE id=$id LIMIT 1");

    }


}