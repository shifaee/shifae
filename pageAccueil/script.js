const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

allSideMenu.forEach((item) => {
  const li = item.parentElement;

  item.addEventListener("click", function () {
    allSideMenu.forEach((i) => {
      i.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

// TOGGLE SIDEBAR
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = document.querySelector(
  "#content nav form .form-input button .bx"
);
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    if (searchForm.classList.contains("show")) {
      searchButtonIcon.classList.replace("bx-search", "bx-x");
    } else {
      searchButtonIcon.classList.replace("bx-x", "bx-search");
    }
  }
});

if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.replace("bx-x", "bx-search");
  searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
});
// Rendez-vous show and hide

// div0
let btn = document.querySelector("#button");
let div = document.querySelector("#div");
btn.addEventListener("click", () => {
  if (div.style.display == "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
});
// div1
let btn1 = document.querySelector("#button1");
let div1 = document.querySelector("#div1");
btn1.addEventListener("click", () => {
  if (div1.style.display == "none") {
    div1.style.display = "block";
  } else {
    div1.style.display = "none";
  }
});

// div2
let btn2 = document.querySelector("#button2");
let div2 = document.querySelector("#div2");
btn2.addEventListener("click", () => {
  if (div2.style.display == "none") {
    div2.style.display = "block";
  } else {
    div2.style.display = "none";
  }
});
// div3
let btn3 = document.querySelector("#button3");
let div3 = document.querySelector("#div3");
btn3.addEventListener("click", () => {
  if (div3.style.display == "none") {
    div3.style.display = "block";
  } else {
    div3.style.display = "none";
  }
});
// div4
let btn4 = document.querySelector("#button4");
let div4 = document.querySelector("#div4");
btn4.addEventListener("click", () => {
  if (div4.style.display == "none") {
    div4.style.display = "block";
  } else {
    div4.style.display = "none";
  }
});
// end Rendez-vous show and hide

// window.onload = function(){
// 	document.getElementById("download")
// 	.addEventListener("click",()=>
// 	{
// 		const invoice = this.document.getElementById("invoice");
// 		console.log(invoice);
// 		console.log(window);

// 	})
// 	html2pdf().from(invoice).save();

// }
// var doc = new jsPDF();
// var specialElementHandlers = {
//   "#editor": function (element, renderer) {
//     return true;
//   },
// };
// const invoice = document.querySelector("#invoice");
// console.log(invoice);
// $("#download").click(function () {
//   doc.fromHTML($(invoice).html(), 15, 15, {
//     width: 700,
//     elementHandlers: specialElementHandlers,
//   });
//   doc.save("sample.pdf");
// });

// const invoice = document.getElementById("invoice")
// console.log(invoice);
// console.log("hello");
/*
async function generatePDF() {
	document.getElementById("downloadButton").innerHTML = "Currently downloading, please wait";

	//Downloading
	var downloading = document.getElementById("invoice");
	var doc = new jsPDF('l', 'pt');

	await html2canvas(downloading, {
		//allowTaint: true,
		//useCORS: true,
		width: 530
	}).then((canvas) => {
		//Canvas (convert to PNG)
		doc.addImage(canvas.toDataURL("image/png"), 'PNG', 5, 5, 1000, 200);
	})

	doc.save("Document.pdf");

	//End of downloading

	document.getElementById("downloadButton").innerHTML = "Click to download";
}
*/

$("#download").click(function() {
	var pdf = new jsPDF("a", "mm", "a4");
	var firstPage;
	var secondPage;

	html2canvas($("#invoice"), {
	  onrendered: function(canvas) {
		firstPage = canvas.toDataURL("image/jpeg", 1.0);
	  }
	});

	setTimeout(function() {
	  pdf.addImage(firstPage, "JPEG", 5, 5, 200, 220);
	  pdf.save("export1.pdf");
	}, 150);
  });