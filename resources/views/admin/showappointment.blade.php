

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
        				<th style="padding: 10px; color: black">Customer Name</th>
        				<th style="padding: 10px; color: black">Email</th>
        				<th style="padding: 10px; color: black">Phone</th>
        				<th style="padding: 10px; color: black">Doctor Name</th>
        				<th style="padding: 10px; color: black">Date</th>
        				<th style="padding: 10px; color: black">Message</th>
        				<th style="padding: 10px; color: black">Status</th>
        				<th style="padding: 10px; color: black">Approve</th>
        				<th style="padding: 10px; color: black">Cancel</th>
                        <th style="padding: 10px; color: black">send mail</th>

        			</tr>
        			@foreach($data as $appoint)

        			<tr align="center" style="background-color: tan; color: black">
        				<td>{{$appoint->name}}</td>
        				<td>{{$appoint->email}}</td>
        				<td>{{$appoint->phone}}</td>
        				<td>{{$appoint->doctor}}</td>
        				<td>{{$appoint->date}}</td>
        				<td>{{$appoint->message}}</td>
        				<td>{{$appoint->status}}</td>
        				<td>
        					<a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a>
        				</td>

        				<td>
        					<a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a>
        				</td>

                        <td>
                            <a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a>
                        </td>

        			</tr>

        			@endforeach

        		</table>

        	</div>

        </div>
        
     

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>