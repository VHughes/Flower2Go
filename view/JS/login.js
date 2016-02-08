// JAVASCRIPT SHIET

    $(document).ready(function(){
        
        var user_id= "";
        document.getElementById("submit").onclick = function(){
        alert("DINOSAUR");
                        $.ajax({
                            url: "../controller/exist_user.php",
                            type: "POST",
                            dataType: "json",
                            data: {
                                method: "login_user",
                                username: document.getElementById("username").value,
                                password: document.getElementById("password").value,
                            },
                            success: function(resp2){
                                alert("heyoOOO");
                                console.log(resp2);
                                console.log(resp2.username);
                                user_id = resp2[0].id;
                            
                }
          });
            
        }
        
                
        
    });


