<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= esc($tutorial['judul']) ?> - PDF</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        h4 {
            font-size: 16px;
            margin-top: 20px;
            margin-bottom: 5px;
        }

        p {
            margin: 5px 0;
        }

        .step {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            white-space: pre-wrap;
            word-break: break-word;
        }

        img {
            max-width: 100%;
            height: auto;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1><?= esc($tutorial['judul']) ?></h1>
    <p><strong>Kode Mata Kuliah:</strong> <?= esc($tutorial['kode_matkul']) ?></p>
    <hr>

    <?php if (!empty($details)): ?>
        <?php $i = 1; ?>
        <?php foreach ($details as $d): ?>
            <div class="step">
                <h4>Langkah <?= $i++ ?>.</h4>

                <?php if (!empty($d['text'])): ?>
                    <p><?= esc($d['text']) ?></p>
                <?php endif; ?>

                <?php if (!empty($d['url'])): ?>
                    <p><strong>Link:</strong> <?= esc($d['url']) ?></p>
                <?php endif; ?>

                <?php if (!empty($d['image'])): ?>
                    <?php
                    $imgPath = FCPATH . 'uploads/images/' . $d['image'];
                    if (is_file($imgPath)) {
                        $imgData = base64_encode(file_get_contents($imgPath));
                        $imgMime = mime_content_type($imgPath);
                        echo '<img src="data:' . $imgMime . ';base64,' . $imgData . '" alt="Gambar">';
                    } else {
                        echo '<p><em>Gambar tidak ditemukan</em></p>';
                    }
                    ?>
                <?php endif; ?>

                <?php if (!empty($d['code'])): ?>
                    <pre><?= esc($d['code']) ?></pre>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p><em>Tidak ada detail tutorial.</em></p>
    <?php endif; ?>
</body>

</html>