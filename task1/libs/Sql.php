<?php
class Sql
{
    protected $pdo;
    
    public function insert()
    {      
        $id = 1;
        
        for ($i = 1; $i <= 1000; $i++) {
            echo ($i.' : '.date("h:i:s").'<br>');
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
        echo 'END';
        
        return $result;
    }
    
    public function select()
    {      
        $query = "SELECT COUNT(*) FROM test";
        //$query = "SELECT COUNT(DISTINCT `id`) FROM test";
        $result = $this->pdo->query($query);
        
        return $result->fetch(PDO::FETCH_ASSOC);
    }
    
    public function drop()
    {      
        $query = "DROP TABLE test";
        $result = $this->pdo->query($query);
        
        return $result;
    }
}
?>