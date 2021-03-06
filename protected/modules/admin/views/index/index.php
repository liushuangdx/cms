
	<!-- Page title -->
	<div id="pagetitle">
		<div class="wrapper">
			<h1>Dashboard</h1>
			<!-- Quick search box -->
			<form action="" method="get"><input class="" type="text" id="q" name="q" /></form>
		</div>
	</div>
	<!-- End of Page title -->
	
	<!-- Page content -->
	<div id="page">
		<!-- Wrapper -->
		<div class="wrapper">
				<!-- Left column/section -->
				<section class="column width6 first">
				
					<div class="colgroup leading">
						<div class="column width3 first">
							<h3>Welcome back, <a href="#">Admin</a></h3>
							<p>
								You are currently signed up to the <b>Free Trial Plan</b>.<br /><a href="#">Upgrade now?</a>
							</p>
						</div>
						<div class="column width3">
							<h4>Last login</h4>
							<p>
								Monday July 12th, 2010 at 11:32am from 127.0.0.1<br />
								No error login attempts.
							</p>
						</div>
					</div>
					
					<div class="colgroup leading">
						<div class="column width3 first">
							<h4>Invoices: <a href="#">10</a></h4>
							<hr/>
							<table class="no-style full">
								<tbody>
									<tr>
										<td>Total Invoices</td>
										<td class="ta-right"><a href="#">10</a></td>
										<td class="ta-right">1,322.10 &euro;</td>
									</tr>
									<tr>
										<td>Total Paid</td>
										<td class="ta-right"><a href="#">9</a></td>
										<td class="ta-right">900.00 &euro;</td>
									</tr>
									<tr>
										<td>Total Due</td>
										<td class="ta-right"><a href="#">1</a></td>
										<td class="ta-right">422.10 &euro;</td>
									</tr>
									<tr>
										<td>Total Overdue</td>
										<td class="ta-right">0</td>
										<td class="ta-right">0.00 &euro;</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="column width3">
							<h4>Sales: <a href="#">1</a></h4>
							<hr/>
							<table class="no-style full">
								<tbody>
									<tr>
										<td>Clients This Month</td>
										<td class="ta-right"><a href="#">1</a></td>
										<td class="ta-right"></td>
									</tr>
									<tr>
										<td>Sales This Month</td>
										<td class="ta-right"><a href="#">9</a></td>
										<td class="ta-right">900.00 &euro;</td>
									</tr>
									<tr>
										<td>Clients Total</td>
										<td class="ta-right"><a href="#">5</a></td>
										<td class="ta-right"></td>
									</tr>
									<tr>
										<td>Sales Total</td>
										<td class="ta-right"><a href="#">9</a></td>
										<td class="ta-right">900.00 &euro;</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				
					<div class="colgroup leading">
						<div class="column width3 first">
							<h4>Client Stats</h4>
							<hr/>
							<table class="no-style full">
								<tbody>
									<tr>
										<td>Active</td>
										<td class="ta-right">1/5</td>
										<td><div id="progress1" class="progress full progress-green"><span><b></b></span></div></td>
									</tr>
									<tr>
										<td>Pending</td>
										<td class="ta-right">2/5</td>
										<td><div id="progress2" class="progress full progress-blue"><span><b></b></span></div></td>
									</tr>
									<tr>
										<td>Suspended</td>
										<td class="ta-right">2/5</td>
										<td><div id="progress3" class="progress full progress-red"><span><b></b></span></div></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="column width3">
							<h4>Reports</h4>
							<hr/>
							<p><b>Sales this year</b></p>
							<div id="placeholder" style="height:100px"></div>
						</div>
					</div>
					<div class="clear">&nbsp;</div>
				
				</section>
				<!-- End of Left column/section -->
				
				<!-- Right column/section -->
				<aside class="column width2">
					<div id="rightmenu">
						<header>
							<h3>Your Account</h3>
						</header>
						<dl class="first">
							<dt><img width="16" height="16" alt="" SRC="<?php echo ADMIN_IMG_URL; ?>/key.png"></dt>
							<dd><a href="#">Administry (admin)</a></dd>
							<dd class="last">Free Account.</dd>
							
							<dt><img width="16" height="16" alt="" SRC="<?php echo ADMIN_IMG_URL; ?>/help.png"></dt>
							<dd><a href="#">Support</a></dd>
							<dd class="last">Documentation and FAQ</dd>
						</dl>
					</div>
					<div class="content-box">
						<header>
							<h3>Latest in the Community</h3>
						</header>
						<section>
							<dl>
								<dt>Maximize every interaction with a client</dt>
								<dd><a href="#">Read more</a></dd>
								<dt>Diversification for Small Business Owners</dt>
								<dd><a href="#">Read more</a></dd>
							</dl>
						</section>
					</div>
				</aside>
				<!-- End of Right column/section -->
				
		</div>
		<!-- End of Wrapper -->
	</div>
	<!-- End of Page content -->
	
	
		<script type="text/javascript">
    $(document).ready(function(){
    	
    	/* setup navigation, content boxes, etc... */
    	Administry.setup();
    	
    	/* progress bar animations - setting initial values */
    	Administry.progress("#progress1", 1, 5);
    	Administry.progress("#progress2", 2, 5);
    	Administry.progress("#progress3", 2, 5);
    
    	/* flot graphs */
    	var sales = [{
    		label: 'Total Paid',
    		data: [[1, 0],[2,0],[3,0],[4,0],[5,0],[6,0],[7,900],[8,0],[9,0],[10,0],[11,0],[12,0]]
    	},{
    		label: 'Total Due',
    		data: [[1, 0],[2,0],[3,0],[4,0],[5,0],[6,422.10],[7,0],[8,0],[9,0],[10,0],[11,0],[12,0]]
    	}
    	];
    
    	var plot = $.plot($("#placeholder"), sales, {
    		bars: { show: true, lineWidth: 1 },
    		legend: { position: "nw" },
    		xaxis: { ticks: [[1, "Jan"], [2, "Feb"], [3, "Mar"], [4, "Apr"], [5, "May"], [6, "Jun"], [7, "Jul"], [8, "Aug"], [9, "Sep"], [10, "Oct"], [11, "Nov"], [12, "Dec"]] },
    		yaxis: { min: 0, max: 1000 },
    		grid: { color: "#666" },
    		colors: ["#0a0", "#f00"]			
        });
    
    
    });
    </script>
   
	