@extends('layout.main')

@section('content')
    <section id="contact" class="root-sec">
        <div class="container">
            <div class="row">
                <div class="clearfix contact-form">
                    <div class="col-sm-12 col-md-12">
                        <div class="contact-title">
                            <h3 class="contact-subtitle">Contacto</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor, dolores esse eum ex excepturi explicabo illum qui? Amet atque corporis et explicabo illo maxime, perferendis perspiciatis quas saepe vero.</p>
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus nulla officia provident reiciendis. Aperiam culpa, cum dolorum, eligendi explicabo id inventore ipsam laborum modi nemo nisi nulla ut voluptatem?</p>
                                    <p>phone:</p>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    <div class="clearfix contact-form card-panel grey lighten-5">
                                        <form action="#" id="contactForm">
                                            <div class="input-field">
                                                <label for="contact_name" class="input-label">Nombre</label>
                                                <input id="contact_name" type="text" name="contact_name" class="validate input-box" required>
                                            </div>
                                            <div class="input-field">
                                                <label for="email" class="input-label">Email</label>
                                                <input id="email" type="email" name="contact_email" class="validate input-box" required>
                                            </div>
                                            <div class="input-field">
                                                <label for="subject" class="input-label">Asunto</label>
                                                <input id="subject" type="text" name="contact_subject" class="validate input-box" required>
                                            </div>
                                            <div class="input-field textarea-input">
                                                <label for="message" class="input-label">Mensaje</label>
                                                <textarea id="message" name="contact_message" class="validate materialize-textarea" style="height: 22px;" required></textarea>
                                            </div>
                                            <div class="input-field  clearfix">
                                                <button type="submit" class="waves-effect waves-light orange accent-2 btn">
                                                    Enviar
                                                    <i class="mdi mdi-send right"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop