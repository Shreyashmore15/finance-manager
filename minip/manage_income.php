<?php
include('header.php');
//include('functions.php');

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


?>

<script>
    document.title="Manage Income";
</script>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
							<h2><?php echo $label?> Income</h2>
                            <a href="income.php">Back</a>
							<div class="card">
						



<div class="card-body card-block">
<form method="post">

<div class="form-group">
     <label for="cc-payment" class="control-label mb-1">Category</label>
	 <?php echo getCategory($category_id);
			?>
                                                
 </div>

 <div class="form-group">
     <label for="cc-payment" class="control-label mb-1">Amount</label>
	 <input type="text" name="amount" required value="<?php echo $amount?>" class="form-control" required>
 </div>

 <div class="form-group">
     <label for="cc-payment" class="control-label mb-1">Details</label>
	 <input type="text" name="details" required value="<?php echo $details?>" class="form-control" required>
 </div>

 <div class="form-group">
     <label for="cc-payment" class="control-label mb-1">Income Date</label>
	 <input type="date" name="income_date" required value="<?php echo $income_date?>" class="form-control" required>
</div>	


<div class="form-group">
   
<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info btn-block">
</div>

<table>
	   <tr>
			<td></td>
			<td></td>
		</tr>
	</table>
</form>

<?php echo $msg;?>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>