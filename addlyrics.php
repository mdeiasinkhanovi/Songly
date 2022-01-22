<?php

include_once('header.php');


if(isset($_POST['submit'])){

$songname = str_replace("'" , "`" , $_POST['songname']);

$category = $_POST['category'];

$singer = str_replace("'" , "`" , $_POST['singer']);

$album = str_replace("'" , "`" , $_POST['album']);

$year = str_replace("'" , "`" , $_POST['year']);

$song = str_replace("'" , "`" , $_POST['song']);

$folder = 'albumart/';
  
$filename = $_FILES['file']['name'];
  
$albumart = $folder . $filename;
  
  move_uploaded_file($_FILES['file']['tmp_name'], $folder.$filename);

$sql = "INSERT INTO lyrics(songname,albumart,category,singer,album,year,song)VALUES('$songname','$albumart','$category','$singer','$album','$year','$song')";


mysqli_query($connect ,$sql);

echo "<center><div class='Ad'>" . "Lyrics Added Succesfull" . "</div></center>";


}
?>


<?php

session_start();

$user = $_SESSION['user'];

if(isset($user)){	
	
echo <<<_END

<div class="Category">Add Your Lyrics</div>
<div class="Ad">
<form action="" method="post" enctype="multipart/form-data">
Song Name :
<br/>
<input name="songname" type="text">
<br/>
Category : 
<br/>
<select name="category" required>
 <option value="Bangla">Bangla</option>
  <option value="Hindi">Hindi</option>
  <option value="English">English</option>
</select>
<br/>
Singer : 
<br/>
<input name="singer" type="text">
<br/>
Album : 
<br/>
<input name="album" type="text">
<br/>
Year : 
<br/>
<select name="year" required>
 <option value="2000">2000</option>
 <option value="2001">2001</option>
 <option value="2002">2002</option>
 <option value="2003">2003</option>
 <option value="2004">2004</option>
 <option value="2005">2005</option>
 <option value="2006">2006</option>
 <option value="2007">2007</option>
 <option value="2008">2008</option>
 <option value="2009">2009</option>
 <option value="2010">2010</option>
 <option value="2011">2011</option>
 <option value="2012">2012</option>
 <option value="2013">2013</option>
 <option value="2014">2014</option>
 <option value="2015">2015</option>
 <option value="2016">2016</option>
 <option value="2017">2017</option>
 <option value="2018">2018</option>
 <option value="2019">2019</option>
 <option value="2020">2020</option>
</select>
<br/>
Lyrics : 
<br/>
<textarea name="song"></textarea>
<br/>
Album Art :
<br/>
<input type="file" name="file" id="file"/>
<br/>
<input type="submit" name="submit" value="Add">

</form>
</div>

_END;

}else{
		header('location:login.php');
}

?>

<?php

include_once('footer.php');

?>