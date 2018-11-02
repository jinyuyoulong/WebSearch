fetch('http://www.baidu.com').then(function (response) {
	return response.json();
}).then(function (data) {
	console.log(data);
}).catch(function (e) {
	console.log("oops, error");
});