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

// box-info show and hide
let iconbotton = document.querySelector("#icon");
let boxinfo = document.querySelector("#hidden");
let bo = document.querySelector(".deuxieme");

iconbotton.addEventListener("click", () => {
  boxinfo.style.display = "none";
  bo.style.display = "block";
});

let iconbott = document.querySelector("#sub");
let boxinf = document.querySelector("#hidden");
let boxx = document.querySelector(".deuxieme");
iconbott.addEventListener("click", () => {
  boxx.style.display = "none";
  boxinf.style.display = "block";
});
// end box-info show and hide

// $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

// start etat & specialite show and hide

let iconetatt = document.querySelector("#etatt");
let boxspecia = document.querySelector("#specia");
let boxmodi = document.querySelector(" #hidee");

iconetatt.addEventListener("click", () => {
  boxspecia.style.display = "none";
  boxmodi.style.display = "block";
});

let iconmoodi = document.querySelector("#subb");
let boxspecia1 = document.querySelector("#specia");
let boxmodi1 = document.querySelector("#hidee");
iconmoodi.addEventListener("click", () => {
  boxmodi1.style.display = "none";
  boxspecia1.style.display = "block";
});

//  end etat & specialite show and hide

// Start expérience show and hide
let iconexpe = document.querySelector("#iconexp");
let boxexpe = document.querySelector("#experience");
let boxmodii = document.querySelector(" #exphiden");

iconexpe.addEventListener("click", () => {
  boxexpe.style.display = "none";
  boxmodii.style.display = "block";
});

let iconmoodii = document.querySelector("#modifexpe");

iconmoodii.addEventListener("click", () => {
  boxmodii.style.display = "none";
  boxexpe.style.display = "block";
});

// End experience show and hide

// Start description hide and show
let icondesc = document.querySelector("#descicon");
let boxdesc = document.querySelector("#showndesc");
let boxmodiii = document.querySelector("#hidetable");

icondesc.addEventListener("click", () => {
  boxdesc.style.display = "none";
  boxmodiii.style.display = "block";
});

let iconmoodiii = document.querySelector("#deschide");

iconmoodiii.addEventListener("click", () => {
  boxdesc.style.display = "block";
  boxmodiii.style.display = "none";
});
// end description Show and Hide

//start tarif0 show and hide
let tarifmod = document.querySelector(".modtarif");
let boxtarif = document.querySelector(".codoms");
let tarifmodi = document.querySelector(".codom");

tarifmod.addEventListener("click", () => {
  boxtarif.style.display = "none";
  tarifmodi.style.display = "block";
});

let tarifenre = document.querySelector(".enremod");

tarifenre.addEventListener("click", () => {
  boxtarif.style.display = "block";
  tarifmodi.style.display = "none";
});

// end Tarifs show and hide

//start tarif1 show and hide
let tarifmod1 = document.querySelector(".modtarif1");
let boxtarif1 = document.querySelector(".codoms1");
let tarifmodi1 = document.querySelector(".codom1");

tarifmod1.addEventListener("click", () => {
  boxtarif1.style.display = "none";
  tarifmodi1.style.display = "block";
});

let tarifenre1 = document.querySelector(".enremod1");

tarifenre1.addEventListener("click", () => {
  boxtarif1.style.display = "block";
  tarifmodi1.style.display = "none";
});

// end Tarifs show and hide

//start tarif0 show and hide
let tarifmod2 = document.querySelector(".modtarif2");
let boxtarif2 = document.querySelector(".codoms2");
let tarifmodi2 = document.querySelector(".codom2");

tarifmod2.addEventListener("click", () => {
  boxtarif2.style.display = "none";
  tarifmodi2.style.display = "block";
});

let tarifenre2 = document.querySelector(".enremod2");

tarifenre2.addEventListener("click", () => {
  boxtarif2.style.display = "block";
  tarifmodi2.style.display = "none";
});

// end Tarifs show and hide
// Rendez-vous show and hide

// div0
let btn = document.querySelector(".button");
var div = document.querySelector(".div");
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

// Forgot Password
let iconpass = document.querySelector("#passwordicon");
let boxpass = document.querySelector(".login-container");
let passaffiche = document.querySelector(".recuperer");

iconpass.addEventListener("click", () => {
  boxpass.style.display = "none";
  passaffiche.style.display = "block";
});

// Download pdf

$("#download").click(function () {
  var pdf = new jsPDF("a", "mm", "a4");
  console.log("test");
  var firstPage;
  var secondPage;

  html2canvas($("#invoice"), {
    onrendered: function (canvas) {
      firstPage = canvas.toDataURL("image/jpeg", 1.0);
    },
  });

  setTimeout(function () {
    pdf.addImage(firstPage, "JPEG", 5, 5, 200, 220);
    pdf.save("export1.pdf");
  }, 150);
});
// End download PDF
