<h3> daftar user<h3>
    <table>
        <tr>
            <td> 1 <td>
            <td> name lenggkap <td>
            <td> email <td>
            <td> tambah <td>
            <td><a href="tbuser.php?aksi=new">tambah</a></td>
</tr>
<?php
$sql = "SELECT nama, email, iduser FROM tbuser ORDER BY nama;";
$hasil = mysqli_query($cnn, $sql);
$cx = 1;
while($h = mysqli_fetch_assoc($hasil)){ 
?>
<tr>
            <td><?=$cx?><td>
            <td><?=$h["name"]?><td>
            <td><?=$h["email"]?><td>
            <td>ubah hapus</td>
</tr>
            
<?php
$cx++;

}
?>

</table>