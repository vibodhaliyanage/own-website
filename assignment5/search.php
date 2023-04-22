<?php
$x =$_GET["i"];
$z=$x + 4 ;


$dbms = new mysqli("localhost","root","DDs$990714","pagination","3306");
$q ="SELECT * FROM user LIMIT ".$x.",".$z.";";
$resultset =$dbms->query($q);
$n = $resultset->num_rows;
echo $n."," ;
?>
 <table class="t">
      <tr class="tr1">
         <td>Id</td>
         <td>Name</td>
         <td>Email</td>
         <td>Mobile</td>
         <td>City</td>
      </tr>
 
<?php
if($n>4){
    for($x=0; $x<4; $x++){
        $r=$resultset->fetch_assoc();
        ?>
       <tr>
          <td><?php echo $r["id"];?></td>
             <td><?php echo $r["name"];?></td>
             <td><?php echo $r["email"];?></td>
             <td><?php echo $r["mobile"];?></td>
             <td><?php echo $r["city"];?></td>
          </tr>
    
        <?php
        
    }
}else{
    for($x=0; $x<$n; $x++){
        $r=$resultset->fetch_assoc();
        ?>
       <tr>
          <td><?php echo $r["id"];?></td>
             <td><?php echo $r["name"];?></td>
             <td><?php echo $r["email"];?></td>
             <td><?php echo $r["mobile"];?></td>
             <td><?php echo $r["city"];?></td>
          </tr>
    
        <?php
        
    }
}




?>
 </table>
 <?php

 
 ?>
 <div class="div1">
         <button class="btn1 btn btn-danger"onclick="m1();">&#X2190;</button>
         <button class="btn1 btn btn-danger" onclick="m(0);">1</button>
         <button class="btn1 btn btn-danger" onclick="m(4);">2</button>
         <button class="btn1 btn btn-danger" onclick="m(8);">3</button>
         <button class="btn1 btn btn-danger" onclick="m2();" >&#X2192;</button>
    </div>