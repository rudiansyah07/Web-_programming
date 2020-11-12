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

      <div class="container">
        <div class="row">
          <div class="col s12 m12 green darken-4">



          <div class="card" style="padding: 20px;">
            <form action="act_biodata.php" method="POST">
                <div class="card-contenet" style="margin-bottom: 1px;">
                     <div class="row">
                        

                          <div class="row">
                              <div class="input-field col s6">
                                  <input placeholder="Masukan Nama Depan" id="nama_depan" type="text" class="validate" name="nama_depan">
                                  <label for="nama_depan">Nama Depan</label>
                              </div>

                              <div class="input-field col s6">
                                  <input placeholder="Masukan Nama Belakang" id="nama_belakang" type="text" class="validate" name="nama_belakang">
                                  <label for="nama_belakang">Nama Belakang</label>
                              </div>
                          </div>

                          <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Masukan Tanggal Lahir" id="tgl_lahir" type="date" class="validate" name="tgl_lahir">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                </div>
                          </div>

                          <div class="row" style="margin-bottom: 45px; ">
                              <div class="col s12">
                                <label for="agama">Agama</label>
                                  <select class="browser-default" name="agama" id="agama">
                                    <option value="" disabled selected>Pilih Agama</option>

                                    <?php $agama = array('Islam', 'Protestan', 'Khatolik', 'Hindu', 'Bhudha', 'Konghucu'); ?>
                                    <?php foreach ($agama as $key) : ?>
                                      <option value="<?= $key; ?>"><?= $key; ?></option>
                                    <?php endforeach ?>

                                  </select>
                              </div>
                          </div>

                          <div class="row" style="margin-bottom: 25px;">
                              <div class="col s12">
                                <label>Jenis Kelamin</label>
                                    <p>
                                        <label for="laki-laki">
                                          <input name="jenis_kelamin" type="radio" id="laki-laki" value="L" />
                                          <span>Laki-Laki</span>
                                        </label>
                                      </p>
                                      <p>
                                        <label for="perempuan">
                                          <input name="jenis_kelamin" type="radio" id="perempuan" value="P" />
                                          <span>perempuan</span>
                                        </label>
                                    </p>
                              </div>
                          </div>

                          <div class="row">
                                <div class="col s12">
                                  <label for="alamat">Alamat</label>
                                  <textarea id="alamat" class="materialize-textarea" placeholder="Masukan Alamat Lengkap" name="alamat" ></textarea>
                                </div>
                          </div>

                          <div class="row">
                              <div class="input-field col s12">
                                  <input placeholder="Masukan Nomor Telepon" id="telepon" type="number" class="validate" name="telepon">
                                  <label for="telepon">Nomor Telepon</label>
                              </div>
                          </div>

                          <div class="row" style="margin-bottom: 1px;">
                              <div class="input-field col s12">
                                  <input placeholder="Masukan E-Mail" id="email" type="email" class="validate" name="email">
                                  <label for="email">E-Mail</label>
                              </div>
                          </div>
                   </div>
                          
                </div>
              
                  <div class="card-action">
                    <button class="btn blue accent-3" type="submit">Simpan</button>
                    <button class="btn red accent-3" type="button">Batal</button>
                    <a href="index.php" class="btn blue-grey lighten-5 black-text">Kembali</a>
                  </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script>
          $('#alamat').val('New Text');
          M.textareaAutoResize($('#alamat'));
      </script>   
    </body>
  </html>