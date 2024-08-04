<?php
include('server.php');
include('functions.php');

$msg="";
$category_id="";
$amount="";
$details="";
$income_date = date('Y-m-d');
$label="Add";
if(isset($_GET['id']) && $_GET['id']>0)
{
	$label="Edit";
	$id=get_safe_value($_GET['id']);
	$res=mysqli_query($db,"select * from income where id=$id");
	if(mysqli_num_rows($res)==0)
	{
		redirect('income.php');
		die();
	}
	$row=mysqli_fetch_assoc($res);
	$category_id=$row['category_id'];
	$amount=$row['amount'];
	$details=$row['details'];
	$income_date=$row['income_date'];
    
	
	
}

if(isset($_POST['submit']))
{
	$category_id=get_safe_value($_POST['category_id']);
	$amount=get_safe_value($_POST['amount']);
	$details=get_safe_value($_POST['details']);
	$income_date=get_safe_value($_POST['income_date']);
	$added_on=date('Y-m-d h:i:s');
	
	$type="add";
	$sub_sql="";
	
	if(isset($_GET['id']) && $_GET['id']>0)
	{
		$type="edit";
		$sub_sql="and id!=$id";
	}
	
	
	$sql="insert into income(category_id,amount,details,added_on,income_date) values('$category_id','$amount','$details','$added_on','$income_date')";
    
	if(isset($_GET['id']) && $_GET['id']>0)
	{
		$sql="update income set category_id='$category_id',amount='$amount',details='$details',income_date ='$income_date' where id=$id";
	}
	mysqli_query($db,$sql);
	redirect('income.php');
}

include('user_header.php');
?>
<h2><?php echo $label?> Income</h2>
<a href="income.php">Back</a>
<br/><br/>

<form method="post">
	<table>
		<tr>
			<td>Category</td>
			<td>
			<?php echo getCategory($category_id);
			?>
			</td>
		</tr>
		
		<tr>
			<td>Amount</td>
			<td><input type="text" name="amount" required value="<?php echo $amount?>"></td>
		</tr>
		<tr>
			<td>Details</td>
			<td><input type="text" name="details" required value="<?php echo $details?>"></td>
		</tr>
		<tr>
			<td>Income Date</td>
			<td><input type="date" name="income_date" required value="<?php echo $income_date?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>

<?php echo $msg;?>

<?php
include('footer.php');
?>