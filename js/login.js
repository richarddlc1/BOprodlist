function login(){
    var pword = $('#pword').val();
    var validpword = (function () {
        
        var json = null;
           $.ajax({
              'async': false,
              'global': false,
              'url': '/data/credentials.json',
              'dataType': "json",
             'success': function (data) {
               json = data.password;
               }
          });
           return json;
    })();
    
    
    if(pword==validpword){
        window.location.href='products.html'
}else{
    alert("incorrect pword");
}
}