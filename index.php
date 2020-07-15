<!DOCTYPE html>
<html lang="en">
<head>
<title>Portofolio | Habib</title>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <!-- css bootstrap -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 <!--header-->
 <header>
        <div class="wrapper">
            <h1>Habibullah</h1>
            <img src="asset/habi.jpeg" alt="Habib">
            <ul>
                <li><a href="#">Skill</a></li>
                <li><a href="#">Karya</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>
    <!--about me-->
    <section class="about-me">
        <div class="wrapper">
            <h2>about me</h2>
            <p> Habibullah | AB | INFP-T | Tidak semua emas berkilau, tidak semua pengembara tersesat;
                orang tua yang kuat tidak melemah; akar yang dalam tidak dapat membeku ー 「 J. R. R. TOLKIEN 」|
                Kita Tahu Siapa Kita, tetapi Tidak Tahu Akan Jadi Apa Kita dan untuk apa Kita dicipatakan
                dalam Dunia Fana ini. 

                ー Bagi Saya, Saat menentukan cara untuk bergerak maju bukan oleh logika, kegembiraan, atau kepraktisan
                yang memandu kita, tetapi memperhatikan kehormatan, keindahan, moralitas dan nilai.
                
                
            </p>
        </div>
    </section>
    <!--skill bar-->
    <section class="skill">
        <div class="wrapper">
            <h2>Skill</h2>
            <!--SKILL BAR-->
            <div class="wrapper-skill">
                <h5>HTML 50%</h5>
                <div class="background">
                    <div class="indicator html"></div>
                </div>
            </div>
            <!--SKILL BAR-->
            <div class="wrapper-skill">
                <h5>CSS 40%</h5>
                <div class="background">
                    <div class="indicator css"></div>
                </div>
            </div>           
            <!--SKILL BAR-->
            <div class="wrapper-skill">
                <h5>ENGLISH 90%</h5>
                <div class="background">
                    <div class="indicator english"></div>
                </div>
            </div>                      
        </div>
    </section>
    <!--Karya-->
    <section class="karya">
        <div class="wrapper">
            <h2>karya</h2>
            <div class="wrapper-karya">
                <!--items gambar-->
                <a href="#">
                    <div class="karya-items">
                        <img src="asset/webite-design.jpg" alt="Website Design">
                        <h5>Website Design</h5>
                    </div>
                </a>
                    <!--items gambar-->
                    <a href="#">
                        <div class="karya-items">
                            <img src="asset/sketch-design.jpg" alt="Sketch Design">
                            <h5>Sketch</h5>
                        </div>
                    </a>
                        <!--items gambar-->
                <a href="#">
                    <div class="karya-items">
                        <img src="asset/pasta.jpg" alt="Website Design">
                        <h5>Food</h5>
                    </div>
                </a>
            </div>
        </div>
    </section>
        <!--Kontak-->
        <section class="kontak">
            <div class="wrapper">
                <h2>Kontak</h2>
                <div class="wrapper-kontak">
                    <form action="">
                        <input type="text" placeholder="Nama Lengkap Anda">
                        <input type="email" placeholder="Email Anda">
                        <textarea cols="30" rows="10" placeholder="Masukan Pesan Anda"></textarea>
                        <input type="submit" value="Kirim">
                    </form>
                </div> 
            </div>
        </section>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Habib Game Store</a>
    </div>
  </div>
</nav>
  
<div class="container">
  <div align="center">
    <h3><b>Pencarian dan Pagination PHP & MYSQL</b></h3>
    <h4><b>JUAL ID GAMEONLINE</b></h4>
  </div>
  <!--Panel Form pencarian -->
  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading"><b>Search</b></div>
        <div class="panel-body">
          <form class="form-inline" >
            <div class="form-group">
              <select class="form-control" id="Kolom" name="Kolom" required="">
                <?php
                  $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                ?>
                <option value="Nama_Game" <?php if ($kolom=="Nama_Game") echo "selected"; ?>>Nama_Game</option>
                <option value="Jenis_Game" <?php if ($kolom=="Jenis_Game") echo "selected";?>>Jenis_Game</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="KataKunci" required="" value="
              <?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="index.php" class="btn btn-danger">Delete</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Tabel data Hotel -->
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>ID Game</th>
        <th>Nama Game</th>
        <th>Jenis Game</th>
        <th>Price</th>
      </tr>
    </thead>  
    <tbody>
      <?php
      include "koneksi.php";
     
      $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
      
      $kolomCari=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
     
      $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

      // Jumlah data per halaman
      $limit = 5;

      $limitStart = ($page - 1) * $limit;
      
      //kondisi jika parameter pencarian kosong
      if($kolomCari=="" && $kolomKataKunci==""){
        $SqlQuery = mysqli_query($con, "SELECT * FROM list LIMIT ".$limitStart.",".$limit);
      }else{
        //kondisi jika parameter kolom pencarian diisi
        $SqlQuery = mysqli_query($con, "SELECT * FROM list WHERE $kolomCari LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
      }
      
      $no = $limitStart + 1;
      while($row = mysqli_fetch_array($SqlQuery)){ 
      ?>
        <tr>
          <td><?php echo $row['ID_Game']; ?></td>
          <td><?php echo $row['Nama_Game']; ?></td>
          <td><?php echo $row['Jenis_Game']; ?></td>
          <td><?php echo $row['Price'] ?></td>
        </tr>
      <?php           
      }
      ?>
    </tbody>      
  </table>
  <div align="right">
    <ul class="pagination">
      <?php
        // Jika page = 1, maka LinkPrev disable
        if($page == 1){ 
      ?>        
        <!-- link Previous Page disable --> 
        <li class="disabled"><a href="#">Previous</a></li>
      <?php
        }
        else{ 
          $LinkPrev = ($page > 1)? $page - 1 : 1;  

          if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="index.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
       <?php     
          }else{
        ?> 
          <li><a href="index.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php
            echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
         <?php
           } 
        }
      ?>

      <?php
        //kondisi jika parameter pencarian kosong
        if($kolomCari=="" && $kolomKataKunci==""){
          $SqlQuery = mysqli_query($con, "SELECT * FROM list");
        }else{
          //kondisi jika parameter kolom pencarian diisi
          $SqlQuery = mysqli_query($con, "SELECT * FROM list WHERE $kolomCari LIKE '%$kolomKataKunci%'");
        }     
      
        //Hitung semua jumlah data yang berada pada tabel Sisawa
        $JumlahData = mysqli_num_rows($SqlQuery);
        
        // Hitung jumlah halaman yang tersedia
        $jumlahPage = ceil($JumlahData / $limit); 
        
        // Jumlah link number 
        $jumlahNumber = 1; 

        // Untuk awal link number
        $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        
        // Untuk akhir link number
        $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
        for($i = $startNumber; $i <= $endNumber; $i++){
          $linkActive = ($page == $i)? ' class="active"' : '';

          if($kolomCari=="" && $kolomKataKunci==""){
      ?>
          <li<?php echo $linkActive; ?>><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

      <?php
        }else{
          ?>
          <li<?php echo $linkActive; ?>><a href="index.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php
        }
      }
      ?>
      
      <!-- link Next Page -->
      <?php       
       if($page == $jumlahPage){ 
      ?>
        <li class="disabled"><a href="#">Next</a></li>
      <?php
      }
      else{
        $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
       if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="index.php?page=<?php echo $linkNext; ?>">Next</a></li>
       <?php     
          }else{
        ?> 
           <li><a href="index.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a></li>
      <?php
        }
      }
      ?>
    </ul>
  </div>
</div>

</body>
</html>
