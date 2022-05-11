<?php 
require 'robot.php';
@import('cord_sql');




try{


if (!empty($_POST['name'] && $_POST['mail'] && $_POST['comment'])) {
	


$post_id=strip_tags( $_POST['id']);
$name=strip_tags( $_POST['name']);
$mail =strip_tags($_POST['mail']);
$comment=strip_tags($_POST['comment']);

	
$sqlll="INSERT INTO comments(mail, name,post_id ,comment) VALUE(?,?,?,?)";
$rtrr=$conn->prepare($sqlll);

$rtrr->bindParam(1, $mail);$rtrr->bindParam(2, $name);$rtrr->bindParam(3, $post_id);$rtrr->bindParam(4, $comment);
$rtrr->execute();


echo '


<div class="p-4 p-md-5 border rounded-3 bg-light my-2">

<img src="images/emoji-neutral.svg" class="m-2 shadow" alt="" style="width: 50px;height: 50px;border-radius: 100px;border-right: 5px solid red; shape-outside: 70%;float: left;">
 <strong style="font-weight: 800;">
 Just Now   |    By '.$mail.'</strong>
<p>'.$comment.'</p>
    </div>';

}
elseif (empty( $_POST['name'] || $_POST['mail'] || $_POST['comment'] )) {

	echo 2;
}

}

catch ( PDOException $e ) {  echo "Connection failed: " . $e->getMessage(); }

?>