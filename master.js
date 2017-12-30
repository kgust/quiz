function move_in(img_name,img_src) {
document[img_name].src=img_src;
}
function move_out(img_name,img_src) {
document[img_name].src=img_src;
}

var NewWindow1
function GoWhere1(Whatpage1)
{
ShowWindow1=window.open("","NewWindow1","toolbar=0,menubar=0,location=0,directories=0,status=0,scrollbars=1,resizable=1,copyhistory=0,width=420,height=250");
ShowWindow1.location.href=Whatpage1
self.NewWindow1 = ShowWindow1
}
var win1Open = null
var win2Open = null

function displayImage(picName, windowName, windowWidth, windowHeight){
  return window.open(picName,windowName,"toolbar=no,scrollbars=no,resizable=no,width=" + (parseInt(windowWidth)+20)  + ",height=" + (parseInt(windowHeight)+15)) 
  }

function winClose(){    // close all open pop-up windows   
  if(win1Open != null) win1Open.close() 
  if(win2Open != null) win2Open.close() 
  }
function doNothing(){}  // does nothing, used by some scripts.

function displayImage(picName,  windowName, windowWidth, windowHeight){
  var winHandle = window.open("" ,windowName,"toolbar=no,scrollbars=no,resizable=no,width=" + windowWidth + ",height=" + windowHeight)
  if(winHandle != null){
    var htmlString = "<html><head><title>Picture</title></head>"  
    htmlString += "<body background=" + picName + ">"
    htmlString += "</body></html>"
    winHandle.document.open()
    winHandle.document.write(htmlString)
    winHandle.document.close()
    }   
  if(winHandle != null) winHandle.focus() //brings window to top
  return winHandle
  }
  
// Quick Find Jump Menu
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_jumpMenuGo(selName,targ,restore){ //v3.0
  var selObj = MM_findObj(selName); if (selObj) MM_jumpMenu(targ,selObj,restore);
}