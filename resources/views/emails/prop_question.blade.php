<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Formulario de contacto | RedFox Argentina</title>
    <style>
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        td {
            font-family: "Montserrat", Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            font-weight: 300;
            color: #979797;
        }

        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        body {
            -webkit-text-size-adjust: 100%;
            padding: 0;
            margin: 0;
        }

        .table-cell {
            font-size: 14px;
            padding: 10px 0;
            border-bottom: 1px solid #e3e3e3;
        }

        @media screen and (max-width: 600px) {
            table {
                width: 100% !important;
            }

            .td-mobile {
                width: 100% !important;
                display: block !important;
            }

            img[class=imgmobile] {
                width: 100% !important;
                height: auto;
            }
        }
    </style>
</head>

<body>
<table align="center" cellpadding="0" cellspacing="0" border="0" style="width:100%">
    <tr>
        <td>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto">
                <tr>
                    <td style="padding: 30px 20px 40px;">
                        <table cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;">

                            <tr>
                                <td style="font-size: 19px; padding-bottom: 10px;">
                                    <img src="https://www.redfoxargentina.com.ar/images/redfox-logo-header.png"
                                         width="160"
                                         height="50"
                                         alt="">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 19px; padding-bottom: 10px; text-align: center;">
                                    Formulario de consulta en una propiedad
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table cellpadding="0" cellspacing="0" border="0"
                                           style="border-collapse: collapse;" width="560">
                                        <tr>
                                            <td class="table-cell">Nombre</td>
                                            <td class="table-cell" style="text-align: right;">{{ $name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-cell">Email</td>
                                            <td class="table-cell" style="text-align: right;">{{ $email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-cell">Teléfono</td>
                                            <td class="table-cell" style="text-align: right;">{{ ($phone) ? $phone : "-" }}</td>
                                        </tr>

                                        <tr>
                                            <td class="table-cell">Propiedad en cuestion</td>
                                            <td class="table-cell" style="text-align: right;">{{ $prop_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="table-cell">URL: </td>
                                            <td class="table-cell" style="text-align: right;">
                                                <a href="http://redfoxargentina.com.ar/propiedad/{{ $prop_url }}">Visitar</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="table-cell">Mensaje:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="table-cell" style="border: none">
                                                {{ $message }}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <br>
                <tr>
                    <td style="font-size: 11px; color: black; padding: 8px; text-align: justify; text-justify: inter-word;">
                        AVISO DE CONFIDENCIALIDAD Y ALCANCE LEGAL Este correo electrónico es confidencial y para uso exclusivo de la(s) persona(s) a quien(es) se dirige y/o
                        para cualquier otra persona para quien se encuentre dirigida. Si el lector de esta transmisión electrónica no es destinatario, se le notifica que cualquier
                        distribución o copia de la misma se encuentra estrictamente prohibida.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>

</html>
