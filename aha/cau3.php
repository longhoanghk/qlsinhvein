  <!DOCTYPE html>
  <html lang="vn">
  <body>
      <head>
          <title>Thông tin sinh viên</title>
          <link rel="stylesheet" href="fontawesome/css/all.css">
          <link rel="stylesheet"href="style.css"/>
          <meta charset="UTF-8">
     
    </head>
  <body style="background:url('tt.jpg')">
  <div class="hoten"> 
    
    <p>Họ Tên: Nguyễn Hoàng Long</p>
    <p>Mã Sinh viên:1911061244</p>
    <p>Lớp:DH9c5</p>


   </div>
  <center>

  <div class="container" >
    <h3 class="tieude"> Danh Sách Sinh Viên</h3>
  <div class="khung" >
    <br> 
    
  <table border="1" style="width:800px;">
  <?php
  $doc = new DOMDocument();
  $doc->load( 'sinhvien.xml' );
  $sinhvien = $doc->getElementsByTagName( "sinhvien" );
  echo "<tr background:>
          <th>Mã sinh viên </th>
          <th>Họ Tên </th>
          <th>Ngày sinh </th> 
          <th>Quê Quán </th>
          <th>Điểm Tin Học </th>
          
          </tr>";
  foreach( $sinhvien as $sv )
  {
  $a = $sv->getElementsByTagName( "masv" );
  $masv = $a->item(0)->nodeValue;

  $b = $sv->getElementsByTagName( "hoten" );
  $hoten = $b->item(0)->nodeValue;

  $c = $sv->getElementsByTagName( "ngaysinh" );
  $ngaysinh = $c->item(0)->nodeValue;


  $e = $sv->getElementsByTagName( "quequan" );
  $quequan = $e->item(0)->nodeValue;

  $f = $sv->getElementsByTagName( "diem_tin_hoc" );
  $diem_tin_hoc= $f->item(0)->nodeValue;


  echo "<tr>
    <td>$masv</td>
    <td>$hoten</td>
    <td>$ngaysinh</td>
    <td>$quequan</td>
    <td>$diem_tin_hoc </td>
  
    
     </tr>";
  }

  ?>
  </table>
  </div>
  </div>

              <center> 
        
         <a href="cau4.php">
            <button class="hieuung" style="width: 150px;height: 30px;background-color: #3f7e9cc9;"><i class="fas fa-user-plus fa-1x"></i> Thêm sinh viên</button> 
          </a>
               &emsp;
          
           
           <a href="xoa.php">
            <button class="hieuung" style="width: 150px;height: 30px;background-color: #3f7e9cc9;">Xóa sinh viên </button> 
          </a>
            
            &emsp;
          
          <a href="cau5.php">
            <button class="hieuung" style="width: 150px;height: 30px;background-color: #3f7e9cc9;">Xuất file Json </button> 
          </a>
         
          
      </center>
       

    
  </center>
  </html>