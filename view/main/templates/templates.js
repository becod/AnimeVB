(function() {
  var template = Handlebars.template, templates = Handlebars.templates = Handlebars.templates || {};
templates['anime'] = template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    var alias1=container.lambda, alias2=container.escapeExpression;

  return "<h2>"
    + alias2(alias1((depth0 != null ? depth0.post_title : depth0), depth0))
    + "</h2>\r\n    <div class=\"content-box box-anime\">\r\n        <div>\r\n            <img src=\""
    + alias2(alias1((depth0 != null ? depth0.post_img : depth0), depth0))
    + "\" alt=\""
    + alias2(alias1((depth0 != null ? depth0.post_title : depth0), depth0))
    + "\">\r\n        </div>\r\n    </div>\r\n<p>"
    + alias2(alias1((depth0 != null ? depth0.post_content : depth0), depth0))
    + "</p>";
},"useData":true});
templates['footer'] = template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<div class=\"footer\">\r\n    <p>CopyRight &copy; 2017 - <spam>Ningun video se encuentra alojado en nuestros servidores.</spam></p>\r\n    <div><a href=\"#\">Terminos y condiciones</a> <a href=\"#\">Politica de Privacidad</a> <a href=\"#\">Sobre AnimeB</a></div>\r\n</div>";
},"useData":true});
templates['header'] = template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    return "<nav class=\"nav\">\r\n    <div>\r\n        <a href=\"?view=index\"><img src=\"view/main/img/Anime-Logo.jpg\" alt=\"Logo-Site\"></a>\r\n    </div>\r\n<!--<div>\r\n        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>\r\n    </div>-->\r\n    <div>\r\n        <a id=\"signin\" >Sign In</a>\r\n        <a id=\"signup\">Sign Up</a>\r\n    </div>\r\n</nav>\r\n<div id=\"signin-box\" class=\"header-box-one hiden\">\r\n    <form id=\"signin-form\" method=\"post\" onkeypress=\"runScriptLogin(event)\" >\r\n        <div><i id=\"signin-close\" class=\"fa fa-close\"></i></div>\r\n        <input type=\"text\" name=\"user\" placeholder=\"Username\"><br>\r\n        <input type=\"password\" name=\"pass\" placeholder=\"Password\"><br>\r\n        <input type=\"button\" value=\"SIGN IN\" onclick=\"goLogin()\">\r\n    </form>    \r\n</div>\r\n<div id=\"signup-box\" class=\"header-box-two hiden\">\r\n    <form id=\"signup-form\" method=\"post\" onkeypress=\"runScriptLogup(event)\">\r\n        <div><i id=\"signup-close\" class=\"fa fa-close\"></i></div>\r\n        <input type=\"text\" name=\"name\" placeholder=\"Name\"><br>\r\n        <input type=\"text\" name=\"lname\" placeholder=\"Lastname\"><br>\r\n        <input type=\"text\" name=\"mail\" placeholder=\"E-mail\"><br>\r\n        <input type=\"text\" name=\"user\" placeholder=\"Username\"><br>\r\n        <input type=\"password\" name=\"pass\" placeholder=\"Password\"><br>\r\n        <input type=\"button\" value=\"SIGN UP\" onclick=\"goLogup()\">     \r\n    </form>\r\n</div>";
},"useData":true});
templates['header_user'] = template({"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    var alias1=container.lambda, alias2=container.escapeExpression;

  return "<nav class=\"nav\">\r\n    <div>\r\n        <a href=\"index.php\"><img src=\"view/main/img/Anime-Logo.jpg\" alt=\"Logo-Site\"></a>\r\n    </div>\r\n<!--<div>\r\n        <i class=\"fa fa-search\" aria-hidden=\"true\"></i>\r\n    </div>-->\r\n    <div>\r\n        Welcome, "
    + alias2(alias1((depth0 != null ? depth0.user_login : depth0), depth0))
    + "\r\n        <a id=\"user_insert\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></a>\r\n        <a id=\"user_config\" ><i class=\"fa fa-cog\" aria-hidden=\"true\"></i></a>\r\n        <a id=\"user_signout\" ><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i></a>\r\n    </div>    \r\n    </nav>\r\n        <div id=\"insert-box\" class=\"header-box-one hiden\">\r\n            <form id=\"insert-form\" name=\"insert\" method=\"post\" enctype=\"multipart/form-data\" onkeypress=\"runScriptInsert(event)\">\r\n                <div><i id=\"insert-close\" class=\"fa fa-close\"></i></div>\r\n                <h2>Insert new content</h2><br>\r\n                <input type=\"text\" name=\"title\" placeholder=\"Anime's title\"><br>\r\n                <textarea name=\"content\" id=\"\" placeholder=\"Write the anime's plot\" cols=\"24\" rows=\"10\"></textarea><br>\r\n            <!--<input type=\"hidden\"  name=\"MAX_FILE_SIZE\" value=\"60000\" />-->\r\n                <input type=\"file\" name=\"image\" id=\"image\" accept=\"image/*\" >\r\n                <input type=\"button\" name=\"submit_insert\" value=\"INSERT\" onclick=\"goInsert()\">\r\n            </form>    \r\n        </div>\r\n        <div id=\"config-box\" class=\"header-box-two hiden\">\r\n            <form id=\"config-form\" method=\"post\" onkeypress=\"runScriptConfig(event)\">\r\n                <div><i id=\"config-close\" class=\"fa fa-close\"></i></div>\r\n                <input type=\"text\" name=\"name\" placeholder=\"Name\" value=\""
    + alias2(alias1((depth0 != null ? depth0.user_name : depth0), depth0))
    + "\"><br>\r\n                <input type=\"text\" name=\"lname\" placeholder=\"Lastname\" value=\""
    + alias2(alias1((depth0 != null ? depth0.user_lastname : depth0), depth0))
    + "\"><br>\r\n                <input type=\"text\" name=\"mail\" placeholder=\"E-mail\" value=\""
    + alias2(alias1((depth0 != null ? depth0.user_email : depth0), depth0))
    + "\"><br>\r\n                <input type=\"text\" name=\"user\" placeholder=\"Username\" value=\""
    + alias2(alias1((depth0 != null ? depth0.user_login : depth0), depth0))
    + "\"><br>\r\n                <input type=\"password\" name=\"pass\" placeholder=\"Password\" value=\""
    + alias2(alias1((depth0 != null ? depth0.user_password : depth0), depth0))
    + "\"><br>\r\n                <input type=\"button\" value=\"SIGN UP\" onclick=\"goConfig()\">     \r\n            </form>\r\n        </div>";
},"useData":true});
templates['layout'] = template({"1":function(container,depth0,helpers,partials,data) {
    var alias1=container.lambda, alias2=container.escapeExpression;

  return "<a href=\"?view=anime&anime="
    + alias2(alias1((depth0 != null ? depth0.ID : depth0), depth0))
    + "\" target=\"_blank\">       \r\n        <div class=\"content-box\">\r\n             <div>\r\n                 <img src=\""
    + alias2(alias1((depth0 != null ? depth0.post_img : depth0), depth0))
    + "\" alt=\""
    + alias2(alias1((depth0 != null ? depth0.post_title : depth0), depth0))
    + " \">\r\n                 <h3>"
    + alias2(alias1((depth0 != null ? depth0.post_title : depth0), depth0))
    + "</h3>\r\n                 <p>"
    + alias2(alias1((depth0 != null ? depth0.post_content : depth0), depth0))
    + "</p>\r\n             </div>\r\n        </div>\r\n</a>         \r\n";
},"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1;

  return ((stack1 = helpers.each.call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? depth0.anime : depth0),{"name":"each","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data})) != null ? stack1 : "");
},"useData":true});
templates['slider'] = template({"1":function(container,depth0,helpers,partials,data) {
    var helper, alias1=container.escapeExpression, alias2=container.lambda;

  return "        <div class=\"slide slide-"
    + alias1(((helper = (helper = helpers.index || (data && data.index)) != null ? helper : helpers.helperMissing),(typeof helper === "function" ? helper.call(depth0 != null ? depth0 : (container.nullContext || {}),{"name":"index","hash":{},"data":data}) : helper)))
    + "\">\r\n            <div class=\"slide__bg\" style=\"background-image: url("
    + alias1(alias2((depth0 != null ? depth0.post_img : depth0), depth0))
    + ")\"></div>\r\n            <div class=\"slide__content\">\r\n                <svg class=\"slide__overlay\" viewBox=\"0 0 720 405\" preserveAspectRatio=\"xMaxYMax slice\">\r\n                    <path class=\"slide__overlay-path\" d=\"M0,0 145,0 390,405 0,405\" />\r\n                </svg>\r\n                <div class=\"slide__text\">\r\n                    <h2 class=\"slide__text-heading\">"
    + alias1(alias2((depth0 != null ? depth0.post_title : depth0), depth0))
    + "</h2>\r\n                    <p class=\"slide__text-desc\">"
    + alias1(alias2((depth0 != null ? depth0.post_content : depth0), depth0))
    + "</p>\r\n                    <a href=\"?view=anime&anime="
    + alias1(alias2((depth0 != null ? depth0.ID : depth0), depth0))
    + "\" class=\"slide__text-link\">Read more</a>\r\n                </div>\r\n            </div>\r\n        </div>\r\n";
},"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1;

  return "<div class=\"slider-container\">\r\n    <div class=\"slider-control left inactive\"></div>\r\n    <div class=\"slider-control right\"></div>\r\n    <ul class=\"slider-pagi\"></ul>\r\n    <div class=\"slider\">\r\n"
    + ((stack1 = helpers.each.call(depth0 != null ? depth0 : (container.nullContext || {}),(depth0 != null ? depth0.slide : depth0),{"name":"each","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data})) != null ? stack1 : "")
    + "    </div>\r\n</div>";
},"useData":true});
})();
