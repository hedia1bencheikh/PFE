$(document).ready(function(){

    $(document).on('change', '.image', function () {
        var nbre_image = $(this).val();
        console.log(nbre_image);
        html="";
        for(var i=0;i<nbre_image;i++)
        {
            html=html+"<i class='glyphicon glyphicon-picture'></i><input type=file> <br>"

        }
        console.log(html);
        
    document.getElementById('img').innerHTML = html;
    })
    $(document).on('click', '.delete', function () {

       
    })
})