
var oset = 0;
var iload = 1;
var holdLoad = false;
$(function(){
    loadArt(10);
});

$(window).scroll(function(){
    if($(window).scrollTop()>=$(document).height()-$(window).height()-500){
        loadArt(1);
    }
})

function loadArt(a){
    if(!holdLoad){
    holdLoad = true;
    
    $.ajax({
        url : "api.php",
        type : "POST",
        data : {oset : oset , iload : a},
        dataType : "json",
        success : function(data){
            console.log(data);
            for (var i = 0 ; i <data.Content.length; i++){
                oset++;
                var item = data.Content[i];
                var html = '<div class = "box">'+item.ID+' '+item.Content+' '+item.Date+'</div>';

                $('#content').append(html);

            }
            holdLoad = false;
            if(data.Content.length == 0){
                holdLoad =  true;
            }
        }
    })
}
}