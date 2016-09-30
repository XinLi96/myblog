var fs = require('fs');
var readline = require('readline');
var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
	});

function menu(){
	var str1;
	console.log('请输入对数据库要进行的指令：');
	rl.on('line',function(line){
    var arr = line.toString().split(' ');
    switch(arr[0]){
    	//create table s name id height
    	case 'create':{
    		var str = '';
    		var length = arr.length-3;
		    for(var i = 0;i < length;i++){
		    	str = str + arr[i+3] + ' '; 
		    }
		    str1 = str;
    		fs.writeFile(arr[2]+'.txt', str, function (err) {
		  		if (err) throw err;
		  		console.log('It\'s saved!'); //文件被保存
			});
            fs.writeFile(arr[2]+ 'zidian' +'.txt', str, function (err) {
                if (err) throw err;
            });
			break;
    	}
    	//insert into s name id height values li 1 178
    	case 'insert':{
    		var arr1 = str1.split(' ')
    		var length = arr1.length;
		    var str = '';
		    for(var i = 0;i < length-1;i++){
		    	str = str + arr[(i+length+3)] + ' '; 
            
		    }
    		fs.appendFile(arr[2]+'.txt', ';' + str, function (err) {
			  	if (err) throw err;
			  	console.log('The "data to append" was appended to file!'); //数据被添加到文件的尾部
			});
			break;
    	}
    	//select from s where id = 1 
    	case 'select':{
    		fs.readFile('./'+arr[2]+'.txt','UTF-8',function (err, data) {
				if (err) throw err;
                var mySelect = arr[arr.length-1]; 
                var arrSelect = data.split(';');
                for(var i = 0;i < arrSelect.length;i++){
                    // console.log(arrSelect[i].match("lixin 1"));
                    if(arrSelect[i].match(mySelect)){
                        console.log(arrSelect[i]);
                    }
                }
			 	// console.log(data);
				});
    		break;
    	}
        //update q set name=zjw id=2 where id = 1
        case 'update':{
            fs.readFile('./'+arr[1]+'.txt','UTF-8',function (err, data) {
                if (err) throw err; 
                // console.log(arr.length);
                var num = arr.length;
                // var arr1 = arr.toString().split(' '); 
                var mySelect = arr[num-1]; 
                var arrSelect = data.split(';');
                // console.log(mySelect);
                var arr2 = [];
                var flag = 0;
                var str = '';
                var str1 = '';
                for(var i = 0;i < arrSelect.length;i++){
                    // console.log(arrSelect[i].match("lixin 1"));
                    if(arrSelect[i].match(mySelect)){
                        for(var j = 0;j < arr.length;j++){
                            if(arr[j].match("=")){
                                 arr2[flag] = arr[j];
                                 flag++;
                                 // console.log(arr2);
                                 for(var a = 0;a < arr2.length-1;a++){
                                    str = str + arr2[a];
                                 }
                                 // console.log(arrSelect[i]);
                                 str1 = arrSelect[i];
                                 console.log('1'+str);
            console.log('1'+str1);
                            }
                        }
                    }
                }
                });

            break;
        }
    	//select id from s where name = li
    // 	case ' select':{
    // 		fs.readFile('./'+arr[3]+'.txt','UTF-8',function (err, data) {
				// if (err) throw err;
			 // 	var arrData = data.toString().split(';');
    //             var n = arr[arr.length-1];
    //             var reg = new RegExp('^' + n);
    //             for(var i = 0;i < arrData.length;i++){
    //                 if(exec(reg,arrData[i]) != null){
    //                     console.log(arrData[i]);
    //                 }
    //             }
    //             console.log(n);
				// });
    // 		break;
    // 	}
    	//
    	case 'delete':{
    		fs.unlinkSync(+'.txt');
    	}
    	default:{
    		break;
    	}
    }
});
}
menu();