document.getElementById('registroForm').addEventListener('submit', function(e) {
    e.preventDefault();
  
    const nombre = document.getElementById('nombre').value;
    const fecha = document.getElementById('fecha').value;
    const raza = document.getElementById('raza').value;
    const observaciones = document.getElementById('observaciones').value;
  
    const registro = {
      nombre,
      fecha,
      raza,
      observaciones
    };
  
    // Guardar en localStorage
    let registros = JSON.parse(localStorage.getItem('registros')) || [];
    registros.push(registro);
    localStorage.setItem('registros', JSON.stringify(registros));
  
    // Limpiar formulario
    this.reset();
  
    // Actualizar lista en pantalla
    mostrarRegistros();
  });
  
  function mostrarRegistros() {
    const lista = document.getElementById('listaRegistros');
    lista.innerHTML = '';
  
    const registros = JSON.parse(localStorage.getItem('registros')) || [];
  
    registros.forEach((r, index) => {
      const item = document.createElement('li');
      item.innerHTML = `<strong>${r.nombre}</strong> | ${r.raza} | ${r.fecha}<br/>${r.observaciones}`;
      lista.appendChild(item);
    });
  }
  
  // Mostrar registros al cargar
  mostrarRegistros();
  