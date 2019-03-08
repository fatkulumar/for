<?php
    $con=mysqli_connect("localhost","root","","test");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con, "SELECT t1.nama, t2.nama
                        FROM data t1
                        INNER JOIN data t2
                        ON t2.id > t1.id");
    echo "<table>";
    $no = 0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>". ++$no . "</td>"; 
            for($i = 0; $i < count($row)-1; $i++){
                $keys = array_keys($row);
                    echo "<td>" . $row[$keys[$i]] . "</td>";
    }
        echo "</tr>";
    }
        echo "</table>";
