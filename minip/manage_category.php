<?php
include('header.php');
//include('functions.php');

$msg="";
$category="";
$label="Add";

if(isset($_GET['id']) && $_GET['id']>0)
{
	$label="Edit";
	$id=get_safe_value($_GET['id']);
	$res=mysqli_query($db,"select * from category where id=$id");
	if(mysqli_num_rows($res)==0){
		redirect('category.php');
		die();
	}
	$row=mysqli_fetch_assoc($res);
	$category=$row['name'];
}

if(isset($_POST['submit']))
{
	$name=get_safe_value($_POST['name']);
	
	$type="add";
	$sub_sql="";
	if(isset($_GET['id']) && $_GET['id']>0){
		$type="edit";
		$sub_sql="and id!=$id";
	}
	
	$res=mysqli_query($db,"select * from category where name='$name' $sub_sql");
	
	if(mysqli_num_rows($res)>0)
	{
		$msg="Category already exists";
	}
	else
	{
		$sql="insert into category(name) values('$name')";
		
		if(isset($_GET['id']) && $_GET['id']>0)
		{
			$sql="update category set name='$name' where id=$id";
		}
		mysqli_query($db,$sql);
		redirect('category.php');
	}
}


?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
							<h2><?php echo $label?> Expense</h2>
                             <a href="expense.php">Back</a>

							<div class="card">
						



<div class="card-body card-block">

<form method="post" class="form-horizontal">
<div class="form-group">
     <label for="cc-payment" class="control-label mb-1">Category</label>
	 <input type="text" name="name" required value="<?php echo $category?>" class="form-control" required>
 </div>

 <div class="form-group">
   
   <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-info btn-block">
   </div>	
		
	</table>
	<div id="msg"><?php echo $msg?></div>

</form>
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