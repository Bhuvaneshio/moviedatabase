<script>


function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}


function renderData(data){
    console.log(data);
    var htmlString="";
    
    if(data.Response == "True"){
        htmlString+="<p><a href='details/index.php?id="+ data.imdbID  +"'><img src='";
        if(data.Poster!="N/A")
            htmlString+= data.Poster ;
        else 
            htmlString+= "https://content.schoolinsites.com/api/documents/ebbca81b01694c91aa908f5374842a9f.gif";
        htmlString+= "' style='margin-left: auto;margin-right: auto;width:15em;float:right;padding:1px;border:1px solid #021a40;'></a>"  ; 
        htmlString+= "<br/>"+ data.Title + " is released in the year " + data.Year + " is a genre of "+ data.Genre +".</p>"; 
        console.log(data.Title);
    }
    else alert("NO results FOUND");
    document.write(htmlString);
 }


window.onload=function(){
   
    var name = $_GET('name');
    var year = $_GET('year');
    var mid = $_GET('mid');
    
    console.log(name,mid);
    if(name!="null"){
    var req = new XMLHttpRequest();
    //get for recieve and post for send
    req.open('GET','http://www.omdbapi.com/?apikey=7da2dc37&i='+ mid +'&plot=full');
    req.onload = function(){
        
        var ourData = JSON.parse(req.responseText);
        //var ourData=req.responseText;
        console.log(ourData);
        renderData(ourData);
    };
    req.onerror=function(){
        console.log("Connection error");
        alert("ERROR");
    };
    req.send();
}
};
</script>

