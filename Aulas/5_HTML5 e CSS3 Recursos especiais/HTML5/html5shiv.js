// / **
// * @preserve HTML5 Shiv 3.7.3 | @afarkas @jdalton @jon_neal @rem | Licenciado MIT / GPL2
// * /
// ! função ( a , b ) { função  c ( a , b ) { var  c = a . createElement ( "p" ) , d = a . getElementsByTagName ( "head" ) [ 0 ] || a . documentElement ; retorno  c . innerHTML = "x <style>" + b + "</style>" , d. insertBefore ( c . lastChild , d . firstChild ) } função  d ( ) { var  a = t . elementos ; return "string" == typeof  a ? a . split ( "" ) : a } função  e ( a , b ) { var  c = t . elementos ;"string" ! = typeof  c && ( c = c . join ( "" ) ) , "string" ! = typeof  a && ( a = a . join ( "" ) ) , t . elementos = c + "" + a , j ( b ) } função  f ( a ) { var  b = s[a[q]];return b||(b={},r++,a[q]=r,s[r]=b),b}function g(a,c,d){if(c||(c=b),l)return c . createElement ( a ) ; d || ( d = f ( c ) ) ; var  e ; return  e = d . cache [ a ] ? d . cache [ a ] . cloneNode ( ) : p . teste ( a ) ? ( d . cache [ a ] = d. createElem ( a ) ) . cloneNode ( ) : d . createElem ( um ) , ! e . canHaveChildren || o . teste ( a ) || e . tagUrn ? e : d . frag . appendChild ( e ) } função  h ( a , c ) { if ( a||(a=b),l)return a.createDocumentFragment();c=c||f(a);for(var e=c.frag.cloneNode(),g=0,h=d(),i=h.length;i>g;g++)e.createElement(h[g]);return e}function i(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag= b . createFrag ( ) ) , a . createElement = function ( c ) { return  t . shivMethods ? g ( c , a , b ) : b . createElem ( c ) } , a . createDocumentFragment = Function ( "h, f" , "return function () {var n = f.cloneNode (), c = n.createElement; h.shivMethods && (" + d().join().replace(/[\w\-:]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(t,b.frag) } função  j ( a ) { a || ( a = b ) ; var  d = f ( a ) ; voltar ! t . shivCSS || k || d . hasCSS || ( d . hasCSS = !! c ( a , "artigo, à parte, diálogo, figcaption, figura, rodapé, cabeçalho, hgroup, principal, nav, seção {display: bloco} marca {background: # FF0; cor: # 000} modelo {display: none} " )),l||i(a,d),a}var k,l,m="3.7.3",n=a.html5||{},o=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,p=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul) $ / i , q = "_html5shiv" , r = 0 , s = { } ; ! função ( ) { tente { var  a = b . createElement ( "a" ) ; a . innerHTML = "<xyz> </xyz>" , k = "escondido" em  a , l = 1 == a . childNodes . comprimento||function(){b.createElement("a");var a=b.createDocumentFragment();return"undefined"==typeof a.cloneNode||"undefined"==typeof a.createDocumentFragment||"undefined"==typeof a.createElement}()}catch(c){k = ! 0 , l = ! 0 } } ( ) ; var  t = { elementos : n . elementos || "abbr artigo à parte áudio bdi canvas dados datalist details diálogo figcaption figura rodapé cabeçalho hgroup marca principal medidor nav saída imagem progresso seção resumo modelo tempo vídeo" , versão : m , shivCSS : n . shivCSS ! ==! 1 , supportsUnknownElements : l , shivMethods: n . shivMethods ! ==! 1 , digite : "default" , shivDocument : j , createElement : g , createDocumentFragment : h , addElements : e } ; a . html5 = t , j ( b ) , "objeto" == tipo de  módulo && módulo . exportações && ( módulo . exportações= t ) } ( "undefined" ! = typeof  window ? window : this , document ) ;