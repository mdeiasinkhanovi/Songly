<?php

include_once('header.php');


if(isset($_POST['submit'])){
	
$id = $_GET['id'];

$songname = $_POST['songname'];

$category = $_POST['category'];

$singer = $_POST['singer'];

$album = $_POST['album'];

$year = $_POST['year'];

$song = $_POST['song'];

$sql = "UPDATE lyrics SET songname='$songname' ,category='$category' ,singer='$singer' ,album='$album' ,year='$year' ,song='$song' WHERE id='$id'";


mysqli_query($connect ,$sql);

echo "<center><div class='Ad'>" . "Edited Succesfully" . "</div></center>";

}
?>



<?php

include_once('header.php');

session_start();

$user = $_SESSION['user'];

if(isset($user)){
	

$id = $_GET['id'];

if(isset($id)){


$sql ="SELECT * FROM lyrics WHERE id ='$id'"; 
	
$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
$songname = $row['songname'];

$category = $row['category'];

$singer = $row['singer'];

$album = $row['album'];

$year = $row['year'];

$song = $row['song'];

$albumart = $row['albumart'];

echo <<<_END

<div class="Category">Edit $songname</div>
<div class="Ad">
<form action="" method="post">
<br/>
<center><img src="$albumart" alt="Preview"></center>
<br/>
<br/>
Song Name :
<br/>
<input name="songname" type="text" value="$songname">
<br/>
Category : 
<br/>
<select name="category" required>
<option value="$category" selected>$category</option>
 <option value="Bangla">Bangla</option>
  <option value="Hindi">Hindi</option>
  <option value="English">English</option>
</select>
<br/>
Singer : 
<br/>
<input name="singer" type="text" value="$singer">
<br/>
Album : 
<br/>
<input name="album" type="text" value="$album">
<br/>
Year : 
<br/>
<select name="year" required>
 <option value="$year" selected>$year</option>
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
<textarea name="song">$song</textarea>
<br/>
<input type="submit" name="submit" value="Edit">

</form>
</div>

_END;

}

}

}
else{
		header('location:login.php');
}

?>

<?php

include_once('footer.php');

?>