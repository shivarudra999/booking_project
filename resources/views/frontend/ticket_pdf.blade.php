<!DOCTYPE html>
<html>

<head>
    <title>Event Ticket</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .ticket {
        border: 2px solid black;
        padding: 20px;
        width: 300px;
        /* Adjust width as needed */
        height: 400px;
        /* Adjust height as needed */
        background-color: #fff;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .ticket-details {
        margin-bottom: 20px;
    }

    .footer {
        text-align: center;
    }

    /* Customize font, color, and other styles as desired */
    </style>
</head>

<body>
    <div class="ticket">
        <div class="header">
            <h1>Event Name</h1>
            <p>Date: [Event Date]</p>
            <p>Time: [Event Time]</p>
            <p>Location: [Event Location]</p>
        </div>
        <div class="ticket-details">
            <p>Ticket Holder: [Ticket Holder Name]</p>
            <p>Ticket Number: [Ticket Number]</p>
            <p>Barcode: [Barcode Image]</p>
        </div>
        <div class="footer">
            <p>Scan this QR code to enter.</p>
            <img src="qr-code.png" alt="QR Code">
        </div>
    </div>
</body>

</html>