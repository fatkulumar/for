
<?php

    $con=mysqli_connect("localhost","root","","test");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con, "SELECT t1.nama_kriteria, t2.nama_kriteria
                        FROM tb_kriteria t1
                        INNER JOIN tb_kriteria t2
                        ON t2.id_kriteria > t1.id_kriteria");
<<<<<<< HEAD
    echo '<form action="" method="POST">';
=======
>>>>>>> ea12af5cb1420fa5070581935db7b01c5d4a0b29
    echo "<table>";
    $no = 0;
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>". ++$no . "</td>";
<<<<<<< HEAD
=======
        
>>>>>>> ea12af5cb1420fa5070581935db7b01c5d4a0b29
            for($i = 0; $i < count($row)-1; $i++){
                $keys = array_keys($row);
                if($i == 1){
                    echo "<td>";
<<<<<<< HEAD
                    echo '<select name="data'.$no.'" id="">';
                    $sql = mysqli_query($con, "SELECT * FROM tb_kriteria");
                    while($op = mysqli_fetch_array($sql)){
                            echo '<option value="'.$op['nama_kriteria'].'">'.$op['nama_kriteria'].'</option>';
                    }
                    echo '</select>';
                    echo "</td>";
                }if(isset($_POST['tambah'])){
                    if($i){
                        $data0 = $row[$keys[0]];
                        $data1 = $row[$keys[1]];
                        $sql = mysqli_query($con, "INSERT INTO `coba`(`nama`, `nama_kanan`) VALUES ('$data0', '$data1')");
                        if($sql){
                            echo "berhasil di tambah";
                        }
                    } 
                }
                    echo "<td>" . $row[$keys[$i]] . "</td>";
            }
                echo "</tr>";           
    }
    echo '<td>
    <button type="submit" name="tambah" id="tambah">Tambah</button>
</td>';
    echo "</table>";
    echo '</form>';
?>
=======
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
>>>>>>> ea12af5cb1420fa5070581935db7b01c5d4a0b29
