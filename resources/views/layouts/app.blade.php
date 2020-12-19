<html>
 
<head>
  <meta charset="UTF-8">
  <title>University Management</title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
      <link rel="stylesheet" href="style.css">

<style type="text/css">
html{
  background: url('bck.jpg') no-repeat center center fixed ;
  background-size: cover;
    

  }


 
#menu-nav {
  max-width: 1000px;
  margin: 130px auto;
  background-color: #ecf0f1;
  border-radius: 4px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}
 
#navigation-bar ul {
  border-radius: 4px;
  overflow: hidden;
}
#navigation-bar li {
  float: left;
  width: 20%;
}
#navigation-bar li:hover a::before {
  right: 0;
  left: 0;
}
#navigation-bar a {
  color: #848484;
  font-size: 20px;
  text-decoration: none;
  text-align: center;
  padding: 20px 0;
  display: block;
  position: relative;
  transition: all 0.3s ease;
}
#navigation-bar a:hover {
  color: #e74c3c;
}
#navigation-bar a::before {
  content: "";
  transition: all 0.4s ease-in-out;
  position: absolute;
  right: 50%;
  left: 50%;
  bottom: 0;
  height: 2px;
  background-color: #e74c3c;
}
#navigation-bar a:hover::before {
  right: 0;
  left: 0;
}
 
li {
  list-style: none;
}
  



</style>      
</head>
 
<body>

  
  
 
  <div id="menu-nav">
  <div id="navigation-bar">

    <ul>
      <li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
      <li><a href="{{route('create')}}"><i class="fa fa-handshake"></i><span>Regestration </span></a></li>
      <li><a href="{{route('list')}}"><i class="fa fa-user"></i><span>Student List</span></a></li>
      <li><a href="{{route('contact')}}"><i class="fa fa-book"></i><span>Contact</span></a></li>
	  <li><a href="#"><i class="fa fa-check-square-o"></i> <span>Create New Course</span></a></li>
    </ul>
  </div>
  
  </div>
  
 
</body>
 
</html>