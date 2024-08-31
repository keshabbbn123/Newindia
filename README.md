
<!------pluging---------------------------->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="jquery.wheelcolorpicker.js"></script>
<link type="text/css" rel="stylesheet" href="css/wheelcolorpicker.css" />
<script src="../userJs/speech.js"></script>
<script src="../userJs/firework.js"></script>
<script src="../userJs/loadTheme.js"></script>

<!------pluging---------------------------->



<div class="noticeOverlayDiv" id="noticeOverlayDiv"><!-----------------notice div-->
<div class="infoDiv" id="infoDiv">
    <b>!!ANOUNCEMENT!!</b><br>
Tambola is legal game in india except in Assam and Odhisa. <br>
         Incase if system failure during the game there will be re-game.<br>
          In case of re-game ticket can not be cancelled.
          <br>This website is provided by <a href="http://starthousie.com">starthousie.com</a> an ONCdigital's property,<a href="certificate.php">click here</a> to check certificate.
<br>
<button class="acceptBtn" onclick="speak()">I ACCEPT</button>
</div>
</div><!-----------------notice div-->




<div class="titleDiv" id="websiteTitle">
TAMBOLA
</div>

<br>


<div class="timeDiv" name="color100" id="timeDiv">
    <img src="../imgAsset/calender.png" class="calenderImg">
    <div class="datetxt" id="date">03/20/2102</div>

    <div class="countTimetxt" id="timeLeft">03-20-30</div>

    <img src="../imgAsset/clock.png" class="clockImg">
    <div class="timetxt" id="time">03-20-21 PM</div>
    </div>



    <div class="timeDiv" name="color100" >
<div class="btnDiv100">
   <a href="whatsapp.php"><button class="bookingAgentBtn" name="titleBgColor">Join whatsapp group</button></a> 
   <a href="agentList.html"><button class="bookingAgentBtn" name="titleBgColor">Show booking agents</button></a> 
</div>

    </div>



    <div class="gameDiv" id="gameDiv"><!--------------------------------------------game div-->

<div class="numberDiv" name="color100" id="numberDiv">
<!-------------------programmatically generated div-->
</div>



<div class="couponDiv" name="color100">
<div class="couponTitleTxt">Enter ticket number to view</div>

<div class="couponInpDiv" style="width: 100%;">
    <button class="clearBtn" onclick="resetNum()">Clear</button>
    <input class="couponInp" id="ticketInp" disabled placeholder="0" type="number"/>
    <button class="clearBtn" onclick="searchTicket()">View</button>
</div>

<div class="couponNumDiv" name="color100">
    <button class="numBtn" onclick="setTicketNum(0)">0</button>
    <button class="numBtn" onclick="setTicketNum(1)">1</button>
    <button class="numBtn" onclick="setTicketNum(2)">2</button>
    <button class="numBtn" onclick="setTicketNum(3)">3</button>
    <button class="numBtn" onclick="setTicketNum(4)">4</button>

    <button class="numBtn" onclick="setTicketNum(5)">5</button>
    <button class="numBtn" onclick="setTicketNum(6)">6</button>
    <button class="numBtn" onclick="setTicketNum(7)">7</button>
    <button class="numBtn" onclick="setTicketNum(8)">8</button>
    <button class="numBtn" onclick="setTicketNum(9)">9</button>
    
    </div>

</div>
  
<div class="ticketListDiv" name="color100" id="searchTicketListDiv">

    
    <!-----------dynamically generated search ticket list-->
 
 </div>



 <div class="ticketListDiv" name="color100" id="dividentTicketListDiv">

    <!-----------dynamically generated search ticket list-->
 
 </div>


<br>
<div class="playedNumDiv" name="color100">
<div class="lastPlayedNumTxt">Last played number</div>

<div class="tenPairDiv" id="tenPairDiv">
<!-----programtically generated-->
</div>

<div class="remainderPairDiv" id="remainderPairDiv">
<!-----programtically generated-->
</div>

</div>



<div class="ticketListDiv" name="color100" id="winnerListDiv">

    
    <!-----------dynamically generated search ticket list-->
 
 </div>


</div><!--------------------------------------------game div-->













<div class="tiketListDiv" id="ticketListDiv" style="border-top: 20px solid rgba(255, 255, 255,0);"><!------------------ticket list div-->
<!-----------------------------------programmatically genearted-->
</div><!------------------ticket list div-->







<div class="propertyDiv" id="propertyDiv" style="overflow: scroll;display:none;position: fixed;"><!-----------------------------[property div]-->
    <div class="h1">Choose website title</div>
    <br>
    <button class="btn1">Go with default theme</button>
    <br>
    <button class="hideEditor" id="hideEditor" onclick="hideEditor()">>>></button>
    <br>
    <br>
    <div class="h2">Write Title</div>
    <input class="inp1" placeholder="Website title here" id="textTitleSlider" onkeyup="setTitle()" value=" "/>
    <div class="h2" style="color: rgb(0, 0, 0);">Title Size</div>
    <input type="range" min="1" max="100" value="50" id="textSizeSlider" class="slider1" onchange="setTextSize()"/>
    <div class="h2" style="color: rgb(0, 0, 0);">Title Spacing</div>
    <input type="range" min="1" max="100" value="50" id="textSpaceSlider" class="slider1" onchange="setTextSpacing()"/>
    <div class="h2" style="color: rgb(0, 0, 0);">Title Color</div>
    <input type="text" class="inp2" id="textColor" data-wheelcolorpicker data-wcp-format="rgba" onchange="setTextColor()"/>
    <div class="h2" style="color: rgb(0, 0, 0);">Title background Color</div>
    <input type="text" class="inp2" style="background: rgb(0, 255, 179);" id="titleBg" data-wheelcolorpicker data-wcp-format="rgba" onchange="setTitleBg()"/>
    <br>




    <div class="h1">Choose website background</div>
    <br>
    <div class="h2" style="color: rgb(0, 0, 0);display: inline;">Choose gradient color</div><br>
    <input type="text" class="inp2" id="gradientLeft" data-wheelcolorpicker data-wcp-format="rgba" value="rgb(0, 204, 255)" style="background:rgb(0, 204, 255);" onchange="setGradient()"/>
    <input type="text" class="inp2" id="gradientRight" data-wheelcolorpicker data-wcp-format="rgba" value="rgb(0, 255, 128)" style="background: rgb(0, 255, 128);display: inline;" onchange="setGradient()"/>
    <br> <br> <br>


    <div class="h1">Choose website theme color</div>
    <br>
    <input type="text" class="inp2" id="themeColor" data-wheelcolorpicker data-wcp-format="rgba" value="rgb(0, 174, 255)" style="background:rgb(0, 174, 255);" onchange="setThemeColor()"/>
    <br> <br> <br>


    <div class="h1">Choose number block color</div>
    <br>
    <input type="text" class="inp2" id="blockColor" data-wheelcolorpicker data-wcp-format="rgba" value="rgb(0, 174, 255)" style="background:rgb(0, 255, 255);" onchange="setBlockColor()"/>
    <br> <br> <br>

    <div class="h1">Choose ticket color</div>
    <br>
    <input type="text" class="inp2" id="ticketColor" data-wheelcolorpicker data-wcp-format="rgba" value="rgb(0, 217, 255)" style="background:rgb(0, 217, 255);" onchange="setTicketColor()"/>
    <br> <br> <br>
    <br>
    <button class="btn1" id="saveThemeBtn" onclick="saveNewTheme()">Save this theme</button>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   </div>


   
    <br>
</div><!-----------------------------[property div]-->



<script>
    laodData();
     function laodData(){

var  rentBtn=document.getElementById("rentBtn");


  $.get('../../api/rentingApi/getInfo.php',
  {},
  function(data){
      console.log(data);
try{
var json=JSON.parse(data);
//expiryDateTxt.innerHTML="Rent expiry on (Day:"+json.timeLeft.d+"/Hour:"+json.timeLeft.h+"/min:"+json.timeLeft.m+")";
var timeLeft=json.timeLeft;
if(timeLeft.d==0 && timeLeft.h==0 && timeLeft.m==0 && timeLeft.s==0){

rentBtn.style.display="block";

}


}catch(err){
console.log(err);
}
  });
}
</script>

<style>
    .rentNowBtn{
        width:20%;
        font-size:20px;
        padding: 20px;
        border-radius: 20px;
        border:0px solid grey;
        position:fixed;
        right:20px;
        bottom:10px;
        background: yellow;
        box-shadow: 2px 2px 20px blue;
    }

    
    @media only screen and (max-width: 1000px) { 
        .rentNowBtn{
        width:50%;
        font-size:30px;
        padding: 20px;
        border-radius: 20px;
        border:0px solid grey;
        position:fixed;
        right:20px;
        bottom:10px;
        background: yellow;
        box-shadow: 2px 2px 20px blue;
    }

    }
</style>

<canvas id="canvas" class="canvas">Canvas is not supported in your browser.</canvas>

<script>//web script

//global variable
var megaJson={};

//init function
loadNumber();

window.onload=function() {
    loadTheme();
  loadMegaData();
  init();
  loadAnouncement();
};;

function loadAnouncement(){
    var titleSp=document.getElementById("titleSp");

    titleSp.innerHTML=window.location.href.split('/')[2];
}

function applyTheme(){
    //apply to webpage
setTextSize();
setTextSpacing();
setTextColor();
setTitleBg();
setGradient();
setThemeColor();
setBlockColor();
setTicketColor();

}



function loadNumber(){
var numberDiv=document.getElementById("numberDiv");

for(var i=1;i<=90;i++){
var space="";
var alpha=1;
if(i<10){
space="0";
alpha=0;
}
var el='<span style="opacity:0">'+space+'</span>';

numberDiv.innerHTML=numberDiv.innerHTML+'<div><button class="numBtn" name="numBtn'+i+'" style="background: rgba(0, 255, 255,'+alpha+');">'+el+i+'</button><div>';

}

}


function loadTicketNum(ticketJson,divId){
  //  console.log(ticketJson);
var ticketListDiv=document.getElementById(divId);


var TNO=ticketJson.TNO;
var customerName=ticketJson.customerName;
var ticketRow=ticketJson.ticketRow;

var display="block";
if(divId=="winnerListDiv"){
display="none";
}

    var html1='<div id="ticketCon'+TNO+'"><div id="ticket"><div class="ticketInfoDiv"><span style="text-align: left;">Ticket: '+TNO+'</span><a href="whatsapp.php"><button class="bookBtn" style="background: greenyellow;margin-top: -25px;border:0px solid grey;">'+customerName+'</button></a></div><div class="ticketBlockDiv" name="ticketBlockDiv">';
var html2='';
var html3=' <!-------------------programmatically generated div--></div></div><button class="ticketClearBtn" id="Con'+TNO+'" name="color100" style="display:'+display+'" onclick="clearTiketDiv(this.id)">Clear</button><br><br></div>';
for(var i=0;i<27;i++){
    var TNO="";
    if(ticketRow[i]!=0){
TNO=ticketRow[i];
    }
    html2=html2+'<button class="numBtn" name="numBtn'+TNO+'">'+TNO+'</button>';
}
ticketListDiv.innerHTML=ticketListDiv.innerHTML+html1+html2+html3;





applyTheme();
setPlayedNum(megaJson.playedNum);

}

window.setInterval(() => {
   console.log("looping....");
   loadMegaData();
}, 3000);


function loadMegaData(){////----------------load mega data containing all the data

$.get('../../api/userApi/getMegaData.php',
{},
function(data){
//console.log(data);

megaJson=JSON.parse(data);
var gameStatusJson=megaJson.gameStatus;


if(speakedBefore==true){
speak();
}

//check game status e.g freez and ticket booking


if(gameStatusJson.freezStatus=="not freez"){
setGameStatus(megaJson.gameStatus);
setPlayedNum(megaJson.playedNum);
setDateTime(megaJson.startDateTime,megaJson.gameStatus);
setDivident(megaJson.winnerCheckData);
}

/*
setTimeout(function(){
    loadMegaData();
},5000);
*/

});



}



function setGameStatus(data){



}

function setPlayedNum(playedNumJson){


    if(playedNumJson!=undefined){
    var tenPairDiv=document.getElementById("tenPairDiv");
    var remainderPairDiv=document.getElementById("remainderPairDiv");

var playedNumArray=playedNumJson.data;

var tenPair=Math.floor(playedNumArray.length/10);
var remainderPair=playedNumArray.length%10;

var html1="";
var pos=0;
for(var i=0;i<tenPair*10;i++){
    html1=html1+'<button class="playedNumBtn" >'+playedNumArray[pos]+'</button>';
    pos++;

}
tenPairDiv.innerHTML=html1;


var html2="";
for(var i=0;i<remainderPair;i++){
    html2=html2+'<button class="playedNumBtn" >'+playedNumArray[pos]+'</button>';
    pos++;
}
remainderPairDiv.innerHTML=html2;



//color the played num
for(var n=0;n<playedNumArray.length;n++){
var allNumBtnArray=document.getElementsByName("numBtn"+playedNumArray[n]);
for(var b=0;b<allNumBtnArray.length;b++){
allNumBtnArray[b].style.background="yellow";
}
}



}
}


function setDateTime(dateTimeJson,gameStatusJson){
     var date=dateTimeJson.date;
     var time=dateTimeJson.time;
     var timeLeft=dateTimeJson.timeLeft;
     var gameStatus=gameStatusJson.gameStatus;
     var bookingStatus=gameStatusJson.bookingStatus;

     var h=timeLeft.h;
     var m=timeLeft.m;
     var s=timeLeft.s;

     var dateEl=document.getElementById("date");
     var timeLeftEl=document.getElementById("timeLeft");
     var timeEl=document.getElementById("time");

     var gameDiv=document.getElementById("gameDiv");
     var ticketListDiv=document.getElementById("ticketListDiv");

     dateEl.innerHTML=date;
     timeLeftEl.innerHTML=h+'-'+m+'-'+s;
     timeEl.innerHTML=time;

     if(h==0 && m==0 && s==0){
timeLeftEl.innerHTML=gameStatus;

gameDiv.style.display="block";
ticketListDiv.style.display="none";
     }else{
        gameDiv.style.display="none";
ticketListDiv.style.display="block";
     }


     if(bookingStatus=="closed"){
        gameDiv.style.display="block";
        ticketListDiv.style.display="none";
     }

}



function setTicketNum(num){
var ticketInp=document.getElementById("ticketInp");
ticketInp.value=ticketInp.value+num;
}

function resetNum(){
    var ticketInp=document.getElementById("ticketInp");
    ticketInp.style.border="0px solid red";
    ticketInp.value="";
}

function searchTicket(){
    var ticketInp=document.getElementById("ticketInp");
    var ticketListDiv=document.getElementById("searchTicketListDiv");

    if(ticketInp.value.length!=0){

$.get('../../api/userApi/searchTicket.php',
{"TNO":ticketInp.value},
function(data){
console.log(data);

    if(data=="not purchased"){
ticketInp.style.border="3px solid red";
    }else{
        

var json=JSON.parse(data);
var ticketArray=json.data;

//ticketListDiv.innerHTML="";
for(var i=0;i<ticketArray.length;i++){
loadTicketNum(ticketArray[i],"searchTicketListDiv");
}

ticketInp.value="";

    }

});


    }
}


function clearTiketDiv(clearBtnId){
    var ticketCon=document.getElementById("ticket"+clearBtnId);
    ticketCon.innerHTML="";

}

function setDivident(dividentJson){

    var dividentTicketListDiv=document.getElementById("dividentTicketListDiv");

    var dividentListArray=dividentJson.dividentList.split(",");
  //  alert(dividentListArray.length);
    var winTicketListArray=dividentJson.data;

//first build the divident list,then put ticket on it
dividentTicketListDiv.innerHTML="";
for(var d=0;d<dividentListArray.length;d++){
    var html1='<div class="titleDiv" id="websiteTitle" style="width: 93%;margin-left: 0%;border-radius:20px ;"  name="dividentDiv"><div class="dividentTitleDiv">'+dividentListArray[d]+'</div><div id="'+dividentListArray[d]+'Div">';
    var html2='</div><button class="clearBtn" id="viewBtn'+dividentListArray[d]+'" style="width: 100%;border-radius:30px;display:none;" onclick="searchTicketByWintype(this.id)">VIEW</button></div><br>';
    dividentTicketListDiv.innerHTML=dividentTicketListDiv.innerHTML+html1+html2;
}




//now load the ticket 
for(var t=0;t<winTicketListArray.length;t++){

var winType=winTicketListArray[t].winType;
var TNO=winTicketListArray[t].TNO;
var customerName=winTicketListArray[t].customerName;
var dividentDiv=document.getElementById(winType+'Div');
var viewBtn=document.getElementById('viewBtn'+winType);

dividentDiv.innerHTML=dividentDiv.innerHTML+'<div class="playedNumBtn" style="width: 100%;letter-spacing: 3px;margin-left: -3%;padding-top: 20px;">TNO: '+TNO+' (BY '+customerName+')</div>';

viewBtn.style.display="block";

}






      



//<div class="playedNumBtn" style="width: 100%;letter-spacing: 3px;margin-left: -3%;padding-top: 20px;">TNO: 54 (BY SUMIT RAJ)</div>


}



function searchTicketByWintype(viewBtnId){
var winnerListDiv=document.getElementById("winnerListDiv");

var winType=viewBtnId.split("Btn")[1];


$.get('../../api/userApi/searchTicketByWinType.php',
{"winType":winType},
function(data){
var ticketArray=JSON.parse(data).data;
if(ticketArray.length>0){
    winnerListDiv .innerHTML="";
}
for(var t=0;t<ticketArray.length;t++){
    loadTicketNum(ticketArray[t],"winnerListDiv");
}

setTimeout(function(){
    winnerListDiv.scrollIntoView({behavior: "smooth"});
},100);
});

     
}


getAllTicket();
function getAllTicket(){


    $.get('../../api/userApi/getAllTicketList.php',
    {},
    function(data){
var allTicketJsonArray=JSON.parse(data).data;
loadTicketDelay(allTicketJsonArray);
    });
}




var loadLoop=1;
var oneTimeLoadedLopp=false;
function loadTicketDelay(allTicketJsonArray){
    var ticketListDiv=document.getElementById("ticketListDiv");

setTimeout(function(){

    if(loadLoop<allTicketJsonArray.length){

loadAllTicketNum(allTicketJsonArray[loadLoop-1]);


if(oneTimeLoadedLopp==false){
    if(loadLoop==10){
  ticketListDiv.innerHTML=allTicketHtml;  
  applyTheme();
setPlayedNum(megaJson.playedNum);
}

if(loadLoop==50){
  ticketListDiv.innerHTML=allTicketHtml;  
  applyTheme();
setPlayedNum(megaJson.playedNum);
}

if(loadLoop==200){
  ticketListDiv.innerHTML=allTicketHtml;  
  applyTheme();
setPlayedNum(megaJson.playedNum);
}

if(loadLoop==300){
  ticketListDiv.innerHTML=allTicketHtml;  
  applyTheme();
setPlayedNum(megaJson.playedNum);
}

if(loadLoop==400){
  ticketListDiv.innerHTML=allTicketHtml;  
  applyTheme();
setPlayedNum(megaJson.playedNum);
}

if(loadLoop==500){
  ticketListDiv.innerHTML=allTicketHtml;  
  applyTheme();
setPlayedNum(megaJson.playedNum);
}

if(loadLoop>allTicketJsonArray.length-5){
  ticketListDiv.innerHTML=allTicketHtml;  
  applyTheme();
setPlayedNum(megaJson.playedNum);
}
}

loadTicketDelay(allTicketJsonArray);
loadLoop++;




    }else if(loadLoop>=allTicketJsonArray.length){//all ticket loaded
        loadAllTicketNum(allTicketJsonArray[loadLoop-1]);
        loadLoop=1;
        ticketListDiv.innerHTML=allTicketHtml;
        applyTheme();
        allTicketHtml="";

        oneTimeLoadedLopp=true;

       
        

        
        setPlayedNum(megaJson.playedNum);
        getAllTicket();
       // alert("loaded");
    }
},10);
}







var allTicketHtml="";
function loadAllTicketNum(ticketJson){
  //  console.log(ticketJson);

var TNO=ticketJson.TNO;
var customerName=ticketJson.customerName;
var ticketRow=ticketJson.ticketRow;

var display="none";

    var html1='<div id="ticketCon'+TNO+'"><div id="ticket"><div class="ticketInfoDiv"><span style="text-align: left;">Ticket: '+TNO+'</span><button class="bookBtn" style="background: greenyellow;margin-top: -25px;border:0px solid grey;">'+customerName+'</button></div><div class="ticketBlockDiv" name="ticketBlockDiv">';
var html2='';
var html3=' <!-------------------programmatically generated div--></div></div><button class="ticketClearBtn" id="Con'+TNO+'" name="color100" style="display:'+display+'" onclick="clearTiketDiv(this.id)">Clear</button><br><br></div>';
for(var i=0;i<27;i++){
    var TNO="";
    if(ticketRow[i]!=0){
TNO=ticketRow[i];
    }
    html2=html2+'<button class="numBtn" name="numBtn'+TNO+'">'+TNO+'</button>';
}
allTicketHtml=allTicketHtml+html1+html2+html3;




/*
applyTheme();
setPlayedNum(megaJson.playedNum);
*/
}




</script>

















<style>
    *{
        outline: none;
    }
    body{
        background-image: linear-gradient(to bottom right, rgb(0, 204, 255), rgb(0, 255, 128));
    }
.canvas{
    width:100%;
    height: 100%;
    position: fixed;
    z-index: 2;
    background: rgba(0, 0, 0,0);
    pointer-events: none;
    top:0px;
    left: 0px;
    transition:2s;
    opacity: 0;
}
    .noticeOverlayDiv{
        position: fixed;
        z-index: 5;
        width: 120%;
        height:120%;
        background: rgba(0, 0, 0,0.8);
        margin-left: -5%;
        margin-top: -5%;
       
    }
    .acceptBtn{
        width: 20%;
        background: yellow;
        font-size: 20px;
        font-weight: bold;
        border:0px solid grey;
        border-radius: 20px;
        padding: 10px;
        margin-top: 20px;
    }
    
    .infoDiv{
        width:50%;
        margin-left: 20%;
        font-size: 20px;
        background-image: linear-gradient(to bottom right, rgb(0, 204, 255), rgb(0, 255, 128));
        text-align: center;
        margin-top: 10%;
        padding: 50px;
        border-radius: 20px;
    }
    .tiketListDiv{
        width: 65%;
        margin-left: 20%;
        border: 0px solid blue;
    }
    .titleDiv{
        width:60%;
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 40px;
        text-align: center;
        background:rgb(0, 255, 179);
        margin-left: 20%;
        padding: 20px;
        color: rgb(124, 4, 88);
        letter-spacing:30px;
    }
    .timeDiv{
        width:60%;
        height: 25px;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: 20%;
        padding: 20px;
        color: rgb(0, 27, 177);
    }
    .calenderImg{
        width:50px;
        position: absolute;
        margin-top:-20px;
    }
    .dateTxt{
        position: absolute;
        font-size: 20px;
        color:black;
        font-weight: bold;
        margin-left: 5%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .countTimeTxt{
        position: absolute;
        font-size: 20px;
        color:black;
        font-weight: bold;
        margin-left: 25%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .clockImg{
        width:50px;
        position: absolute;
        margin-top:-17px;
        margin-left: 46%;
    }
    .timeTxt{
        position: absolute;
        font-size: 20px;
        color:black;
        font-weight: bold;
        margin-left: 50%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .btnDiv100{
        position: absolute;
margin-left: 15%;
margin-top: -30px;

    }
    .bookingAgentBtn{
        font-weight: bold;
        font-size: 15px;
        color:black;
        background: cyan;
        border:0px solid black;
        border-radius: 20px;
        margin-left: 0%;
        width: 200px;
        padding: 5px;
    }
.numberDiv{
        width:60%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: 20%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 10px;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
    }
.numBtn{
    font-size: 20px;
    border: 2px solid rgb(0, 255, 255);
    background: rgba(0, 255, 255,1);
    color:black;
    padding: 20px;
    margin: 3px;
    font-weight: bold;

}
.crossImg{
    position: absolute;
    width:40px;
    margin-left: -3.5%;
    margin-top: 15px;
    opacity: 1;

}
.couponDiv{
        width:60%;
        font-size: 40px;
        text-align: center;
        background:rgb(0, 174, 255);
        margin-left: 20%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 5px;
      
    }
.couponTitleTxt{
    width: 100%;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: black;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.clearBtn{
    width: 10%;
    font-size: 20px;
    padding: 10px;
    color: black;
    border: 0pc solid grey;
    background: yellow;
}
.couponInp{
    font-size: 20px;
    padding: 10px;
    border:0px solid grey;
    background: white;
    color: grey;
    text-align: center;
}
.couponNumDiv{
        width:100%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: -2.5%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 10px;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
    }
    .dividentTitleDiv{
        width: 100%;
        text-align: center;
        font-size: 35px;
        padding: 0px;
        letter-spacing: 3px;
    }
    .ticketListDiv{
        width:60%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: 20%;
        padding: 20px;
        color: rgb(0, 27, 177);
     
      
    }
.ticketInfoDiv{
    width: 100%;
    font-size: 20px;
    font-weight: bold;

}
.bookBtn{
    position:relative;
    font-size: 10px;
    font-weight: bold;
    border-radius: 20px;
    padding: 10px;
    margin-left: 65%;
    width: 20%;
    overflow:hidden;
}
.ticketBlockDiv{
        width:90%;
        font-size: 40px;
        background:rgb(0, 217, 255);
        margin-left: 20%;
        border-radius: 5px;
        padding: 20px;
        color: rgb(0, 179, 110);
        margin-top: 10px;
        margin-left:1%;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto auto auto auto;
    }
    .ticketClearBtn{
        width: 50%;
        font-size: 20px;
        padding:10px;
        margin-left: 25%;
        margin-top: 10px;
        border-radius: 20px;
        border: 3px solid black;
    }
    .playedNumDiv{
        width:60%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: 20%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 10px;
        border:0px solid grey;
    }
.playedNumBtn{
    font-size: 20px;
    padding: 10px;
    width: 60px;
    height:60px;
    border-radius: 30px;
    border:0px solid transparent;
    margin: 5px;
    background:cyan;
    display: inline-block;
}
.lastPlayedNumTxt{
    width: 100%;
    font-size: 20px;
    font-weight: bold;
    color:black;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 5px;
    background: rgba(0, 238, 255, 0.3);
    margin-left: -1%;

}

.tenPairDiv{
    width: 90%;
    display: grid;
    grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
    margin-top: 20px;
    margin-left:2%;
}
.remainderPairDiv{
    width: 90%;
    margin-left:2%;
  /* Firefox */
  display: -moz-box;
  -moz-box-pack: center;
  -moz-box-align: center;
  /* Safari and Chrome */
  display: -webkit-box;
  -webkit-box-pack: center;
  -webkit-box-align: center;
  /* W3C */
  display: box;
  box-pack: center;
  box-align: center;
}



    .propertyDiv{
        width:80%;
        height:50%;
        position:absolute;
        bottom:0px;
        background: white;
        margin-left:10%;
        transition: 1s;
    }
    .hideEditor{
font-size: 30px;
padding: 10px;
margin-left: 10%;
    }
    .btn1{
        font-size: 15px;
        color:white;
        background-color: rgb(0, 94, 170);
        border-radius: 30px;
        padding: 10px;
        border:0px solid grey;
        margin-left: 40%;
    }
    .h1{
        font-size: 40px;
        font-weight: bold;
        color:black;
        margin-left:30%;
    }
    .h2{
        font-size: 20px;
        font-weight: bold;
        color:black;
        margin-left:10%;
        margin-top: 20px;
    }
    .inp1{
        width: 80%;
        font-size: 30px;
        padding: 5px;
        border: 0px solid grey;
        border-radius: 0px;
        outline: none;
        border-bottom: 2px solid black;
        margin-left:10%;
        color: rgb(0, 0, 0);
        font-weight: bold;
        margin-top: 10px;
    
    }
    .inp2{
        width: 10%;
        font-size: 30px;
        padding: 5px;
        border: 0px solid grey;
        border-radius: 0px;
        outline: none;
        border-bottom: 2px solid black;
        margin-left:10%;
        color: rgba(0, 0, 0,0);
        font-weight: bold;
        margin-top: 10px;
    background:  rgb(0, 27, 177);
    }
    .slider1{
        width:80%;
        margin-left: 10%;
    }
    .propertyDiv::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.propertyDiv {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}









@media only screen and (max-width: 1000px) { 


    body{
        background-image: linear-gradient(to bottom right, rgb(0, 204, 255), rgb(0, 255, 128));
        background-size: 120%;
    }

    .noticeOverlayDiv{
        position: fixed;
        z-index: 5;
        width: 120%;
        height:120%;
        background: rgba(0, 0, 0,0.8);
        margin-left: -5%;
        margin-top: -5%;
       
    }
    .acceptBtn{
        width: 50%;
        background: yellow;
        font-size: 30px;
        font-weight: bold;
        border:0px solid grey;
        border-radius: 20px;
        padding: 20px;
        margin-top: 20px;
    }
    .infoDiv{
        width:70%;
        margin-left: 7%;
        font-size: 50px;
        background-image: linear-gradient(to bottom right, rgb(0, 204, 255), rgb(0, 255, 128));
        text-align: center;
        margin-top: 10%;
        padding: 50px;
        border-radius: 20px;
    }
    .tiketListDiv{
        width: 100%;
        margin-left: 3%;
        border: 0px solid blue;
    }
    .titleDiv{
        width:100%;
        font-weight: bold;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 60px;
        text-align: center;
        background:rgb(0, 255, 179);
        margin-left: 0%;
        padding: 20px;
        color: rgb(0, 27, 177);
        letter-spacing:30px;
    }
    .timeDiv{
        width:100%;
        height: 50px;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: 0%;
        padding: 20px;
        color: rgb(0, 27, 177);
    }
    .calenderImg{
        width:80px;
        position: absolute;
        margin-top:-20px;
    }
    .dateTxt{
        position: absolute;
        font-size: 30px;
        color:black;
        font-weight: bold;
        margin-left: 10%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .countTimeTxt{
        position: absolute;
        font-size: 30px;
        color:black;
        font-weight: bold;
        margin-left: 42%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .clockImg{
        width:80px;
        position: absolute;
        margin-top:-17px;
        margin-left: 65%;
    }
    .timeTxt{
        position: absolute;
        font-size: 30px;
        color:black;
        font-weight: bold;
        margin-left: 75%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .btnDiv100{
        position: absolute;
margin-left: 10%;
margin-top: -30px;
    }
    .bookingAgentBtn{
        font-weight: bold;
        font-size: 35px;
        color:black;
        background: cyan;
        border:0px solid black;
        border-radius: 20px;
        margin-left: 0%;
        padding: 10px;
        padding-left: 0px;
        padding-right: 20px;
        width: 400px;
    }
.numberDiv{
        width:102%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: -2%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 10px;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
    }
.numBtn{
    font-size: 35px;
    border: 4px solid rgb(0, 255, 255);
    background: rgba(0, 255, 255,1);
    color:black;
    padding: 20px;
    margin: 3px;
    font-weight: bold;

}
.crossImg{
    position: absolute;
    width:40px;
    margin-left: -3.5%;
    margin-top: 15px;
    opacity: 1;

}
.couponDiv{
        width:100%;
        font-size: 40px;
        text-align: center;
        background:rgb(0, 174, 255);
        margin-left: 0%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 5px;
      
    }
.couponTitleTxt{
    width: 100%;
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    color: black;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.clearBtn{
    width: 20%;
    font-size: 30px;
    padding: 20px;
    color: black;
    border: 0pc solid grey;
    background: yellow;
}
.couponInp{
    font-size: 30px;
    padding: 20px;
    border:0px solid grey;
    background: white;
    color: grey;
    text-align: center;
}
.couponNumDiv{
        width:100%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: -2.5%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 10px;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
    }
    .dividentTitleDiv{
        width: 100%;
        text-align: center;
        font-size: 55px;
        padding: 0px;
        letter-spacing: 3px;
    }
    .ticketListDiv{
        width:100%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: 0%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 5px;
      
    }
.ticketInfoDiv{
    width: 100%;
    font-size: 40px;
    font-weight: bold;

}
.bookBtn{
    position: relative;
    font-size: 30px;
    font-weight: bold;
    border-radius: 20px;
    padding: 10px;
    margin-left: 47%;
    width: 30%;
    margin-top: 100px;
}
.ticketBlockDiv{
        width:90%;
        font-size: 40px;
        background:rgb(0, 217, 255);
        margin-left: 20%;
        border-radius: 5px;
        padding: 20px;
        color: rgb(0, 179, 110);
        margin-top: 10px;
        margin-left:1%;
        display: grid;
        grid-template-columns: auto auto auto auto auto auto auto auto auto;
    }
    .ticketClearBtn{
        width: 50%;
        font-size: 30px;
        padding:20px;
        margin-left: 25%;
        margin-top: 10px;
        border-radius: 40px;
        border: 3px solid black;
    }
    .playedNumDiv{
        width:100%;
        font-size: 40px;
        background:rgb(0, 174, 255);
        margin-left: 0%;
        padding: 20px;
        color: rgb(0, 27, 177);
        margin-top: 10px;
        border:0px solid grey;
    }
.playedNumBtn{
    font-size: 30px;
    padding: 20px;
    width: 80px;
    height:80px;
    border-radius: 40px;
    border:0px solid transparent;
    margin: 5px;
    background:cyan;
    display: inline-block;
}
.lastPlayedNumTxt{
    width: 100%;
    font-size: 40px;
    font-weight: bold;
    color:black;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 10px;
    background: rgba(0, 238, 255, 0.3);
    margin-left: -1%;

}

.tenPairDiv{
    width: 100%;
    display: grid;
    grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
    margin-top: 20px;
    margin-left:-1%;
}
.remainderPairDiv{
    width: 100%;
    margin-left:-1%;
  /* Firefox */
  display: -moz-box;
  -moz-box-pack: center;
  -moz-box-align: center;
  /* Safari and Chrome */
  display: -webkit-box;
  -webkit-box-pack: center;
  -webkit-box-align: center;
  /* W3C */
  display: box;
  box-pack: center;
  box-align: center;
}



    .propertyDiv{
        width:80%;
        height:50%;
        position:absolute;
        bottom:0px;
        background: white;
        margin-left:10%;
    }
    .hideEditor{
font-size: 60px;
padding: 20px;
    }
    .h1{
        font-size: 40px;
        font-weight: bold;
        color:black;
        margin-left:30%;
    }
    .h2{
        font-size: 20px;
        font-weight: bold;
        color:black;
        margin-left:10%;
        margin-top: 20px;
    }
    .inp1{
        width: 80%;
        font-size: 30px;
        padding: 5px;
        border: 0px solid grey;
        border-radius: 0px;
        outline: none;
        border-bottom: 2px solid black;
        margin-left:10%;
        color: rgb(0, 0, 0);
        font-weight: bold;
        margin-top: 10px;
    
    }
    .inp2{
        width: 10%;
        font-size: 30px;
        padding: 5px;
        border: 0px solid grey;
        border-radius: 0px;
        outline: none;
        border-bottom: 2px solid black;
        margin-left:10%;
        color: rgba(0, 0, 0,0);
        font-weight: bold;
        margin-top: 10px;
    background:  rgb(0, 27, 177);
    }
    .slider1{
        width:80%;
        margin-left: 10%;
    }
    .propertyDiv::-webkit-scrollbar {
  display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.propertyDiv {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}










}


</style>














