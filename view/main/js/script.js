$(document).ready(function(){
    $("#signin").click(function(){
      $("#signin-box").toggleClass("hiden");
      });
    $("#signin-close").click(function(){
      $("#signin-box").toggleClass("hiden");
      });
    
    $("#signup").click(function(){
      $("#signup-box").toggleClass("hiden");
      });
    $("#signup-close").click(function(){
      $("#signup-box").toggleClass("hiden");
      });
    
    $("#user_insert").click(function(){
      $("#insert-box").toggleClass("hiden");
      });
    $("#insert-close").click(function(){
      $("#insert-box").toggleClass("hiden");
      });
    
     $("#user_config").click(function(){
      $("#config-box").toggleClass("hiden");
      });
    $("#config-close").click(function(){
      $("#config-box").toggleClass("hiden");
      });
    
    $('.content-box').on('click', function(id){
        alert(id);
    });
});

/*Menu Switch*/
if (localStorage.getItem('data') == null){
    var source1 = $('#menu1').html();    
    var template1 = Handlebars.compile(source1); 
    var html1 = template1();
    $('#menu').html(html1);
} else {
    var info = JSON.parse(localStorage.getItem('data'));
    var source2 = $('#menu2').html();    
    var template2 = Handlebars.compile(source2); 
    var html2 = template2(info);
    $('#menu').html(html2);
}

/*Content*/
var template = Handlebars.templates['layout'];    
    
 $.ajax({
  type: 'GET',
  url: 'core/model/content.php',
  dataType: 'json'
})
    .done(function(data){
     var html = template({'anime':data});
     $('#main').html(html);
 });

/*Loging*/
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

/*LogUp*/

function goLogup() {
    var form = $('#signup-form').serialize();
    alert(form)
    $.ajax({ 
        type: 'POST', 
        url: 'core/controllers/signupController.php',
        data: form
    })
        .done(function(data){
        /*if( data == ''){
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
        }*/
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
