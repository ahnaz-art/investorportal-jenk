<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		table td 		{ padding: 0; }
		body 			{ background-color: #f8f7ff; margin: 0;}
		.wrapper 		{ width: 100%; table-layout: fixed;}
		.wrapper-inner  { width: 100%; max-width: 600px; margin: 0 auto;	}


		/*--- Media Queries --*/
		@media screen and (max-width: 460px) {
			td.logo, 
			td.top-right 		{ width: 100%; display: inline-block; text-align: center !important;  }
			td.logo 			{ padding: 20px 0 20px !important; }
			td.logo img 		{ max-width: 80%; height: auto; }
			td.top-right    	{ padding: 5px 0 10px !important; }
			td.top-right p 		{ text-align: center !important; color: #585858 !important; margin: 10px 0 10px !important; }
			.content 			{ padding: 0 20px !important; }
			.footer-top 		{ padding: 0 20px !important; }
			.footer 			{ padding: 25px 20px !important; }
			.btn-wrap 			{ display: inline-block; width: 100%; text-align: center !important; padding: 5px 0 10px !important }
			.content 			{ padding: 10px 20px 25px !important }
		}
		
	</style>

</head>


<body>

	<div class="wrapper">


	    	<table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
				<tr>
					<td class="main-wrap" style="padding: 0; text-align: center; ;">
						<!-- Header -->
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td style="background: #181c3f">
										<div class="wrapper-inner">
											<table width="100%" cellpadding="0" cellspacing="0" style="">
												<tr>
													<td class="logo" style=" font-size:0pt; line-height:0pt; padding: 25px 0 25px 0; background: #181c3f">
														<img src="{{URL::to('images/logo.png')}}" width="250" height="52" >
													</td>													
												</tr>
												<tr>
													<td style="font-size: 0pt; line-height: 0pt; padding: 25px; background: #fff; border-radius: 10px 10px 0 0;line-height: 0pt; padding: 25px; background: #fff; border-radius: 10px 10px 0 0;"></td> </tr>
											</table>
										</div>
									</td>												
								</tr>

								<tr>
									<td >
										<div class="wrapper-inner">
											<table width="100%" cellpadding="0" cellspacing="0" style="">
												<tr>
													<td class="logo" style="font-size:22px; color: #70748e; line-height:0pt; padding: 0; background: #fff;  font-family: Arial, sans-serif, Helvetica, Verdana; font-weight: 700; ">
														Dear 	 {{$investor}} 
													</td>													
												</tr>
												
												<tr>
													<td class="content" style="font-size:26px; line-height: 44px; color: #1f244c; letter-spacing: -0.04em; padding: 45px 30px 15px 30px; background: #fff;  font-family: Arial, sans-serif, Helvetica, Verdana; font-weight: 700;">
														  {!! $content !!}
														
													</td>													
												</tr>

												<tr>
													<td class="content" style="padding: 25px 30px 15px 30px; background: #fff;  font-family: Arial, sans-serif, Helvetica, Verdana;">
														<a href="{{URL::to('admin/merchants/view')}}/{{$merchant_id}}" style="padding: 12px 45px; text-decoration: none; border-radius: 35px; color: #fff; background: #d33724; font-size: 16px; font-weight: bold; ">View Merchant</a>
													</td>
												</tr>

												<tr>
													<td style="padding: 30px 50px 40px; background: #fff; font-family: Arial, sans-serif, Helvetica, Verdana; font-size:15px; line-height: 26px; text-align:left; color: #555;">
														Thanks,<br> <strong>Team Velocity</strong>
													</td>
												</tr>
												
												
											</table>
										</div>
									</td>												
								</tr>
								
								<tr>									
									<td class="footer" style="padding:35px 35px 35px; background: #e1e1eb
									; text-align: center; font-size: 14px; color: #626262; font-family: Arial, sans-serif, Helvetica, Verdana; ">
										<div class="wrapper-inner">
											<!--<a href="#" style="color: #62626; text-decoration: none;">Terms and Conditions</a>   |    <a href="#" style="color: #626262; text-decoration: none;">Privacy Policy</a> <br>-->
											<p style="margin: 7px 0 0; font-size: 13px;">Velocity Group USA, Inc. <br>

                        290 Broadhollow Rd. Suite #220E Melville, NY 11747 <br>

                        Office: (631) 201-0703 <br>/p>
										</div>
									</td>											
								</tr>

							</tbody>
						</table>
					</td>
				</tr>
			</table>	


			
	
	</div>
</body>
</html>
