<?php
    $con=mysqli_connect("localhost","root","","test");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con, "SELECT t1.nama_kriteria, t2.nama_kriteria
                        FROM tb_kriteria t1
                        INNER JOIN tb_kriteria t2
                        ON t2.id_kriteria > t1.id_kriteria");
    echo "<table>";
    $no = 0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>". ++$no . "</td>";
        
            for($i = 0; $i < count($row)-1; $i++){
                $keys = array_keys($row);
                if($i == 1){
                    echo "<td>";
                    echo '<select name="" id="">
                            <option value=""></option>
                        </select>';
                    echo "</td>";
                } 
                    echo "<td>" . $row[$keys[$i]] . "</td>";
            }
                echo "</tr>";
    }
    echo "</table>";
