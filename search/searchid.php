<script>
var info=document.getElementById("info");
var news=document.getElementById("news");

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


    var htmlString="";

    if(data.Response == 'True'){
    

    console.log(data);
    
        htmlString+="<p><a href='details/index.php?id="+ data.imdbID  +"&name="+ data.Title +"&poster="+ data.Poster +"'><img src='";
        if(data.Poster!="N/A")
            htmlString+= data.Poster ;
        else 
            htmlString+= "https://content.schoolinsites.com/api/documents/ebbca81b01694c91aa908f5374842a9f.gif";
        htmlString+= "' style='margin-left: auto;margin-right: auto;width:15em;float:right;padding:1px;border:1px solid #021a40;'></a>"  ; 
        htmlString+= "<br/>"+ data.Title + " is released in the year " + data.Year + " is a genre of "+ data.Genre;
        htmlString+= "<br/> <br/>IMDB ID : "+ data.imdbID +"<br/> <br/>Available in "+ data.Language +"<br/> <br/> Plot : "+ data.Plot ;
        htmlString+= "<br/><br/> This film got rated '"+ data.Rated +"'.<br/><br/> This film is directed by "+ data.Director;
        htmlString+= ".<br/><br/> Cast : "+ data.Actors +".</p>"; 
        console.log(data.Title);
    }
    else alert("enter a valid IMDB ID...");
    info.insertAdjacentHTML('beforeend',htmlString);
}



   
    var mid = $_GET('mid');
    
    console.log(mid);

    if(mid!=null){
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
    news.innerHTML='..Click on the <strong>Poster</strong> for More activities and Details..'
    }


</script>

