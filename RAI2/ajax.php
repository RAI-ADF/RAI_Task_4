<?Php
require "koneksi.php"; 
@$userid=$_GET['userid'];


if(!is_numeric($userid)){
$message.="Data Error |";
exit;
}

if($userid>0){
$sql="select * from users where userid=$userid order by nama";
}else{
$sql="select * from users order by nama ";
$userid=0;
}

$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

@$main = array('data'=>$result,'value'=>array("userid"=>"$userid","message"=>"$message"));
echo json_encode($main);   

?>
 


