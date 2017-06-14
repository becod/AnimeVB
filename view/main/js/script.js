Handlebars.getTemplate = function(name) {
	if (Handlebars.templates === undefined || Handlebars.templates[name] === undefined) {
		$.ajax({
			url : 'content/' + name + '.handlebars',
			success : function(data) {
				if (Handlebars.templates === undefined) {
					Handlebars.templates = {};
				}
				Handlebars.templates[name] = Handlebars.compile(data);
			},
			async : false
		});
	}
	return Handlebars.templates[name];
};

function navEffects(){
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
}

/*Menu Switch*/
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

/*Footer*/
var template = Handlebars.getTemplate('footer');
var html3 = template();
$('#footer').html(html3);

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

/* Log In */
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

/* LogUp */

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
/* Log Out */
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
    var form = $('#insert-form').serialize();
    $.ajax({ 
        type: 'POST', 
        url: 'core/controllers/insertController.php',
        data: form
    })
        .done(function(data){ 
        if( data == ''){
            alert('Vacio data');
        } else if ( data != ''){
            alert('Lleno')
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
} 
