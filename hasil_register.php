<fieldset class="col-md-10 border p-2">

<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk= $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'];
$skor = $_POST ['skor'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

// skor

  if ($skor == 0){
    $kategori = 'Tidak Memadai';
  }
  elseif ($skor <= 40){
    $kategori = 'Kurang';
  }
  elseif ($skor <= 60){
    $kategori = 'Cukup';
  }
  elseif ($skor <= 100){
    $kategori = 'Baik';
  }
  elseif ($skor <= 150){
    $kategori = 'Sangat Baik';
  }
  else{
    $kategori = 'Skor melebihi batas maksimal';
  }
   

//cetak
echo "<h2>Hasil Registrasi:</h2>";
echo "NIM: $nim <br>";
echo "Nama: $nama <br>";
echo "Jenis Kelamin: $jk <br>";
echo "Program Studi: $prodi <br>";
echo "Skill Web & Programming: ";
foreach ($skills as $value){
  echo "$value ";
}
echo "<br>";
echo "Skor: $skor <br>"; 
echo "Kategori Skill: $kategori <br>"; 
echo "Tempat Domisili: $domisili <br>";
echo "Email: $email <br>";
?>
</fieldset>