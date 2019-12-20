function hackathon() {
	$.ajax({
					url:"websearchapi.php", //the page containing php script
					type: "post", //request type,
					data: ({'message':transcript,}),
					success:function(obj){
					//console.log("The Result is"+result);
					obj = JSON.parse(obj);
					//obj=(obj;
					console.log(obj);
				   }
				 });

  }

// script for injecting weather
  //     function getWeather()
  //       {
	//
  //       $.ajax({
  //       url:"weatherapi.php", //the page containing php script
  //       type: "get", //request type,
  //       success:function(result){
  //               var d = new Date();
  //               months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
  //               days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
  //               var date_create = ' '+months[d.getMonth()]+' '+d.getDate()+' ';
  //               result = JSON.parse(result);
  //               weather=(result.weather[0].main);
	// 							//alert(weather);
  //               temprature=Math.round((result.main.temp)-273.15);
  //               //console.log(temprature);
  //               humidity=(result.main.humidity);
  //               wind=(result.wind.speed);
  //               document.getElementById("currenttempdisplay").innerHTML = temprature+'&deg'+'C';
  //               document.getElementById("currentweatherdisplay").innerHTML = weather;
  //               //document.getElementById("currentdatedisplay").innerHTML = date_create;
	// 							document.getElementById("currentwinddisplay").innerHTML = wind;
  //               document.getElementById("currenthumiditydisplay").innerHTML = humidity;
	// 							//alert(humidity);
	//
	// 							if(weather=="clear")
  //               {
  //               document.getElementById("weathericon").className= "fas fa-cloud";
  //               }
	//
  //               else if(weather=="Haze") {
  //                 document.getElementById('weathericon').className="fas fa-cloud"
	//
  //               }
  //               else
  //               {
  //                 document.getElementById("weathericon").className= "far fa-sun";
  //               }
	//
  //             }
  //      });
	//      setTimeout(getWeather,1900000);
	//
	//
  // }
  // getWeather();
