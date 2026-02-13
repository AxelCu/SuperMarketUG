document.addEventListener('DOMContentLoaded', () => {

    const input = document.getElementById('buscarProducto');
    const tbody = document.querySelector('#tablaProductos tbody');

    if (input && tbody) {
        input.addEventListener('keyup', () => {

            const texto = input.value;

            fetch(`index.php?accion=ajaxConsultar&q=${texto}`)
                .then(r => r.json())
                .then(data => {
                    tbody.innerHTML = '';

                    data.forEach(p => {
                        const fila = document.createElement('tr');
                        fila.innerHTML = `
                            <td>${p.nombre}</td>
                            <td>${p.categoria}</td>
                            <td>$${p.precio}</td>
                            <td>${p.stock}</td>
                            <td>
                                <a href="index.php?accion=verProducto&id=${p.id}" 
                                   class="btn btn-info btn-sm">
                                   👁 Ver
                                </a>
                            </td>
                        `;
                        tbody.appendChild(fila);
                    });
                });
        });
    }

});
