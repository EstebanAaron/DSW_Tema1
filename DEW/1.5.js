function generarTabla() {
    const filas = parseInt(document.getElementById('filas').value);
    const columnas = parseInt(document.getElementById('columnas').value);
    const tabla = document.getElementById('tabla').getElementsByTagName('tbody')[0];
    const titulo = document.getElementById('tabla').getElementsByTagName('thead')[0];
    // Limpiar la tabla existente
    tabla.innerHTML = '';
    titulo.innerHTML='';

    // Crear Tabla
    let fila1 =titulo.insertRow(0);
    let celda1 = fila1.insertCell();
    celda1.textContent="Numeros"
    celda1.colSpan= columnas;
    
    let count=1;
    for (let i = 0; i < filas; i++) {
        let fila = tabla.insertRow();
        for (let j = 0; j < columnas; j++) {
            let celda = fila.insertCell();
            celda.textContent = count++;
        }
    }
}

// Llamar a la función para generar la tabla inicial
generarTabla();
