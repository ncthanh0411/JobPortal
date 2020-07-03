<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.bg-image {
  /* The image used */
  background-image: url("https://ichef.bbci.co.uk/news/2048/cpsprodpb/E5C9/production/_112252885_coronavirus_jobs_by_risk_index_976.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  width:100%;
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>

<body>
  <div class="bg-image"></div>
  <div class="bg-text">
    <h1>Who Are You?</h1>
    <br>
    <a href="{{asset('admin/login')}}" class="btn btn-info" role="button">ADMIN</a>
    <a href="{{asset('/login')}}" class="btn btn-info" role="button">COMPANY</a>
    <a href="{{asset('student/login')}}" class="btn btn-info" role="button">STUDENT</a>
  </div>
    
</body>
</html>
