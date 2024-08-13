<?php
        function Weiw ($qu){
                while ($row = $qu->fetch(PDO::FETCH_ASSOC)){
                    echo "<table border=3  cellpadding=3  align=center  cellspacing=0 style='border: solid 3px green;'>";
                        echo "<tr><th>Id</th><th>Prudoctname</th><th>material</th><th>size</th><th>Number</th><th>Price</th></tr>";
                    
                            echo "<tr>";  
                            $constVal = $row['id'];
                            echo"<td> $constVal</td>";
                    
                            $constVal = $row['productName'];
                            echo"<td> $constVal</td>";
                    
                            $constVal = $row['Material'];
                            echo"<td> $constVal</td>";
                    
                            $constVal = $row['sizeKala'];
                            echo"<td> $constVal</td>";

                            $constVal = $row['numberKala'];
                            echo"<td> $constVal</td>";

                            $constVal = $row['Price'];
                            echo"<td> $constVal</td>";
                            echo "</tr>";  
                }
                
            }
?>