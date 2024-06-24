@extends('layouts.header')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - MultiFarma</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .contact-section {
            padding: 80px 0;
        }
        .contact-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            color: #007bff;
        }
        .contact-info {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
        }
        .contact-info h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }
        .contact-info ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .contact-info ul li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
        }
        .contact-info ul li:before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #007bff;
            font-size: 1.2rem;
        }
        .contact-info a {
            color: #007bff;
            text-decoration: underline;
        }
        .contact-info a:hover {
            color: #0056b3;
            text-decoration: none;
        }
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
            border-radius: 12px;
            margin-bottom: 20px;
        }
        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
            border-radius: 12px;
        }
        .contact-form {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 12px;
            padding: 30px;
        }
        .contact-form h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }
        .form-control {
            border-radius: 6px;
            margin-bottom: 15px;
        }
        .form-control:focus {
            box-shadow: none;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

<section class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-info">
                    <h3 class="contact-title">Contáctanos</h3>
                    <ul>
                        <li><strong>Teléfono:</strong> <a href="tel:+523338181818">33-3818-1818</a> (Guadalajara), <a href="tel:+525554205420">55-5420-5420</a> (CDMX), <a href="tel:+528183308330">81-8330-8330</a> (Monterrey), 83FARMACIA (toda la República Mexicana)</li>
                        <li><strong>Email:</strong> <a href="/ayuda">soporte@multifarma.com</a></li>
                        <li><strong>Formulario de Contacto:</strong> <a href="#contact-form">Completa nuestro formulario de contacto</a></li>
                    </ul>
                </div>

                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.292575393095!2d-103.39379186507031!3d20.679497061031494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b6aa6c4d5ca3%3A0x4f162be2e3b2e8f4!2sFarmacias%20Guadalajara%20S.A.%20de%20C.V.!5e0!3m2!1ses!2smx!4v1643135757158!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="contact-form" id="contact-form">
                    <h3 class="contact-title">Envíanos un mensaje</h3>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

