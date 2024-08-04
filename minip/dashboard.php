<?php
include('header.php');

?>
<script>
    document.title="Dashboard";
</script>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="row m-t-25">
                           
                           
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            
                                            <div class="text">
                                                <h2><?php echo getDashboardExpense('today')?></h2>
                                                <span>Today's Expense</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

							
                        

							
                           <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            
                                            <div class="text">
                                                <h2><?php echo getDashboardExpense('yesterday')?></h2>
                                                <span>Yesterday's Expense</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

							
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            
                                            <div class="text">
                                                <h2><?php echo getDashboardExpense('week')?></h2>
                                                <span>This Week Expense</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

							
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            
                                            <div class="text">
                                                <h2><?php echo getDashboardExpense('month')?></h2>
                                                <span>This Month Expense</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            
							<div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            
                                            <div class="text">
                                                <h2><?php echo getDashboardExpense('year')?></h2>
                                                <span>This Year Expense</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

							<div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            
                                            <div class="text">
                                                <h2><?php echo getDashboardExpense('total')?></h2>
                                                <span>Total Expense</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            
                                            <div class="text">
                                                <h2><?php echo getDashboardIncome('total')?></h2>
                                                <span>Total Income</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    
                           
                            
                        
                      
                       
                       
                       
                       
                       
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2024. Made by OSP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->




<?php
include('footer.php');
?>