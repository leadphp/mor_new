<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <title></title>
    <!-- <link href="images/favicon.ico" rel="shortcut icon"> -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
   
    
</head>
<div id="contactForm" class="contactForm">
	 <input type="hidden" name="user_id" id="user_id" value="<?php echo$user_id; ?>">
	<div class="close_btnP"> X </div>
	<?php
		$datetime = new DateTime('tomorrow');
		$date = $datetime->format('Y-m-d');
	?>
	<h1>יצירת קשר עם משכנתא דיגיטלית</h1>
	<small>אשמח שתחזרו אלי טלפונית לקבלת סיוע, מענה על מספר שאלות והדרכה.</small>
	<form action="{{route('user.contact.email')}}" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<input placeholder="כותרת" type="text" name="title" value="צור קשר" required />
		<!-- <input placeholder="מהות הפניה" type="text" name="subject" required /> -->
		<h5>תאריך ושעה לחזרה:</h5>
		<input type="date" id="date" name="date" value="<?php echo $date; ?>" min="<?php echo $date; ?>" required >
       <select name="time">
	       	<option value="8:00">8:00</option>
	       	<option value="9:00">9:00</option>
	       	<option value="10:00">10:00</option>
	       	<option value="11:00">11:00</option>
	       	<option value="12:00">12:00</option>
	       	<option value="13:00">13:00</option>
	       	<option value="14:00">14:00</option>
	       	<option value="15:00">15:00</option>
	       	<option value="16:00">16:00</option>
	       	<option value="17:00">17:00</option>
	       	<option value="18:00">18:00</option>
	       	<option value="19:00">19:00</option>
       </select>
		<textarea placeholder="הודעה" name="comments">אשמח אם תחזרו אלי מחר בשעה המצוינת לעיל</textarea>
		<input class="formBtn" type="submit" />
	</form>
</div>


<body class="page-main page-report">
	<div class="level step-2">
	  <div class="container">
		<div class="level-content d-f a-i-c j-c-s-b">
		<a href="javascript:void(0);" class="level-call a-i-c j-c-c phone_icon ">
		  <img src="{{URL::asset('images/phone-icon.png')}}" alt="">
		</a>
		<div class="navigate-steps">
		  <h4>לחץ על הבועות על מנת לנווט בין השלבים:</h4>
		<ul class="d-f a-i-c">
		  <li class="d-f a-i-c j-c-c f-d-c">
			<span> שלב 1 </span>
			<span>צפה בדוח המשכנתא  </span>
			<img src="{{URL::asset('images/steps-icon-2.png')}}" alt="">
		  </li>
		  <li class="d-f a-i-c j-c-c f-d-c">
			<span> שלב 2 </span>
			<span> השלמת נתונים   </span>
			<span>לבנק  </span>
			<img src="{{URL::asset('images/steps-icon-3.png')}}" alt="">
		  </li>
		  <li class="d-f a-i-c j-c-c f-d-c">
			<span> שלב 3 </span>
			<span>הדפס הצעות  </span>
			<span> משכנתא דומות  </span>
			<img src="{{URL::asset('images/steps-icon-4.png')}}" alt="">
		  </li>
		</ul>
		</div>
		<div class="management-panel">
		  <h4>פאנל ניהול <br>
	המשכנתא שלי</h4>
	<img src="{{URL::asset('images/management-panel-img.png')}}" alt="">
		</div>
		</div>
		
		<div class="row bottom-bar">
		   <div class="col-md-4">
		    <div class="report-toggle_bar">
			  <i class="fa fa-bars"></i> 
			</div>
		    <div class="items-list text-left">
			    <div class="items-list-in"> <?php echo date('d.m.y');?> </div>
				<div class="items-list-in">  שמירה  <img src="{{URL::asset('images/printing-icon.png')}}" /></div>
				<div class="items-list-in"> הדפסה <img src="{{URL::asset('images/keeping-icon.png')}}" /> </div>
			</div>
			</div>
		   <div class="col-md-4 text-center">
		       <p>המשכנתא שלי: גפן סינאי</p>
		   </div> 
		   <div class="col-md-4 text-right">
		        <img src="{{URL::asset('images/logo-white.png')}}" alt="">
		   </div> 
		</div>
	  </div>
	</div>
     
	<div class="page-container">
		<div class="header-area">
			<div id="exTab2">	
			    
				<ul class="nav nav-tabs">
				    <div class="clsoe">X</div>
					<li class="active">
				     	<a  href="#1" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-home.png')}}" />
						   <span>נתונים מרוכזים</span>
						</a>
					</li>
					<li>
				     	<a  href="#2" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-chart.png')}}" />
						   <span>תמהיל משכנתא</span>
						</a>
					</li>
					<li>
				     	<a  href="#3" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-spex.png')}}" />
						   <span>ניתוחי רגישות</span>
						</a>
					</li>
					<li>
				     	<a  href="#4" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-level.png')}}" />
						   <span>גרפים להמחשה</span>
						</a>
					</li>
					<li >
				     	<a  href="#5" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-alarm.png')}}" />
						   <span>פעולות עתידיות</span>
						</a>
					</li>
					<li>
				     	<a  href="#6" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-lamp.png')}}" />
						   <span>הסבר על מסלולים</span>
						</a>
					</li>
					<li>
				     	<a  href="#7" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-file.png')}}" />
						   <span>לוחות סילוקין</span>
						</a>
					</li>
					<li>
				     	<a  href="#8" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-like.png')}}" />
						   <span>המלצות</span>
						</a>
					</li>
				</ul>
				<ul class="nav nav-tabs bottom-nav">
					<li>
				     	<a  href="#1" data-toggle="tab">
						   <img src="{{URL::asset('images/lower-email.png')}}" class="forNormal"/>
						   <img src="{{URL::asset('images/lower-email-white.png')}}" class="forWhite"/>
						   <span>לשמירת הדוח</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="page-content">
		    <div class="tab-content full-show">
				<div class="tab-pane file-tab " id="1">
				   <div class="tab-title">
				     <h4>נתונים מרוכזים
					   <small>הסבר קצר על ריכוז הנתונים, הסבר קצר על ריכוז הנתונים</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-home-white.png')}}">
					 </div>
				   </div>
				   <div class="tab-inner-content">
				        <div class="chart-info">
						   <div class="col-md-4 sm-hide">
						     <ul class="left-s-list">
							    <li>
								   <p>עלות משכנתא כוללת</p>
								   <h2>907,020 ₪</h2>
								</li>
								<li>
								   <p>החזר חודשי קרוב</p>
								   <h2>3,057 ₪</h2>
								</li>
								<li>
								   <p>פעולה מומלצת קרובה</p>
								   <h2>בעוד 15 שנים  </h2>
								</li>
								<img src="{{URL::asset('images/lower-alarm-white.png')}}" class="ul-alarm"/>
							 </ul>
						   </div>
						   <div class="col-md-8">
						     <div class="row reverseRow">
							   <div class="col-sm-4 ">
							     <ul class="right-s-list">
									<li>סכום: 208,000
מסלול: ריבית פריים
תקופה: 30 שנה
ריבית: 1.1
									</li>
									<li>סכום: 208,000
מסלול: ריבית פריים
תקופה: 30 שנה
ריבית: 1.1
									</li>
									<li> סכום: 208,000
מסלול: ריבית פריים
תקופה: 30 שנה
ריבית: 1.1
									</li>
									<li>סכום: 208,000
מסלול: ריבית פריים
תקופה: 30 שנה
ריבית: 1.1
									</li>
								 </ul>
							   </div>
							   <div class="col-sm-8 text-center">
							    <div class="con">
								 <span class="centersds">עלות משכנתא
כוללת:
907,020 ₪</span>
								 <canvas id="myChart4" width="300px" height="300px"></canvas>
							     </div>
							   </div>
							   
							 </div>
						   </div>
						</div>
						
						<div class="col-md-12 text-center chart-text chart-bottom">
						   <h1>פעולות עתידיות</h1>
						   <p>רשימת פעולות עתידיות שתדרש לבצע כדי לקבל משכנתא דיגיטלית אופטימלית</p>
						   
						   <div class="tree">
						        <div class="infor-design">
								    הקלק על פעולה כדי לראות פירוט
								</div>
								<ul>
									<li>
										<a href="#">פרעון השקעה 1</a>
										<p><span>15</span>שנים </p>
									</li>
									<li>
										<a href="#">פרעון השקעה 2</a>
										<p><span>20</span> שנים </p>
									</li>
								</ul>
								<ul class="tree-bottom">
									<li>
										<p></p>
										<a href="#">אתה נמצא כאן</a>
									</li>
									<li>
										<p><span>25</span> שנים </p>
										<a href="#">מחזור משכנתא</a>
									</li>
									<li>
										<p><span>17</span> שנים </p>
										<a href="#">פרעון  השקעה 3</a>
									</li>
								</ul>
							</div>
						   
						 </div>
						
					</div>
				</div>
				<div class="tab-pane file-tab" id="2">
				   <div class="tab-title">
				     <h4>תמהיל המשכנתא: חלוקת המשכנתא לפי מסלולים
					   <small>הרכב מסלולי ההלוואה כפי שנבחר בהתאם לנתוניך הפיננסיים</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-chart-white.png')}}">
					 </div>
				   </div>
				   <div class="tab-inner-content">
				    <div class="table-responsive"> 
				    	<?php 

				    	 // print_r($step6);
				    		// die();	
				    	 ?>

					   <table class="table table-condensed">
							<thead>
							  <tr>
								<th>מסלול</th>
								<th>לוח  סילוקין</th>
								<th>סוג משכנתא</th>
								<th>English  note  </th>
								<th>סוג ההלוואה</th>
								<th>סכום הלוואה</th>
								<th>תקופה בשנים</th>
								<th>ריבית</th>
								<th>החזר חודשי בתקופת הגרייס</th>
								<th>החזר  חודשי</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td><b>num</b></td>
								<td><b>with/without grace </b></td>
								<td><b>.morg Type</b></td>
								<td><b>loan Type</b></td>
								<td><b>Loan Type</b></td>
								<td><b>.Morg</b></td>
								<td><b>Years</b></td>
								<td><b>Intrest</b></td>
								<td><b>MR in grace</b></td>
								<td><b>Monthly Return</b></td>
							  </tr>
							   <tr>
							   	<?php 
							   	if(isset($step6->m_type[0]) && $step6->m_type[0] != ''){
							   		?>
							   		<td></td>
									<td class="rep_grace1_info">גרייס ולאחריו שפיצר</td>
									<td class="rep_morgtype_1"><span class="green">דירה נרכשת</span></td>
									<td class="rep_type1"><?php echo $step6->m_type[0];?></td>
									<td class="rep_loan_type_1"><?php  
										if($step6->m_type[0] == 'A'){
											echo 'Prime';
										} elseif($step6->m_type[0] == 'B'){
											echo 'Linked';
										} elseif($step6->m_type[0] == 'D'){
											echo 'Linked';
										} elseif($step6->m_type[0] == 'G'){
											echo 'Dollar';
										} elseif($step6->m_type[0] == 'F'){
											echo 'Euro';
										} elseif($step6->m_type[0] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="rep_morg1"><?php echo $step6->m_morg[0]; ?></td>	
									<td class="rep_year1"><?php  echo $step6->m_year[0];  ?></td>
									<td class="rep_int1"><?php echo $step6->m_interest[0]; ?></td>
									<td class="rep_gracefee1">100</td>
									<td class="rep_mr1"><?php echo $step6->m_pmt[0]  ?></td>
									<?php
								}?>
								
							  </tr>
							  <tr>
							    <?php 
							   	if(isset($step6->m_type[1]) && $step6->m_type[1] != ''){
							   		?>
							   		
							   		<td></td>
									<td class="rep_grace2_info">גרייס ולאחריו שפיצר</td>
									<td class="rep_morgtype_2"><span class="green">דירה נרכשת</span></td>
									<td class="rep_type2"><?php echo $step6->m_type[1];?></td>
									<td class="rep_loan_type_2"><?php  
										if($step6->m_type[1] == 'A'){
											echo 'Prime';
										} elseif($step6->m_type[1] == 'B'){
											echo 'Linked';
										} elseif($step6->m_type[1] == 'D'){
											echo 'Linked';
										} elseif($step6->m_type[1] == 'G'){
											echo 'Dollar';
										} elseif($step6->m_type[1] == 'F'){
											echo 'Euro';
										} elseif($step6->m_type[1] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="rep_morg2"><?php echo $step6->m_morg[1]; ?></td>	
									<td class="rep_year2"><?php  echo $step6->m_year[1];  ?></td>
									<td class="rep_int2"><?php echo $step6->m_interest[1]; ?></td>
									<td class="rep_gracefee2">100</td>
									<td class="rep_mr2"><?php echo $step6->m_pmt[1]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->m_type[2]) && $step6->m_type[2] != ''){
							   		?>
							   		<td></td>
									<td class="rep_grace3_info">גרייס ולאחריו שפיצר</td>
									<td class="rep_morgtype_3"><span class="green">דירה נרכשת</span></td>
									<td class="rep_type3"><?php echo $step6->m_type[2];?></td>
									<td class="rep_loan_type_3"><?php  
										if($step6->m_type[2] == 'A'){
											echo 'Prime';
										} elseif($step6->m_type[2] == 'B'){
											echo 'Linked';
										} elseif($step6->m_type[2] == 'D'){
											echo 'Linked';
										} elseif($step6->m_type[2] == 'G'){
											echo 'Dollar';
										} elseif($step6->m_type[2] == 'F'){
											echo 'Euro';
										} elseif($step6->m_type[2] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="rep_morg3"><?php echo $step6->m_morg[2]; ?></td>	
									<td class="rep_year3"><?php  echo $step6->m_year[2];  ?></td>
									<td class="rep_int3"><?php echo $step6->m_interest[2]; ?></td>
									<td class="rep_gracefee3">100</td>
									<td class="rep_mr3"><?php echo $step6->m_pmt[2]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->m_type[3]) && $step6->m_type[3] != ''){
							   		?>
							   		<td></td>
									<td class="rep_grace4_info">גרייס ולאחריו שפיצר</td>
									<td class="rep_morgtype_4"><span class="green">דירה נרכשת</span></td>
									<td class="rep_type4"><?php echo $step6->m_type[3];?></td>
									<td class="rep_loan_type_4"><?php  
										if($step6->m_type[3] == 'A'){
											echo 'Prime';
										} elseif($step6->m_type[3] == 'B'){
											echo 'Linked';
										} elseif($step6->m_type[3] == 'D'){
											echo 'Linked';
										} elseif($step6->m_type[3] == 'G'){
											echo 'Dollar';
										} elseif($step6->m_type[3] == 'F'){
											echo 'Euro';
										} elseif($step6->m_type[3] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="rep_morg4"><?php echo $step6->m_morg[3]; ?></td>	
									<td class="rep_year4"><?php  echo $step6->m_year[3];  ?></td>
									<td class="rep_int4"><?php echo $step6->m_interest[3]; ?></td>
									<td class="rep_gracefee4">100</td>
									<td class="rep_mr4"><?php echo $step6->m_pmt[3]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->m_type[4]) && $step6->m_type[4] != ''){
							   		?>
							   		<td></td>
									<td class="rep_grace5_info">גרייס ולאחריו שפיצר</td>
									<td class="rep_morgtype_5"><span class="green">דירה נרכשת</span></td>
									<td class="rep_type5"><?php echo $step6->m_type[4];?></td>
									<td class="rep_loan_type_5"><?php  
										if($step6->m_type[4] == 'A'){
											echo 'Prime';
										} elseif($step6->m_type[4] == 'B'){
											echo 'Linked';
										} elseif($step6->m_type[4] == 'D'){
											echo 'Linked';
										} elseif($step6->m_type[4] == 'G'){
											echo 'Dollar';
										} elseif($step6->m_type[4] == 'F'){
											echo 'Euro';
										} elseif($step6->m_type[4] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="rep_morg5"><?php echo $step6->m_morg[4]; ?></td>	
									<td class="rep_year5"><?php  echo $step6->m_year[4];  ?></td>
									<td class="rep_int5"><?php echo $step6->m_interest[4]; ?></td>
									<td class="rep_gracefee5">100</td>
									<td class="rep_mr5"><?php echo $step6->m_pmt[4]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->m_type[5]) && $step6->m_type[5] != ''){
							   		?>
							   		<td></td>
									<td class="rep_grace6_info">גרייס ולאחריו שפיצר</td>
									<td class="rep_morgtype_6"><span class="green">דירה נרכשת</span></td>
									<td class="rep_type6"><?php echo $step6->m_type[5];?></td>
									<td class="rep_loan_type_6"><?php  
										if($step6->m_type[5] == 'A'){
											echo 'Prime';
										} elseif($step6->m_type[5] == 'B'){
											echo 'Linked';
										} elseif($step6->m_type[5] == 'D'){
											echo 'Linked';
										} elseif($step6->m_type[5] == 'G'){
											echo 'Dollar';
										} elseif($step6->m_type[5] == 'F'){
											echo 'Euro';
										} elseif($step6->m_type[5] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="rep_morg6"><?php echo $step6->m_morg[5]; ?></td>	
									<td class="rep_year6"><?php  echo $step6->m_year[5];  ?></td>
									<td class="rep_int6"><?php echo $step6->m_interest[5]; ?></td>
									<td class="rep_gracefee6">100</td>
									<td class="rep_mr6"><?php echo $step6->m_pmt[5]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
							   	<?php 
							   	if(isset($step6->e_m_type[0]) && $step6->e_m_type[0] != ''){
							   		?>
							   		<td></td>
									<td class="e_rep_grace1_info">גרייס ולאחריו שפיצר</td>
									<td class="e_rep_morgtype_1"><span class="red">דירה נרכשת</span></td>
									<td class="e_rep_type1"><?php echo $step6->e_m_type[0];?></td>
									<td class="e_rep_loan_type_1"><?php  
										if($step6->e_m_type[0] == 'A'){
											echo 'Prime';
										} elseif($step6->e_m_type[0] == 'B'){
											echo 'Linked';
										} elseif($step6->e_m_type[0] == 'D'){
											echo 'Linked';
										} elseif($step6->e_m_type[0] == 'G'){
											echo 'Dollar';
										} elseif($step6->e_m_type[0] == 'F'){
											echo 'Euro';
										} elseif($step6->e_m_type[0] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="e_rep_morg1"><?php echo $step6->e_m_morg[0]; ?></td>	
									<td class="e_rep_year1"><?php  echo $step6->e_m_year[0];  ?></td>
									<td class="e_rep_int1"><?php echo $step6->e_m_interest[0]; ?></td>
									<td class="e_rep_gracefee1">100</td>
									<td class="e_rep_mr1"><?php echo $step6->e_m_pmt[0]  ?></td>
									<?php
								}?>
								
							  </tr>
							  <tr>
							    <?php 
							   	if(isset($step6->e_m_type[1]) && $step6->e_m_type[1] != ''){
							   		?>
							   		
							   		<td></td>
									<td class="e_rep_grace2_info">גרייס ולאחריו שפיצר</td>
									<td class="e_rep_morgtype_2"><span class="red">דירה נרכשת</span></td>
									<td class="e_rep_type2"><?php echo $step6->e_m_type[1];?></td>
									<td class="e_rep_loan_type_2"><?php  
										if($step6->e_m_type[1] == 'A'){
											echo 'Prime';
										} elseif($step6->e_m_type[1] == 'B'){
											echo 'Linked';
										} elseif($step6->e_m_type[1] == 'D'){
											echo 'Linked';
										} elseif($step6->e_m_type[1] == 'G'){
											echo 'Dollar';
										} elseif($step6->e_m_type[1] == 'F'){
											echo 'Euro';
										} elseif($step6->e_m_type[1] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="e_rep_morg2"><?php echo $step6->e_m_morg[1]; ?></td>	
									<td class="e_rep_year2"><?php  echo $step6->e_m_year[1];  ?></td>
									<td class="e_rep_int2"><?php echo $step6->e_m_interest[1]; ?></td>
									<td class="e_rep_gracefee2">100</td>
									<td class="e_rep_mr2"><?php echo $step6->e_m_pmt[1]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->e_m_type[2]) && $step6->e_m_type[2] != ''){
							   		?>
							   		<td></td>
									<td class="e_rep_grace3_info">גרייס ולאחריו שפיצר</td>
									<td class="e_rep_morgtype_3"><span class="red">דירה נרכשת</span></td>
									<td class="e_rep_type3"><?php echo $step6->e_m_type[2];?></td>
									<td class="e_rep_loan_type_3"><?php  
										if($step6->e_m_type[2] == 'A'){
											echo 'Prime';
										} elseif($step6->e_m_type[2] == 'B'){
											echo 'Linked';
										} elseif($step6->e_m_type[2] == 'D'){
											echo 'Linked';
										} elseif($step6->e_m_type[2] == 'G'){
											echo 'Dollar';
										} elseif($step6->e_m_type[2] == 'F'){
											echo 'Euro';
										} elseif($step6->e_m_type[2] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="e_rep_morg3"><?php echo $step6->e_m_morg[2]; ?></td>	
									<td class="e_rep_year3"><?php  echo $step6->e_m_year[2];  ?></td>
									<td class="e_rep_int3"><?php echo $step6->e_m_interest[2]; ?></td>
									<td class="e_rep_gracefee3">100</td>
									<td class="e_rep_mr3"><?php echo $step6->e_m_pmt[2]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->e_m_type[3]) && $step6->e_m_type[3] != ''){
							   		?>
							   		<td></td>
									<td class="e_rep_grace4_info">גרייס ולאחריו שפיצר</td>
									<td class="e_rep_morgtype_4"><span class="red">דירה נרכשת</span></td>
									<td class="e_rep_type4"><?php echo $step6->e_m_type[3];?></td>
									<td class="e_rep_loan_type_4"><?php  
										if($step6->e_m_type[3] == 'A'){
											echo 'Prime';
										} elseif($step6->e_m_type[3] == 'B'){
											echo 'Linked';
										} elseif($step6->e_m_type[3] == 'D'){
											echo 'Linked';
										} elseif($step6->e_m_type[3] == 'G'){
											echo 'Dollar';
										} elseif($step6->e_m_type[3] == 'F'){
											echo 'Euro';
										} elseif($step6->e_m_type[3] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="e_rep_morg4"><?php echo $step6->e_m_morg[3]; ?></td>	
									<td class="e_rep_year4"><?php  echo $step6->e_m_year[3];  ?></td>
									<td class="e_rep_int4"><?php echo $step6->e_m_interest[3]; ?></td>
									<td class="e_rep_gracefee4">100</td>
									<td class="e_rep_mr4"><?php echo $step6->e_m_pmt[3]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->e_m_type[4]) && $step6->e_m_type[4] != ''){
							   		?>
							   		<td></td>
									<td class="e_rep_grace5_info">גרייס ולאחריו שפיצר</td>
									<td class="e_rep_morgtype_5"><span class="red">דירה נרכשת</span></td>
									<td class="e_rep_type5"><?php echo $step6->e_m_type[4];?></td>
									<td class="e_rep_loan_type_5"><?php  
										if($step6->e_m_type[4] == 'A'){
											echo 'Prime';
										} elseif($step6->e_m_type[4] == 'B'){
											echo 'Linked';
										} elseif($step6->e_m_type[4] == 'D'){
											echo 'Linked';
										} elseif($step6->e_m_type[4] == 'G'){
											echo 'Dollar';
										} elseif($step6->e_m_type[4] == 'F'){
											echo 'Euro';
										} elseif($step6->e_m_type[4] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="e_rep_morg5"><?php echo $step6->e_m_morg[4]; ?></td>	
									<td class="e_rep_year5"><?php  echo $step6->e_m_year[4];  ?></td>
									<td class="e_rep_int5"><?php echo $step6->e_m_interest[4]; ?></td>
									<td class="e_rep_gracefee5">100</td>
									<td class="e_rep_mr5"><?php echo $step6->e_m_pmt[4]  ?></td>
									<?php
								}?>
							  </tr>
							  <tr>
								 <?php 
							   	if(isset($step6->e_m_type[5]) && $step6->e_m_type[5] != ''){
							   		?>
							   		<td></td>
									<td class="e_rep_grace6_info">גרייס ולאחריו שפיצר</td>
									<td class="e_rep_morgtype_6"><span class="red">דירה נרכשת</span></td>
									<td class="e_rep_type6"><?php echo $step6->e_m_type[5];?></td>
									<td class="e_rep_loan_type_6"><?php  
										if($step6->e_m_type[5] == 'A'){
											echo 'Prime';
										} elseif($step6->e_m_type[5] == 'B'){
											echo 'Linked';
										} elseif($step6->e_m_type[5] == 'D'){
											echo 'Linked';
										} elseif($step6->e_m_type[5] == 'G'){
											echo 'Dollar';
										} elseif($step6->e_m_type[5] == 'F'){
											echo 'Euro';
										} elseif($step6->e_m_type[5] == 'H'){
											echo 'Eligibility';
										} else{
											echo 'Not Linked';
										}
									?></td>
									<td class="e_rep_morg6"><?php echo $step6->e_m_morg[5]; ?></td>	
									<td class="e_rep_year6"><?php  echo $step6->e_m_year[5];  ?></td>
									<td class="e_rep_int6"><?php echo $step6->e_m_interest[5]; ?></td>
									<td class="e_rep_gracefee6">100</td>
									<td class="e_rep_mr6"><?php echo $step6->e_m_pmt[5]  ?></td>
									<?php
								}?>
							  </tr>
							  
							  <?php

							  	if(isset($maindata_ques_15) && isset($maindata_ques_15[0])){
                                                        $ques15 = $maindata_ques_15[0]->meta_value;              

                                                    }else{
                                                        $ques15 = "";
                                                    }


                                                    if(isset($maindata_ques_15) && isset($maindata_ques_15[1])){
                                                        $ques15_1 = $maindata_ques_15[1]->meta_value;
                                                        $ques15_1 = json_decode($ques15_1);
                                                        
                                                        if(isset($ques15_1[0])){
                                                            $ques15_1_1 = $ques15_1[0];
                                                        }else{
                                                            $ques15_1_1 ="";
                                                        }

                                                        if(isset($ques15_1[1])){
                                                            $ques15_1_2 = $ques15_1[1];
                                                        }else{
                                                            $ques15_1_2 ="";
                                                        }

                                                        if(isset($ques15_1[2])){
                                                            $ques15_1_3 = $ques15_1[2];
                                                        }else{
                                                            $ques15_1_3 ="";
                                                        }

                                                    }else{
                                                        $ques15_1 = "";
                                                        $ques15_1_1 ="";
                                                        $ques15_1_2 ="";
                                                        $ques15_1_3 ="";
                                                    }

                                                    if(isset($maindata_ques_15) && isset($maindata_ques_15[3])){
                                                        $ques15_2 = $maindata_ques_15[3]->meta_value;
                                                        $ques15_2 = json_decode($ques15_2);


                                                        if(isset($ques15_2[0])){
                                                            $ques15_2_1 = $ques15_2[0];
                                                        }else{
                                                            $ques15_2_1 ="";
                                                        }

                                                        if(isset($ques15_2[1])){
                                                            $ques15_2_2 = $ques15_2[1];
                                                        }else{
                                                            $ques15_2_2 ="";
                                                        }

                                                        if(isset($ques15_2[2])){
                                                            $ques15_2_3 = $ques15_2[2];
                                                        }else{
                                                            $ques15_2_3 ="";
                                                        }

                                                    }else{
                                                        $ques15_2 = "";
                                                        $ques15_2_1 ="";

                                                        $ques15_2_2 ="";

                                                        $ques15_2_3 ="";

                                                        
                                                    }


                                                    if(isset($maindata_ques_15) && isset($maindata_ques_15[5])){
                                                        $ques15_3 = $maindata_ques_15[5]->meta_value;
                                                        $ques15_3 = json_decode($ques15_3);


                                                        if(isset($ques15_2[0])){
                                                            $ques15_3_1 = $ques15_3[0];
                                                        }else{
                                                            $ques15_3_1 ="";
                                                        }

                                                        if(isset($ques15_3[1])){
                                                            $ques15_3_2 = $ques15_3[1];
                                                        }else{
                                                            $ques15_3_2 ="";
                                                        }

                                                        if(isset($ques15_3[2])){
                                                            $ques15_3_3 = $ques15_3[2];
                                                        }else{
                                                            $ques15_3_3 ="";
                                                        }

                                                    }else{
                                                        $ques15_3 = "";
                                                        $ques15_3_1 ="";

                                                        $ques15_3_2 ="";

                                                        $ques15_3_3 ="";

                                                        
                                                         
                                                    }
                                                    if(isset($maindata_ques_6) && isset($maindata_ques_6[0])){
                                                        $bank_account = $maindata_ques_6[0]->meta_value;
                                                        $bank_account = json_decode($bank_account);
                                                        $banks=[];
                                                        foreach($bank_account as $bank){

                                                            switch ($bank) {
                                                              case 'East':
                                                                $bank_account = 'AA';
                                                              break;
                                                              case 'Discount':
                                                                $bank_account = 'BB';
                                                              break;
                                                              case 'Association':
                                                                $bank_account = 'CC';
                                                              break;
                                                              case 'Workers':
                                                                $bank_account = 'DD';
                                                              break;
                                                              case 'National':
                                                                $bank_account = 'EE';
                                                              break;
                                                              case 'Treasure':
                                                                $bank_account = 'FF';
                                                              break;
                                                              case 'Jeruselam':
                                                                $bank_account = 'GG';
                                                              break;
                                                              case 'International':
                                                                $bank_account = 'HH';
                                                              break;
                                                              case 'Other':
                                                                $bank_account = 'OO';
                                                              break;
                                                              default:
                                                                $bank_account = 'AA';
                                                              break;
                                                            }

                                                            $banks[] = $bank_account;

                                                        }

                                                    }else{
                                                        
                                                        $banks =['BB']; 
                                                    }
							  ?>
							  <?php if(in_array('AA', $banks)){
							  	 foreach($constant_banks_AA as $cb_AA) {
							  	?>
							  	<tr>
								<td></td>
								<td> </td>
								<td><span class="blue">הלוואה בבנק</span></td>
								<td>Bank loan</td>
								<td>הלוואה בבנק  הנבחר</td>
								<td id="loanfee_aa"><?php echo $cb_AA->loan_fee; ?></td>
								<td id="loantime_aa"><?php echo $cb_AA->loan_time; ?></td>
								<td id="interest_aa"><?php echo $cb_AA->loan_interest; ?></td>
								<td></td>
								<td id="mr_one_"><?php 
								echo round($cb_AA->loan_interest/1200 * (-$cb_AA->loan_fee) * pow((1 + $cb_AA->loan_interest/1200), $cb_AA->loan_time*12) / (1 - pow((1 + ($cb_AA->loan_interest/1200)), $cb_AA->loan_time*12)));
								 ?></td>
							  </tr>

							  	<?php
							  }}

							  ?>
							   <?php if(in_array('DD', $banks)){
							  	 foreach($constant_banks_DD as $cb_DD) {
							  	?>
							  	<tr>
								<td></td>
								<td> </td>
								<td><span class="blue">הלוואה בבנק</span></td>
								<td>Bank loan</td>
								<td>הלוואה בבנק  הנבחר</td>
								<td><?php echo $cb_DD->loan_fee; ?></td>
								<td><?php echo $cb_DD->loan_time; ?></td>
								<td><?php echo $cb_DD->loan_interest; ?></td>
								<td></td>
								<td id="mr_two"><?php 
								echo round($cb_DD->loan_interest/1200 * (-$cb_DD->loan_fee) * pow((1 + $cb_DD->loan_interest/1200), $cb_DD->loan_time*12) / (1 - pow((1 + ($cb_DD->loan_interest/1200)), $cb_DD->loan_time*12)));
								 ?></td>
							  </tr>

							  	<?php
							  }}

							  ?>
							   <?php if(in_array('EE', $banks)){
							  	 foreach($constant_banks_EE as $cb_EE) {
							  	?>
							  	<tr>
								<td></td>
								<td> </td>
								<td><span class="blue">הלוואה בבנק</span></td>
								<td>Bank loan</td>
								<td>הלוואה בבנק  הנבחר</td>
								<td><?php echo $cb_EE->loan_fee; ?></td>
								<td><?php echo $cb_EE->loan_time; ?></td>
								<td><?php echo $cb_EE->loan_interest; ?></td>
								<td></td>
								<td id="mr_three"><?php 
								echo round($cb_EE->loan_interest/1200 * (-$cb_EEEE->loan_fee) * pow((1 + $cb_EE->loan_interest/1200), $cb_EE->loan_time*12) / (1 - pow((1 + ($cb_EE->loan_interest/1200)), $cb_EE->loan_time*12)));
								 ?></td>
							  </tr>

							  	<?php
							  }}

							  ?>
							

							  <?php if($ques15 != 'I do not know of any additional loans'){
							  	
							  	if(isset($maindata_ques_15) && isset($maindata_ques_15[1])){
							  		?>
							  <tr>
								<td></td>
								<td> </td>
								<td><span class="yellow">הלוואה מיוחדת</span></td>
								<td>Future loan1</td>
								<td>הלוואה מיוחדת 1</td>
								<td><?php echo $ques15_1_1; ?></td>
								<td><?php echo $ques15_2_1; ?></td>
								<td><?php echo $ques15_3_1; ?></td>
								<td></td>
								<td class="pmt_15_1"><?php 
								
								$ques15_1_1=str_replace( ',', '', $ques15_1_1);
								$ques15_2_1=str_replace( ',', '', $ques15_2_1);
								$ques15_3_1=str_replace( ',', '', $ques15_3_1);
								

								echo round($ques15_3_1/1200 * (-$ques15_1_1) * pow((1 + $ques15_3_1/1200), $ques15_2_1*12) / (1 - pow((1 + ($ques15_3_1/1200)), $ques15_2_1*12)));
								 ?></td>
							  </tr>
							  <?php
							  	} 

							  	if(isset($maindata_ques_15) && isset($maindata_ques_15[3])){
							  	?>
							  <tr>
								<td></td>
								<td> </td>
								<td><span class="yellow">הלוואה מיוחדת</span></td>
								<td>Future loan1</td>
								<td>הלוואה מיוחדת 1</td>
								<td><?php echo $ques15_1_2; ?></td>
								<td><?php echo $ques15_2_2; ?></td>
								<td><?php echo $ques15_3_2; ?></td>
								<td></td>
								<td class="pmt_15_2"><?php 
								
								$ques15_1_2=str_replace( ',', '', $ques15_1_2);
								$ques15_2_2=str_replace( ',', '', $ques15_2_2);
								$ques15_3_2=str_replace( ',', '', $ques15_2_2);
								

								echo round($ques15_3_2/1200 * (-$ques15_1_2) * pow((1 + $ques15_3_2/1200), $ques15_2_2*12) / (1 - pow((1 + ($ques15_3_2/1200)), $ques15_2_2*12)));
								 ?></td>
							  </tr>
						    <?php	}
							if(isset($maindata_ques_15) && isset($maindata_ques_15[5])){
							  ?>
							  <tr>
								<td></td>
								<td> </td>
								<td><span class="yellow">הלוואה מיוחדת</span></td>
								<td>Future loan1</td>
								<td>הלוואה מיוחדת 1</td>
								<td><?php echo $ques15_1_3; ?></td>
								<td><?php echo $ques15_2_3; ?></td>
								<td><?php echo $ques15_3_3; ?></td>
								<td></td>
								<td class="pmt_15_3"><?php 
								
								$ques15_1_3=str_replace( ',', '', $ques15_1_3);
								$ques15_2_3=str_replace( ',', '', $ques15_2_3);
								$ques15_3_3=str_replace( ',', '', $ques15_2_3);
								

								echo round($ques15_3_3/1200 * (-$ques15_1_3) * pow((1 + $ques15_3_3/1200), $ques15_2_3*12) / (1 - pow((1 + ($ques15_3_3/1200)), $ques15_2_3*12)));
								 ?></td>
							  </tr>
							  <?php
							  }} ?>
							  <tr>
								<td><b>Total</b></td>
								<td><b></b></td>
								<td><b></b></td>
								<td><b></b></td>
								<td><b></b></td>
								<td><b>1,200,000</b></td>
								<td><b></b></td>
								<td><b></b></td>
								<td><b>400</b></td>
								<td><b>3,000</b></td>
							  </tr>
							</tbody>
						</table>
					</div>

				       <div class="col-md-12 text-center chart-text">
							<h1>לוח סילוקין לתקופות נבחרות</h1>
							<p>לוח הסילוקין מתאר את השינויים ביתרת ההלוואה, סך ההחזר החודשי ומרכיבי הקרן והריבית על ציר הזמן.
קיימים מספר סוגי לוחות סילוקין כאשר השכיחים בהם הינם לוח שפיצר ולוח קרן שווה. להלן לוח שפיצר.</p>
					   </div>
					  <div class="table-responsive"> 
					   <table class="table table-condensed tab2Table">
							<thead>
							  <tr>
								<th> תשלום  </th>
								<th> ע"ח קרן  </th>
								<th> הצמדת קרן </th>
								<th> ע"ח ריבית  </th>
								<th> הצמדת ריבית  </th>
								<th> יתרת קרן </th>
								<th> יתרת קרן צמודה  </th>
								<th>סה"כ תשלום חודשי  </th>
								<th> תשלום חודשי צמוד  </th>
							  </tr>
							</thead>
							<tbody>

							<?php
					      		$net_pay =0;
					      		$net_pay_linked =0;
					      		$interest_pay =0;
					      		$interest_pay_linked =0;
					      		$left_pay =0;
					      		$left_pay_linked =0;
					      		$mr =0;
					      		$linked_mr =0;
					      		for ($i=0; $i < 360 ; $i++) {
					      				
					         		$net_pay += $step8->total_net_pay[$i]; 
					         		$net_pay_linked += $step8->total_net_pay_linked[$i];
									$interest_pay += $step8->total_interest_pay[$i];
									$interest_pay_linked += $step8->total_interest_pay_linked[$i];
									$left_pay += $step8->total_left_pay[$i];
									$left_pay_linked += $step8->total_left_pay_linked[$i];
									$mr += $step8->total_mr[$i];
									$linked_mr += $step8->total_linked_mr[$i];
					      		}
					      	?>

							  <tr>
					            <td> <?php echo 1; ?> </td>
					            <td><?php echo $step8->total_net_pay[0]; ?></td>
					            <td><?php echo $step8->total_net_pay_linked[0]; ?> </td>
					            <td><?php echo $step8->total_interest_pay[0]; ?> </td>
					            <td><?php echo $step8->total_interest_pay_linked[0]; ?> </td>
					            <td><?php echo $step8->total_left_pay[0]; ?> </td>
					            <td><?php echo $step8->total_left_pay_linked[0]; ?> </td>
					            <td><?php echo $step8->total_mr[0]; ?> </td>
					            <td><?php echo $step8->total_linked_mr[0]; ?> </td>
					         </tr>
							  <tr>
					            <td> <?php echo 60; ?> </td>
					            <td><?php echo $step8->total_net_pay[60]; ?></td>
					            <td><?php echo $step8->total_net_pay_linked[60]; ?> </td>
					            <td><?php echo $step8->total_interest_pay[60]; ?> </td>
					            <td><?php echo $step8->total_interest_pay_linked[60]; ?> </td>
					            <td><?php echo $step8->total_left_pay[60]; ?> </td>
					            <td><?php echo $step8->total_left_pay_linked[60]; ?> </td>
					            <td><?php echo $step8->total_mr[60]; ?> </td>
					            <td><?php echo $step8->total_linked_mr[60]; ?> </td>
					         </tr>
							  <tr>
					            <td> <?php echo 120; ?> </td>
					            <td><?php echo $step8->total_net_pay[120]; ?></td>
					            <td><?php echo $step8->total_net_pay_linked[120]; ?> </td>
					            <td><?php echo $step8->total_interest_pay[120]; ?> </td>
					            <td><?php echo $step8->total_interest_pay_linked[120]; ?> </td>
					            <td><?php echo $step8->total_left_pay[120]; ?> </td>
					            <td><?php echo $step8->total_left_pay_linked[120]; ?> </td>
					            <td><?php echo $step8->total_mr[120]; ?> </td>
					            <td><?php echo $step8->total_linked_mr[120]; ?> </td>
					         </tr>
				 			<tr>
					            <td> <?php echo 180; ?> </td>
					            <td><?php echo $step8->total_net_pay[180]; ?></td>
					            <td><?php echo $step8->total_net_pay_linked[180]; ?> </td>
					            <td><?php echo $step8->total_interest_pay[180]; ?> </td>
					            <td><?php echo $step8->total_interest_pay_linked[180]; ?> </td>
					            <td><?php echo $step8->total_left_pay[180]; ?> </td>
					            <td><?php echo $step8->total_left_pay_linked[180]; ?> </td>
					            <td><?php echo $step8->total_mr[180]; ?> </td>
					            <td><?php echo $step8->total_linked_mr[180]; ?> </td>
					         </tr>
							  <tr>
					            <td> <?php echo 240; ?> </td>
					            <td><?php echo $step8->total_net_pay[240]; ?></td>
					            <td><?php echo $step8->total_net_pay_linked[240]; ?> </td>
					            <td><?php echo $step8->total_interest_pay[240]; ?> </td>
					            <td><?php echo $step8->total_interest_pay_linked[240]; ?> </td>
					            <td><?php echo $step8->total_left_pay[240]; ?> </td>
					            <td><?php echo $step8->total_left_pay_linked[240]; ?> </td>
					            <td><?php echo $step8->total_mr[240]; ?> </td>
					            <td><?php echo $step8->total_linked_mr[240]; ?> </td>
					         </tr>
							  <tr>
					            <td> <?php echo 300; ?> </td>
					            <td><?php echo $step8->total_net_pay[300]; ?></td>
					            <td><?php echo $step8->total_net_pay_linked[300]; ?> </td>
					            <td><?php echo $step8->total_interest_pay[300]; ?> </td>
					            <td><?php echo $step8->total_interest_pay_linked[300]; ?> </td>
					            <td><?php echo $step8->total_left_pay[300]; ?> </td>
					            <td><?php echo $step8->total_left_pay_linked[300]; ?> </td>
					            <td><?php echo $step8->total_mr[300]; ?> </td>
					            <td><?php echo $step8->total_linked_mr[300]; ?> </td>
					         </tr>
							  <tr>
					            <td> <?php echo 360; ?> </td>
					            <td><?php echo $step8->total_net_pay[359]; ?></td>
					            <td><?php echo $step8->total_net_pay_linked[359]; ?> </td>
					            <td><?php echo $step8->total_interest_pay[359]; ?> </td>
					            <td><?php echo $step8->total_interest_pay_linked[359]; ?> </td>
					            <td><?php echo $step8->total_left_pay[359]; ?> </td>
					            <td><?php echo $step8->total_left_pay_linked[359]; ?> </td>
					            <td><?php echo $step8->total_mr[359]; ?> </td>
					            <td><?php echo $step8->total_linked_mr[359]; ?> </td>
					         </tr>
							  <tr>
					            <td> total </td>
					            <td><?php echo $net_pay; ?></td>
					            <td><?php echo $net_pay_linked; ?> </td>
					            <td><?php echo $interest_pay; ?> </td>
					            <td><?php echo $interest_pay_linked; ?> </td>
					            <td><?php echo $left_pay; ?> </td>
					            <td><?php echo $left_pay_linked; ?> </td>
					            <td><?php echo $mr; ?> </td>
					            <td><?php echo $linked_mr; ?> </td>
					         </tr>

							</tbody>
						</table>
					  </div>
					  <p>*הערה - ההצמדות חושבו לפי שינויי פריים ומדד בכל הטבלאות.</p>
					</div>
				</div>


				<div class="tab-pane" id="5">
                   <div class="tab-title">
				     <h4>פעולות עתידיות בחשבון
					   <small>הסבר קצר על פעולות עתידיות</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-alarm-white.png')}}" />
					 </div>
				   </div>
				   <div class="tab-inner-content">
				     <p>לפניכם המלצות לפעולות שישפרו את תנאי ההלוואה שלכם באמצעות חסכון כספי בתשלומי ההחזר, קיצור משך ההלוואה ו/או פריסת תשלומי ההחזר בצורה נוחה יותר עבורכם. כל ההצעות תוכננו עבורכם באופן ספציפי בהתאם ליכולתכם הכלכלית וצרכיכם האישיים בהווה ובעתיד.</p>
					 
					 <div class="spc-point">
					   <h3><span><?php 
					if(isset($min_val_tab_3)){
						echo $min_val_tab_3;
					}
				?></span>שנים - מחזור משכנתא</h3>
					   <p>בוצע מחזור למסלולים {A-H} של המשכנתא בחשבונכם לאחר <?php 
					if(isset($min_val_tab_3)){
						echo $min_val_tab_3;
					}
				?> שנים עקב סיום המסלולים הבאים: {A-H}. 
יתרת המשכנתא חולקה בהתאם למסלולים הנותרים.</p>
                        <ul>
						  <li>קיבוע המסלול לאורך זמן יחסוך לכם באופן שההחזר החודשי יתייצב ולא ימשיך לעלות עקב שינוי המדד</li>
						  <li>לסיכומו של דבר, שנות המשכנתא קוצרו מ-  <?php 
					if(isset($min_val_tab_3)){
						echo $min_val_tab_3;
					}
				?> שנים ל- <?php 
					if(isset($min_val_tab_3) && isset($year_tab_3) ){
						echo $min_val_tab_3 + $year_tab_3;
					}
				?> שנים.</li>
						</ul>
					 </div>
					 <div class="spc-point brown-c">
					   <h3><span><?php 
					if(isset($min_val_tab_3) && isset($year_tab_3) ){
						echo $min_val_tab_3 + $year_tab_3;
					}
				?></span>שנים - פרעון משכנתא</h3>
					   <p><b>פרעון השקעה 1 </b> - לאחר {future income years} שנים מיום לקיחת המשכנתא יהיה ברשותכם 50,000 ₪
יישמנו את הפרעון בדוח המשכנתא שלכם עבור המסלולים: {A-H}.</p>
<p><b>פרעון השקעה 2 </b> - לאחר {future income years} שנים מיום לקיחת המשכנתא יהיה ברשותכם 50,000 ₪ 
יישמנו את הפרעון בדוח המשכנתא שלכם עבור המסלולים: {A-H}.</p>
<p><b>פרעון השקעה 3 </b> - לאחר {future income years} שנים מיום לקיחת המשכנתא יהיה ברשותכם 50,000 ₪
יישמנו את הפרעון בדוח המשכנתא שלכם עבור המסלולים: {A-H}.</p>
                        <ul>
						  <li>יש לקצר את מספר שנות המשכנתא בכ- 8 שנים, כך שיתרת שנות המשכנתא במסלול זה יסתכמו בכ- <?php 
					if(isset($min_val_tab_3) && isset($year_tab_3) ){
						echo $min_val_tab_3 + $year_tab_3;
					}
				?> שנים בלבד</li>
						</ul>
					 </div>
					 
				   </div>
				</div>
				<div class="tab-pane file-tab" id="8">
				  <div class="tab-title orange">
				     <h4>המלצות
					   <small>פעולות עתידיות מומלצות בחשבון</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-like.png')}}" />
					 </div>
				   </div>
				  <div class="tab-inner-content orange-tab">
				     <p class="text-center wid-border">לפניכם המלצות לפעולות שישפרו את תנאי ההלוואה שלכם באמצעות חסכון כספי בתשלומי ההחזר, 
קיצור משך ההלוואה ו/או פריסת תשלומי ההחזר בצורה נוחה יותר עבורכם.
כל ההצעות תוכננו עבורכם באופן ספציפי בהתאם ליכולתם הכלכלית 
והצרכים האישיים שלכם בהווה ובעתיד.</p>
					 
					 <div class="spc-point">
					   <h3>1. שיעבוד של 2 נכסים - נכס קיים ונכס נרכש</h3>
					   <p>על מנת לקחת את סך המשכנתא שבקשת יש לשעבד שני הנכסים, הקיים והנרכש. נמליץ לקחת את המשכנתא באופן הבא: </p>
                        <ul class="no-list">
						  <li>א. בגין הנכס הקיים: לקיחת משכנתא בסך של XXX ₪.</li>
						  <li>ב .בגין הנכס הנרכש: לקיחת משכנתא בסך של YYY ₪.</li>
						</ul>
					 </div>
					 
					 <div class="spc-point">
					   <p>מאחורי ההמלצה עומד הרעיון הכלכלי הבא </p>
                        <ul>
						  <li>לקיחת משכנתא על הנכס הקיים  - הריביות יותר גבוהות. </li>
						  <li>ככול שאחוז המימון גבוה יותר (סכום המשכנתא אל מול שווי הנכס) הריבית יותר גבוה. </li>
						</ul>
						<p>על כן, נבצע אופטימיזציה לחלוקת המשכנתא בין סכום המשכנתא שיוקצה לשעבוד הנכס הקיים אל מול סכום המשכנתא שיוקצה בשעבוד הנכס החדש כך שהריביות על 2 הנכסים יהיו הנמוכות ביותר.</p>
					 </div>
					 
					 <div class="spc-point brown-c">
					   <h3>הקצאת משכנתא בשדרוג נכס</h3>
					   <p> <b> שלב א’ </b> עד המכירה של הנכנס הקיים.</p>
					 </div>
					 <div class="table-responsive"> 
					 <table class="table table-condensed">
						<thead>
						  <tr>
							<th>הסבר</th>
							<th align="center">נתוני דירה קיימת</th>
							<th>נתוני דירה חדשה</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>שווי הנכנס <span>a</span></td>
							<td align="">2,000,000</td>
							<td>2,500,000<span>e</span></td>
						  </tr>
						  <tr>
							<td>משכנתא קיימת<span>e</span></td>
							<td align="">650,000</td>
							<td>x<span>f</span></td>
						  </tr>
						  <tr>
							<td>משכנתא לטובת הנכס החדש<span>c</span></td>
							<td align="">200,000</td>
							<td>1,650,000<span>g</span></td>
						  </tr>
						  <tr>
							<td> החזר חודשי<span>d</span></td>
							<td align="">3,600</td>
							<td>4,100<span>h</span></td>
						  </tr>
						</tbody>
					  </table>
					  </div>
					   <p> <b>שלב ב’ </b> - עד המכירה של הנכנס הקיים.</p>
                     <div class="table-responsive"> 
					 <table class="table table-condensed">
						<thead>
						  <tr>
							<th>הסבר</th>
							<th>נתוני דירה חדשה</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>שווי הנכנס <span>i</span></td>
							<td align="">2,500,000</td>
						  </tr>
						  <tr>
							<td> משכנתא קיימת<span>j</span></td>
							<td align="">800,000</td>
						  </tr>
						  <tr>
							<td>החזר חודשי<span>k</span></td>
							<td align="">4,800</td>
						  </tr>
						</tbody>
					  </table>
					 </div>
					 <div class="section3">
						 <div class="wid-border">
						  <h3>2. תקופת הגרייס</h3>
						  <span>במהלך {1.1} החודשים הראשונים יעמוד ההחזר החודשי על כ- {1.2} שקלים, על פי המלצתנו בתקופה זו במסלולים המשתלמים ביותר להיות תחת גרייס – תשלום הקרן במסלולים הנבחרים יהיה ללא תשלום קרן כדי שתוכלו לעמוד בהחזר המשכנתא.</span></div>
						  
						 <div class="spc-point">
						   <h3>3. הלוואות עו"ש קיימות בחשבון</h3>
						   <p class="btext">הלוואה קיימת מספר 1 – </p>
							<ul>
							  <li>בהתאם להלוואת עו"ש קיימת בסך 50,000 ₪ { loan fee} </li>
							  <li>שתסתיים בעוד 4 שנים  { loan years}</li>
							  <li>עם ריבית 5% { loan interest}</li>
							  <li>שההחזר החודשי בגינה 2500 ש"ח { loan MR}</li>
							  <li class="green-color">הגדלנו לכם את המשכנתא בתחשיב ואנו ממליצים לפרוע הלוואה זאת באמצעות המשכנתא שתתקבל.</li>
							</ul>
						 </div>
						 
						 <div class="spc-point">
						   <p class="btext">הלוואה קיימת מספר 2 – </p>
							<ul>
							  <li>בהתאם להלוואת עו"ש קיימת בסך 50,000 ₪ { loan fee} </li>
							  <li>שתסתיים בעוד 4 שנים  { loan years}</li>
							  <li>עם ריבית 5% { loan interest}</li>
							  <li>שההחזר החודשי בגינה 2500 ש"ח { loan MR}</li>
							  <li class="red-color">הגדלנו לכם את המשכנתא בתחשיב ואנו ממליצים שלא לפרוע הלוואה זאת באמצעות המשכנתא שתתקבל.</li>
							</ul>
						 </div>
						 
						 <div class="spc-point">
						   <p class="btext">הלוואה קיימת מספר 3 –  </p>
							<ul>
							  <li>בהתאם להלוואת עו"ש קיימת בסך 50,000 ₪ { loan fee} </li>
							  <li>שתסתיים בעוד 4 שנים  { loan years}</li>
							  <li>עם ריבית 5% { loan interest}</li>
							  <li>שההחזר החודשי בגינה 2500 ש"ח { loan MR}</li>
							  <li class="green-color">הגדלנו לכם את המשכנתא בתחשיב ואנו ממליצים לפרוע הלוואה זאת באמצעות המשכנתא שתתקבל.</li>
							</ul>
						 </div>
						
						<div class="wid-border not-top-b">על פי המלצתנו הוספנו את סכום ההלוואות המומלצות לעיל אל המשכנתא שלכם ואל ההחזר החודשי שחושב, על מנת לחסוך בתחשיב המשכנתא הכולל</div>
					 </div>
					 
					 <div class="section3">
						  
						 <div class="spc-point">
						   <h3>4. הלוואות מיוחדות שניתן לקחת בתחשיב</h3>
						   <p>לבקשתכם, נבדקה האפשרות לקחת הלוואה מיוחדות בחשבון:</p>
						   <p class="btext">הלוואה מיוחדת מספר 1 – </p>
							<ul>
							  <li>בהתאם להלוואת עו"ש קיימת בסך 50,000 ₪ { loan fee} </li>
							  <li>שתסתיים בעוד 4 שנים  { loan years}</li>
							  <li>עם ריבית 5% { loan interest}</li>
							  <li>שההחזר החודשי בגינה 2500 ש"ח { loan MR}</li>
							  <li class="red-color">אנו ממליצים שלא לקחת הלוואה זאת בהתאם לתחשיב שבוצע.</li>
							</ul>
						 </div>
						 
						 <div class="spc-point">
						   <p class="btext">הלוואה מיוחדת מספר 2 –  </p>
							<ul>
							  <li>בהתאם להלוואת עו"ש קיימת בסך 50,000 ₪ { loan fee} </li>
							  <li>שתסתיים בעוד 4 שנים  { loan years}</li>
							  <li>עם ריבית 5% { loan interest}</li>
							  <li>שההחזר החודשי בגינה 2500 ש"ח { loan MR}</li>
							  <li class="red-color">אנו ממליצים שלא לקחת הלוואה זאת בהתאם לתחשיב שבוצע.</li>
							</ul>
						 </div>
						 
						 <div class="spc-point">
						   <p class="btext">הלוואה קיימת מספר 3 –  </p>
							<ul>
							  <li>בהתאם להלוואת עו"ש קיימת בסך 50,000 ₪ { loan fee} </li>
							  <li>שתסתיים בעוד 4 שנים  { loan years}</li>
							  <li>עם ריבית 5% { loan interest}</li>
							  <li>שההחזר החודשי בגינה 2500 ש"ח { loan MR}</li>
							  <li class="green-color">הקטנו לכם את המשכנתא בתחשיב ואנו ממליצים לקחת הלוואה זאת על מנת לחסוך בתחשיב הכולל!</li>
							</ul>
						 </div>
						
						<div class="wid-border not-top-b">על פי המלצתנו הפחתנו את סכום ההלוואות  <a href="#">ההמומלצות </a> לעיל מהמשכנתא וכן מההחזר החודשי של המשכנתא ל מנת לחסוך בתחשיב המשכנתא הכולל.
המלצתנו היא לקחת את ההלוואות המומלצות ל עיל בנוסף ללקיחת המשכנתא בבנק.</div>
					 </div>
					  
					 <div class="section3">
							 <div class="spc-point">
							   <h3>5. הלוואה מיוחדת שניתן לקחת בבנק</h3>
							   <p>בדקנו עבורכם את כל מסלולי המשכנתא שקיימים בכל הבנקים וכן הטבות בלעדיות שקיימות בכל בנק בנפרד ואנחנו ממליצים לכם לקחת הלוואה מיוחדת של בנק מזרחי-טפחות {bank name} הניתנת באופן קבוע ללקוחות הבנק.</p>
							 </div>
							 
							 <div class="spc-point">
							   <p>הלוואה מיוחדת בבנק {bank name} :</p>
								<ul>
								  <li>בסך 50,000 ₪ {future loan fee} </li>
								  <li>לתקופה של 4 שנים  {future loan years}</li>
								  <li>בריבית 5% {future loan interest}</li>
								</ul>
							 </div>
							 <div class="spc-point big-li-green">
								<ul>
								  <li>על פי המלצתנו הפחתנו את סכום ההלוואה לעיל מהמשכנתא ומההחזר החודשי של המשכנתא על מנת לחסוך בתחשיב המשכנתא הכולל. </li>
								  <li class="green-color">המלצתנו היא לקחת את ההלוואה לעיל בנוסף למשכנתא.</li>
								</ul>
							 </div>
							 <div class="wid-border not-top-b no-content"></div>
						</div>
						
						<div class="section3">
							 <div class="spc-point">
							   <h3>6. מחזור משכנתא</h3>
							   <p>בוצע מחזור למסלולים {A-H} של המשכנתא בחשבונכם לאחר X שנים עקב סיום המסלולים הבאים: {A-H}. 
יתרת המשכנתא חולקה בהתאם למסלולים הנותרים.</p>
							 </div>
							 
							 <div class="spc-point">
								<ul>
								  <li><b>קיבוע המסלול לאורך זמן יחסוך לכם באופן שההחזר החודשי יתייצב ולא ימשיך לעלות עקב שינוי המדד.</b></li>
								  <li><b>לסיכומו של דבר, שנות המשכנתא קוצרו מ- X שנים ל- Y שנים.</b></li>
								</ul>
							 </div>
							 <div class="wid-border not-top-b no-content"></div>
						</div>
						<div class="section3">
							 <div class="spc-point">
							   <h3>7. פרעון השקעות</h3>
 <p><b>פרעון השקעה 1</b> - לאחר {future income years} שנים מיום לקיחת המשכנתא יהיה ברשותכם 50,000 ₪
יישמנו את הפרעון בדוח המשכנתא שלכם עבור המסלולים: {A-H}.</p>

<p><b>פרעון השקעה 2</b> - לאחר {future income years} שנים מיום לקיחת המשכנתא יהיה ברשותכם 50,000 ₪ 
יישמנו את הפרעון בדוח המשכנתא שלכם עבור המסלולים: {A-H}.</p>

<p><b>פרעון השקעה 3</b> - לאחר {future income years} שנים מיום לקיחת המשכנתא יהיה ברשותכם 50,000 ₪
יישמנו את הפרעון בדוח המשכנתא שלכם עבור המסלולים: {A-H}.</p>
							 </div>
							 
							 <div class="spc-point">
								<ul>
								  <li><b>יש לקצר את מספר שנות המשכנתא בכ- X שנים, כך שיתרת שנות המשכנתא במסלול זה יסתכמו בכ- Y שנים בלבד.</b></li>
								</ul>
							 </div>
						</div>

				  </div>

					</div>
				<div class="tab-pane file-tab chart" id="4">
				   <div class="tab-title">
				     <h4>גרפים להמחשה
					   <small>טקסט כללי קצר על אזור הגרפים להמחשה, טקסט כללי קצר על אזור הגרפים להמחשה</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-level-white.png')}}">
					 </div>
				   </div>
				   <div class="tab-inner-content">
				   
				   <div class="chart-s">
				      <div class="col-md-12 text-center chart-text">
				       <h1>החזר קרן צמודה</h1>
					   <p>שינוי החזר קרן לאורך תקופת ההלוואה בשנים</p>
					  </div>
					  <div class="chart-1">
					     <div class="char-title">
						    החזר קרן צמודה בש”ח
						 </div>
					    <canvas id="myChart"></canvas>
						<p class="top-padding w-q">לדוגמא: בתום 14 שנים ממועד לקיחת ההלוואה יעמוד גובהו של ההחזר החודשי של תשלומי הקרן על 2,150 ש"ח.</p>
					  </div>
					</div>
					
					<div class="chart-s">
				      <div class="col-md-12 text-center chart-text">
				       <h1>תשלום חודשי צמוד</h1>
					   <p>כיצד משתנה מרכיב התשלום החודשי הצמוד לאורך חיי ההלוואה</p>
					  </div>
					  <div class="chart-1">
					     <div class="char-title">
						    תשלום חודשי צמוד בש”ח
						 </div>
					    <canvas id="myChart1"></canvas>
					  </div>
					</div>
					  
					<div class="chart-s">
				      <div class="col-md-12 text-center chart-text">
				       <h1>טבלת פריים</h1>
					   <p>שינוי הפריים לאורך תקופת ההלוואה בשנים</p>
					  </div>
					  <div class="chart-1">
					     <div class="char-title">
						    שינוי פריים
(%)
						 </div>
					    <canvas id="myChart2"></canvas>
					  </div>
					</div>
					
					<div class="chart-s">
				      <div class="col-md-12 text-center chart-text">
				       <h1>שינוי מדד</h1>
					   <p>שינוי המדד לאורך תקופת ההלוואה בשנים</p>
					  </div>
					  <div class="chart-1">
					     <div class="char-title">
						    שינוי מדד (%)
						 </div>
					    <canvas id="myChart3"></canvas>
					  </div>
					</div>
					  

				   </div>
				</div>
                
				<div class="tab-pane file-tab sensitivity-analyzes" id="3">
				   <div class="tab-title">
				     <h4>ניתוחי רגישות
					   <small>השינוי בגובה ההחזר החודשי שלכם, במספר תקופות מייצגות, בעקבות שינויים אפשריים במדד המחירים לצרכן ו/או בריבית הפריים</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-spex-white.png')}}">
					 </div>
				   </div>
				   <div class="tab-inner-content">
				       <p class="top-padding">בטבלאות הבאות תוכלו לראות כיצד ישתנה גובה ההחזר החודשי שלכם, במספר תקופות מייצגות, בעקבות שינויים אפשריים במדד המחירים לצרכן ו/או בריבית הפריים. כיצד לקרוא את הטבלה החודשית? בטבלה שלפניכם עמודות המייצגות מספר תרחישי מדד אפשריים ושורות המייצגות מספר תרחישי ריבית פריים שונים.
הסכומים המופיעים בהצטלבות השורות והעמודות מייצגים את גובה התשלום החודשי בתנאי הריבית והמדד המצטלבים במשבצת זו. על ידי תנועה מעלה ומטה בין שורות הטבלה ניתן לראות כיצד ישתנה התשלום בעקבות שינוי שער הריבית ואילו על ידי תנועה ימינה ושמאלה בין עמודות הטבלה נראה את השינויי בגובה ההחזר החודשי בעקבות שינויי המדד.</p>
<h2>חודש 1</h2>
                       <div class="table-responsive"> 
					   <table class="table table-condensed">
							<thead>
							  <tr>
								<th> פריים/מדד  </th>
								<th> מדד: 2% - </th>
								<th> מדד: 1%-  </th>
								<th> מדד: 0%  </th>
								<th> מדד: 1%+ </th>
								<th> מדד: 2%+ </th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td> פריים 2%- </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 1%- </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td>פריים 0 </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 1%+ </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 2%+ </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							</tbody>
						</table>
						</div>
						<p class="top-padding w-q">הסבר: בדוגמא שלפניכם המשבצת הכתומה מייצגת את גובה התשלום בחודש ה – 1 להחזר ההלוואה  בהם מדד המחירים לצרכן יהיה נמוך יותר מהמדד הנוכחי ואילו במשבצות משמאלה הסכומים מייצגים תרחישים בהם מדד המחירים לצרכן יעלה. באופן דומה המספרים בשורות שמעל המשבצת הכתומה מייצגים תרחישים בהם ריבית הפריים תרד ואילו בשורות שתחתיה הסכומים מייצגים תרחישים בהם ריבית הפריים תהיה גבוהה יותר. </p>
                         <h2>חודש 180</h2>
						 <div class="table-responsive"> 
						  <table class="table table-condensed">
							<thead>
							  <tr>
								<th> פריים/מדד  </th>
								<th> מדד: 2% - </th>
								<th> מדד: 1%-  </th>
								<th> מדד: 0%  </th>
								<th> מדד: 1%+ </th>
								<th> מדד: 2%+ </th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td> פריים 2%- </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 1%- </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td>פריים 0 </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 1%+ </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 2%+ </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							</tbody>
						</table>
						 </div>
						<h2>חודש 360</h2>
						<div class="table-responsive"> 
						  <table class="table table-condensed">
							<thead>
							  <tr>
								<th> פריים/מדד  </th>
								<th> מדד: 2% - </th>
								<th> מדד: 1%-  </th>
								<th> מדד: 0%  </th>
								<th> מדד: 1%+ </th>
								<th> מדד: 2%+ </th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td> פריים 2%- </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 1%- </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td>פריים 0 </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 1%+ </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							  <tr>
								<td> פריים 2%+ </td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
								<td>פריים</td>
							  </tr>
							</tbody>
						</table>
					    </div>
					</div>
				</div>
				
				<div class="tab-pane lamp-tab" id="6">
                   <div class="tab-title">
				     <h4>הסבר על מסלולי ההלוואה השונים
					   <small>הרכב מסלולי ההלוואה כפי שנבחר בהתאם לנתוניך הפיננסיים</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-lamp-white.png')}}" />
					 </div>
				   </div>
				   <div class="tab-inner-content">

                   <div class="upperText">
                   	  <h3>מהם ההבדלים בין מסלולי המשכנתא השונים?</h3>
                   	   <p>עוד לפני ההסבר על מסלולי משכנתא נפוצים ומקובלים המתאימים לסביבה של ריבית נמוכה במשק, חשוב להבין מהם ההבדלים העיקריים בין מסלולי ההלוואה. למעשה, ישנם שלושה הבדלים עיקריים בין מסלולי המשכנתא:</p>
                   	  <ol>
                   	  	<li><span class="green"> סוג הריבית </span> (פריים, קבועה, משתנה, לייבור ועוד).</li>
                   	  	<li><span class="green">סוג ובסיס ההצמדה </span> (מדד המחירים לצרכן, אירו, דולר, לא צמודה).</li>
                   	  	<li><span class="green">מסלול פירעון המשכנתא </span> (תשלומי החזר חודשיים קבועים, החזר חודשי יורד, פירעון שוטף).</li>
                   	  </ol>
                   	  <p>לפניכם סקירה כללית על מסלולי משכנתא מומלצים ופופולריים, בכל מסלול תוכלו לקרוא כיצד מחושבת הריבית, מהי רמת הסיכון, תקופת הפירעון והאם וכיצד קרן ההלוואה משתנה.</p>
                   </div>

				   <div class="table-responsive head_of_A" style="display: none;"> 
				   <table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right">מסלול משכנתא לא צמודה בריבית פריים   </th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">מסלול זה אינו צמוד למדד המחירים לצרכן או לכל מדד אחר, לכן יתרת הקרן אינה משתנה ורק פוחתת עם הזמן. המסלול מתאים לכל מי שחושש מאינפלציה גבוהה, עם זאת מדובר בסיכון גבוה מאחר ואם ריבית הפריים מזנקת מעלה גם תשלומי ההחזר מזנקים. ניתן לפרוע מסלול בריבית פריים בכל עת, ללא עמלת פירעון מוקדם, יתרון משמעותי למסלול זה, המתאים במיוחד למקרים בהם הריבית נמוכה במשק.</td>
						  </tr>
						</tbody>
					</table>
					</div>
					<div class="table-responsive head_of_B" style="display: none;"> 
					<table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right">מסלול משכנתא בריבית קבועה צמודה למדד</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">מסלול משכנתא צמודה למדד המחירים לצרכן בריבית קבועה וידועה מראש שאינה משתנה. מסלול זה מתאים במיוחד לסביבת ריבית נמוכה כפי שיש היום במשק הישראלי. ריבית קבועה מאפשרת לכם ליהנות מתחושת ביטחון ויציבות, ובעיקר מתשלום חודשי קבוע בתוספת הפרשי הצמדה. רמת הסיכון של מסלול זה נחשבת  בינונית לטווח קצר וגבוה לטווח ארוך. לכן נוטלי משכנתאות שחייבים לקחת מסלול זה על מנת לעמוד בהחזר החודשי (ללא פירעון צפוי בטווח קרוב) רוכשים דירה שאינה מתאימה למידותיהם הכלכליים ועליהם לרכוש דירה בסכום המוך יותר.</td>
						  </tr>
						</tbody>
					</table>
					</div>
					<div class="table-responsive head_of_C" style="display: none;" > 
					<table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right">מסלול משכנתא בריבית קבועה לא צמודהר</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">מסלול משכנתא בריבית קבועה לא צמודה מעניק תחושת יציבות וביטחון מאחר ויודעים מראש מהו גובה ההחזר החודשי. רמת הסיכון המאפיינת מסלול זה היא בינונית מאחר ומשלמים החזר חודשי קבוע שאינו מושפע משינויים בריבית ומשינויים באינפלציה. עם זאת, הריבית הגבוהה המאפיינת מסלול זה נחשבת לחיסרון בולט, ויש לשלם קנס גבוה במידה ומעוניינים לפרוע את ההלוואה לפני סיומה.</td>
						  </tr>
						</tbody>
					</table>
					</div>
					<div class="table-responsive head_of_D" style="display: none;"> 
					<table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right">מסלול משכנתא כל 5 שנים בריבית משתנה צמודה למדד</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">מסלול משכנתא צמודה למדד בריבית משתנה מבוסס על עוגן חיצוני כמו תשואות אג"ח ממשלתיות שאינו צמודות למדד, הריבית משתנה כל 5 שנים חמש שנים וניתן לפרוע את ההלוואה בנקודות יציאה מוגדרות מראש, ללא קנסות. ניתן למחזר או לפרוע את ההלוואה לפני נקודות הזמן תמורת תשלום קנס שלרוב אינו מסתכם בסכום גבוה מדי.</td>
						  </tr>
						</tbody>
					</table>
					</div>
					<div class="table-responsive head_of_E" style="display: none;"> 
					<table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right">מסלול משכנתא כל 5 שנים בריבית משתנה לא צמודה </th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">למסלול זה יתרון בגלל שהסכום לא מוצמד למדד המחירים לצרכן או לכל מדד אחר, מסלול זה מבוסס עוגן המשתנה על פי עקום 0, הוא עקום התשואות וניתן לפרוע את ההלוואה בנקודות יציאה מוגדרות מראש, ללא קנסות. ניתן למחזר או לפרוע את ההלוואה לפני נקודות הזמן תמורת תשלום קנס שלרוב אינו מסתכם בסכום גבוה מדי.</td>
						  </tr>
						</tbody>
					</table>
					</div>
					<div class="table-responsive head_of_F" style="display: none;"> 
					<table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right">מסלול משכנתא צמוד לאירו</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">מסלולי משכנתא צמודה למט"ח (דולר, אירו, ין) אינם צמודים למדד המחירים לצרכן וניתן לפרוע אותם בכל רגע נתון. כיום מסלולים אלו הן חלופות למסלול הפריים וניתן לקחת עד שליש מסכום במשכנתא. הריבית משתנה בהתאם למסלול הנבחר, לרוב כל שלושה חודשים, חצי שנה או שנה. עם זאת, למסלול זה חיסרון משמעותי מאחר וקיים סיכון גדול אם שער החליפין (שע"ח) קופץ מעלה, לדוגמה שער הדולר משתנה מ- 3.8 ש"ח לדולר לשער של 4.4 ש"ח לדולר אחד. לכן נכון לקחת מסלול זה כאשר שע"ח (שקל-דולר / שקל-יורו) גבוה והצפי שהמגמה תהיה הפוכה כלומר ששע"ח ירד ואז יתרת הקרן תרד בצורה משמעותית. </td>
						  </tr>
						</tbody>
					</table>
					</div>
					<div class="table-responsive head_of_G" style="display: none;"> 
					<table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right"> מסלול משכנתא צמוד לדולר </th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">סמסלולי משכנתא צמודה למט"ח (דולר, אירו, ין) אינם צמודים למדד המחירים לצרכן וניתן לפרוע אותם בכל רגע נתון. כיום מסלולים אלו הן חלופות למסלול הפריים וניתן לקחת עד שליש מסכום במשכנתא. הריבית משתנה בהתאם למסלול הנבחר, לרוב כל שלושה חודשים, חצי שנה או שנה. עם זאת, למסלול זה חיסרון משמעותי מאחר וקיים סיכון גדול אם שער החליפין (שע"ח) קופץ מעלה, לדוגמה שער הדולר משתנה מ- 3.8 ש"ח לדולר לשער של 4.4 ש"ח לדולר אחד. לכן נכון לקחת מסלול זה כאשר שע"ח (שקל-דולר / שקל-יורו) גבוה והצפי שהמגמה תהיה הפוכה כלומר ששע"ח ירד ואז יתרת הקרן תרד בצורה משמעותית. </td>
						  </tr>
						</tbody>
					</table>
					</div>
					<div class="table-responsive head_of_H" style="display: none;"> 
					<table class="table table-condensed">
						<thead>
						  <tr>
							<th align="right"> מסלול משכנתא בריבית זכאות </th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td align="right">זכאות היא הלוואה צמודה למדד אך בריבית מעט זולה יותר. 
המשכנתא לזכאים תינתן לכל מי שצברו 599 נקודות ויותר.
הריבית בהלוואת זכאות היא קבוע ואינה ניתנת למשא ומתן. גובה הריבית על המשכנתא הוא בשיעור של 0.5% פחות מהריבית הממוצעת של הבנקים למשכנתאות, שאותה מפרסם בנק ישראל, אך לא יותר מ- 3.0%, בהתאם לתקופת ההחזר של המשכנתא.
לזכאות יתרון בכך שניתן לפרוע אותה בכל עת ללא קנסות.
</td>
						  </tr>
						</tbody>
					</table>
					</div>
				   </div>
				</div>
				<div class="tab-pane file-tab" id="7">
				   <div class="tab-title">
				     <h4>לוח סילוקין מלא: ריכוז נתונים על משכנתא 
					   <small>טקסט הסבר על לוח הסילוקין המלא, טקסט הסבר על לוח הסילוקין המלא</small>
					 </h4>
					 <div class="img-wrp">
					   <img src="{{URL::asset('images/lower-file-white.png')}}" />
					 </div>
				   </div>
				   <div class="tab-inner-content">
				   <div class="table-responsive"> 
					   <table class="table table-condensed  tab2Table ">
      <thead>
         <tr>
			<th> תשלום  </th>
			<th> ע"ח קרן  </th>
			<th> הצמדת קרן </th>
			<th> ע"ח ריבית  </th>
			<th> הצמדת ריבית  </th>
			<th> יתרת קרן </th>
			<th> יתרת קרן צמודה  </th>
			<th>סה"כ תשלום חודשי  </th>
			<th> תשלום חודשי צמוד  </th>
		  </tr>
      </thead>
      <tbody>
        
      	<?php
      		$net_pay =0;
      		$net_pay_linked =0;
      		$interest_pay =0;
      		$interest_pay_linked =0;
      		$left_pay =0;
      		$left_pay_linked =0;
      		$mr =0;
      		$linked_mr =0;
      		for ($i=0; $i < 360 ; $i++) {
      	?> 
      	 <tr>
            <td> <?php echo $i + 1; ?> </td>
            <td><?php echo $step8->total_net_pay[$i]; ?></td>
            <td><?php echo $step8->total_net_pay_linked[$i]; ?> </td>
            <td><?php echo $step8->total_interest_pay[$i]; ?> </td>
            <td><?php echo $step8->total_interest_pay_linked[$i]; ?> </td>
            <td><?php echo $step8->total_left_pay[$i]; ?> </td>
            <td><?php echo $step8->total_left_pay_linked[$i]; ?> </td>
            <td><?php echo $step8->total_mr[$i]; ?> </td>
            <td><?php echo $step8->total_linked_mr[$i]; ?> </td>
         </tr>
      	<?php			
         		$net_pay += $step8->total_net_pay[$i]; 
         		$net_pay_linked += $step8->total_net_pay_linked[$i];
				$interest_pay += $step8->total_interest_pay[$i];
				$interest_pay_linked += $step8->total_interest_pay_linked[$i];
				$left_pay += $step8->total_left_pay[$i];
				$left_pay_linked += $step8->total_left_pay_linked[$i];
				$mr += $step8->total_mr[$i];
				$linked_mr += $step8->total_linked_mr[$i];
      		}
      	?>
      	 <tr>
            <td>  </td>
            <td><?php echo $net_pay; ?></td>
            <td><?php echo $net_pay_linked; ?> </td>
            <td><?php echo $interest_pay; ?> </td>
            <td><?php echo $interest_pay_linked; ?> </td>
            <td><?php echo $left_pay; ?> </td>
            <td><?php echo $left_pay_linked; ?> </td>
            <td><?php echo $mr; ?> </td>
            <td><?php echo $linked_mr; ?> </td>
         </tr>

      </tbody>
   </table>
					</div>
					</div>
				
				

				</div>
			</div>
		</div>
	</div> 

	<footer>
		    @include('layouts.footer')
	</footer>
		
		
  <div id="stop" class="scrollTop">
    <span><a href=""><i class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
  </div>
  
    <script src="{{ URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/custom.js')}}"></script>
	 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>




<?php 
	$ff = $step8->total_left_pay_linked; 
	$left_pay_linked = implode( ',', $ff );

	$mr = $step8->total_linked_mr; 
	$mr_linked = implode( ',', $mr );
	
	$prime_arr = implode( ',', $prime);
	$madad_arr = implode( ',', $madad);

	//print_r($prime_arr);

?>
	 
<script type="text/javascript">

//chart 1
var ctx = document.getElementById('myChart1').getContext('2d');
var mr_linked = '<?php echo $mr_linked; ?>';
var mr_link =  mr_linked.split(',');
var median = mr_link[0] - mr_link[20];
var max = Math.max.apply(Math, mr_link);
var max_val = max + median;
var min = Math.min.apply(Math, mr_link);

$k=[];
for($l=1 ;$l<=mr_link.length;$l++) {

	$k[$l] = $l;
}

var chart = new Chart(ctx, {
    type: 'line',
    data: {
	
        labels: $k,
        datasets: [{
		    label: 'גרף',
            backgroundColor: 'transparent',
            borderColor: '#bab807',
            data: mr_link
        }]
    },

    // Configuration options go here
    options: {
	       elements: {
				line: {
					tension: 0.000001
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						max: max_val,
						min: 0,
						stepSize: median
					}
				}]
		  }
   
	}
});


//chart 2
var ctx1 = document.getElementById('myChart').getContext('2d');

var left_pay_linked = '<?php echo $left_pay_linked; ?>';
var left_pay =  left_pay_linked.split(',');
var left_pay_median = left_pay[0] - left_pay[20];
var left_pay_max = Math.max.apply(Math, left_pay);
var left_pay_max_val = left_pay_max + left_pay_median;
var left_pay_min = Math.min.apply(Math, left_pay);
$kk=[];
for($l=1 ;$l<=left_pay.length;$l++) {

	$kk[$l] = $l;
}
var chart1 = new Chart(ctx1, {
    // The type of chart we want to create
	
    type: 'line',
	
    // The data for our dataset
    data: {
	
        labels: $kk,
        datasets: [{
		    label: 'גרף',
            backgroundColor: 'transparent',
            borderColor: '#bab807',
            data: left_pay
        }]
		
    },

    // Configuration options go here
    options: {
	       elements: {
				line: {
					tension: 0.000001
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						max: left_pay_max_val,
						min: 0,
						stepSize: left_pay_median
					}
				}]
		  }
   
	}
});

//chart 3
var ctx2 = document.getElementById('myChart2').getContext('2d');

var prime_array = '<?php echo $prime_arr; ?>';
var prime =  prime_array.split(',');
var prime_median = prime[0] - prime[20];
var prime_max = Math.max.apply(Math, prime);
var prime_max_val = prime_max + prime_median;
var prime_min = Math.min.apply(Math, prime);
$primek=[];
for($l=1 ;$l<=prime.length;$l++) {

	$primek[$l] = $l;
}
var chart2 = new Chart(ctx2, {
    // The type of chart we want to create
	
    type: 'line',
	
    // The data for our dataset
    data: {
	
        labels: $primek,
        datasets: [{
		    label: 'גרף',
            backgroundColor: 'transparent',
            borderColor: '#bab807',
            data: prime
        }]
		
    },

    // Configuration options go here
    options: {
	       elements: {
				line: {
					tension: 0.000001
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						max: prime_max,
						min: 0,
						stepSize: 0.1
					}
				}]
		  }
   
	}
});


//chart 4
var ctx3 = document.getElementById('myChart3').getContext('2d');

var madad_array = '<?php echo $madad_arr; ?>';
var madad =  madad_array.split(',');
var madad_median = madad[0] - madad[20];
var madad_max = Math.max.apply(Math, madad);
var madad_max_val = madad_max + madad_median;
var madad_min = Math.min.apply(Math, madad);
$madadk=[];
for($l=1 ;$l<=madad.length;$l++) {

	$madadk[$l] = $l;
}


var chart3 = new Chart(ctx3, {
    // The type of chart we want to create
	
    type: 'line',
	
    // The data for our dataset
    data: {
	
        labels: $madadk,
        datasets: [{
		    label: 'גרף',
            backgroundColor: 'transparent',
            borderColor: '#bab807',
            data: madad
        }]
		
    },

    // Configuration options go here
    options: {
	       elements: {
				line: {
					tension: 0.000001
				}
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						max:madad_max_val,
						min: 0,
						stepSize: 0.1
					}
				}]
		  }
   
	}
});


//chart 4
var ctx4 = document.getElementById('myChart4').getContext('2d');
var chart4 = new Chart(ctx4, {
    // The type of chart we want to create
    type: 'doughnut',
	

    // The data for our dataset
    data: {
        
        datasets: [{
            data: [0 , 25, 10, 40],
			backgroundColor: ['#66d495', '#d5b061', '#8290d0', '#96cfd6'],
			borderWidth: 0,
			
        }],

    },
    // Configuration options go here
   options: {
			cutoutPercentage: 70,
	}
	
});

// BY KAREN GRIGORYAN

$(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD

  /*************************************
    LEFT MENU SMOOTH SCROLL ANIMATION
   *************************************/
  // declare variable
  var h1 = $("#h1").position();
  var h2 = $("#h2").position();
  var h3 = $("#h3").position();

  $('.link1').click(function() {
    $('html, body').animate({
      scrollTop: h1.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link2').click(function() {
    $('html, body').animate({
      scrollTop: h2.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link3').click(function() {
    $('html, body').animate({
      scrollTop: h3.top
    }, 500);
    return false;

  }); // left menu link3 click() scroll END

}); // ready() END

$('#exTab2 ul li').click(function(){
   $('.tab-content').removeClass('full-show');
});

$('.header-area ul li').click(function(){
   $('.tab-content').removeClass('full-show');
});
$('.header-area ul :nth-child(2)').click(function(){
   $('.tab-content').addClass('full-show');
});
$('#exTab2 ul .clsoe').click(function(){
   $('#exTab2').removeClass('show');
});



 </script>  
 

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script src="{{ URL::asset('js/jquery.ui.slider-rtl.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('js/validate.js') }}"></script>
<script src="{{ URL::asset('admin_new/js/custom.js') }}"></script>
</body>

</html>