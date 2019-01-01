function loadXML(file)
{
    var xmlHttp;
    if (window.XMLHttpRequest)
    {
        xmlHttp = new XMLHttpRequest();
    }
    else
    {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");

    }
    xmlHttp.onreadystatechange = function() 
    {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
        {
            var xml = xmlHttp.responseXML;
            CD = xml.documentElement.getElementsByTagName("CD");
            TITLE = CD[0].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue;
            document.getElementById("CATALOG").innerHTML = TITLE;   
        }
    }
    xmlHttp.open("GET",file,true);
    xmlHttp.send("");
}