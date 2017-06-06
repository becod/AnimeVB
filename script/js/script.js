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
});


// Retrieve the template data from the HTML (jQuery is used here).
var template = $('#handlebars-demo').html();

// Compile the template data into a function
var templateScript = Handlebars.compile(template);

var context = {
  title: "My First Blog Post!",
  author: {
    id: 47,
    name: "Yehuda Katz"
  },
  body: "My first post. Wheeeee!"
};
// html = 'My name is Ritesh Kumar. I am a developer.'
var html = templateScript(context);

// Insert the HTML code into the page
$(document.body).append(html);