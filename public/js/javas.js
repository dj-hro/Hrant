$(document).ready(function(){
	$(".edit_comment").click(function(){
		var id = $(this).attr("data-edite");
		$('.div_for_edit').not("."+id).slideUp();
			$("."+id).slideToggle();

	})
})

// $(document).ready(function(){
//   $('#menu').on('click', function(){        //Commenti hamar slide down sarqac on click i pahov;
//     $('#sub-menu').slideToggle();
//   })
// })


		$(document).ready( function() {
    		$(".file-upload input[type=file]").change(function(){
         	var filename = $(this).val().replace(/.*\\/, "");
        $("#filename").text('Your picked:   ' + filename);
    });
});


 $(document).ready(function() {
     $('body').on('click', '.pagination a', function(e) {
         e.preventDefault();


         var url = $(this).attr('href');  
         getArticles(url);
         // window.history.pushState("", "", url);
     });

     function getArticles(url) {
         $.ajax({
             url : url  
         }).done(function (data) {
             $('.porc').html(data);  
         }).fail(function () {
            alert('Comments could not be loaded.');
         });
     }
 });



// <script>
// 	$(document).ready(function(){

// 		$(document).on("click",".pagination li a ", function(e){

// 			e.preventDefault();

// 			$("li").attr("class","");

// 			$(this).parent().attr("class","active");

// 			var href = $(this).attr("href");

// 			var x = href.substring(18);

// 			$.ajax({

// 				url : x,
// 				type : 'get',
// 				dataType : 'json',
// 				success : function(resp){

// 					$("#show_comm").empty();
// 					for(let i=0;i<resp.data.data.length;i++){
						

// 							imgname = resp.data.data[i].image;
							
// 						if(imgname == 'img.jpg'){
// 						$("#show_comm").append('<img src="/uploads/standarts/'+resp.data.data[i].image+'" width="50px" height="50px" style="border-radius: 50%; float: left;">');}
// 						else{
// 						$("#show_comm").append('<img src="/uploads/'+resp.data.data[i].image+'" width="50px" height="50px" style="border-radius: 50%; float: left;">');}
// 						$("#show_comm").append("<div class='comment_writer_name'>"+resp.data.data[i].name+"</div>");
// 						$("#show_comm").append("<div class='comment_writer_text'>"+resp.data.data[i].comment+"</div>");
					
// 					}


					
// 				}



// 			});

// 		});

// 	})
// </script>