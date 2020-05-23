<h1>Add Members Here!!</h1>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Add Members</title>
<style>
    form{
        margin: 20px 0;
    }
    form input, button{
        padding: 5px;
    }
    table{
        width: 50%;
        margin-bottom: 20px;
		border-collapse: collapse;
    }
    table, th, td{
        border: 1px solid #cdcdcd;
    }
    table th, table td{
        padding: 10px;
        text-align: left;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
	var formData=[];
	
    $(document).ready(function(){
    	 data=$("myForm");
    	$("#saveMember").click(function(){
    		//data.push({'group':$('#group').val(),'name':$("#name").val()})
    		 console.log("here");
    		 var  name = $("#name").val();
             var group =  $("#group").val();
             var count = parseInt($("#count").val());
             count++;
             $("#count").val(count);
             var str="<input type='hidden' name='group"+count+"' value='"+group+"'><input type='hidden' name='name"+count+"' value='"+name+"'>"
             $("#k").append(str);
             formData.push({'group':group,'name':name})
             console.log("formData=>", formData)
             
             var  name = $("#name option:selected").html();
             var group =  $("#group option:selected").html();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + group + "</td></tr>";
            $("#table").append(markup);
    	})
        $("#submit").click(function(){
        });
        //delete row
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
            	if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>
</head>
<body>
        <form  id="myForm" action="membersubmit" method="post">
        	{{ csrf_field() }}<!--token-->
        	<input type="hidden" value="0" name="count" id="count">
            <select id="group" name="group">
	          @foreach($groups as $g)
			  <option value="{{$g->id}}">{{$g->gname}}</option>
			  @endforeach
		    </select>
		    <div id="k" style="display: none;"></div>

            <select id="name" name="name">
	          @foreach($users as $u)
			  <option value="{{$u->id}}">{{$u->name}}</option>
			  @endforeach
		    </select>
	    	<input type="button" class="add-row" value="Add Member" id="saveMember">
	      <br> </br>
	    	<table id="table">
		        <thead>
		            <tr>
		                <th>Select</th>
		                <th>User Name</th>
		                <th>Group Name</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		            
		            </tr>
		        </tbody>
		    </table>
		    <button type="button" class="delete-row">Delete Row</button>
		    <button  id="submit" type="submit">Save</button>
		    <button type="submit"  class="btn btn-default"><a href="{{ URL::previous() }}">Cancel</a></button>
        </form>
    
</body> 
</html>                            