let nome
let sobrenome
let email
let email2
let divEmail2
let cpf
let telefone
let telefone2
let divTelefone2
let botEnviar
let fecha
let excluirContato
let entrada


if (document.getElementById("entradaSearch")) {
    entrada = document.getElementById("entradaSearch")
}


if (document.querySelector(".excluirContato")) {
    excluirContato = document.querySelectorAll(".excluirContato")
    excluirContato.forEach((btn) => {

        btn.addEventListener("click", (event) => {

            if (!confirm("Tem certeza que quer excluir?")) {

                event.preventDefault()

            }
        })

    })
}



if (document.querySelector(".cpf")) {

    nome = document.querySelector(".nome")
    sobrenome = document.querySelector(".sobrenome")
    email = document.querySelector(".email")
    email2 = document.querySelector(".email2")
    divEmail2 = document.querySelector(".divEmail2")
    cpf = document.querySelector(".cpf")
    telefone = document.querySelector(".telefone")
    telefone2 = document.querySelector(".telefone2")
    divTelefone2 = document.querySelector(".divTelefone2")
    botEnviar = document.querySelector(".enviar")
    fecha = document.querySelectorAll(".fecha")


    cpf.addEventListener("input", () => {
        validaEntrada(cpf)

    })


    telefone.addEventListener("input", () => {

        removeStr(telefone)

    })


    fecha.forEach((f) => {

        f.addEventListener("click", () => {

            if (f.classList.contains("email")) {

                if (f.classList.contains("+")) {
                    f.classList.remove("+")
                    f.classList.add("x")
                    divEmail2.style.display = "block"
                    f.innerHTML = "x"
                } else {
                    f.classList.remove("x")
                    f.classList.add("+")
                    divEmail2.style.display = "none"
                    f.innerHTML = "+"
                }
            } else {

                if (f.classList.contains("+")) {
                    f.classList.remove("+")
                    f.classList.add("x")
                    divTelefone2.style.display = "block"
                    f.innerHTML = "x"
                } else {
                    f.classList.remove("x")
                    f.classList.add("+")
                    divTelefone2.style.display = "none"
                    f.innerHTML = "+"
                }

            }


        })
    })



    botEnviar.addEventListener("click", (event) => {

        if (!validaTelefone(telefone) || !validaNomeSobrenome(nome) || !validaNomeSobrenome(sobrenome)) {

            if (!validaTelefone(telefone)) {
                alert("Telefone inválido")
            }

            if (!validaNomeSobrenome(nome)) {
                alert("Nome inválido")
            }

            if (!validaNomeSobrenome(sobrenome)) {
                alert("Sobrenome inválido")
            }

            event.preventDefault()
        }

    })
}




function abreFecha(f, elemn) {

    if (f.classList.contains("+")) {
        f.classList.remove("+")
        f.classList.add("x")
        elemn.style.display = "block"
        f.innerHTML = "x"
    } else {
        f.classList.remove("x")
        f.classList.add("+")
        elemn.style.display = "none"
        f.innerHTML = "+"
    }

}

function validaTelefone(telefone) {

    if (telefone.value.length < 14) {

        return false
    }
    return true
}

function validaNomeSobrenome(entrada) {

    if (entrada.value.length < 3) {
        return false
    }
    return true
}

function validaEmail(email) {

    var re = /\w+@\S+\.\S+/;
    return re.test(email.value);

}

function validaEntrada(elem) {

    removeStr(elem)
    if (elem.value.length >= 12) {

        reg = /\W/
        let cpf = elem.value
        cpf = cpf.replace(reg, "")

        if (validaCPF(cpf)) {
            alert("CPF valido")
        } else {

            alert("CPF invalido")

        }

    }


}

//removendo string campo cpf
function removeStr(elem) {

    elem.value = elem.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');

}

//validando CPF
function validaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "00000000000") {
        return false;
    }

    for (i = 1; i <= 9; i++) {
        Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;
    }

    if ((Resto == 10) || (Resto == 11)) {
        Resto = 0;
    }

    if (Resto != parseInt(strCPF.substring(9, 10))) {
        return false;
    }

    Soma = 0;

    for (i = 1; i <= 10; i++) {
        Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;
    }

    if ((Resto == 10) || (Resto == 11)) {
        Resto = 0;
    }

    if (Resto != parseInt(strCPF.substring(10, 11))) {
        return false;
    }
    return true;
}

function search() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("entradaSearch");
    filter = input.value.toUpperCase();
    table = document.getElementById("tabela");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

//Mascaras de entrada
var maskOptions1 = {
    mask: '(00)00000-0000'
};
var maskOptions2 = {
    mask: '000.000.000-00'
};


if (cpf) {
    var mask1 = IMask(telefone, maskOptions1);

    var mask2 = IMask(cpf, maskOptions2);
    var mask3 = IMask(telefone2, maskOptions1);
}

if (entrada) {
    var mask4 = IMask(entrada, maskOptions2);
}
