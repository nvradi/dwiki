<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pesan whatsapp Terenskripsi Base64</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Form Pesan Decoder WA Base 64</h2>
        <form method="post">
            <div class="input-group mb-3">
                <span class="input-group-text">No. WA</span>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Pesan WA</span>
                <textarea class="form-control" name="text"></textarea>
                <button type="submit" class="btn btn-primary" name="bKirim">Submit</button>
        </form>
        <?php
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
            $text = $_POST['text'];
            $text = base64_encode($text);
            echo '<a href="https://api.whatsapp.com/send/?phone=' . $phone . '&text=' . $text . '" target="_blank">Kirim WA</a>';
        }
        ?>
    </div>
</body>

</html>