<form id="formulario-contacto" class="contact-form form-style-3">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <div class="contact-form-success alert alert-success d-none">
        Message has been sent to us.
    </div>

    <div class="contact-form-error alert alert-danger d-none">
        Error sending your message.
        <span class="mail-error-message text-1 d-block"></span>
    </div>
    
    <input type="hidden" value="Contact Form" name="subject" id="subject">
    <div class="form-row">
        <div class="form-group col-md-6 pr-md-2">
            <input type="text" value="" data-msg-required="Ingrese su nombre" maxlength="100" class="form-control h-auto py-2" placeholder="Nombre" name="name" id="name" required>
        </div>
        <div class="form-group col-md-6 pl-md-2">
            <input type="text" value="" data-msg-required="Ingrese su nombre teléfono" maxlength="100" class="form-control h-auto py-2" placeholder="Teléfono/Celular" name="phone" id="phone" required>
        </div>
    </div>
    <div class="form-group">
        <input type="email" value="" data-msg-required="Ingrese su correo" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control h-auto py-2" placeholder="Correo" name="email" id="email" required>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <textarea maxlength="5000" data-msg-required="Escriba su mensaje" rows="4" class="form-control" placeholder="Escriba aquí su mensaje..." name="message" id="message" required></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col text-center">
            <input type="submit" value="ENVIAR" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2" data-loading-text="Loading...">
        </div>
    </div>
</form>