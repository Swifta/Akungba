$(document).ready(function()
{
    alert("started....");
    var locationId = 156;
    $.ajax({/* post the values using AJAX */
        type: "GET",
        url: "http://192.168.1.10:9765/services/schoolDBasService/states/" + locationId,
       dataType: "json",
       beforeSend: function(xhrObj){
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Accept","application/json");
        },
        // url: serverurl + "sys_admin/user_authorization/retrievepharmacy_byid",
        async: false,
        cache: false,
        success: function(data) {
            alert("after redirecting...." + data);

        }
    });

});