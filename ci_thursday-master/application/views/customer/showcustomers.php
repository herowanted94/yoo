<h1>Customers from database</h1>

<TABLE border="1">
	<TR><TH>Firtname</TH><TH>Lastname</TH></TR>
<?php
foreach ($customer as $row)  {
echo '<tr><td>'.$row['fname'].'</td>';
echo '<td>'.$row['lname'].'</td></tr>';


}


?>
</TABLE>
<?php
print_r($customer);
?>