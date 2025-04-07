window.onload = function () {
    const rutasProtegidas = ['record.php', 'tutorials.php'];

    const estaEnRutaProtegida = rutasProtegidas.some(ruta =>
        window.location.pathname.includes(ruta)
    );

    // Detectar navegación hacia atrás de manera moderna
    const entries = performance.getEntriesByType("navigation");
    const navigationType = entries.length > 0 ? entries[0].type : null;

    if (estaEnRutaProtegida && navigationType === "back_forward") {
        location.reload(true); // fuerza recarga si viene del historial
    }
};

window.onpageshow = function (evt) {
    const rutasProtegidas = ['record.php', 'tutorials.php'];

    const estaEnRutaProtegida = rutasProtegidas.some(ruta =>
        window.location.pathname.includes(ruta)
    );

    if ((evt.persisted || performance.getEntriesByType("navigation")[0]?.type === "back_forward") && estaEnRutaProtegida) {
        location.reload(true);
    }
};
