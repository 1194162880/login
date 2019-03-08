<?php 
header("Content-Type:text/html");
$conn=mysqli_connect('127.0.0.1','root','','users',3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);
if($result) {
   while(($row=mysqli_fetch_assoc($result))!=null) {
       echo "<tr>";
       echo "<td class='sid'>$row[sid]</td>";
       echo "<td class='uname'>$row[uname]</td>";
       echo "<td class='sex'>$row[sex]</td>";
       echo "<td class='mail'>$row[mail]</td>";
       echo "<td class='age'>$row[age]</td>";
       echo "<td class='phone'>$row[phone]</td>";
       echo "<td class=addr>$row[addr]</td>";
       echo "<td>";
       echo "<button id='edi'>编辑</button> &nbsp&nbsp <button id='del'>删除</button>";
       echo "</td>";     
       echo "</tr>";
   }  
}
else {
    echo "数据库错误，请检查";
}
?>