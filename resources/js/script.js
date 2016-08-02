//var x = prompt("Entrer un entier");
/*var f=1;
for(var i=1; i<=x;i++)
{
	f*=i;
}
alert(x+"! =" +f);

function fact(n){
	if (n==1 || n==0)
		return 1;
	else return n*fact(n-1);
}
alert(x+"! =" +fact(x));


function hour()
{
	var d= new Date();
	var h = d.getHours();
	if(h<12)
		alert("Bonne journée!");
	else if(h<18)
		alert("Bonne après-midi!");
	else
		alert("Bonne soirée!")
}
hour();
*/


var empty_object = {};
var stooge ={
	"first_name":"Mouné",
	"last_name" : "Tayéhi",
	display:function(){
		document.writeln(this.first_name + " " + this["last_name"] +"<br>")
	}
}
stooge.display();
document.writeln(stooge.first_name + "<br>");
document.writeln(stooge.last_name);
