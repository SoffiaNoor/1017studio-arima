<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD NUSA RAYA</title>
</head>

<body style="font-family: Arial, sans-serif;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">

        <h1>Pesan dari Website UD NUSA RAYA</h1>

        <p>Hormat Kami, {{ $formData['first_name'] }},</p>

        <p>Kami telah menerima pertanyaan Anda. Terima kasih telah menghubungi kami.</p>

        <p>Berikut adalah detail yang Anda berikan:</p>
        <ul>
            <li><strong>Nama:</strong> {{ $formData['first_name'] }}</li>
            <li><strong>Email:</strong> {{ $formData['email'] }}</li>
            <li><strong>Nomor Telepon:</strong> {{ $formData['phone_number'] }}</li>
            <li><strong>Perusahaan:</strong> {{ $formData['company'] }}</li>
        </ul>

        <p><strong>Pesan:</strong></p>
        <p>{{ $formData['message'] }}</p>

        <p>Kami akan meninjau pesan Anda dan akan segera menghubungi Anda kembali.</p>

        <p>Terima kasih atas minat Anda pada perusahaan kami.</p>

        <p>Hormat Kami,</p>
        <p>[UD NUSA RAYA]</p>

    </div>

</body>

</html>