let chatbots = $('.chatbot');  // Obtenemos los chatbots de la página
chatbots.each(function() {     // Para cada chatbot dentro de la página

  let conv = $(this).find('.conversation ul');  // Obtenemos la conversación
  let form = $(this).find('form.query');        // Obtenemos el formulario
  let text = $(form).find('input');             // Obtenemos el campo de texto
  
  conv.append(  // Inicializamos la conversación
    '<li>' +
    '  <div class="name">Chatbot</div>' +
    '  <div class="message">La sabiduría del Emperador es infinita...</div>' +
    '</li>'
  );

  form.submit(function() {  // Acción cuando se envía el formulario (cuando se pulsa intro dentro del campo de texto)

    let query = text.val();  // Obtenemos la pregunta escrita en el campo de texto
    text.val('');            // Limpiamos el campo de texto
    
    conv.append(  // Añadimos la pregunta del usuario a la conversación
      '<li>' +
      '  <div class="name">Usuario</div>' +
      '  <div class="message">' + query + '</div>' +
      '</li>'
    );

    $.post('process.php', { query: query }, function(data) {  // Enviamos la pregunta al servidor
      
      conv.append(  // Añadimos la respuesta del servidor a la conversación
        '<li>' +
        '  <div class="name">Chatbot</div>' +
        '  <div class="message">' + data + '</div>' +
        '</li>'
      );
    })

    return false;  // Devolvemos 'false' para que al enviar el formulario no se recargue la página

  });

});