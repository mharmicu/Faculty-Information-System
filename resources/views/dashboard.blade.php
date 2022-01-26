<x-app-layout>
    
<!Doctype HTML>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
<style>

body{
	margin:0px;
	padding: 0px;
	background-color:#1b203d;
	font-family: system-ui;
}
.clearfix{
	clear: both;
}
.logo{
	margin: 0px;
	margin-left: 28px;
    font-weight: bold;
    color: white;
    margin-bottom: 30px;
}
.logo span{
	color: #f7403b;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 50px;
}
.head{
	padding:20px;
}
.col-div-6{
	width: 50%;
	float: left;
}
.profile{
	display: inline-block;
	float: right;
	width: 160px;
}
.pro-img{
	float: left;
	width: 40px;
	margin-top: 5px;
}
.profile p{
	color: white;
	font-weight: 500;
	margin-left: 55px;
	margin-top: 10px;
	font-size: 13.5px;
}
.profile p span{
	font-weight: 400;
    font-size: 12px;
    display: block;
    color: #8e8b8b;
}
.col-div-3{
	width: 25%;
	float: left;
}
.box{
	width: 85%;
	height: 100px;
	background-color: #272c4a;
	margin-left: 10px;
	padding:10px;
}
.box p{
	 font-size: 35px;
    color: white;
    font-weight: bold;
    line-height: 30px;
    padding-left: 10px;
    margin-top: 20px;
    display: inline-block;
}
.box p span{
	font-size: 20px;
	font-weight: 400;
	color: #FBDB0C	;
}
.box-icon{
	font-size: 40px!important;
    float: right;
    margin-top: 35px!important;
    color: #818181;
    padding-right: 10px;
}
.col-div-8{
	width: 70%;
	float: left;
}
.col-div-4{
	width: 30%;
	float: left;
}
.content-box{
	padding: 20px;
}
.content-box p{
	margin: 0px;
    font-size: 20px;
    color: #FBDB0C	;
}
.content-box p span{
	float: right;
    background-color: #ddd;
    padding: 3px 10px;
    font-size: 15px;
    color: #000	;
}
.box-8, .box-4{
	width: 95%;
	background-color: #272c4a;
	height: 330px;
	
}
.nav2{
	display: none;
}

.box-8{
	margin-left: 10px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}
td, th {
  text-align: left;
  padding:15px;
  color: #ddd;
  border-bottom: 1px solid #81818140;
}
.circle-wrap {
  margin: 50px auto;
  width: 150px;
  height: 150px;
  background: #e6e2e7;
  border-radius: 50%;
}
.circle-wrap .circle .mask,
.circle-wrap .circle .fill {
  width: 150px;
  height: 150px;
  position: absolute;
  border-radius: 50%;
}
.circle-wrap .circle .mask {
  clip: rect(0px, 150px, 150px, 75px);
}

.circle-wrap .circle .mask .fill {
  clip: rect(0px, 75px, 150px, 0px);
  background-color: #f7403b;
}
.circle-wrap .circle .mask.full,
.circle-wrap .circle .fill {
  animation: fill ease-in-out 3s;
  transform: rotate(126deg);
}

@keyframes fill {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(126deg);
  }
}
.circle-wrap .inside-circle {
  width: 130px;
  height: 130px;
  border-radius: 50%;
  background: #fff;
  line-height: 130px;
  text-align: center;
  margin-top: 10px;
  margin-left: 10px;
  position: absolute;
  z-index: 100;
  font-weight: 700;
  font-size: 2em;
}
.container {
  margin: 10px;
  color: white;
  padding: auto;
}

.heading {
  font-size: 60px;
  color: #FBDB0C;
}

.heading span {
  font-style: italic;
  font-size: 30px;
}

.profiles {
  display: flex;
  justify-content: space-around;
  margin: 5px;
  padding: 5px;
}

.profile {
  flex-basis: 260px;
}

.profile .profile-img {
  height: 200px;
  width: 200px;
  border-radius: 50%;
  cursor: pointer;
  transition: 400ms;
}

.user-name {
  margin-top: 30px;
  font-size: 35px;
}

.profile h3 {
  font-size: 20px;
  font-weight: 100;
  letter-spacing: 1px;
  color: #ccc;
  float:left;
}
.footer {
  width: 100%;
  text-align: center;
  background: #444444;
  padding: 20px 0;
}
.footer a {
  color: #fff;
}


.event-container {
  font-family: "Roboto", sans-serif;
  max-width: 900px;
  margin: 25px;
  
}

.event-container h3.year {
  font-size: 40px;
  text-align: center;
  border-bottom: 1px solid #b1b1b1;
}

.event-container .event {
  box-shadow: 0 4px 16px -8px rgba(0, 0, 0, 0.4);
  display: flex;
  border-radius: 8px;
  margin: 32px 0;
}

.event .event-left {
  background: #222;
  min-width: 82px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #eee;
  padding: 8px 48px;
  font-weight: bold;
  text-align: center;
  border-radius: 8px 0 0 8px;
}

.event .event-left .date {
  font-size: 56px;
}

.event .event-left .month {
  font-size: 16px;
  font-weight: normal;
}

.event .event-right {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 0 24px;
}

.event .event-right h3.event-title {
  font-size: 24px;
  margin: 24px 0 10px 0;
  color: #FBDB0C;
  text-transform: uppercase;
}

.event .event-right .event-timing {
  background: #fff8ba;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100px;
  padding: 8px;
  border-radius: 16px;
  margin: 24px 0;
  font-size: 14px;
}

.event .event-right .event-timing img {
  height: 20px;
  padding-right: 8px;
}

.event .event-right .event-description {
  color: white;
}

@media (max-width: 550px) {
  .event {
    flex-direction: column;
  }

  .event .event-left {
    padding: 0;
    border-radius: 8px 8px 0 0;
  }

  .event .event-left .event-date .date,
  .event .event-left .event-date .month {
    display: inline-block;
    font-size: 24px;
  }

  .event .event-left .event-date {
    padding: 10px 0;
  }
}

.container1{
  max-width: 950px;
  position: absolute;
  left: 550px;
  padding: 10px;
  margin-left:400px;
}

.txtb{
  width: 100%;
  border: none;
  border-bottom: 2px solid #000;
  background: none;
  padding: 10px;
  outline: none;
  font-size: 18px;
  color:white;
}

h3{
  margin: 10px 0;
  color:  #FBDB0C;
}

.task{
  width: 100%;
  background: rgba(255,255,255,0.5);
  padding: 18px;
  margin: 6px 0;
  overflow: hidden;
}

.task i{
  float: right;
  margin-left: 20px;
  cursor: pointer;
}

.comp .task{
  background: rgba(0,0,0,.5);
  color: white;
}


</style>
  </head>

<body>

<div class="event-container">

<div class="container1">
      <input type="text" class="txtb" placeholder="Add a task">
      <div class="notcomp">
        <h3>Not Completed</h3>

      </div>

      <div class="comp">
        <h3>Completed</h3>
      </div>
    </div> 

    <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">9</div>
            <div class="month">October</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">No Onsite Transactions Every Weekend</h3>

          <div class="event-description">
          F.I.S. Quezon City and F.I.S. Manila shall no longer entertain onsite transactions EVERY SATURDAY.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">11</div>
            <div class="month">October</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Academic Breather</h3>

          <div class="event-description">
          There's no synchronous classes and asynchronous activities. <br>
          Academic Breather shall motivate you, 
          fill you with positivity and renewed energy for the school days ahead.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">13</div>
            <div class="month">October</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Final Examination</h3>

          <div class="event-description">
          REMINDER: Final Exams for Modular Group 1, 1st Semester SY 2021-2022
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:30 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">15</div>
            <div class="month">October</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Thanksgiving Mass SY 2021-2022</h3>

          <div class="event-description">
          Everyone is encouraged to partake in the mass by watching the live broadcast on FIS’s official Facebook page.

          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div>
    </div>
   


<div id="main">
	<div class="head">
		<div class="col-div-6">
</div>
	<div class="col-div-6">
	<div class="profile">
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
	
	<div class="col-div-3">
		<div class="box">
			<p>67<br/><span>Projects</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>88<br/><span>Announcement</span></p>
			<i class="fa fa-list box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>99<br/><span>Inbox</span></p>
			<i class="fa fa-inbox box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>78<br/><span>Tasks</span></p>
			<i class="fa fa-tasks box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Schedule <span>See All</span></p>
			<br/>
			<table>
  <tr>
    <th>Section</th>
    <th>Day</th>
    <th>Time</th>
  </tr>
  <tr>
    <td>IS31S1</td>
    <td>Monday</td>
    <td>8:30am - 11:30am</td>
  </tr>
  <tr>
    <td>IT31S2</td>
    <td>Monday</td>
    <td>1:30pm to 3:30pm </td>
  </tr>
  <tr>
    <td>IT31S1</td>
    <td>Wednesday</td>
    <td>12:30pm - 4:30pm</td>
  </tr>
  <tr>
    <td>IS31S3</td>
    <td>Thursday</td>
    <td>8:30am - 1:30pm</td>
  </tr>
  
  
</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Attendance <span>See All</span></p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>

<div class="container">
    <h1 class="heading">Our Team</h1>

    <div class="profiles">
      <div class="profile">
      <img src="images/poy.jpg" class="profile-img">
        <h3 class="user-name">Froilan Jesus Zaguirre</h3>
      </div>
      <div class="profile">
        <img src="images/april.jpg" class="profile-img">
        <h3 class="user-name">&nbsp; &nbsp;April Mae Estoesta</h3>
      </div>
      <div class="profile">
      <img src="images/steg.jpg" class="profile-img">
        <h3 class="user-name"> &nbsp; &nbsp; &nbsp; Vincent Aban</h3>
      </div>
      <div class="profile">
        <img src="images/mhar.jpg" class="profile-img">
        <h3 class="user-name">Mhar Vincent Enriquez</h3>
      </div>
      <div class="profile">
        <img src="images/siti.jpg" class="profile-img">
        <h3 class="user-name">&nbsp; &nbsp;Sittie Asmah Manali</h3>
      </div>
      
    </div>
  </div>
  
  <script type="text/javascript">
      $(".txtb").on("keyup",function(e){
        //13  means enter button
        if(e.keyCode == 13 && $(".txtb").val() != "")
        {
          var task = $("<div class='task'></div>").text($(".txtb").val());
          var del = $("<i class='fas fa-trash-alt'></i>").click(function(){
            var p = $(this).parent();
            p.fadeOut(function(){
              p.remove();
            });
          });

          var check = $("<i class='fas fa-check'></i>").click(function(){
            var p = $(this).parent();
            p.fadeOut(function(){
              $(".comp").append(p);
              p.fadeIn();
            });
            $(this).remove();
          });

          task.append(del,check);
          $(".notcomp").append(task);
            //to clear the input
          $(".txtb").val("");
        }
      });
    </script>

</body>
</x-app-layout>
