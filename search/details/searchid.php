<script>
var btn=document.getElementById("btn");
var info=document.getElementById("info");
var src=document.getElementById("src");

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
    htmlString+=  "<br/><h1>"+ data.Title + " - <h5>"+ data.Type  +"</h5></h1><br/>" ;
    if(data.Response == 'True'){
        htmlString+="<a href='index.php?id="+ data.imdbID  +"'><img src='";
        if(data.Poster!="N/A")
            htmlString+= data.Poster ;
        else 
            htmlString+= "https://content.schoolinsites.com/api/documents/ebbca81b01694c91aa908f5374842a9f.gif";
        htmlString+= "' style='margin-left: auto;margin-right: auto;width:15em;float:right;padding:1px;border:1px solid #021a40;'></a>"  ; 
        htmlString+= data.Year + "<br/><br/>"+ data.Genre;
        htmlString+="<br/><br/>"+ data.Actors + "<br/><br/>"+  data.Plot;
        htmlString+= "<br/> <br/>IMDB ID : "+ data.imdbID +"<br/>IMDB Rating : "+ data.imdbRating  +"<br/>IMDB Votes: "+ data.imdbVotes  ;
        htmlString+= " <br/><br/>Available in "+ data.Language;
        htmlString+= "<br/><br/> BoxOffice amount : "+ data.BoxOffice;
        htmlString+= "<br/><br/> This film got rated '"+ data.Rated +"'.<br/><br/> This film is directed by "+ data.Director;
        htmlString+= " and produced by "+ data.Production  +"<br/><br/> Cast : "+ data.Actors ;
        htmlString+= "<br/><br/> The list of awards : "+ data.Awards +".<br/><br/>"; 
        console.log(data.Title);
    }
    else alert("NO results FOUND");
    info.insertAdjacentHTML('beforeend',htmlString);
}

function renderDoc(data){
    console.log(data);
    var html="";


    html+="<p><iframe width='853' height='480' src='https://www.youtube.com/embed/"+ data.items[0].id.videoId +"'></iframe></p>";
    console.log(data.items[0].snippet.title);
    src.insertAdjacentHTML('beforeend',html);
}

window.onload=function(){
    var mid = $_GET('id');
    
    console.log(mid);
    var req = new XMLHttpRequest();
    var doc = new XMLHttpRequest();
    //get for recieve and post for send
    req.open('GET','http://www.omdbapi.com/?apikey=7da2dc37&i='+ mid +'&plot=full');
    doc.open('GET','https://www.googleapis.com/youtube/v3/search?q='+mid+'-trailer&order=relevance&part=snippet&type=video&maxResults=1&key=AIzaSyBwphg789ntL8W195s-KTTrRjnNKTO8PNk');

    req.onload = function(){
        
        var ourData = JSON.parse(req.responseText);
        //var ourData=req.responseText;
        console.log(ourData);
        renderData(ourData);
    };
    doc.onload = function(){
        
        var ourData = JSON.parse(doc.responseText);
        //var ourData=req.responseText;
        console.log(ourData);
        renderDoc(ourData);
    };
    req.onerror=function(){
        console.log("Connection error");
        alert("ERROR");
    };
    doc.onerror=function(){
        console.log("Connection error");
        alert("ERROR");
    };
    req.send();
    doc.send();

}

</script>

