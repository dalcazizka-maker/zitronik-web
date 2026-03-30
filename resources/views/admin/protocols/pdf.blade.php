<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Servisní protokol - {{ $protocol->protocol_number }}</title>
    <style>
        /* Speciální font pro českou diakritiku v PDF */
        body {
            font-family: 'DejaVu Sans', sans-serif;
            font-size: 14px;
            color: #333;
            line-height: 1.5;
        }
        .header {
            border-bottom: 2px solid #2563eb;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .company-name {
            font-size: 24px;
            font-weight: bold;
            color: #1e3a8a;
        }
        .title {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .info-table {
            width: 100%;
            margin-bottom: 30px;
        }
        .info-table td {
            padding: 5px;
            vertical-align: top;
        }
        .info-box {
            background-color: #f8fafc;
            padding: 15px;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
        }
        .section-title {
            font-weight: bold;
            margin-bottom: 10px;
            color: #1e293b;
            border-bottom: 1px solid #cbd5e1;
            padding-bottom: 5px;
        }
        .price-box {
            margin-top: 40px;
            text-align: right;
            font-size: 18px;
        }
        .price-value {
            font-size: 24px;
            font-weight: bold;
            color: #2563eb;
        }
        .footer {
            margin-top: 50px;
            font-size: 11px;
            text-align: center;
            color: #64748b;
            border-top: 1px solid #e2e8f0;
            padding-top: 10px;
        }
    </style>
</head>
<body>

    <div class="header">
        <table style="width: 100%;">
            <tr>
                <td>
                    <div class="company-name">ZITRONIK</div>
                    <div>Servis elektroniky a montáže</div>
                    <div>Klimkovice</div>
                </td>
                <td style="text-align: right;">
                    <div>Tel: +420 700 100 200</div>
                    <div>Email: info@zitronik.cz</div>
                    <div>IČO: 12345678 (doplň si)</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="title">Servisní protokol č. {{ $protocol->protocol_number }}</div>

    <table class="info-table">
        <tr>
            <td style="width: 50%;">
                <div class="info-box">
                    <div class="section-title">Zákazník</div>
                    <div><strong>{{ $protocol->customer_name }}</strong></div>
                    <div>{{ $protocol->customer_phone }}</div>
                </div>
            </td>
            <td style="width: 50%;">
                <div class="info-box">
                    <div class="section-title">Informace o zakázce</div>
                    <div><strong>Datum přijetí:</strong> {{ $protocol->created_at->format('d.m.Y') }}</div>
                    <div><strong>Zařízení:</strong> {{ $protocol->device }}</div>
                </div>
            </td>
        </tr>
    </table>

    <div class="info-box" style="min-height: 150px;">
        <div class="section-title">Popis závady a provedené práce</div>
        <div style="white-space: pre-wrap;">{{ $protocol->description }}</div>
    </div>

    @if($protocol->price)
    <div class="price-box">
        Celková cena práce a materiálu: <span class="price-value">{{ number_format($protocol->price, 0, ',', ' ') }} Kč</span>
    </div>
    @endif

    <table style="width: 100%; margin-top: 80px;">
        <tr>
            <td style="text-align: center; width: 50%;">
                ___________________________<br>
                Podpis technika
            </td>
            <td style="text-align: center; width: 50%;">
                ___________________________<br>
                Podpis zákazníka
            </td>
        </tr>
    </table>

    <div class="footer">
        Tento dokument slouží jako potvrzení o převzetí a opravě zařízení. Záruka na vyměněné díly je 24 měsíců.
    </div>

</body>
</html> 