@extends('layout.main')

@section('content')
    <section id="contact" class="root-sec">
        <div class="container">
            <div class="row">
                <div class="clearfix contact-form">
                    <div class="col-sm-12 col-md-12">
                        <div class="contact-title">
                            <h3 class="contact-subtitle">Contacto</h3>
                            <p>Por favor, siéntase libre de enviarme un correo electrónico, contestaré tan pronto como sea posible.</p>
                            <br>

                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <p>
                                        <b>Datos de contacto</b>
                                        <br>
                                        <br>
                                        Teléfono:
                                        <a href="" >771 125 9358</a>
                                        <br>
                                        Email:
                                        <a href="mailto:pablo.lucv@gmail.com">pablo.lucv@gmail.com</a>
                                        <br>
                                        Celular:
                                        <a href="tel:7711259358">771 125 9358</a>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    @include('layout.partials.errors')
                                    @include('layout.partials.success')
                                    <div class="clearfix contact-form card-panel grey lighten-5">
                                        <form action="{{route('send.mail')}}" method="POST" id="contactForm">
                                            {{ csrf_field() }}
                                            <div class="input-field">
                                                <label for="contact_name" class="input-label">Nombre</label>
                                                <input id="contact_name" type="text" name="contact_name" class="validate input-box {{ $errors->has('contact_name') ? 'invalid' : ''  }}" value="{{ old('contact_name') }}">
                                            </div>
                                            <div class="input-field">
                                                <label for="contact_email" class="input-label">Email</label>
                                                <input id="email" type="email" name="contact_email" class="validate input-box {{ $errors->has('contact_email') ? 'invalid' : '' }}" value="{{ old('contact_email') }}">
                                            </div>
                                            <div class="input-field">
                                                <label for="contact_subject" class="input-label">Asunto</label>
                                                <input id="subject" type="text" name="contact_subject" class="validate input-box {{$errors->has('contact_subject') ? 'invalid': ''}}" value="{{ old('contact_subject') }}">
                                            </div>
                                            <div class="input-field textarea-input">
                                                <label for="contact_message" class="input-label">Mensaje</label>
                                                <textarea id="message" name="contact_message" class="validate materialize-textarea" style="height: 22px;" >{{ old('contact_message') }}</textarea>
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
@section('scripts')
    <script>
        $(document).ready(function(){
            $(".close").click(function(){
                $("#card-alert").slideUp(300);
            });
        });
    </script>
@stop