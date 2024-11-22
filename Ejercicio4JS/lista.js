document.addEventListener('DOMContentLoaded', cargarTareas);

const inputTarea = document.getElementById('input-tarea');
const listaTareas = document.getElementById('lista-tareas');
const btnAgregarTarea = document.getElementById('btn-agregar-tarea');

btnAgregarTarea.addEventListener('click', añadirTarea);
listaTareas.addEventListener('click', manejarClickTarea);

function añadirTarea() {
    const textoTarea = inputTarea.value.trim();
    if (textoTarea !== '') {
        const tarea = {
            id: Date.now(),
            texto: textoTarea,
            completada: false
        };
        añadirTareaAlDOM(tarea);
        guardarTareaEnLocalStorage(tarea);
        inputTarea.value = '';
    }
}

function añadirTareaAlDOM(tarea) {
    const li = document.createElement('li');
    li.className = 'elemento-tarea';
    li.dataset.id = tarea.id;

    li.innerHTML = `
        <input type="checkbox" ${tarea.completada ? 'checked' : ''}>
        <span>${tarea.texto}</span>
        <button class="btn-eliminar">Eliminar</button>
    `;

    if (tarea.completada) {
        li.classList.add('completada');
    }

    listaTareas.appendChild(li);
}

function manejarClickTarea(e) {
    const itemTarea = e.target.closest('.elemento-tarea');
    const idTarea = itemTarea.dataset.id;

    if (e.target.classList.contains('btn-eliminar')) {
        itemTarea.remove();
        eliminarTareaDeLocalStorage(idTarea);
    } else if (e.target.type === 'checkbox') {
        itemTarea.classList.toggle('completada');
        alternarCompletadoEnLocalStorage(idTarea);
    }
}

function guardarTareaEnLocalStorage(tarea) {
    const tareas = obtenerTareasDeLocalStorage();
    tareas.push(tarea);
    localStorage.setItem('tareas', JSON.stringify(tareas));
}

function obtenerTareasDeLocalStorage() {
    return JSON.parse(localStorage.getItem('tareas')) || [];
}

function cargarTareas() {
    const tareas = obtenerTareasDeLocalStorage();
    tareas.forEach(tarea => añadirTareaAlDOM(tarea));
}

function alternarCompletadoEnLocalStorage(idTarea) {
    const tareas = obtenerTareasDeLocalStorage();
    const tarea = tareas.find(tarea => tarea.id === parseInt(idTarea));
    if (tarea) {
        tarea.completada = !tarea.completada;
        localStorage.setItem('tareas', JSON.stringify(tareas));
    }
}

function eliminarTareaDeLocalStorage(idTarea) {
    const tareas = obtenerTareasDeLocalStorage();
    const tareasActualizadas = tareas.filter(tarea => tarea.id !== parseInt(idTarea));
    localStorage.setItem('tareas', JSON.stringify(tareasActualizadas));
}
