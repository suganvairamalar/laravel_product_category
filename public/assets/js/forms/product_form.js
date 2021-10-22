$(document).ready(function(){

	$.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
	
	 //SEARCH DROPDOWN
  $(document).on("change",'#search_dropdown',function(){
    var select_value = $('#search_dropdown option:selected').val();
      //alert(select_value);
      if(select_value=='category'){
        $('#search').attr('placeholder','Search By Category');
      }
      else if(select_value=='product'){
        $('#search').attr('placeholder','Search By Product');
      }
      else{
        $('#search').attr('placeholder','');
      }
  });

  

   $('#product_search_submit').on('click',function(){

            var _token = $('#token').val();
            $value = $('#search').val();
            $search_dropdown = $('#search_dropdown option:selected').val();
            /*alert($search_dropdown);
            return;*/
            if($search_dropdown == "")
            {
            $('#search_dropdown').focus();
            alert("Please select");
            return false;
            }

            if(($search_dropdown!='') && ($value=='')){
              $('#search').focus();
              alert("Please enter to search");
              return false;
            }
           
            
            $.ajax({
               type:'GET',
               url:'/',
               data:{'search_dropdown':$search_dropdown,'search':$value,_token:_token},
               success: function(data){
                console.log(data);
               }
            });
   });


});