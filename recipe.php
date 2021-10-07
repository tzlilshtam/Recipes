<?php


class recipe
{
    private $DB;

    function __construct(mysqli $_DB) // Cons of product
    {
        $this->DB = $_DB;
    }

    public function getAllRecipes(){
        $result = [];
        $res =$this->DB->query('SELECT * FROM recipe');
        while ($row = $res->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }

  public function insert( $name,  $picture,  $description,  $likes){

        $query = "INSERT INTO recipe(name, picture, description, likes)
        VALUES('$name', '$picture','$description','$likes')";
        echo $query;
        return $this->DB->query($query);
    }
    public function delete($id){

        $query = "DELETE FROM recipe WHERE id=$id";
        return $this->DB->query($query);
    }
    public function edit1($id){
        $result=[];
        $query = "SELECT * FROM recipe WHERE id=$id";
        $item = $this->DB->query($query);
        while ($row = $item->fetch_assoc()){
            $result[] = $row;
        }
        return $result;
    }

    public function edit2($id, $name,  $picture,  $description){

        $query = "UPDATE recipe 
                  SET name = '$name', picture = '$picture', description = '$description'
                  WHERE id = $id";
        return $this->DB->query($query);
    }

    public function addLike($id, $likes){
        $query = "UPDATE recipe 
                  SET likes = '$likes'
                  WHERE id = $id";
        return $this->DB->query($query);
    }

}