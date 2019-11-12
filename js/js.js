function callconn(casen) {if (navigator.geolocation) {navigator.geolocation.watchPosition(showPosition4);
  } else {   x.innerHTML = "Geolocation is not supported by this browser.";}}function showPosition4(position) {var ln=position.coords.longitude;
    var lt=position.coords.latitude;if (window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
var PageToSendTo = "connprocess.php?conncode="+casen"&theLatt="+lt+"&theLong="+ln;
xmlhttp.open("GET", PageToSendTo, false);
xmlhttp.send();alert("Connection Code"+casen);window.location.assign("http://www.p2pcell.com");}