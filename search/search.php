<script>
var btn=document.getElementById("btn");
var info=document.getElementById("info");

var page=1;
var count=0;

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
    var htmlString="<br/><tr>Page :"+ page +": Results</tr><tr>";
    
    
    if(data.Response == 'True')

    for(i=0;i<data.Search.length;i++){
        
        if(i%5==0){
            htmlString+="<br/></tr><tr>";
        }

        htmlString+="<td ><div class='img__wrap'>&nbsp <img src='";
        if(data.Search[i].Poster!="N/A")
            htmlString+= data.Search[i].Poster ;
        else 
            htmlString+= "https://content.schoolinsites.com/api/documents/ebbca81b01694c91aa908f5374842a9f.gif";
        htmlString+= "' style='width:250px;height:375px;' class='img__img'>";
        htmlString+= "<a href='details/index.php?id="+ data.Search[i].imdbID +"&name="+ data.Search[i].Title +"&poster="+ data.Search[i].Poster +"'>";
        htmlString+= "<p class='img__description'><br/>Movie Name : " + data.Search[i].Title + " <br/>Release Year : " + data.Search[i].Year + " <br/> Type :  "+ data.Search[i].Type ;
        htmlString+= "<br/>IMDB ID : "+ data.Search[i].imdbID +" <br/> <br/><br/><br/><br/><br/>Click for more details</p></a></div></td>";

        console.log(data.Search[i].Title);
       
    }
    else alert("NO results FOUND");
    htmlString+="</tr><br/>";
    info.insertAdjacentHTML('beforeend',htmlString);

    
    
}


function doIt(){
    var name = $_GET('name');
    var year = $_GET('year');
    var type = $_GET('type');
  
    console.log("page",page,"",name);

    if(page<5){
    btn.classList.remove("hide-me");
    btn.classList.add("show-me");
    }
    else{
        btn.classList.remove("show-me");
        btn.classList.add("hide-me"); 
    }
    if(name!=null){
        var req = new XMLHttpRequest();
        //get for recieve and post for send
        req.open('GET','http://www.omdbapi.com/?apikey=7da2dc37&s='+ name +'&y='+ year +'&type='+ type +'&page='+ page);
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
        
        if(page>5){
            btn.classList.add("hide-me");
        }

    }
    else
        alert ("The movie name should be entered...Careful with the buttons BTW..");

}


doIt();

btn.addEventListener("click",function(){page++;console.log("page",page);doIt();})


</script>
