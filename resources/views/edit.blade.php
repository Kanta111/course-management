<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add New Student</title>
<style type="text/css">
  body {
  font-family: Arial, sans-serif;
  background: #34495e;

  
}
input[type=text] {
  height: 12px;
  width: 28%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display:block;
  border: none;
  background: #f1f1f1;
  position: center;
}
h1{
  position: center;
}



</style>
</head>
<body>
<form class="form-horizontal" action="{{route('update',$student->id)}}" method="POST" >
  {{csrf_field()}}

  <div class="container">
    <h1>Registeration</h1>
    
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" value="{{$student->name}}" name="name" required>

    <label for="reg"><b>Regestration ID</b></label>
    <input type="text" placeholder="Enter Regestration ID" value="{{$student->r_id}}" name="reg" required>

    <label for="dept"><b>Department</b></label>
    <input type="text" placeholder="Department Name"  value="{{$student->dept}}"name="dept" required>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Mail" value="{{$student->email}}" name="email" required>
    <label for="course"><b>Course</b></label>
    <input type="text" placeholder="Enter Your Course"  value="{{$student->course}}"name="course" required>
    <label for="date"><b>Date</b></label>
    <input type="text" placeholder="Enter Date"  value="{{$student->date}}"name="date" required>

   
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-default">Cancel</button>

  </div>

 
</form>
</body>
</html>