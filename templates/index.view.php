<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Weather</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body id="body">
    <h1>Weather</h1>
    <div class="darkmode-container">

      <div id="darkmode-moon" class="button">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
          <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
        </svg>
      </div>
      <div id="lightmode-sun" class="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sun" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <circle stroke="white" cx="12" cy="12" r="4" />
        <path stroke="white" d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
      </svg>
      </div>


    </div>
    <form method="post" class="form">
      <input type="text" placeholder="City Name" name="city" id="city">
      <input type="submit" value="Go" onclick="return false;" id="submit" name="submit">
    </form>
    <div class="output">
      <img id="mapImage"src=""></img>
      <p id="time"></p>
      <p id="temp"></p>
      <p id="wind"></p>
    </div>

    <script src="js/main.js"></script>
  </body>
</html>
