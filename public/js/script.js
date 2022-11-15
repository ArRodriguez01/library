let cut=document.cookie.split(";");
const color=cut[cut.length-1];
var bt1=document.getElementById("bt1");
let cut2=color.split("=");
const colord=cut2[1];
console.log(colord);
const doc =document.body.style.backgroundColor;
bt1.addEventListener("click",function(){
   
   doc=`${colord}`;
})