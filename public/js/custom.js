// $(document).ready(function(){

// })
const baseUrl = 'http//localhost:8080/';
function add_tocart()
{
    // var user = $("#sample").val();
    // var sample = $("#sample").val();
    // $("#pname").text(sample);

    $.ajax({
        url: "addtocart",
        type:"POST",
        data:{id:1},
        success:function(response)
        {
            alert(response);
        }
    });
}