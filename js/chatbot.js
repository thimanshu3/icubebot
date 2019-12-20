function sendmsgtoscreen(msg,side)
{
	//alert("The side is " +side);

	if(side == "right"){
		var newDiv = document.createElement("div");
		var parentDiv = document.getElementById('div1');
		var d = new Date();
		minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
		hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
		ampm = d.getHours() >= 12 ? 'pm' : 'am',
		months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
		days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
		var m = ' '+hours+':'+minutes+ampm;
		newDiv.innerHTML = '<div class="d-flex justify-content-end mb-4"> <div class="msg_cotainer_send"> '+msg+' <span class="msg_time_send">'+m+'</span> </div> </div>';
		parentDiv.appendChild(newDiv);
		scrollDown();
}



else{

		var newDiv = document.createElement("div");
		var parentDiv = document.getElementById('div1');
		var d = new Date();
		minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
		hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
		ampm = d.getHours() >= 12 ? 'pm' : 'am',
		months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
		days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
		var m = ' '+hours+':'+minutes+ampm;
		newDiv.innerHTML ='<div class="d-flex justify-content-start mb-4">  <div class="msg_cotainer">'+msg+' <span class="msg_time">'+m+'</span> </div> </div>';
		parentDiv.appendChild(newDiv);
		scrollDown();

}

}

function sendcardtoscreen(imageurl,name,discription)
{

    var newDiv = document.createElement("div");
    var parentDiv = document.getElementById("div1");
    newDiv.innerHTML = '<div class="d-flex justify-content-start mb-4" style="background: white;"><div class="butFrame" ><div class="butText"><span>'+name+'</span></div><img src="'+imageurl+'"></div></div>';
    parentDiv.appendChild(newDiv);
    scrollDown();
}

  function scrollDown() {
    const $container = $("#div1");
    const $maxHeight = $container.height();
    const $scrollHeight = $container[0].scrollHeight;
    if ($scrollHeight > $maxHeight) $container.scrollTop($scrollHeight);
  }

try {
  var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
  var recognition = new SpeechRecognition();
}
catch(e) {
  console.error(e);
  $('.no-browser-support').show();
  $('.app').hide();
}


var instructions = $('#recording-instructions');
var notesList = $('ul#notes');

var noteContent = '';

// Get all notes from previous sessions and display them.
//var notes = getAllNotes();
//renderNotes(notes);



/*-----------------------------
      Voice Recognition
------------------------------*/

// If false, the recording will stop after a few seconds of silence.
// When true, the silence period is longer (about 15 seconds),
// allowing us to keep recording even when the user pauses.
recognition.continuous = true;

// This block is called every time the Speech APi captures a line.
recognition.onresult = function(event) {

  // event is a SpeechRecognitionEvent object.
  // It holds all the lines we have captured so far.
  // We only need the current one.
  var current = event.resultIndex;

  // Get a transcript of what was said.
  var transcript = event.results[current][0].transcript;

  // Add the current transcript to the contents of our Note.
  // There is a weird bug on mobile, where everything is repeated twice.
  // There is no official solution so far so we have to handle an edge case.
  var mobileRepeatBug = (current == 1 && transcript == event.results[0][0].transcript);


  if(!mobileRepeatBug) {

	sendmsgtoscreen(transcript, "right");
	$.ajax({
					url:"chatbotconnection.php", //the page containing php script
					type: "post", //request type,
					data: ({'message':transcript,}),
					success:function(obj){
					//console.log("The Result is"+result);
					obj = JSON.parse(obj);
					//result=(result.output);
					if(obj.context.request=="showfacultycard"){
          console.log(obj.context.data.image_url);
          var img_url= (obj.context.data.image_url);
          var name = (obj.context.data.name);
          obj= obj.output.text[0];
					//alert("if part");
          sendcardtoscreen(img_url,name,obj)
					readOutLoud(obj);
        }
				else if(obj.output.text[0] =="Sorry...I am not able to understand what u are saying....!!")  {
				//	alert("else if part");
					var newDiv = document.createElement("div");
					var parentDiv = document.getElementById('div1');
					newDiv.innerHTML ='<div class="d-flex justify-content-start mb-4"><div id="Container" class="loading"><div id="load" class="loadingContainer"><span class="first"></span><span class="second"></span><span class="third"></span></div></div> </div>';
					parentDiv.appendChild(newDiv);
					scrollDown();

					$.ajax({
									url:"websearchapi.php", //the page containing php script
									type: "post", //request type,
									data: ({'message':transcript,}),
									success:function(obj){
									//	setTimeout(200);
										document.getElementById('load').style.display="none";
									//console.log("The Result is"+result);
									//obj = JSON.parse(obj);
									//setTimeout(500);
									  	sendmsgtoscreen(obj,"left");
										  readOutLoud(obj);
											//alert(obj);
								}
								});
						}
						else{
							obj = obj.output.text[0];
							sendmsgtoscreen(obj,"left");
							readOutLoud(obj);
						//	alert("else part");
							//scrollDown();
						}


	}
  });
}
};

recognition.onstart = function() {
  instructions.text('Voice recognition activated. Try speaking into the microphone.');
}

recognition.onspeechend = function() {
//  swal('You were quiet for a while so voice recognition turned itself off.');
}

recognition.onerror = function(event) {
  if(event.error == 'no-speech') {
    swal('No speech was detected. Try again.');
  };
}



/*-----------------------------
      App buttons and input
------------------------------*/

$('#record-btn').on('click', function(e) {
  if (noteContent.length) {
    noteContent += ' ';
  }
  recognition.start();
  document.getElementById('micicon').className="fa fa-spinner fa-spin";
  document.getElementById('record-btn').disabled = true;
  setTimeout(function() {
  recognition.stop();

  document.getElementById('record-btn').disabled = false;
  document.getElementById('micicon').className="fas fa-microphone";
}, 4000);


});


$('#arecord-btn').on('click', function(e) {
  recognition.stop();
  instructions.text('Voice recognition paused.');
  //detectSilence();
});


$('#save-note-btn').on('click', function(e) {
  recognition.stop();

  if(!noteContent.length) {
    instructions.text('Could not save empty note. Please add a message to your note.');
  }
  else {
    // Save note to localStorage.
    // The key is the dateTime with seconds, the value is the content of the note.
    saveNote(new Date().toLocaleString(), noteContent);

    // Reset variables and update UI.
    noteContent = '';
    renderNotes(getAllNotes());
   // noteTextarea.val('');
    instructions.text('Note saved successfully.');
  }

})


notesList.on('click', function(e) {
  e.preventDefault();
  var target = $(e.target);

  // Listen to the selected note.
  if(target.hasClass('listen-note')) {
    var content = target.closest('.note').find('.content').text();
    readOutLoud(content);
  }

  // Delete note.
  if(target.hasClass('delete-note')) {
    var dateTime = target.siblings('.date').text();
    deleteNote(dateTime);
    target.closest('.note').remove();
  }
});

/*-----------------------------
      Speech Synthesis
------------------------------*/

function readOutLoud(message) {
	var speech = new SpeechSynthesisUtterance();

  // Set the text and voice attributes.
	speech.text = message;
	speech.volume = 1;
	speech.rate = 1;
	speech.pitch = 1;

	window.speechSynthesis.speak(speech);
	speech.addEventListener('end', function(event) {
	document.getElementById('record-btn').disabled = false;
	document.getElementById('micicon').className="fas fa-microphone";
	});

}

function shownasa(){
	var data = document.getElementById('text').value;
	var data2 = document.getElementById('img5').value;
	console.log(data);
	console.log(data2);
	Swal.fire({
  imageUrl: data2,
  imageHeight: 150,
	text: data,

})
}
