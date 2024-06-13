let val1 = 0;
let val2 = 0;
const section1 = document.getElementById("section1");
const section2 = document.getElementById("section2");

function escribir(element) {
  const num = element.innerHTML;
  section2.innerHTML += num;
}

const buttons = document.querySelectorAll(".button");

buttons.forEach((button) => {
  if (!isNaN(button.innerHTML)) {
    button.addEventListener("click", () => {
      escribir(button);
    });
  }
});

function setOperation(op) {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `${val1}${op}`;
  section2.innerHTML = "";
}

function equal() {
  const op = section1.innerHTML[section1.innerHTML.length - 1];
  if (section2.innerHTML.length > 0) val2 = parseFloat(section2.innerHTML);
  else val2 = 0;
  let res;
  switch (op) {
    case "+":
      res = val1 + val2;
      break;
    case "-":
      res = val1 - val2;
      break;
    case "*":
      res = val1 * val2;
      break;
    case "/":
      res = val1 / val2;
      break;
    case "^":
      res = Math.pow(val1, val2);
      break;
    default:
      return;
  }
  section1.innerHTML = `${val1}${op}${val2}`;
  section2.innerHTML = `${res}`;
}

function del() {
  section2.innerHTML = section2.innerHTML.slice(0, -1);
}

function clean() {
  section1.innerHTML = "";
  section2.innerHTML = "";
}

function sqrt() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `√(${val1})`;
  section2.innerHTML = `${Math.sqrt(val1)}`;
}

function factorial() {
  val1 = parseFloat(section2.innerHTML);
  let fact = 1;
  for (let i = 1; i <= val1; i++) {
    fact *= i;
  }
  section1.innerHTML = `${val1}!`;
  section2.innerHTML = `${fact}`;
}

function log() {
  val1 = parseFloat(section2.innerHTML);
  section1.innerHTML = `log(${val1})`;
  section2.innerHTML = `${Math.log10(val1)}`;
  
}

document.getElementById("plus").addEventListener("click", () => setOperation('+'));
document.getElementById("minus").addEventListener("click", () => setOperation('-'));
document.getElementById("multiplication").addEventListener("click", () => setOperation('*'));
document.getElementById("division").addEventListener("click", () => setOperation('/'));
document.getElementById("equal").addEventListener("click", equal);
document.getElementById("delete").addEventListener("click", del);
document.getElementById("clean").addEventListener("click", clean);
document.getElementById("power").addEventListener("click", () => setOperation('^'));
document.getElementById("sqrt").addEventListener("click", sqrt);
document.getElementById("factorial").addEventListener("click", factorial);
document.getElementById("log").addEventListener("click", log);