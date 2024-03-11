<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
  $ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","BD"=>"Bisnis Digital"];
  $ar_skill = ["HTML"=>"HTML", "CSS"=>"CSS", "JavaScript"=>"JavaScript", "RWD Bootstrap"=>"RWD Bootstrap","PHP"=>"PHP", "Python"=>"Python","Java"=>"Java"];
  $ar_domisili = ["Jakarta"=>"Jakarta", "Bogor"=>"Bogor", "Depok"=>"Depok", "Tanggerang"=>"Tanggerang", "Bekasi"=>"Bekasi", "Lainnya"];
?>

<form method="POST" action="hasil_register.php">
  <container class="col-md d-flex justify-content-center">
    <fieldset class="col-md-10 border p-2">
      <legend>Form Registrasi IT CLUB</legend>
      <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book"></i>
              </div>
            </div> 
            <input id="nim" name="nim" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-card-o"></i>
              </div>
            </div> 
            <input id="nama" name="nama" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
            <label for="jk_0" class="custom-control-label">Laki-Laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
            <label for="jk_1" class="custom-control-label">Perempuan</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
        <div class="col-8">
          <select id="prodi" name="prodi" class="custom-select">
            <?php
            foreach ($ar_prodi as $k => $v){
              echo '<option value="'.$k.'">'.$v.'</option>';
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Skill Web & Programming</label> 
        <div class="col-8">
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skills[]" id="skills_0" type="checkbox" class="custom-control-input" value="skills">
            <?php
            foreach ($ar_skill as $k => $v){
              echo '<input type="checkbox" name="skills[]" value="'.$k.'">'.$k;
            }
            ?>
          </div>
        </div>
      </div>
      <div class="form-group row">
    <label for="skor" class="col-4 col-form-label">Skor</label> 
    <div class="col-8">
      <input id="skor" name="skor" type="text" class="form-control">
    </div>
  </div> 
      <div class="form-group row">
        <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
        <div class="col-8">
          <select id="domisili" name="domisili" class="custom-select">
          <?php
            foreach ($ar_domisili as $k => $v){
              echo '<option value="'.$k.'">'.$v.'</option>';
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-adn"></i>
              </div>
            </div> 
            <input id="email" name="email" type="text" class="form-control">
          </div>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </container>
</form>