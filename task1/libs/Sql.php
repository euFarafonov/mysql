<?php
class Sql
{
    protected $pdo;
    
    public function insert()
    {      
        $id = 1;
        echo ('START : '.date("h:i:s").'<br>');
        
        for ($i = 1; $i <= 1000; $i++) {
            $str = '';
            for ($j = 1; $j <=1000; $j++, $id++) {
                $hash = md5('hello'.$id);
                $name = $hash.$hash.$hash.'abcd';
                $descrip = $name.$name.$name.$name.$name;
                $str .= "($id,'$name','$descrip'),";
            }
            $str = substr($str, 0, -1);
            $query = "INSERT INTO test (id,name,descrip) VALUES ".$str;
            $result = $this->pdo->exec($query);
        }
        echo ('END : '.date("h:i:s").'<br>');
        
        return $result;
    }
    
    public function selectAll()
    {      
        $query = "SELECT COUNT(*) FROM test";
        //$query = "SELECT COUNT(DISTINCT `id`) FROM test";
        $result = $this->pdo->query($query);
        
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    
    public function dropCreate()
    {      
        $query = "DROP TABLE test";
        $result = $this->pdo->query($query);
        
        $query = "CREATE TABLE test (id INT NOT NULL, name VARCHAR(255) NOT NULL, descrip TEXT NOT NULL)";
        $result = $this->pdo->query($query);
        
        return $result;
    }
}
?>