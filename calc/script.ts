let calculator = <HTMLInputElement>document.getElementById("calculator");

function clearAll() {
	calculator.value = "";
}

function calculate() {
	calculator.value = eval(calculator.value);
}

function pressButton(x) {
	calculator.value += x;
}