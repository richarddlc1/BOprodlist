    


$(document).ready(function(){  
        var data = (function () {
        
        var json = null;
           $.ajax({
              'async': false,
              'global': false,
              'url': '/data/data.json',
              'dataType': "json",
             'success': function (data) {
               json = data;
               }
          });
           return json;
    })();
        for(var i = 0; i<data.data.length; i++){          
                    $('#tableBody').append(
                      $('<tr/>').append(
                      $('<td/>')
                        .html(data.data[i][0])
                    ).append(
                      $('<td/>')
                        .html(data.data[i][1])
                    ).append(
                      $('<td/>')
                        .html(data.data[i][2])
                    ).append(
                      $('<td/>')
                        .html(data.data[i][3])
                    ).append(
                      $('<td/>')
                        .html(data.data[i][4])
                    ).append(
                      $('<td/>')
                        .html(data.data[i][5])
                    )
                )
            
        }
     $('#myTable').dataTable();
    
});

