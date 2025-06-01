function calcularIdade(data) {
    const nascimento = new Date(data);
    const hoje = new Date();
    let idade = hoje.getFullYear() - nascimento.getFullYear();
    const m = hoje.getMonth() - nascimento.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
        idade--;
    }
    return idade;
}

document.getElementById('data_nascimento').addEventListener('change', function () {
    const idade = calcularIdade(this.value);
    document.getElementById('idade').value = idade + ' anos';
});

function adicionarExperiencia() {
    const container = document.getElementById('experiencias');
    const novaEntrada = document.createElement('div');
    novaEntrada.classList.add('input-group', 'mb-2');
    novaEntrada.innerHTML = `<input type="text" name="experiencias[]" class="form-control" placeholder="Descrição da experiência">`;
    container.appendChild(novaEntrada);
}
