function verificarEdad() {
    const inputEdad = document.getElementById("edad").value;
    const resultado = document.getElementById("resultado");

    const edad = Number(inputEdad);

    if (isNaN(edad) || inputEdad.trim() === "") {
        resultado.textContent = "No ingresó un número";
        return;
    }

    if (edad <= 0 || edad > 109) {
        resultado.textContent = "Valor inválido";
    } else if (edad < 18) {
        resultado.textContent = "Eres menor de edad";
    } else if (edad <= 67) {
        resultado.textContent = "Eres mayor de edad";
    } else {
        resultado.textContent = "Eres adulto mayor";
    }
}
