<?php
	include 'healthnewsapi.php';
	include 'businessnewsapi.php';
	include 'latestnewsapi.php';
	include 'hackathonapi.php';
	include 'newsapi.php';
	include 'ted.php';
 include 'hackathonapi.php';
?>


<!DOCTYPE html>
<html lang="en" class="js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-param" content="authenticity_token" />
		<meta name="csrf-token" content="QeHxEbJWoHtG/40j7Y0NwS6bc/9XmVj10fAZEmwAZywbLI/h3GaS7dWajJ7hzmWWAjL1Q43Yw1KQ1d7zc3uAiA==" />
		<style id="user-css-output" type="text/css"></style>
		<title>I3@FriendBot</title>
		<link rel="stylesheet" href="css/news.css">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/facultycard.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/conversation.css" />
		<link rel="stylesheet" type="text/css" href="css/hack.css" />
		<link rel="stylesheet" type="text/css" href="css/loader.css" />
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link href="css/widgets.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
		<script src="js/modernizr-custom.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
		<script src="js/facultycard.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
		<script src="js/hackathon.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.min.js"></script>
		<script src="js/grid.js"></script>
		<script src="js/qrcode.js"></script>
		<script src="js/flip.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/2.0.1/normalize.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
		<!-- script for internet connection check -->
		<script>
		var _0xe65d=["\x6F\x6E\x4C\x69\x6E\x65","\x4E\x6F\x74\x20\x43\x6F\x6E\x6E\x65\x63\x74\x65\x64\x20\x74\x6F\x20\x49\x6E\x74\x65\x72\x6E\x65\x74\x21",
		"\x4E\x6F\x74\x65\x3A\x20\x50\x6C\x65\x61\x73\x65\x20\x63\x68\x65\x63\x6B\x20\x79\x6F\x75\x72\x20\x69\x6E\x74\x65\x72\x6E\x65\x74\x20\x63\x6F\x6E\x6E\x65\x63\x74\x69\x6F\x6E\x20\x61\x6E\x64\x20\x74\x72\x79\x20\x61\x67\x61\x69\x6E","\x77\x61\x72\x6E\x69\x6E\x67"];var _0xbc55=[_0xe65d[0],_0xe65d[1],_0xe65d[2],_0xe65d[3]];setInterval(function(){if(!navigator[_0xbc55[0]]){swal({title:_0xbc55[1],text:_0xbc55[2],icon:_0xbc55[3],dangerMode:true})}},1000)
		</script>
		<script type="text/javascript">
		navigator.mediaDevices.getUserMedia({ audio: true })
		.then(function(stream) {
		//swal("please dont block your microphone");

		})
		.catch(function(err) {
		swal('No mic for you!')
		});

		function  introduction2(){

		const Toast = Swal.mixin({
		toast: true,
		position: 'top-end',
		showConfirmButton: false,
		timer: 3000
		});

		Toast.fire({
		type: 'success',
		title: 'loaded successfully'
		})
		window.onload = showbustime();
		}
		</script>
		<script>
		$.ajax({
						url:"https://api.nasa.gov/planetary/apod?api_key=3jonq2nq8g2kTAldk5U4qjSyjWDfotiW1e7Wl8kV", //the page containing php script
						type: "get", //request type,
						//data: ({'message':transcript,}),
						success:function(obj){
						//	setTimeout(200);
						//obj = JSON.parse(obj);
						var image = (obj.url);
						var text = (obj.explanation);
						var title = (obj.title);
						console.log(obj);
							document.getElementById('img5').src=image;
							document.getElementById('caption5').innerHTML = title;
							document.getElementById('text').innerHTML = text;
					}
					});
		</script>
		<script>
			  var d = new Date();
			  var weekday = new Array(7);
			  weekday[0] = "Sunday";
			  weekday[1] = "Monday";
			  weekday[2] = "Tuesday";
			  weekday[3] = "Wednesday";
			  weekday[4] = "Thursday";
			  weekday[5] = "Friday";
			  weekday[6] = "Saturday";

			  var n = weekday[d.getDay()];
			  document.getElementById("day").innerHTML = n;
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"> </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	</head>
	<body  onload="introduction2();">

<!-- navigation -->
		<nav  class="pages-nav">
			<div datatr data-step="3" data-intro="" class="pages-nav__item"><a  style="font-size: 15px; color: #808080;" class="link link--page" href="#page-home">Home</a></div>
			<div data-step="4" data-intro="" class="pages-nav__item"><a style="font-size: 15px; color: #808080;" class="link link--page" href="#page-docu">NEWS</a></div>
			<div data-step="5" data-intro="" class="pages-nav__item"><a style="font-size: 15px; color: #808080;" class="link link--page" href="#page-manuals">HACKATHON</a></div>
			<div data-step="6" data-intro="" class="pages-nav__item"><a style="font-size: 15px; color: #808080;" class="link link--page" href="#page-software">TEDTALKS</a></div>
			<div data-step="7" data-intro="" class="pages-nav__item"><a style="font-size: 15px; color: #808080;" class="link link--page" href="#page-custom">COLLEGE EVENTS</a></div>
			<div data-step="8" data-intro="" class="pages-nav__item"><a style="font-size: 15px; color: #808080;" class="link link--page" href="#page-training">Inetrships</a></div>
			<div data-step="9" data-intro="" class="pages-nav__item pages-nav__item--small"><a style="color: #808080;" class="link link--page link--faded" href="#page-contact">Contact</a></div>
			<div class="pages-nav__item pages-nav__item--social">
				<a class="link link--social link--faded" href="#"><i class="fab fa-twitter"></i><span class="text-hidden">Twitter</span></a>
				<a class="link link--social link--faded" href="#"><i class="fab fa-linkedin"></i></i><span class="text-hidden">LinkedIn</span></a>
				<a class="link link--social link--faded" href="#"><i class="fab fa-facebook-square"></i>
				</i><span class="text-hidden">Facebook</span></a>
				<a class="link link--social link--faded" href="#"><i class="fab fa-youtube"></i>
				<span class="text-hidden">YouTube</span></a>
			</div>
		</nav>
		<!-- /navigation-->
		<!-- pages stack -->
		<div class="pages-stack">
		<!-- page -->

		<div class="page" id="page-home" style="background-color:#50C878">
			<div class="row" style=" width: 95%; margin-left: 4%; background-color: transparent;">
				<header class="bp-header cf" style="margin:1%; margin-left: 3%; margin-top: 5%; padding:1%; float: left; height: 8%;">
					<h1 style="color: white;" class="bp-header__title">I3@FriendBot</h1>
					<p  class="bp-header__desc" style="color: white;">Maintain and Develope by <a href="#">Garvit solanki & Himanshu Tak</a></p>
				</header>

				<div  class="main-info blurred-box" style="margin: 1%; height: 20%; width: 33%; background-color: black;box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);background: #151515;">
					<div class="weather-top d-flex justify-content-between">
						<div class="weather-grids-w3-agile" style="margin-top: 5%;">

							<h3 style="font-family: 'Montserrat'; margin-top: 5%;", sans-serif; >WEATHER</h3>
						</div>
						<div style="" class="weather-grids-w3-agile weather-mdl">
							<canvas style="margin-left: 30%; margin-top: 15%;font-size:60px;" id="clear-day"></canvas>
						</div>
						<div class="weather-grids-w3-agile">
							<h4>Max 30°</h4>
							<h3>21°C</h3>
							<h4>Min 10°</h4>
						</div>
					</div>
				</div>
		<div class="" style="float: right; height: 8%; width: 33%;  margin:1%; background-color: inherit; border: 2px red;">


      <div class="row" style="background-color: black;">
        <div class="col-md-5" style="margin: 0px;">
            <img style="width:100%; height: 100%;" id="img5" class="w-100">
          </div>
          <div class="col-md-5 px-3" style="background-color: white;">
            <div class="card-block px-3">
              <h4  class="card-title" id="caption5"></h4>
              <p class="card-text" id="text" style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;"></p>
              <button style="margin-top:25%;" href="#" class="btn btn-primary btn-block" onclick="shownasa();">Read More</button>
            </div>
          </div>


        </div>
  </div>
  	</div>

			<div class="row"  style="width: 98%;margin: 1%;display: flex; height:66%;">
				<div  class="card" id="conversationdiv" style="width:40%; float: left; height: 100%;  margin-top: 2%; bottom: 5%; background-color: white;" >
											<div data-step="1" data-intro="This is the Charbot interface where you can chat with your assistant." class="card-body msg_card_body" id="div1">
											 <!-- dynamiclly creating massage card when converstion trigger -->

											</div>
												<div class="card-footer" style="background-color:white;">
													<div class="input-group">

														<button  id="record-btn" class="sendbtn"><i class="fas fa-microphone" id="micicon"></i></button>

													</div>
												</div>
				</div>
			<script src="js/chatbot.js"></script>


				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 100%; width:35%; ">
		<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

				<!-- Wrapper for slides -->
					<div class="carousel-inner" style="height: 100%;">
						<div class="item active">
							<div class="col-md-8" style="height: 95%; margin-left:18%;" onclick="" data-toggle="modal" data-target="#myModal">
								<div class="panel panel-primary" style="height: 90%">
									<img class="card-img-top" style="width:100%; height: 100%; border-radius: 0px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl44YLCL9e8Dmz0tP6rXuhQeHJkoeqt4Rpbfbpqfk8ZZE2vkvDJw" alt="Card image cap">
									<div class="card-body ">
										<a style="font-weight:bold; font-size:15px;" class="card-title" id="title'.$i.'">Tax2Win hunt for PHP</a>
									</div>
								</div>
							</div>
							<div class="col-md-8" style="height: 90%; margin-left:18%;" onclick="" data-toggle="modal" data-target="#myModal">
								<div class="panel panel-primary" style="height: 90%">
									<img class="card-img-top" style="width:100%; height: 100%; border-radius: 0px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl44YLCL9e8Dmz0tP6rXuhQeHJkoeqt4Rpbfbpqfk8ZZE2vkvDJw" alt="Card image cap">
									<div class="card-body ">
										<a style="font-weight:bold; font-size:15px;" class="card-title" id="title'.$i.'">Tax2Win hunt for PHP</a>
									</div>
								</div>
							</div>
				</div>

				<div class="item">
					<div class="col-md-8" style="height: 95%; margin-left:18%;" onclick="" data-toggle="modal" data-target="#myModal">
						<div class="panel panel-primary" style="height: 90%">
							<img class="card-img-top" style="width:100%; height: 100%; border-radius: 0px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl44YLCL9e8Dmz0tP6rXuhQeHJkoeqt4Rpbfbpqfk8ZZE2vkvDJw" alt="Card image cap">
							<div class="card-body ">
								<a style="font-weight:bold; font-size:15px;" class="card-title" id="title'.$i.'">Tax2Win hunt for PHP</a>
							</div>
						</div>
					</div>
					<div class="col-md-8" style="height: 95%; margin-left:18%;" onclick="" data-toggle="modal" data-target="#myModal">
						<div class="panel panel-primary" style="height: 90%">
							<img class="card-img-top" style="width:100%; height: 100%; border-radius: 0px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl44YLCL9e8Dmz0tP6rXuhQeHJkoeqt4Rpbfbpqfk8ZZE2vkvDJw" alt="Card image cap">
							<div class="card-body ">
								<a style="font-weight:bold; font-size:15px;" class="card-title" id="title'.$i.'">Tax2Win hunt for PHP</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="col-md-8" style="height: 95%; margin-left:18%;" onclick="" data-toggle="modal" data-target="#myModal">
						<div class="panel panel-primary" style="height: 90%">
							<img class="card-img-top" style="width:100%; height: 100%; border-radius: 0px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl44YLCL9e8Dmz0tP6rXuhQeHJkoeqt4Rpbfbpqfk8ZZE2vkvDJw" alt="Card image cap">
							<div class="card-body ">
								<a style="font-weight:bold; font-size:15px;" class="card-title" id="title'.$i.'">Tax2Win hunt for PHP</a>
							</div>
						</div>
					</div>
					<div class="col-md-8" style="height: 95%; margin-left:18%;" onclick="" data-toggle="modal" data-target="#myModal">
						<div class="panel panel-primary" style="height: 90%">
							<img class="card-img-top" style="width:100%; height: 100%; border-radius: 0px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl44YLCL9e8Dmz0tP6rXuhQeHJkoeqt4Rpbfbpqfk8ZZE2vkvDJw" alt="Card image cap">
							<div class="card-body ">
								<a style="font-weight:bold; font-size:15px;" class="card-title" id="title'.$i.'">Tax2Win hunt for PHP</a>
							</div>
						</div>
					</div>
				</div>

		<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
	</div>
	<div class="row" style="width: 17%; margin-left: 1%;">
			<div class='calendar' style="margin-bottom: 0px;">
  <div class='day'></div>
  <div class='month'>
    <div class='month-name'></div>
  </div>
  <div class='number'></div>
</div>
<div class='contain' style="margin-top: 0px; padding:0px;">
  <div class='caltwo'>
    <div class='daytwo'></div>
    <div class='monthtwo'></div>
    <div class='numtwo'></div>
  </div>
  <div class='clock'>
    <div class='hour time'></div>
    <div class='min time'></div>
    <div class='sec time'></div>
  </div>
</div>
</div>
			</div>

		<!-- Weather-skycons-icons -->
				<script src="js/skycons.js"></script>
			<script>
				$(document).ready(function(){
				$('.flipper').click(function() {
				$(this).toggleClass('flip');
				});
				});
				</script>
				<script>
				var icons = new Skycons({
				"color": "#FFD700"
				}),
				list = [
				"clear-day"
				],
				i;

				for (i = list.length; i--;)
				icons.set(list[i], list[i]);

				icons.play();
				</script>
				<script>
				var icons = new Skycons({
				"color": "#f5f5f5"
				}),
				list = [
				"clear-night", "partly-cloudy-day",
				"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
				"fog"
				],
				i;

				for (i = list.length; i--;)
				icons.set(list[i], list[i]);

				icons.play();
			</script>
		<!--// Weather-skycons-icons -->


				</div>
		<!-- /page -->
		<!-- news section -->
			<div class="page" id="page-docu">
				<div class="tabbed">
					<input type="radio" name="tabs" id="tab-nav-1" checked>
					<label for="tab-nav-1">Latest</label>
					<input type="radio" name="tabs" id="tab-nav-2">
					<label for="tab-nav-2">business</label>
					<input type="radio" name="tabs" id="tab-nav-3">
					<label for="tab-nav-3">Start-ups</label>
					<input type="radio" name="tabs" id="tab-nav-4">
					<label for="tab-nav-4">Health</label>

					<div class="tabs">
						<div style="overflow: auto; height: 90%;">
							<div style="display: wrap; background-color: white; overflow: auto; height:100%;"  >
									<?php
										$result = $result5['articles'];
										$i=1;
										foreach($result as $article)
											{
												//echo $article['title'];
												echo '
													<!-- news card -->
													<div class="col-lg-4 col-md-6 col-sm-12" style="height:270px; min-width:210px; max-width:210px; min-height:270px; max-height:270px; padding:0%; box-shadow: 1px 1px 2px 1px #888888; border-radius:10px; text-align:center; margin: 3%; margin-top:25px; margin-bottom:1px; background-color:white;">
														<img class="card-img-top" width="100%" style="left:30% position:absolute; height:60%;border-radius: 5px;" src="'.$article['urlToImage'].'" alt="Card image cap">
														<p class="card-title" style="margin:0.5rem; font-family: Raleway;font-size:15px;" id="title'.$i.'"> '.$article['title'].'  </p>
														<button class="btn btn-primary " style="left:35%; position: absolute; bottom:5px;" onclick=" getnewscontent(\''.$article['title'].'\',\''.$article['url'].'\');" data-toggle= "modal" data-target= "#myModal1" > SCAN ME </button>
													</div>';

													$i++;
													if ($i == 30) break;
												}
									?>
								</div>
							</div>
							<div style="overflow: auto; height: 90%;">
								<div style="display: wrap; background-color: white; overflow: auto; height:100%;" ><?php
								$result = $result2['articles'];
								$i=1;
								foreach($result as $article)
								{
									//echo $article['title'];
									echo '
									<!-- news card -->
									<div class="col-lg-4 col-md-6 col-sm-12" style="height:270px; min-width:210px; max-width:210px; min-height:270px; max-height:270px; padding:0%; box-shadow: 1px 1px 2px 1px #888888; border-radius:10px; text-align:center; margin: 3%; margin-top:25px; margin-bottom:1px; background-color:white;">
									<img class="card-img-top" width="100%" style="left:30% position:absolute; height:60%;border-radius: 5px;" src="'.$article['urlToImage'].'" alt="Card image cap">
									<p class="card-title" style="margin:0.5rem; font-family: Raleway;font-size:15px;" id="title'.$i.'"> '.$article['title'].'  </p>
									<button class="btn btn-primary " style="left:35%; position: absolute; bottom:5px;" onclick=" getnewscontent(\''.$article['title'].'\',\''.$article['url'].'\');" data-toggle= "modal" data-target= "#myModal1" > SCAN ME </button>
									</div>';
									$i++;
									if ($i == 30) break;
								}
								?>
							</div>
						</div>
						<div style="overflow: auto; height: 90%;">
							<div style="display: wrap; background-color: white; overflow: auto; height:100%;" ><?php
								$result = $result4['articles'];
								$i=1;
								foreach($result as $article)
								{
									//echo $article['title'];
									echo '
									<!-- news card -->
									<div class="col-lg-4 col-md-6 col-sm-12" style="height:270px; min-width:210px; max-width:210px; min-height:270px; max-height:270px; padding:0%; box-shadow: 1px 1px 2px 1px #888888; border-radius:10px; text-align:center; margin: 3%; margin-top:25px; margin-bottom:1px; background-color:white;">
									<img class="card-img-top" width="100%" style="left:30% position:absolute; height:60%;border-radius: 5px;" src="'.$article['urlToImage'].'" alt="Card image cap">
									<p class="card-title" style="margin:0.5rem; font-family: Raleway;font-size:15px;" id="title'.$i.'"> '.$article['title'].'  </p>
									<button class="btn btn-primary " style="left:35%; position: absolute; bottom:5px;" onclick=" getnewscontent(\''.$article['title'].'\',\''.$article['url'].'\');" data-toggle= "modal" data-target= "#myModal1" > SCAN ME </button>
									</div>';
									$i++;
									if ($i == 30) break;
								}
								?>
					</div>
				</div>
				<div style="overflow: auto; height: 90%;">
					<div style="display: wrap; background-color: white; overflow: auto; height:100%;" ><?php
					$result = $result3['articles'];
					$i=1;
					foreach($result as $article)
					{
		//echo $article['title'];
						echo '
						<!-- news card -->
						<div class="col-lg-4 col-md-6 col-sm-12" style="height:270px; min-width:210px; max-width:210px; min-height:270px; max-height:270px; padding:0%; box-shadow: 1px 1px 2px 1px #888888; border-radius:10px; text-align:center; margin: 3%; margin-top:25px; margin-bottom:1px; background-color:white;">
						<img class="card-img-top" width="100%" style="left:30% position:absolute; height:60%;border-radius: 5px;" src="'.$article['urlToImage'].'" alt="Card image cap">
						<p class="card-title" style="margin:0.5rem; font-family: Raleway;font-size:15px;" id="title'.$i.'"> '.$article['title'].'  </p>
						<button class="btn btn-primary " style="left:35%; position: absolute; bottom:5px;" onclick=" getnewscontent(\''.$article['title'].'\',\''.$article['url'].'\');" data-toggle= "modal" data-target= "#myModal1" > SCAN ME </button>
						</div>';
						$i++;
						if ($i == 30) break;
					}
					?>
				</div>
			</div>
			</div>
			</div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
			</div>
			<!-- /news section -->
			<script type="text/javascript">
			function viewqrcode(url)
				{
					var qrcode = new QRCode(document.getElementById("qrcode"),url);
					var images = document.getElementById("qrcode");
					console.log(images);
					images.classList.add("img-thumbnail");
					images.classList.add("img-responsive");
					var screenwidth = window.screen.width;
					if(screenwidth<1025)
						{
							images.width = 300;
							images.height = 300;
						}
					};
			</script>

			<div  class="page" id="page-manuals">

				<div class="row" style="background-color: #F5F5F5; height: 92%; width: 96%; margin: 3%; display: wrap;">
<?php

					for($i=0; $i<8; $i++){
						print_r('
						<div class="flip" style="margin:2%;">
						<div class="front">
							<img style=" width: 299px; height: 150px; border-radius: 3px;" src="'.$hack_list[$i]['image_link'].'" alt="" />
							<h3 style="" class="text">'.$hack_list[$i]['title_hack'].'</h3>
							<button style="font-size: 17px;  padding: 10px 20px; bottom: 4px; margin-left: 4px; position: absolute;   font-weight: bold; color: #fff; background: linear-gradient(to bottom right, #B05574, #F87E7B); border-radius: 2px;"  class="btn btn-danger new" href="#" data-target="#myModal1" data-toggle="modal" onclick="gethackathon(\''.$hack_list[$i]['link_hack'].'\');">Register</button>
							<div style="height: auto; width: 50%; position: absolute; bottom: 3px; margin-left: 50%; " class="card-footer " >More Info<i style="margin: 5px;" class="fas fa-arrow-right"></i></div>
						</div>
						<div  class="back">
							<div class="card-footer" ><i style="margin: 5px;" class="fas fa-arrow-left"></i>Back</div>
							<div style="height: 290px; width: 290px; position: absolute; margin-left: 20px;">
								<div> Host by '.$hack_list[$i]['company_name'].' </div>
							</div>
						</div>
					</div>');
				}
					?>
				</div>

			</div>
			<div style="background-color: white; display: flex;" class="page" id="page-software">
		<!-- Swiper -->
			<div class="swiper-container" style="margin-top:6%;">
				<div class="swiper-wrapper" style="display:flex; height:50%;" >
					<?php
						$data = $response2;
						for($i=0; $i<90; $i++)
							{
								print_r('<div class="swiper-slide" style="height:130%; width:100%; border-radius:10px;  box-shadow: 1px 1px 2px 1px #888888;">
												<img class="card-img-top" src="'.$data['rows'][$i]['doc']['videos']['image_link'].'" style="width:100%; height:65%;">
												<div class="card-body">
												<h4 class="card-title">'.$data['rows'][$i]['doc']['videos']['speaker_name'].'</h4>
												<p class="card-text">'.$data['rows'][$i]['doc']['videos']['video_name'].'</p>
												<a href="#" class="btn btn-primary"  style="bottom: 20px; position:absolute; background: linear-gradient(to bottom right, #B05574, #F87E7B); margin-left:36%;" onclick=" gethackathon(\''.$data['rows'][$i]['doc']['videos']['video_id'].'\');" data-toggle= "modal" data-target= "#myModal1">Watch Now</a>
												</div>
												</div>');
									$i++;
							}
							?>
				</div>
		<!-- Add Pagination -->
			<div class="swiper-pagination"></div>


			</div>


		<!-- Initialize Swiper -->
			<script>
					var swiper = new Swiper('.swiper-container', {
					effect: 'coverflow',
					grabCursor: true,
					centeredSlides: true,
					slidesPerView: 3,
					spaceBetween: 100,
					coverflowEffect: {
					rotate: 50,
					stretch: 50  ,
					depth: 100,
					modifier: 1,
					slideShadows : true,
					},
					pagination: {
					el: '.swiper-pagination',
					clickable: true,
					},
					});
			</script>
		</div>
			<div class="page" id="page-custom">
				<img class="poster" src="https://activerain.com/image_store/uploads/agents/cacleland/files/coming%20soon.jpg" alt="img06" />

			</div>
			<div class="page" id="page-training">
				<img class="poster" src="https://activerain.com/image_store/uploads/agents/cacleland/files/coming%20soon.jpg" alt="img06" />
			</div>
			<div class="page" id="page-buy">
				<img class="poster" src="https://activerain.com/image_store/uploads/agents/cacleland/files/coming%20soon.jpg" alt="img06" />
			</div>
		<div class="page" id="page-blog">
			<img class="poster" src="https://activerain.com/image_store/uploads/agents/cacleland/files/coming%20soon.jpg" alt="img01" />
		</div>
		<div class="page" id="page-contact">
			<img class="poster" src="https://activerain.com/image_store/uploads/agents/cacleland/files/coming%20soon.jpg" alt="img04" />
		</div>
		</div>
			<div id="myModal1" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a><span>SCAN ME</span></a>
							<h4 class="modal-title" id="title"></h4>
						</div>
						<div class="modal-body">
							<div id="qrcode" style=" margin-left: 100px;"  ></div>
						</div>
						<div class="modal-footer">
							<div class="btn-group">
								<button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!-- script for getting hackathon url for Qr code -->
		<script>
				function gethackathon(url){
				document.getElementById('qrcode').innerHTML="";
				document.getElementById("title").innerHTML = "";
				viewqrcode(url);
				}
		</script>

		<!-- script for news qr code -->
		<script>
				function getnewscontent(titleofnews,newsurl){
				document.getElementById("qrcode").innerHTML = "";
				document.getElementById("title").innerHTML = "";
				document.getElementById("title").innerHTML = titleofnews;
				//alert(newsurl);

				viewqrcode(newsurl);
				}
		</script>

		<button data-step="2" data-intro="Menu bar where you can select following options" class="menu-button"><span>Menu</span></button>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
		<!-- introduction on web app -->

		<script type="text/javascript">
		function introductionweb () {
		$(document).ready(function(){
		$('.myModal').modal();

		});
		}

		</script>
			<script>
					function showbustime(){
					$.ajax({
					type: "get",
					url: "https://testingapp-92f04.firebaseio.com/root/bus%20routes/api.json",

					success: function(data) {
					var date = (data.date);
					var time = (data.time);

					var speech = new SpeechSynthesisUtterance();
					var message = 'bus will leave college on '+date+' on '+time+'';
				  // Set the text and voice attributes.
					speech.text = message;
					speech.volume = 1;
					speech.rate = 1;
					speech.pitch = 1;

					window.speechSynthesis.speak(speech);

					Swal.fire({
					position: 'center',
					type: 'info',
					title: 'Bus Time :- '+time+'',
					footer: 'date :- '+date+'',
					showConfirmButton: false,
					outsideclick: false,
					timer: 40000
					})

					}
					});
					setTimeout(showbustime, 3000000);

					$(document).ready(function(){
	var weekdays=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	var months=["January","Februray","March","April","May","June","July","August","September","October","November","December"];
		setInterval(function(){
		var d=new Date();
		var day=d.getDay();
		var day_name=weekdays[day];
		var num=d.getDate();
		var mo=d.getMonth();
		var name=months[mo];
				$(".month-name").html(name.substring(0,3));
		$(".number").html(num);
		//$(".day").html(day_name);
		$(".monthtwo").html(name+" "+num);
		$(".daytwo").html(day_name);
		var minute=d.getMinutes();
		var hour=d.getHours();
		var sec=d.getSeconds();
		var secMinMeter=300/60;
		$(".hours").css("width",hour*12.5+"px");
		if(hour<10){
			$(".hour").html("0"+hour+":")
		}
		else if(hour>12){
			hour=hour-12;
			if(hour<10){
				$(".hour").html("0"+hour+":");
			}
		}
		else{
			$(".hour").html(hour+":");
		}
		if(minute<10){
			$(".min").html("0"+minute+":");
			$(".minutes").css("width",minute*5+"px");
		}
		else{
			$(".min").html(minute+":");
			$(".minutes").css("width",minute*5+"px");
		}
		if(sec<10){
			$(".sec").html("0"+sec);
			$(".seconds").css("width",sec*5+"px");
		}
		else{
			$(".sec").html(sec);
			$(".seconds").css("width",sec*5+"px");
		}
	},1000)
})
					}
			</script>

</body>

</html>
