//代码来源：鲨海网 https://www.2sha.cn/
// --------------------------------------
// 运行时间开始
function show_date_time() {
	window.setTimeout("show_date_time()", 1000);
	BirthDay = new Date("05/08/2022 00:00:00");
	today = new Date();
	timeold = (today.getTime() - BirthDay.getTime());
	sectimeold = timeold / 1000;
	secondsold = Math.floor(sectimeold);
	msPerDay = 24 * 60 * 60 * 1000;
	e_daysold = timeold / msPerDay;
	daysold = Math.floor(e_daysold);
	e_hrsold = (e_daysold - daysold) * 24;
	hrsold = Math.floor(e_hrsold);
	e_minsold = (e_hrsold - hrsold) * 60;
	minsold = Math.floor((e_hrsold - hrsold) * 60);
	seconds = Math.floor((e_minsold - minsold) * 60);
	span_dt_dt.innerHTML = daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒";
}
show_date_time();
// 运行时间结束

// 禁止右键F12开始
window.onload = function () {
	//屏蔽键盘事件
	document.onkeydown = function () {
		var e = window.event || arguments[0];
		//F12
		if (e.keyCode == 123) {
			return false;
			//Ctrl+Shift+I
		} else if ((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)) {
			return false;
			//Shift+F10
		} else if ((e.shiftKey) && (e.keyCode == 121)) {
			return false;
			//Ctrl+U
		} else if ((e.ctrlKey) && (e.keyCode == 85)) {
			return false;
		}
	};
	//屏蔽鼠标右键
	document.oncontextmenu = function () {
		return false;
	}
}
// 禁止右键F12结束

// 返回顶部开始
let backTop = document.querySelector('.back-top');
// 给Bom的window添加scool事件
window.addEventListener('scroll', displayReturnTop);
// 写隐藏按钮和显示按钮的功能
function displayReturnTop(e) {
	console.log(scrollY);
	if (window.scrollY > 200) {
		backTop.style.display = 'block';
	} else {
		backTop.style.display = 'none';
	}
}
// 给backTop添加事件
backTop.addEventListener('click', returnTop);
// 写返回顶部的功能
function returnTop() {
	scrollTo({
		top: 0,
		behavior: "smooth"
	})
}
// 当鼠标经过按钮时，改变背景图片
backTop.addEventListener('mouseover', function () {
	backTop.style.background = 'url(./imgs//返回顶部黑.png)';
	backTop.style.backgroundSize = '50px 50px';
});
backTop.addEventListener('mouseout', function () {
	backTop.style.background = 'url(./imgs//返回顶部白.png)';
	backTop.style.backgroundSize = '50px 50px';
});
// 返回顶部结束
