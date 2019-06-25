<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="table2.css">
 <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<body style="background-image: url('bg.jpg'); background-repeat: no-repeat;background-size: cover">

<div class="container">
    <div class="row" style="background-color:#e1e7f2">
    
        <div style="padding: 25px 0px 25px 100px">
           <h1 style="font-size: 35px">Daftar Penghargaan</h1>
        </div>
    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-danger panel-table" style="z-index: -1">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Penghargaan</h3>
                  </div>
                  <div class="col col-xs-6 text-right" id="button-relative">
                    <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-sm btn-danger btn-create" style="z-index: 1;font-size: 15px;width:50px">Add</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>         
                        <th class="hidden-xs">No</th>
                        <th>Kategori</th>
                        <th>Jenis</th>
                        <th>Poin</th>
                        <th>Act</th>

                   <!--      <th><em class="fa fa-cog"></em></th> -->
                    </tr> 
                  </thead>
                  <tbody>
                          <tr class="active">
                            <td class="hidden-xs">1</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Jadi pimpinan upacara</td>
                            <td>5</td>
                            <td align="center">
                              <a class="btn btn-danger" onclick="document.getElementById('id02').style.display='block'" class="btn btn-sm btn-danger btn-create"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr class="danger">
                            <td class="hidden-xs">2</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Jadi Ketua Kelas</td>
                            <td>3.2</td>
                             <td align="center">
                              <a class="btn btn-danger"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr class="active">
                            <td class="hidden-xs">3</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Kasih Temen Jajan</td>
                            <td>2.4</td>
                             <td align="center">
                              <a class="btn btn-danger"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr class="danger">
                            <td class="hidden-xs">2</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Jadi Ketua Kelas</td>
                            <td>3.2</td>
                             <td align="center">
                              <a class="btn btn-danger"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr class="active">
                            <td class="hidden-xs">3</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Kasih Temen Jajan</td>
                            <td>2.4</td>
                             <td align="center">
                              <a class="btn btn-danger"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>


                          <tr class="danger">
                            <td class="hidden-xs">4</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Jadi Ketua Kelas</td>
                            <td>3.2</td>
                             <td align="center">
                              <a class="btn btn-danger"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr class="active">
                            <td class="hidden-xs">5</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Kasih Temen Jajan</td>
                            <td>2.4</td>
                             <td align="center">
                              <a class="btn btn-danger"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                          <tr class="danger">
                            <td class="hidden-xs">6</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                  Choose Kategori
                                </button>
                                 <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Kejujuran</a>
                                  <a class="dropdown-item" href="#">Tanggung Jawab</a>
                                  <a class="dropdown-item" href="#">Loyalitas</a>
                                </div>
                              </div>
                            </td>
                            <td>Jadi Ketua Kelas</td>
                            <td>3.2</td>
                             <td align="center">
                              <a class="btn btn-danger"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                          </tr>

                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4 text-danger" style="font-size: 13px">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>

<div id="id01" class="modal">
  <form class="modal-content animate" style="width: 90%;height: 80%;border-radius: 20px" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <!--     <img src="wes.jpg" alt="jilbab" class="jilbab"> -->
    </div>

    <div class="container jumbotron">
      <h2 style="padding-bottom: 20px"> Input Penghargaan </h2>
 
      <div class="dropdown">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="width: 130px;font-size: 12px;border-radius: 6px">Choose Kategori</button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Kejujuran</a>
              <a class="dropdown-item" href="#">Tanggung Jawab</a>
              <a class="dropdown-item" href="#">Loyalitas</a>
          </div>
      </div>

      <label for="jenis" style="font-size: 13px; padding-top: 20px"><b>Jenis</b></label>
      <input type="text" value="<?php if(isset($_COOKIE["jenis"])) {echo $_COOKIE["jenis"];} ?>" placeholder="Enter Jenis" name="jenis" required>

      <label for="poin" style="font-size: 13px"><b>Poin</b></label>
      <input type="text" value="<?php if(isset($_COOKIE["poin"])) {echo $_COOKIE["poin"];} ?>" placeholder="Enter Poin" name="poin" required>
        
      <button class="btn-danger" type="submit" name="simpan" style="font-size: 13px;padding-top: 7px;padding-bottom: 7px;border-radius: 6px">Simpan</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="font-size: 12px;border-radius: 6px">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal1 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

<div id="id02" class="modal">
  <form class="modal-content animate" style="width: 90%;height: 80%;border-radius: 20px" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <!--     <img src="wes.jpg" alt="jilbab" class="jilbab"> -->
    </div>

    <div class="container jumbotron">
      <h2 style="padding-bottom: 20px"> Edit Penghargaan </h2>
 
      <div class="dropdown">
          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="width: 130px;font-size: 12px;border-radius: 6px">Choose Kategori</button>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Kejujuran</a>
              <a class="dropdown-item" href="#">Tanggung Jawab</a>
              <a class="dropdown-item" href="#">Loyalitas</a>
          </div>
      </div>

      <label for="jenis" style="font-size: 13px; padding-top: 20px"><b>Jenis</b></label>
      <input type="text" value="<?php if(isset($_COOKIE["jenis"])) {echo $_COOKIE["jenis"];} ?>" placeholder="Enter Jenis" name="jenis" required>

      <label for="poin" style="font-size: 13px"><b>Poin</b></label>
      <input type="text" value="<?php if(isset($_COOKIE["poin"])) {echo $_COOKIE["poin"];} ?>" placeholder="Enter Poin" name="poin" required>
        
      <button class="btn-danger" type="submit" name="simpan" style="font-size: 13px;padding-top: 7px;padding-bottom: 7px;border-radius: 6px">Simpan</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="font-size: 12px;border-radius: 6px">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>

</body>