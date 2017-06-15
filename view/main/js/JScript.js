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
}

/**Footer**/
var template = Handlebars.getTemplate('footer');
var html3 = template();
$('#footer').html(html3);


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