/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {

    $("#states").bind("change", function(event) {
        $.ajax({
            url: "http://localhost/eportal/index.php/location/loadLocalGovt",
            data: "stateid=" + $(this).val(),
            method: "GET",
            beforeSend:function() {
                $("#lgas").html("<option value = ''>Loading ... </option>");
            },
            success:function(response) {
                $("#lgas").html(response);
            }
        });
    });



});
