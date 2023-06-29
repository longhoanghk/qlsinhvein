<html lang="VN">
    <head>
       
        <meta charset="UTF-8">
<style>
	textarea{
		color:blue;
	}
	html{
        background: #AAAAAA;
    }
    table{
        background:#cccccc;
    }
</style>
    </head>
</html>
<?php
if(isset($_REQUEST['xoa']))
{
    $xml=new DOMDocument("1.0","UTF_8");
    
    $xml->load('sinhvien.xml');
    
    $masv=$_REQUEST['masv'];
    $xpath = new DOMXPATH($xml);
    foreach ($xpath ->query("/thongtin/sinhvien[masv= '$masv']") as $node ) {
     	$node->parentNode->removeChild($node);
     } 
     $xml->formatOutput= true;
   
$xml->save('sinhvien.xml');
}
?>
<html>
    <body style="background:url('th.jpg')"><center>
<textarea rows='24' cols='70'>
    <?php
    if (empty($_REQUEST['xoa']))
    {
        $xml=new DOMDocument("1.0","UTF_8");
        $xml->load("sinhvien.xml");
    }
    print($xml->saveXML());
    ?>
    </textarea>
    </center>
    <br>
    <center>
    <table border="2">
    <form action="xoa.php" method="post">
        <tr><td colspan='2' align="center">Xóa</td></tr>
    <tr><td colspan="2" align="center">
    <tr><td>Mã sách:</td><td><input type="text" name="masv" placeholder="Nhập mã sinh viên"/></td></tr>
    
    <tr><td colspan="3" align="center"><input type="submit" name="xoa" value="Xóa"/>
    <input type="submit" name="add" value="Nhập lại"/>
    <button class = "button" type = "submit"><a href="cau3.php">Danh sách sinh viên</a></button></td></tr>
    
    </form>
    <table>
    </center>
  
    </body>
    </html>