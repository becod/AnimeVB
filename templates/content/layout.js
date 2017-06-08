{"1":function(container,depth0,helpers,partials,data) {
    return "<div class=\"content-box\">\n     <div>\n         <img src=\""
    + container.escapeExpression(container.lambda((depth0 != null ? depth0.img : depth0), depth0))
    + "\" alt=\""
    + container.escapeExpression(container.lambda((depth0 != null ? depth0.name : depth0), depth0))
    + " \">\n         <h3>"
    + container.escapeExpression(container.lambda((depth0 != null ? depth0.name : depth0), depth0))
    + "</h3>\n         <p>"
    + container.escapeExpression(container.lambda((depth0 != null ? depth0.about : depth0), depth0))
    + "</p>\n     </div>\n</div>\n";
},"compiler":[7,">= 4.0.0"],"main":function(container,depth0,helpers,partials,data) {
    var stack1;

  return ((stack1 = helpers.each.call(depth0 != null ? depth0 : {},(depth0 != null ? depth0.anime : depth0),{"name":"each","hash":{},"fn":container.program(1, data, 0),"inverse":container.noop,"data":data})) != null ? stack1 : "");
},"useData":true}