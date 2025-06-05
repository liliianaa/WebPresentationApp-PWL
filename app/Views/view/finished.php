<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= esc($tutorial['judul']) ?> - Finished</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        pre {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }

        img.responsive-img {
            max-width: 100%;
            height: auto;
            max-height: 300px;
            display: block;
            margin: 10px 0;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #5b6eff, #8a60f2);
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 12px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-gradient:hover {
            opacity: 0.9;
        }

        .pdf-controls {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body class="p-4">
    <div class="container">
        <div class="pdf-controls">
            <a href="/finished/<?= esc($tutorial['url_finished']) ?>/pdf" class="btn btn-gradient" target="_blank">
                ⬇️ Download PDF
            </a>
        </div>

        <h1><?= esc($tutorial['judul']) ?></h1>
        <p><strong>Kode Matkul:</strong> <?= esc($tutorial['kode_matkul']) ?></p>
        <hr>

        <?php if (!empty($details)): ?>
            <?php $i = 1; ?>
            <?php foreach ($details as $d): ?>
                <div class="mb-4 border-bottom pb-3">
                    <h4>Langkah <?= $i++ ?>.</h4>

                    <?php if (!empty($d['text'])): ?>
                        <p><?= esc($d['text']) ?></p>
                    <?php endif; ?>

                    <?php if (!empty($d['url'])): ?>
                        <p><a href="<?= esc($d['url']) ?>" target="_blank"><?= esc($d['url']) ?></a></p>
                    <?php endif; ?>

                    <?php if (!empty($d['image'])): ?>
                        <p>
                            <img src="<?= base_url('uploads/images/' . esc($d['image'])) ?>" alt="Gambar" class="responsive-img">
                        </p>
                    <?php endif; ?>

                    <?php if (!empty($d['code'])): ?>
                        <pre><code><?= esc($d['code']) ?></code></pre>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p><em>Tidak ada detail tutorial.</em></p>
        <?php endif; ?>
    </div>
</body>

</html>