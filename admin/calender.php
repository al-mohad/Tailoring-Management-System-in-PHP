<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<font face="arial" size="2">';
echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
echo '</td></tr></table>';
echo '<table align="center" border="0" cellpadding=1 cellspacing=1 style="border:1px solid #CCCCCC">
<tr bgcolor="#EFEFEF">
<td align=center><font color=red>Monday</font></td>
<td align=center>Sunday</td>
<td align=center>Tuesday</td>
<td align=center>Wednesday</td>
<td align=center>Thursday</td>
<td align=center>Friday</td>
<td align=center>Saturday</td>
</tr>';
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\">
</td>";}
for ($d=1;$d<=$endDate;$d++) {
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
$fontColor="#000000";
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
echo '</table>'; 
echo "<p style=\"text-align:center;color:#555;\"><a style=\"text-decoration:none;color:#555;\" href='http://tutorial.world.edu/web-development/how-to-create-simple-dynamic-calendar-table-php/'>PHP Calendar Table</a> by <a style=\"text-decoration:none;color:#555;\" href='http://tutorial.world.edu'>Tutorial.World.Edu</a></p>";?>


<!--Calendeer 2-->
<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<font face="arial" size="2">';
echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
echo "Today : ".date("F, d Y ",mktime(0,0,0,$month,$day,$year));
echo '</td></tr></table>';
echo '<table align="center" border="0" cellpadding=1 cellspacing=1 style="border:1px solid #CCCCCC">
<tr bgcolor="#EFEFEF">
<td align=center><font color=red>Monday</font></td>
<td align=center>Sunday</td>
<td align=center>Tuesday</td>
<td align=center>Wednesday</td>
<td align=center>Thursday</td>
<td align=center>Friday</td>
<td align=center>Saturday</td>
</tr>';
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\">
</td>";}
for ($d=1;$d<=$endDate;$d++) {
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
$fontColor="#000000";
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
echo '</table>'; 
echo "<p style=\"text-align:center;color:#555;\"><a style=\"text-decoration:none;color:#555;\" href='http://tutorial.world.edu/web-development/how-to-create-simple-dynamic-calendar-table-php/'>PHP Calendar Table</a> by <a style=\"text-decoration:none;color:#555;\" href='http://tutorial.world.edu'>Tutorial.World.Edu</a></p>";?>



<!--calcultor-->
<?php 
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;          
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <a class="brand" href="https://utopian.io/@tantry">Tantry</a>
        <form method="post" action="calender.php">           
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">                                         
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php }else{ ?>
            <input type="text" value="0" class="bil">
        <?php } ?>            
    </div>
    <!--calculator 2-->

    <?php

ini_set('display_errors',0);

if( isset( $_REQUEST['calculate'] ))

{

$operator=$_REQUEST['operator'];

if($operator=="+")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1+$add2;

}

if($operator=="-")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1-$add2;

}

if($operator=="*")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res =$add1*$add2;

}

if($operator=="/")

{

$add1 = $_REQUEST['fvalue'];

$add2 = $_REQUEST['lvalue'];

$res= $add1/$add2;

}

if($_REQUEST['fvalue']==NULL && $_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter values.\");</script>";

}

else if($_REQUEST['fvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter First value.\");</script>";

}

else if($_REQUEST['lvalue']==NULL)

{

echo "<script language=javascript> alert(\"Please Enter second value.\");</script>";

}

}

?>

<form>

<table style="border:groove #00FF99">

            <tr>

                <td style="background-color:aqua; color:red; font-family:'Times New Roman'">Enter First Number</td>

                <td colspan="1">

               

                    <input name="fvalue" type="text" style="color:red"/></td>

            <tr>

                <td style="color:burlywood; font-family:'Times New Roman'">Select Operator</td>

                <td>

                    <select name="operator" style="width: 63px">

<option>+</option>

<option>-</option>

<option>*</option>

<option>/</option>

</select></td>

               </tr>

            <tr>

                <td style="background-color:aqua; color:red; font-family:'Times New Roman'">Enter First Number</td>

                <td class="auto-style5">

                    <input name="lvalue" type="text"  style="color:red"/></td>

               

            </tr>

            <tr>

                <td></td>

                <td><input type="submit" name="calculate" value="Calculate" style="color:wheat;background-color:rosybrown" /></td>

               

            </tr>

            <tr>

                <td style="background-color:aqua;color:red">Output = </td>

                <td style="color:darkblue"><?php echo $res;?></td>

               

            </tr>

       </table>

 </form>
</body>
</html>