function mostrarAlerta() {
    const ui = SpreadsheetApp.getUi(); // Obtener la interfaz de usuario

    // Mostrar un cuadro de diálogo con un mensaje y dos botones
    const respuesta = ui.alert('Confirmación', '¿Qué deseas hacer?', ui.ButtonSet.YES_NO);

    // Procesar la respuesta del usuario
    if (respuesta === ui.Button.YES) {
        Logger.log('El usuario seleccionó "Sí".');
        // Aquí puedes agregar la lógica para la opción "Sí"
    } else if (respuesta === ui.Button.NO) {
        Logger.log('El usuario seleccionó "No".');
        // No hacer nada, simplemente se cierra el cuadro de diálogo
    } else {
        Logger.log('El usuario cerró el cuadro de diálogo.');
    }
}