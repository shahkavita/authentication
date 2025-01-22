$(document).ready(function(){
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  onloaddata();
  $('#photo').on('change',function(e){
    imgURL = URL.createObjectURL(e.target.files[0]);
    $("#img_preview").attr("src", imgURL);
});
 // $('#addproduct').on("click",function(e){
   
    $('#photo').on('change',function(e){
        imgURL = URL.createObjectURL(e.target.files[0]);
        $("#img_preview").attr("src", imgURL);
    });
    $("#submit").on("click",function(e){
        e.preventDefault();
        $("#exampleModalLabel").text("Add Product");
        $("#submit").text("Submit");
        let formname = document.getElementById('productform');
        let f1 = new FormData(formname);
        var name=$('#name').val();
        console.log(f1)
        var description=$('#description').val();
        var price=$('#price').val();
        console.log(name)
        console.log(description)
        console.log(price)

        $.ajax({
             url:"Product/index",
             method:'POST',
             contentType: false, // Necessary for FormData
             processData: false,
             data:f1,
                success:function(response)
                {
                    Swal.fire({
                        title: "Success!",
                        text:response.message,
                        icon: "success"
                      });
                    onloaddata();  
                    $('#exampleModal').modal('hide');
                    $('#productform')[0].reset();
                  
                },
                error:function(xhr)
                {
                const errors = xhr.responseJSON.errors;
                    $('.text-danger').text('');
                    if(errors)
                    {
                        if(errors.name)
                        {
                            $('.error-name').text(errors.name[0]);
                        }
                        if(errors.description)
                            {
                                $('.error-description').text(errors.description[0]);
                            }
                         if(errors.description)
                            {
                                $('.error-description').text(errors.description[0]);
                           }
                        if(errors.price)
                            {
                                $('.error-price').text(errors.price[0]);
                            }
                        if(errors.photo)
                            {
                                $('.error-photo').text(errors.photo[0]);
                            }
                    }

                }
            });
      });
  });
 
//});  
function onloaddata()
{
   $.ajax({
    url:'Product/fetch',
    method:'GET',
    success:function(data)
    {
        const tableBody = $('#producttable');
        tableBody.empty();
        if(data.length==0)
        {
            tableBody.append(
                `<tr>
                    <td colspan="6" style="text-align:center;">No data Available!!</td>
                </tr>`);
        }
        else
        {
            data.forEach(product=>
            {
                const row=`
                    <tr>
                        <td>${product.id}</td>
                        <td>${product.p_name}</td>
                        <td>${product.p_description}</td>
                        <td>${product.p_price}</td>
                        <td>
                        <img src="/storage/${product.p_image}" class="rounded float-left" />
                         </td>
                         <td>
                         <button class="btn btn-info btn-sm" name="updateproduct" id="updateproduct" onclick="updateproduct(${product.id})"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btn-sm" name="delproduct" id="delproduct" onclick="delproduct(${product.id})"><i class="fa fa-trash"></i></button>
                       
                         </td>
                    </tr>

                `;
                tableBody.append(row);
            });
           
        }
    }
   });
 }
 function delproduct(id)
 {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url:'Product/delete/'+id,
                method:'delete',
                success:function(response)
                {
                    onloaddata();
                        Swal.fire({
                            title: "Success!",
                            text:response.message,
                            icon: "success"
                          });
                      
                },
            });
        }
}) 
 }
 function updateproduct(id)
 {
    $.ajax({
        url:'Product/edit/'+id,
        method:'GET',
        success:function(response)
        {
            $('#exampleModal').modal('show');
           
            $("#hid").val(response.id);
            $("#name").val(response.p_name);
            $("#description").val(response.p_description);
            $("#price").val(response.p_price);
           // $("#photo").val(response.p_image);
           const imagename=response.p_image;
           console.log(imagename);
           $("#img_preview").attr('src',"/storage/"+response.p_image);
           $("#exampleModalLabel").text("Update Product");
            $("#submit").text("Update");
        }
    })
 }
