@extends('layouts.header')

@section('content')
<!DOCTYPE html>
<html lang="es">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda - MultiFarma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .help-section {
            padding: 80px 0;
        }
        .help-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #007bff;
        }
        .help-content {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
        }
        .help-content h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }
        .help-content ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .help-content ul li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
        }
        .help-content ul li:before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #007bff;
            font-size: 1.2rem;
        }
        .help-content a {
            color: #007bff;
            text-decoration: underline;
        }
        .help-content a:hover {
            color: #0056b3;
            text-decoration: none;
        }
    </style>
<body>

<section class="help-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="help-content">
                    <h3 class="help-title">¡Bienvenido a nuestra sección de Ayuda!</h3>
                    <p>Encuentra respuestas a las preguntas más frecuentes sobre nuestros servicios y cómo utilizar nuestra plataforma.</p>
                    
                    <h3>Preguntas Frecuentes</h3>
                    <ul>
                        <li><strong>Realización de Pedidos:</strong> ¿Cómo puedo hacer pedidos en línea?</li>
                        <li><strong>Envíos y Entregas:</strong> ¿Cuáles son los horarios de entrega a domicilio?</li>
                        <li><strong>Formas de Pago:</strong> ¿Qué opciones de pago aceptan?</li>
                        <li><strong>Políticas y Términos:</strong> ¿Cuáles son las políticas de privacidad y términos de uso?</li>
                        <li><strong>Problemas Técnicos:</strong> ¿Qué hacer si tengo problemas técnicos con la página?</li>
                        <li><strong>Recuperar Contraseña:</strong> ¿Cómo puedo recuperar mi contraseña?</li>
                    </ul>

                    <h3>Contáctanos</h3>
                    <p>Para cualquier otra pregunta o asistencia adicional, no dudes en contactarnos:</p>
                    <ul>
                        <li><strong>Teléfono:</strong> <a href="tel:+523338181818">33-3818-1818</a> (Guadalajara), <a href="tel:+525554205420">55-5420-5420</a> (CDMX), <a href="tel:+528183308330">81-8330-8330</a> (Monterrey), 83FARMACIA (toda la República Mexicana)</li>
                        <li><strong>Email:</strong> <a href="/ayuda/contacto">soporte@multifarma.com</a></li>
                        <li><strong>Formulario de Contacto:</strong> <a href="/ayuda/contacto">Completa nuestro formulario de contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

@extends('layouts.footer')

@section('footer')
                        

                        
