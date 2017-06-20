/*
 * @name: getCleanedString
 * @description: devuleve una cadena sin caractreres raros.
 * @params: none
 * @return: none
 *  
*/
function getCleanedString(cadena)
{
  var specialChars = "!@#$^&%*()+=-[]\/{}|:<>?,.";

  for (var i = 0; i < specialChars.length; i++) 
  {
    cadena= cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
  }   

  cadena = cadena.toLowerCase();

  cadena = cadena.replace(/ /g,"-");

  cadena = cadena.replace(/á/gi,"a");
  cadena = cadena.replace(/é/gi,"e");
  cadena = cadena.replace(/í/gi,"i");
  cadena = cadena.replace(/ó/gi,"o");
  cadena = cadena.replace(/ú/gi,"u");
  cadena = cadena.replace(/ñ/gi,"n");
  return cadena;
}

/*
 * @name: ued_encode
 * @description: codifica un array para evitar problemas con los envios en AJAX.
 * @params: none
 * @return: none
 *  
*/
function ued_encode(arr,current_index) 
{
  var query = ""
  if(typeof current_index=='undefined') current_index = '';

  if(typeof(arr) == 'object') {
    var params = new Array();
    for(key in arr) {
      var data = arr[key];
      var key_value = key;
      if(current_index) {
        key_value = current_index+"["+key+"]"
      }

      if(typeof(data) == 'object') {
        if(data.length) { //List
          for(var i=0;i<data.length; i++) {
            params.push(key_value+"[]="+ued_encode(data[i],key_value)); //:RECURSION:
          }
        } else { //Associative array
          params.push(ued_encode(data,key_value)); //:RECURSION:
        }
      } else { //String or Number
        params.push(key_value+"="+encodeURIComponent(data));
      }
    }
    query = params.join("&");
  } else {
    query = encodeURIComponent(arr);
  }

  return query;
}