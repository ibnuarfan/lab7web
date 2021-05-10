<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>PHP Dasar</title> 
    </head> 
    <body> 
        <h2>Form Input</h2> 
        <form method="post" action="tugas_output_praktikum.php">
            <fieldset>
            <labe>Nama : </labe>
            <input type="text" name="nama" ><br>
            <label>Tanggal lahir : </label>
            <input type="date" name="tgl_lahir"><br>
            <label>Pekerjaan : </label>
            <select id=pekerjaan name=pekerjaan>
            <option value="STAFF KEUANGAN">STAFF KEUANGAN</option>
            <option value="ADMIN WH">ADMIN WH</option>
            <option value="WEB DEV">WEB DEV</option>
            <option value="Web Desainer">Web Desainer</option>
            </select><br>
            <input type="submit" value=" Simpan ">
        </fieldset>
        </form> 
    </body> 
</html>