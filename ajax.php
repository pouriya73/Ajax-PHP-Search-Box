<?php
// Connection Db insert here

if(isset($_REQUEST["term"])){
     $account = $db->query("SELECT * FROM TABLE WHERE COL like ?",$_REQUEST["term"])->fetchArray();
     if(empty($account)){
     echo "<p class='saved-message'>None</p>";
     }else{
     echo "<p class='saved-message'>" ."COL: ". $account['COL'] ."<br>"."</p>";
     }

}else{
     echo "<p class='saved-message'>Please insert DATA</p>";
}
 ?>
