@extends('layouts.header')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes - MultiFarma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .faq-section {
            padding: 80px 0;
        }
        .faq-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #007bff;
        }
        .faq-content {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
        }
        .faq-content h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }
        .faq-content ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .faq-content ul li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
        }
        .faq-content ul li:before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #007bff;
            font-size: 1.2rem;
        }
        .faq-content a {
            color: #007bff;
            text-decoration: underline;
        }
        .faq-content a:hover {
            color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>

<section class="faq-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="faq-content">
                    <h3 class="faq-title">Preguntas Frecuentes</h3>
                    
                    <h3>Pedidos y Envíos</h3>
                    <ul>
                        <li><strong>¿Cómo puedo hacer pedidos en línea?</strong>
                            <p>Puedes realizar pedidos a través de nuestra página web o llamando a nuestro Contact Center 24hrs.</p>
                        </li>
                        <li><strong>¿Cuáles son los horarios de entrega a domicilio?</strong>
                            <p>En Guadalajara las entregas son 24hrs y en el resto de poblaciones de 7:00 a.m. a 10:00 p.m.</p>
                        </li>
                    </ul>

                    <h3>Costos de Envío</h3>
                    <ul>
                        <li><strong>¿Cuáles son los costos de envío?</strong>
                            <p>El envío tiene un costo de $20 en varias ciudades y es gratuito en Querétaro.</p>
                        </li>
                    </ul>

                    <h3>Pagos y Promociones</h3>
                    <ul>
                        <li><strong>¿Qué opciones de pago aceptan?</strong>
                            <p>Aceptamos tarjetas de crédito y débito Visa, MasterCard, American Express y PayPal.</p>
                        </li>
                        <li><strong>¿Cuáles son los términos y condiciones de Meses Sin Intereses?</strong>
                            <p>Ofrecemos Meses Sin Intereses con diferentes bancos para compras en línea.</p>
                        </li>
                    </ul>

                    <h3>Registro y Cuenta</h3>
                    <ul>
                        <li><strong>¿Cómo me puedo registrar?</strong>
                            <p>Puedes registrarte en nuestra página web completando un formulario simple.</p>
                        </li>
                        <li><strong>¿Cómo puedo recuperar mi contraseña?</strong>
                            <p>Recupera tu contraseña haciendo clic en "¿Olvidaste tu contraseña?" en la página de inicio de sesión.</p>
                        </li>
                    </ul>

                    <h3>Compras Recurrentes</h3>
                    <ul>
                        <li><strong>¿Qué son compras recurrentes?</strong>
                            <p>Son pedidos automáticos que se entregan en intervalos de tiempo que tú eliges.</p>
                        </li>
                        <li><strong>¿Cómo puedo hacer un pedido recurrente?</strong>
                            <p>Puedes configurar compras recurrentes en tu cuenta en línea.</p>
                        </li>
                    </ul>

                    <h3>Contacto</h3>
                    <p>Si tienes alguna otra pregunta, por favor contáctanos a través de nuestros canales de atención:</p>
                    <ul>
                        <li><strong>Teléfono:</strong> <a href="tel:+523338181818">33-3818-1818</a> (Guadalajara), <a href="tel:+525554205420">55-5420-5420</a> (CDMX), <a href="tel:+528183308330">81-8330-8330</a> (Monterrey), 83FARMACIA (toda la República Mexicana)</li>
                        <li><strong>Email:</strong> <a href="/ayuda">soporte@multifarma.com</a></li>
                        <li><strong>Formulario de Contacto:</strong> <a href="/ayuda/contacto">Completa nuestro formulario de contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
