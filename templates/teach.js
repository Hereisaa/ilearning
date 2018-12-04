var capital,lowercase,capital_nounce,capital_vocabulary_c,capital_vocabulary_v,capital_vocabulary_img,complete_btn;
var num=0;
var part1_num = 0;
var part1_fault = 0;
var test_result;

//js初始化
window.onload = function(){	
	test_result = window.location.search.substring(1,window.location.search.length);
    console.log(test_result);
	capital = document.getElementById("capital");
	lowercase = document.getElementById("lowercase");
	capital_nounce = document.getElementById("capital_nounce");
	capital_vocabulary_c = document.getElementById("capital_vocabulary_c");
	capital_vocabulary_v = document.getElementById("capital_vocabulary_v");
	capital_vocabulary_img = document.getElementById("capital_vocabulary_img");
	complete_btn = document.getElementById("complete_btn");

	update_content();

};

function update_content() {
	// 只有單元音重新測驗
	if(test_result.length>0){
		for (var i = 0; i < 10; i++) {
			if(test_result[i]==1)
				part1_fault=1;
		}
		// 單元音教學題庫號碼
		if (part1_fault==1) {
			no_part1=[0,1,2,7,8,11,16,17,18,24,25];
			capital.innerHTML = teach_json1.capital[no_part1[part1_num]];
			lowercase.innerHTML = teach_json1.lowercase[no_part1[part1_num]];
			capital_vocabulary_c.innerHTML = teach_json1.cwords[no_part1[part1_num]];
			capital_vocabulary_v.innerHTML = teach_json1.vwords[no_part1[part1_num]];
			capital_nounce.src = "audio/teach/"+teach_json1.capital[no_part1[part1_num]]+".mp3";
			capital_vocabulary_img.src = "PIC/teach/"+teach_json1.cwords[no_part1[part1_num]]+".jpg";

			if(part1_num==no_part1.length-1){
				complete_btn.style.display="block";
			}
		}
		
	}
	else{
		// 第一次測驗
		capital.innerHTML = teach_json1.capital[num];
		lowercase.innerHTML = teach_json1.lowercase[num];
		capital_vocabulary_c.innerHTML = teach_json1.cwords[num];
		capital_vocabulary_v.innerHTML = teach_json1.vwords[num];
		capital_nounce.src = "audio/teach/"+teach_json1.capital[num]+".mp3";
		capital_vocabulary_img.src = "PIC/teach/"+teach_json1.cwords[num]+".jpg";

		if(num==28){
			complete_btn.style.display="block";
		}
	}
	
}

function next_page(){
	if(part1_fault==1){
		if(part1_num>=0&&part1_num<no_part1.length-1){
			part1_num++;
		}else
			alert("no more question");
		update_content();
	}else{
		if(num>=0&&num<28){
			num++;
		}else
			alert("no more question");
		update_content();
	}
	

}

function pre_page(){
	if(part1_fault==1){
		if(part1_num>0&&part1_num<=no_part1.length-1){
			part1_num--;
		}else
			alert("no more question");
		update_content();
	}else{
		if(num>0&&num<29){
			num--;
		}else
			alert("no more question");
		update_content();
	}


	

}

function complete(){
	window.location.href = "teach_test.html";
}


var teach_json1 = {
	"capital":["A","Ă","Â","B","C","D","Đ","E","Ê","G","H","I","K","L","M","N","O","Ô","Ơ","P","Q","R","S","T","U","Ư","V","X","Y"],
	"lowercase":["a","ă","â","b","c","d","đ","e","ê","g","h","i","k","l","m","n","o","ô","ơ","p","q","r","s","t","u","ư","v","x","y"],
	"vwords":["con cá","ăn cơm","chim câu","em bé","quả cam","con dê","đi học","xe đạp","quả khế","con gấu","hoa hồng","bánh mì","que kem","hoa lan","con mèo","nón lá","chùm nho","quả ổi","cái nơ","đèn pin","hộp quà"
				,"cái rổ","ngôi sao","tàu hoả","bánh ú","viết thư","con ve","quả xoài","y tá"],
	"cwords":["魚", "吃飯","鴿子","小寶寶","柳橙","羊","上學","腳踏車","楊桃","熊","玫瑰","麵包","冰棒","蘭花","貓咪","斗笠"
				,"葡萄","芭樂","蝴蝶結","手電筒","禮物盒","籃子","星星","火車","粽子","寫信","蟬","芒果","護士"],
	"unitsound":[
		{"capital":["A","Ă","Â","E","Ê","I","O","Ô","Ơ","U","Ư"],
		"lowercase":["a","ă","â","e","ê","i","o","ô","ơ","u","ư"],
		}],
	"doubleconsonant":[
		{"capital":["CH","GH","GI","KH","NG","NH","PH","TH","TR"],
		"lowercase":["ch","gh","gi","kh","ng","nh","ph","th","tr"]
	}],
	"tribleconsonant":[
		{"capital":"NGH",
		"lowercase":"ngh"}
		]
};