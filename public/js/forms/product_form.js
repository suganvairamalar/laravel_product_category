$(document).ready(function(){

	/*alert( $('#product_category_id').val());
    return;*/


      $( "#start_cloes").click(function() { //it will use to clear the form data while clicking close button
    location.reload(true);
   });

    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


    $( "#product_category_name" ).autocomplete({
        source: function(request, response) {
        $.ajax({
           
            url:'/find_category_name',
            type: 'get',
            data: {
                term : request.term
            },
            success: function(data) {
                response(data);

            }
        });
    },
    minLength: 1,
    delay: 300, //used to increase the speed to show dropdown display data 
    select: function(event, ui) {
    $('#product_category_name').val(ui.item.value);
    }
 });


    



	var product_id;
  $(document).on('click', '.delete', function(){
      product_id = $(this).attr('id');
      $('#product_confirm_Modal').modal('show');      
  });

  $('#product_ok_button').click(function(){
        $.ajax({
          url:'/product_delete_data/'+product_id,
          beforeSend:function(){
            $('#product_ok_button').text('Deleting.....');
            },
            success:function(data){
              setTimeout(function(){
                $('product_confirm_Modal').modal('hide');
                location.reload();
              }, 2000);
            }
        });
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
               url:'/products',
               data:{'search_dropdown':$search_dropdown,'search':$value,_token:_token},
               success: function(data){
                console.log(data);
               }
            });
   });



   


});