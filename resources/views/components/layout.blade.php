<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to bottom right, #eef2f7, #dbe4ee);
            color: #1f2937;
            line-height: 1.6;
        }

        .page-wrapper {
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 16px;
            color: #111827;
        }

        p {
            font-size: 1.05rem;
            color: #4b5563;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        {{ $slot }}
    </div>
</body>
</html>