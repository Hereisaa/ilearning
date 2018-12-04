var teach_json1 = {
	"capital":["A","Ă","Â","B","C","D","Đ","E","Ê","G","H","I","K","L","M","N","O","Ô","Ơ","P","Q","R","S","T","U","Ư","V","X","Y"],
	"lowercase":["a","ă","â","b","c","d","đ","e","ê","g","h","i","k","l","m","n","o","ô","ơ","p","q","r","s","t","u","ư","v","x","y"],
};
var cllapse1_tbody;

window.onload = function(){	
    cllapse1_tbody = document.getElementById("cllapse1_tbody");
}


function review_show(){
	for (var i = 0; i <teach_json1.capital.length ; i++) {
		var row = cllapse1_tbody.insertRow(i);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
        cell1.innerHTML = teach_json1.capital[i];
        cell2.innerHTML = teach_json1.lowercase[i];
	}
}

// 導向 teach.html
function teach_page(){
	window.location.href = "/templates/teach.html";
}


