<?php 
include 'koneksi.php';

$sql = $koneksi->query("SELECT * FROM biodata");

if (isset($_POST['btnsearch'])) {
  $search = $_POST['search'];

  $sql = $koneksi->query("SELECT * FROM biodata WHERE nama LIKE '%". $search ."%'");

  if (mysqli_num_rows($sql) == 0) {
    $sql = $koneksi->query("SELECT * FROM biodata");
    echo '<script>alert("Data tidak ditemukan");</script>';
  }
}
?>
 

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      
<div class="container-fluid">
  <div class="row">
    <div class="col s12 m12">

      <h3>Biodata</h3>
          <div class="row green darken-4">
            <div class="col s12 m12">
              <div class="card blue-grey lighten-5">
                <div class="card-content">
                  <div class="row">
                    <form action="" method="POST">
                      <div class="col s4 m4">
                        <input type="text" name="search" placeholder="pencarian berdasarkan nama">
                      </div>

                        <div class="col s4 m4">
                          <button type="submit" name="btnsearch" class="btn-small blue darken-1 right">Search</button>
                        </div>
                     </form>

                    
                    <div class="col s4 m4">
                      <a href="tambah_biodata.php" class="btn-floating blue darken-1 right"><i class=" material-icons">add</i></a>
                    </div>
                  </div>
  
                      

                          <table class="highlight responsive-table">
                            <thead>
                              <tr>
                                  <th class="center-align">No</th>
                                  <th>Nama Lengkap</th>
                                  <th class="center-align">Agama</th>
                                  <th class="center-align">Tanggal Lahir</th>
                                  <th class="center-align">Jenis Kelamin</th>
                                  <th class="center-align">Nomor Telepon</th>
                                  <th class="center-align">E-Mail</th>
                                  <th class="center-align">Foto</th>
                                  <th class="center-align">Aksi</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php $no = 1; ?>
                              <?php foreach ($sql as $row): ?>
                              <tr>
                                <td class="center-align"><?= $no++; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td class="center-align"><?= $row['agama']; ?></td>
                                <td class="center-align"><?= $row['tgl_lahir']; ?></td>
                                <td class="center-align"><?= $row['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan'; ?></td>

                                <td class="center-align"><?= $row['telepon']; ?></td>
                                <td ><?= $row['email']; ?></td>
                                <td><img src="images/myfoto.jpg" alt="" width="30px"></td>
                                <td width="250pt" class="center-align">
                                    <a href="" class="btn-small cyan darken-3 black-text">Detail</a>

                                    <a href="edit_biodata.php?id=<?= $row['id']; ?>" class="btn-small yellow darken-3 black-text">Edit</a>
                                    
                                    <a href="hapus_biodata.php?id=<?= $row['id']; ?>" onclick = "return confirm('Data Akan Dihapus')" class="btn-small red accent-3">Hapus</a>
                                </td>
                              </tr>
                              <?php endforeach ?>
                            </tbody>
                          </table>

                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    </body>
  </html>