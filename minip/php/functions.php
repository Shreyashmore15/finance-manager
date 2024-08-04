<?php
function get_safe_value($data)
{
	global $db;
	if($data){
		return mysqli_real_escape_string($db,$data);
	}
}

function redirect($link)
{
	?>
	<script>
	window.location.href="<?php echo $link?>";
	</script>
	<?php
}


function getCategory($category_id='',$page='')
{
	global $db;
	$res=mysqli_query($db,"select * from category order by name asc");
	$fun="required";
	if($page=='reports'){
		//$fun="onchange=change_cat()";
		$fun="";
	}
	$html='<select $fun name="category_id" id="category_id">';
		$html.='<option value="">Select Category</option>';
		
		while($row=mysqli_fetch_assoc($res)){
			if($category_id>0 && $category_id==$row['id']){
				$html.='<option value="'.$row['id'].'" selected>'.$row['name'].'</option>';
			}else{
				$html.='<option value="'.$row['id'].'">'.$row['name'].'</option>';	
			}
			
		}
		
	$html.='</select>';
	return $html;
	
}

function getDashboardExpense($type)
{
	global $db;
	$today=date('Y-m-d');
	if($type=='today')
	{
		$sub_sql=" where expense_date='$today'";
		//$from=$today;
		//$to=$today;
	}
	elseif($type=='yesterday')
	{
		$yesterday=date('Y-m-d',strtotime('yesterday')); //it will provide data one day before
		$sub_sql=" where expense_date='$yesterday'";
		//$from=$yesterday;
		//$to=$yesterday;
	}
	elseif($type=='week' || $type=='month' || $type=='year') //for dynamic data
	{
		$from=date('Y-m-d',strtotime("-1 $type"));
		$sub_sql=" where expense_date between '$from' and '$today'";
		//$to=$today;
	}
	else
	{
		$sub_sql=" ";
		//$from='';
		//$to='';
	}
	
	$res=mysqli_query($db,"select sum(price) as price from expense $sub_sql");
	
	$row=mysqli_fetch_assoc($res);
	$p=0;
	//$link="";
	if($row['price']>0)
	{
		$p=$row['price'];
		//$link="&nbsp;<a href='dashboard_report.php?from=".$from."&to=".$to."' target='_blank'>Details</a>";
	}
	
	return $p;
}
?>