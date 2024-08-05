 <?php
 $db_host="localhost";
 $db_user='root';
 $db_pass='';
 $db_name='imaxcoin';
 $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
 if(!$conn){
  echo "Not connected";
 }
 if(isset($_REQUEST['contact-form'])){
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $phone=$_REQUEST['phone'];
  $comment=$_REQUEST['comment'];
  mysqli_query($conn,"INSERT INTO userinfodata(name,email,phone,comment) VALUES ('$name','$email','$phone','$comment')");     
  header("Location:index.php");
}


 
?>