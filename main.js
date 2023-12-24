
function startTime() {
  const today = new Date();
  let d = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
  let b = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
  let dt = today.getDate();
  let bl = b[today.getMonth()];
  let y = today.getFullYear();
  let dy = d[today.getDay()];
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  h = checkTime(h);
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('jam').innerHTML =  dy + ", " + dt + " " + bl + " " + y+ " " + h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i}  // add zero in front of numbers < 10
  return i;
}

function menuAktif() {
  document.getElementById("freezeHeader").style.height = "48vh";
  document.getElementById("links").style.display = "block";
  document.getElementById("menu").classList.add("aktif");
  isAktif = true;
}

function menunonAktif() {
  document.getElementById("freezeHeader").style.height = "10vh";
  document.getElementById("links").style.display = "none";
  document.getElementById("menu").classList.remove("aktif");
  isAktif = false;
}

function ubahMenu() {
  if (isAktif == false) {
    menuAktif();
  } else {
    menunonAktif();
  }
}

document.addEventListener("DOMContentLoaded", function () {
    new TypeIt("#typing", {
        speed: 100,
        loop: true,
        startDelay: 5000,
        loopDelay: 700,
    })
    .type("anak anak")
    .pause(400)
    .move(-4)
    .pause(300)
    .delete(1)
    .pause(300)
    .type("-")
    .move(4)
    .type(" marga tantrum.")
    .pause(700)
    .delete(24)
    .pause(700)
    .type("paling kompak")
    .pause(400)
    .move(-13)
    .pause(300)
    .type("si")
    .pause(300)
    .move(13)
    .type("!")
    .pause(700)
    .delete(16)
    .pause(700)
    .type("kelas bersih?")
    .pause(400)
    .move(-7)
    .pause(300)
    .type("ter")
    .pause(400)
    .move(7)
    .delete(1)
    .type("!")
    .pause(700)
    .delete(16)
    .go();
});

function downloadDiv() {
  document.getElementById("downloadFile").style.display = "flex";
}

function minDiv() {
  document.getElementById("downloadFile").style.display = "none";
  document.getElementById("uploadFile").style.display = "none";
}

function jadpik(huruf, border, tampil) {
  document.getElementById("piket").style.color = huruf;
  document.getElementById("piket").style.borderColor = border;
  document.getElementById("jadwalPiket").style.display = tampil;
}

function jadpel(huruf, border, tampil) {
  document.getElementById("pelajar").style.color = huruf;
  document.getElementById("pelajar").style.borderColor = border;
  document.getElementById("jadwalPelajar").style.display = tampil;
}

biru = "#649fe8";
bening = "#649fe800";
item = "#121212";
ada = "block";
gada = "none";

function piket() {
  jadpik(biru, biru, ada);
  jadpel(item, bening, gada);
}

function pelajar() {
  jadpik(item, bening, gada);
  jadpel(biru, biru, ada);
}

function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    var elementBottom = reveals[i].getBoundingClientRect().bottom;
    var elementHeight = reveals[i].offsetHeight;
    var footerHeight = document.getElementById("footer").offsetHeight;
    var headerHeight = document.getElementById("freezeHeader").offsetHeight;
    
    if (elementTop + footerHeight < windowHeight - elementVisible && windowHeight < elementBottom + elementHeight) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

function lihatPass() {
  document.getElementById("password").type = "text";
  document.getElementById("toggle").src = "assets/openedEye.png";
  lihat = true;
}

function galiatPass() {
  document.getElementById("password").type = "password";
  document.getElementById("toggle").src = "assets/closedEye.png";
  lihat = false;
}

function visiblePass() {
  if (lihat == true) {
    galiatPass();
  }
  else {
    lihatPass();
  }
}

var b = false;

function balas(aidi, bl) {
  if(b == false) {
    document.getElementById(aidi).style.border = "solid";
    document.getElementById("parent").value = aidi;
   document.getElementById(bl).innerText = "berhenti balas";
   b = true;
  } else {
    document.getElementById(aidi).style.border = "none";
    document.getElementById("parent").value = "0";
   document.getElementById(bl).innerText = "balas";
   b = false;
  }
}