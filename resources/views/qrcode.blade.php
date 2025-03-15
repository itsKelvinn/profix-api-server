<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 text-center w-96">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Scan Your QR Code</h1>

        <!-- Display QR Code -->
        <div class="border p-4 rounded-lg bg-gray-50 inline-block">
            <img src="{{ route('qrcode.show') }}" alt="QR Code" class="w-40 h-40 mx-auto">
        </div>

        <p class="text-gray-600 mt-4">Scan this QR code using your phone camera or QR scanner app.</p>

        <!-- Generate New QR Code Button -->
        <a href="{{ route('qrcode.refresh') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Generate New QR Code
        </a>
    </div>

</body>
</html>
