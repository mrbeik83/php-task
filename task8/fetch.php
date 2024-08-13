<?php  
    class FetchAll extends Db_connect{
        public function fetchAsoc(){
            $qu = $this->getConn()->query("SELECT * FROM kala");
            while ($row = $qu->fetch(PDO::FETCH_ASSOC)) {
                echo "<table border=3  cellpadding=3  align=center  cellspacing=0 style='border: solid 3px green;'>";
                echo "<tr><th>Id</th><th>Prudoctname</th><th>material</th><th>size</th><th>Number</th><th>Price</th></tr>";
            
                    echo "<tr>";  
                    $constVal = $row['ID'];
                    echo"<td> $constVal</td>";
            
                    $constVal = $row['Mahsool'];
                    echo"<td> $constVal</td>";
            
                    $constVal = $row['Material'];
                    echo"<td> $constVal</td>";
            
                    $constVal = $row['SizeKala'];
                    echo"<td> $constVal</td>";

                    $constVal = $row['NumberKala'];
                    echo"<td> $constVal</td>";

                    $constVal = $row['Price'];
                    echo"<td> $constVal</td>";
                    echo "</tr>";  
            
        }
    }
}
class fetchOne extends Db_connect{
    public function fetchOneById($id){
        $conn = $this->getConn();

        $qu = $conn->query("SELECT * FROM kala WHERE ID='$id'");
        while ($row = $qu->fetch(PDO::FETCH_ASSOC)){
            echo "<table border=3  cellpadding=3  align=center  cellspacing=0 style='border: solid 3px green;'>";
                echo "<tr><th>Id</th><th>Prudoctname</th><th>material</th><th>size</th><th>Number</th><th>Price</th></tr>";
            
                    echo "<tr>";  
                    $constVal = $row['ID'];
                    echo"<td> $constVal</td>";
            
                    $constVal = $row['Mahsool'];
                    echo"<td> $constVal</td>";
            
                    $constVal = $row['Material'];
                    echo"<td> $constVal</td>";
            
                    $constVal = $row['SizeKala'];
                    echo"<td> $constVal</td>";

                    $constVal = $row['NumberKala'];
                    echo"<td> $constVal</td>";

                    $constVal = $row['Price'];
                    echo"<td> $constVal</td>";
                    echo "</tr>";  
        }
    }
}
    
?>