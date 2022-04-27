

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')


  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')

      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
        
     <div class="container-fluid page-body-wrapper">

     	<div align="center" style="padding-top: 100px;">

     		<table>
        			<tr style="background-color: rosybrown">

        				<th style="padding: 10px; color: black">Doctor Name</th>
        				<th style="padding: 10px; color: black">Phone</th>
        				<th style="padding: 10px; color: black">Speciality</th>
        				<th style="padding: 10px; color: black">Room No</th>
        				<th style="padding: 10px; color: black">Image</th>
        				<th style="padding: 10px; color: black">Delete</th>
        				<th style="padding: 10px; color: black">Update</th>
        				
        			</tr>

        			@foreach($data as $doctor)
        			<tr align="center" style="background-color: tan; color: black">
        				
        				<td>{{$doctor->name}}</td>
        				<td>{{$doctor->phone}}</td>
        				<td>{{$doctor->speciality}}</td>
        				<td>{{$doctor->room}}</td>
        				<td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>

        				<td><a onclick="return confirm('Are you sure you want to Delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>

        				<td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>

        			</tr>
        			@endforeach

     	</div>

     </div>		

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>