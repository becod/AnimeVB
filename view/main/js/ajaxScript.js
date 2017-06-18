/**Menu Switch**/
$.ajax({
  type: 'POST',
  url: 'core/controllers/sessionController.php' 
})
    .done(function(data){
    if(data == 1){
        if (localStorage.getItem('data') == null){  
            var template = Handlebars.getTemplate('header'); 
            var html = template();
            $('#menu').html(html);
            navEffects();
        } else {
            var info =  JSON.parse(localStorage.getItem('data')) ;
            var template = Handlebars.getTemplate('header_user'); 
            var html2 = template(info);
            $('#menu').html(html2);
            navEffects();
            goLogout();
        }
     }else if (data == 0) {
        var template = Handlebars.getTemplate('header'); 
        var html = template();
        $('#menu').html(html);
         navEffects();
     }
 });

/**Content**/
 $.ajax({
  type: 'GET',
  url: 'core/model/content.php',
  dataType: 'json'
})
    .done(function(data){
     var template = Handlebars.getTemplate('layout'); 
     var html = template({'anime':data});
     $('#main').html(html);
 });
 
/**Log In**/
function goLogin() {
    var form = $('#signin-form').serialize();
    $.ajax({ 
        type: 'POST', 
        url: 'core/controllers/signinController.php',
        data: form
    })
        .done(function(data){
        if( data == ''){
            alert('Vacio data');
        } else if ( data != ''){
            var obj = JSON.parse(data),
                id = obj.id,
                name = obj.name,
                lastname = obj.lastname,
                user = obj.user,
                password = obj.password,
                email = obj.email;
            localStorage.setItem("data", data);
            localStorage.setItem("id", id);
            localStorage.setItem("name", name);
            localStorage.setItem("lastname", lastname);
            localStorage.setItem("user", user);
            localStorage.setItem("password", password);
            localStorage.setItem("email", email),
            
            location.reload();
        }
    })
        .fail(function(data){
        alert('Error');
    });
}
function runScriptLogin(e){
    if (e.keyCode == 13){
        goLogin();
    }
} 
/**Log Up**/
function goLogup() {
    var form = $('#signup-form').serialize();
    $.ajax({ 
        type: 'POST', 
        url: 'core/controllers/signupController.php',
        data: form
    })
        .done(function(data){ 
        if( data == ''){
            alert('Vacio data');
        } else if ( data != ''){
            var obj = JSON.parse(data),
                name = obj.name,
                lastname = obj.lastname,
                user = obj.user,
                password = obj.password,
                email = obj.email;
            localStorage.setItem("data", data);
            localStorage.setItem("name", name);
            localStorage.setItem("lastname", lastname);
            localStorage.setItem("user", user);
            localStorage.setItem("password", password);
            localStorage.setItem("email", email),
            
            location.reload();
        } 
    })
        .fail(function(data){
        alert('Error');
    });
}
function runScriptLogup(e){
    if (e.keyCode == 13){
        goLogup();
    }
}
/**Log Out**/ 
function goLogout(){
$('#user_signout').on('click', function(){
    
    $.ajax({ 
        type: 'POST', 
        url: 'core/controllers/signoutController.php',
        data: {vul: 1}
    })
        .done(function(data){ 
         if( data == 1){ 
             
            localStorage.removeItem('data');
            localStorage.removeItem('name');
            localStorage.removeItem('lastname');
            localStorage.removeItem('user');
            localStorage.removeItem('password');
            localStorage.removeItem('email');
            localStorage.removeItem('id'); 
             
            location.reload();
             
        } else if ( data != 1){
            alert('false');
        }  
    })
        .fail(function(data){
        alert('Error');
    });
}); 
}
/* Insert Item */
function goInsert() { 
    
    /*var formq = $('#insert-form').serializeArray();*/
    /*var form = new FormData($('#insert-form') );*/
    /*var imageone = $("#image").serializeArray(); 
    var image = $("#image")[0].files[0].name;*/
    var data = new FormData($('#insert-form')[0]);
    $.ajax({ 
        type: 'POST', 
        url: 'core/controllers/insertController.php',
        data: data,
        processData: false,  
        contentType: false
    })
        .done(function(data){ 
        if( data == ''){
           alert(data);
        } else if ( data != ''){
             
            alert(data);
        } 
    })
        .fail(function(data){
        alert('Error');
    });
}

function runScriptInsert(e){
    if (e.keyCode == 13){
        goInsert();
    }
};
     
 