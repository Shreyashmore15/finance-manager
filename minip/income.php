<?php
include('header.php');
//include('user_header.php');

if(isset($_GET['type']) && $_GET['type']=='delete' && isset($_GET['id']) && $_GET['id']>0)
{
	$id=get_safe_value($_GET['id']); //use to avoid phishing attack
	mysqli_query($db,"delete from income where id=$id");
	echo "<br/>Data deleted<br/>";
}

$res=mysqli_query($db,"select income.*,category.name from income,category where income.category_id=category.id order by income.income_date asc");
?>



<?php
if(mysqli_num_rows($res)>0)
{
?>

<script>
    document.title="Income";
</script>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
							<h2>Income</h2>
<a href="manage_income.php">Add Income</a>
<br/><br/>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
	<tr>
		<th>ID</th>
		<th>Category</th>
		<th>Amount</th>
		<th>Details</th>
		<th>Income Date</th>
		<th></th>
	</tr>
	<tbody>
	<?php while($row=mysqli_fetch_assoc($res))
	{
	?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['amount']?></td>
        <td><?php echo $row['details']?></td>
		<td><?php echo $row['income_date']?></td>
		<td>
			<a href="manage_Income.php?id=<?php echo $row['id'];?>">Edit</a>&nbsp;
			<a href="javascript:void(0)" onclick="delete_confir('<?php echo $row['id'];?>','income.php')">Delete</a>
			
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>
<?php 
} 
	else
	{
		echo "No data found";
	}
?>
                       </div>
                  </div>
            </div>
       </div>
   </div>
</div>

<?php
include('footer.php');
?>