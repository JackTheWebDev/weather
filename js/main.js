var submitButton = document.getElementById('submit');
var cityInput = document.getElementById("city");


var body = document.getElementById("body");
var lightmodeButton = document.getElementById("lightmode-sun");
var darkmodeButton = document.getElementById("darkmode-moon");


if(document.cookie == "darkmode=true"){
  body.className = "darkmode";
  darkmodeButton.style.display = "none";
  lightmodeButton.style.display = "block";
}else{
  darkmodeButton.style.display = "block";
  lightmodeButton.style.display = "none";
}

submitButton.addEventListener('click',function(event) {

  // Send a post request to the check weather endpoint
  var data = {
    "city":cityInput.value
  }

  fetch("/weather",{
    method: 'POST',
    body: JSON.stringify(data)
  }).then(response => response.json()).then(data => {

    console.log(data);

    // Fetch the image
    var lat = data["weather"]["coord"]["lat"];
    var lon = data["weather"]["coord"]["lon"];

    var url = `/map?lat=${lat}&lon=${lon}`;

    document.getElementById("mapImage").src = url;


    document.getElementById("temp").innerText = data["weather"]["main"]["temp"]+"f";
    document.getElementById("wind").innerText = "Wind: "+data["weather"]["wind"]["speed"]+"@"+data["weather"]["wind"]["deg"] + " Gusting to: "+data["weather"]["wind"]["gust"]+"mph";


    var time = data["weather"]["dt"] * 1000;
    var date = new Date(time);
    document.getElementById("time").innerText = "Weather last updated:" + date.toLocaleDateString("en-US") + " At: "+ date.toLocaleTimeString("en-US");
  });
});


// Light / dark mode

darkmodeButton.addEventListener("click",()=>{
  body.className = "darkmode";
  darkmodeButton.style.display = "none";
  lightmodeButton.style.display = "block";
  document.cookie = "darkmode=true";
});

lightmodeButton.addEventListener("click",()=>{
  body.className ="";
  darkmodeButton.style.display = "block";
  lightmodeButton.style.display = "none";
  document.cookie = "darkmode=false";
});
