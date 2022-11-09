<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Rubik', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 8px 0;
        }

        h5 {
            color: #777777;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #3d3d3d;
            color: #fff;
        }

        .title {
            color: #222222;
            font-size: 22px;
            font-weight: bold;
            margin: 10px 0;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td {
            width: 30px;
            height: 30px;
            background: transparent;
            margin: 0 30px;
            border-radius: 50%;
            text-align: center;
        }

        .footer-social-icon tr td a {
            width: 100%;
            align-items: center;
            display: flex;
            justify-content: center;
            color: #fff;
        }

        .footer-social-icon tr td a i {
            width: 50%;
            margin: 0;
        }

        .footer-subscript p {
            margin: 0;
            letter-spacing: 1.1px;
            line-height: 1.6;
            font-size: 14px;
            color: #c5c5c5;
        }

        .footer-subscript p a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body style="margin: 20px auto;" data-new-gr-c-s-check-loaded="14.1031.0" data-gr-ext-installed="">
<table align="center" border="0" cellpadding="0" cellspacing="0"
       style="padding: 0 30px;background-color: #fff; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
    <tbody>
    <tr>
        <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>
                        <img src="https://www.trinitycollegelondontr.com/frontend/images/logob.png" alt="" style="margin-bottom: 10px;width: 50%;">
                    </td>
                </tr>

                <tr>
                    <td>
                        <h2 class="title">TEMSİLCİ OL BAŞVURU FORMU</h2>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="order-detail" style="margin-top: 10px;width: 100%;margin-bottom: 15px;" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Adı Soyadı:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->adsoyad }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Görevi:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->gorev }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Kurum Tipi:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->kurum }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Kurum Adı:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->resmiad }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Çalıştığı Sınav Kurulu:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->baskakurum }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Trinity’den nasıl haberiniz oldu? :</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->nasilhaber }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Okul Adresi :</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->okuladres }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">İl :</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->il }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">İlçe :</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->ilce }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Web Site :</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->website }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Kurum Telefon:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->kurumtelefon }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Kurum Email:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->kurumemail }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Sosyal Medya:</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->sosyalmedya }}</b></td>
                </tr>
                <tr>
                    <td style="line-height: 49px;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;"
                        colspan="2">Email :</td>
                    <td style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;"
                        colspan="3" class="price"><b>{{ $New->email }}</b></td>
                </tr>


                <tr>
                    <td colspan="2"
                        style="line-height: 49px;font-family: Arial;font-size: 13px;color: #000000;padding-left: 20px;text-align:left;border-right: unset;">
                        Telefon: </td>
                    <td colspan="3" class="price"
                        style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                        <b>{{ $New->telefon }}</b>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="line-height: 49px;font-size: 13px;color: #000000;
                                    padding-left: 20px;text-align:left;border-right: unset;">Gönderim Tarihi:</td>
                    <td colspan="3" class="price"
                        style="line-height: 49px;text-align: right;padding-right: 28px;font-size: 13px;color: #000000;text-align:right;border-left: unset;">
                        <b>{{ $New->created_at }}</b>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>

</body>

</html>
