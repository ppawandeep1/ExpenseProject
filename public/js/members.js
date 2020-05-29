
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
