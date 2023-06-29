<html lang="VN">
 <head>
       
<meta charset="UTF-8">

    </head>
</html>
<?php
if(isset($_REQUEST['add']))
{
    $xml=new DOMDocument("1.0","UTF_8");
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('sinhvien.xml');
    $root= $xml->firstChild;
    $dataTag=$xml->createElement("sinhvien");
    
    $aTag=$xml->createElement("masv",$_REQUEST['masv']);

    $bTag=$xml->createElement("hoten",$_REQUEST['hoten']);
    
    $cTag=$xml->createElement("ngaysinh",$_REQUEST['ngaysinh']);

    $dTag=$xml->createElement("quequan",$_REQUEST['quequan']);

    $eTag=$xml->createElement("diem_tin_hoc",$_REQUEST['diem_tin_hoc']);
    
$dataTag->appendChild($aTag);
$dataTag->appendChild($bTag);
$dataTag->appendChild($cTag);
$dataTag->appendChild($dTag);
$dataTag->appendChild($eTag);


$root->appendChild($dataTag);
$xml->save('sinhvien.xml');
}
?>
<html>
    <body style="background:url('nen7.jpg')"><center>
<textarea rows='24' cols='70'>
    <?php
    if (empty($_REQUEST['add']))
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
    <form action="cau4.php" method="post">
        <tr>
            <td colspan='2' align="center">Thêm Sinh Viên</td>
        </tr>
    <tr>
        <td colspan="2" align="center">
           
    <tr>
        <td>Mã sinh viên:</td>
        <td>
            <input type="text" name="masv" placeholder="Nhập mã sinh viên..."/>
        </td>
    </tr>
    <tr>
        <td>Họ tên:</td>
        <td>
            <input type="text" name="hoten" placeholder="Nhập họ tên... "/>
        </td>
    </tr>
    <tr>
        <td>Ngày sinh:</td>
        <td>
            <input type="text" name="ngaysinh" placeholder="Ngày Sinh..."/>
        </td>
    </tr>
    <tr>
        <td>Quê Quán:</td>
        <td>
            <input type="text" name="quequan" placeholder="nhập quê quán..."/>
        </td>
    </tr>

    <tr>
        <td>Điểm tin học:</td>
        <td>
            <input type="text" name="diem_tin_hoc" placeholder="nhập điểm...."/>
        </td>
    </tr>
   


  
    
    <tr><td colspan="3" align="center"><input type="submit" name="add" value="Thêm"/>
    <input type="submit" name="add" value="Nhập lại"/>
    <button class = "button" type = "submit"><a href="cau3.php">Danh sách sinh viên</a></button></td></tr>
    
    </form>
    <table>
    </center>
  
    </body>
    </html>