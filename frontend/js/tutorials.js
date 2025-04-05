const tutores = [
  { nombre: "Dra. Clara Martínez", especialidad: "Reproducción bovina" },
  { nombre: "Ing. José Salazar", especialidad: "Manejo genético" },
  { nombre: "Dr. Andrés Paredes", especialidad: "Sanidad animal" },
  { nombre: "MVZ Laura Pérez", especialidad: "Bioseguridad" }
];

function cargarTutores() {
  const contenedor = document.getElementById("tutor-list");
  tutores.forEach(tutor => {
    const div = document.createElement("div");
    div.className = "tutor-card";
    div.innerHTML = `<strong>${tutor.nombre}</strong><br><small>${tutor.especialidad}</small>`;
    contenedor.appendChild(div);
  });
}

function iniciarChat() {
  alert("Conectando al chat de asesoría... (simulado)");
}

function iniciarVideo() {
  alert("Iniciando videollamada... (simulado)");
}

window.onload = cargarTutores;
