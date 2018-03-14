$(function() {

    var dataLength;
    var obj;
    var i = 4;
    
    function fetchGraphics(){
        dataLength = dataLength-1;
        $.ajax({
            type: "GET",
            url: './db/fetching-graphics.php',
            success: function(data){
                obj = JSON.parse(data);
                console.log('object length: '+obj.length);
                console.log('data length: '+dataLength);
                
                if (obj.length > dataLength) {
                    create();                
                }
                dataLength = obj.length;
            }
        });
    }

    var inter = setInterval(function() {
        fetchGraphics();
    }, 100);

    fetchGraphics();


    function create() {
        i--; 
        if (i <= 3) {
            console.log(i);

            if (i >= 0) {
                appendGraphics(obj[i].path, obj[i].title, obj[i].description);
            } else {
                clearInterval(inter);
                i = 4;
            }
        }
    }

    

    function appendGraphics(source, title, caption) {
        var li = '<li><div class="thumbnail-wrapper"><figure class="thumbnail-container"><img class="thumbnail" src="'+source+'" alt="" title="'+title+'"></figure><div class="caption">'+caption+'</div></div></li>'
        $('ul.graphics-wrapper').prepend(li);
    }
    

});