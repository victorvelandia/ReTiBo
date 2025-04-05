document.addEventListener('DOMContentLoaded', () => {
  const notaForm = document.getElementById('notaForm');
  const listaNotas = document.getElementById('listaNotas');

  notaForm.addEventListener('submit', guardarNota);
  mostrarNotas();

  function guardarNota(e) {
    e.preventDefault();

    const titulo = notaForm.titulo.value.trim();
    const contenido = notaForm.contenido.value.trim();

    if (!titulo || !contenido) return;

    const nuevaNota = {
      titulo,
      contenido,
      fecha: new Date().toLocaleString()
    };

    const notas = JSON.parse(localStorage.getItem('notas')) || [];
    notas.push(nuevaNota);
    localStorage.setItem('notas', JSON.stringify(notas));

    notaForm.reset();
    mostrarNotas();
  }

  function mostrarNotas() {
    const notas = JSON.parse(localStorage.getItem('notas')) || [];
    listaNotas.innerHTML = '';

    if (notas.length === 0) {
      listaNotas.innerHTML = '<p>No hay notas aún. ¡Agrega la primera! 🌱</p>';
      return;
    }

    notas.forEach(nota => {
      const notaDiv = document.createElement('div');
      notaDiv.className = 'nota';
      notaDiv.innerHTML = `
        <h3>${nota.titulo}</h3>
        <p>${nota.contenido}</p>
        <small>📅 ${nota.fecha}</small>
      `;
      listaNotas.appendChild(notaDiv);
    });
  }
});
