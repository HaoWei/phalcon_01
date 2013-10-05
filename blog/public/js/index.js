/**
 * Created with JetBrains PhpStorm.
 * User: haowei
 * Date: 13-10-5
 * Time: 下午11:06
 * To change this template use File | Settings | File Templates.
 */

$(document).ready(function(){

    $(".alert").hide();

    $("#btn-login").click(function(){


        var login = $("#login").val();
        var password = $("#password").val();

        if (login.length == 0 || password.length == 0){

            $(".alert").show();

        }

    })

})




