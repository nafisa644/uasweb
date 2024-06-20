<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online - MTs Babussalam</title>
    <style>
        :root {
            --primary: #8ab1dd;
            --bg: rgb(1, 1, 3);
        }
       
        .hero {
            min-height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-repeat: no-repeat;
            background-size: contain; /* Mengatur ukuran gambar */
            background-position: center;
            position: relative;
            text-align: center;
        }
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg, rgba(1, 1, 3, 1) 10%, rgba(53, 53, 87, 0) 50%);
            z-index: 1;
        }
        .hero .content {
            position: relative;
            z-index: 2;
            max-width: 60rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
        .hero .content h1 {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 1rem;
        }
        .hero .content h1 span {
            color: var(--primary);
        }
        .hero .content p {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: #ddd;
        }
        .hero .content .cta {
            display: inline-block;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            color: #fff;
            background-color: var(--primary);
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .hero .content .cta:hover {
            background-color: #6a92bc;
        }
        .box {
            position: relative;
            width: 80%;
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border: 1px solid #fff;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .box::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            z-index: -1;
        }
        .box h1 {
            font-size: 2rem;
            color: #fff;
            margin-bottom: 1rem;
        }
        .box p {
            font-size: 1.2rem;
            color: #ddd;
        }
    </style>
</head>
<body>
    <section class="hero" id="home">
        <div class="content">
            <h1>Madrasah Tsanawiyah <span>Babussalam</span></h1>
            <p>Mencetak Generasi Yang Ampuh Untuk Mengubah Dunia Agar Dapat Mencapai Kesuksesan,
                Kesejahteraan Serta Kebahagiaan</p>
            <a href="https://mtsbbsmalang.sch.id/" class="cta">Kepoin Kami</a>
        </div>
    </section>
</body>
</html>
