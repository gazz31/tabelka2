function load()
{
    setTimeout(function() {
        
        var body    =   document.getElementsByTagName("BODY")[0];
        var loader  =   document.getElementById("move");
        var pulsar  =   document.getElementById("move_more");
        
        body.className   -=   "cut";
        pulsar.className +=   "hide";
        loader.className +=   "load";
        
    }, 4000)
}