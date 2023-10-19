const loadScript = function ( url, callback ) {
  if (document.querySelectorAll( `script[src = "${url}"]` ).length > 0) {
    return;
  }
  var script                                 = document.createElement( "script" );
  script.type                                = "text/javascript";

  script.setAttribute( 'src', url );
  document.head.appendChild( script );
  if (callback) {
    script.onload = function() {
      callback()
    };
  }
  return this;
};