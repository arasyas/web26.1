<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil dan Materi</title>
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                margin: 0;
                font-family: 'Segoe UI', Arial, sans-serif;
                background-color: #F1EBE6;
                color: #222;
            }

            header img {
                width: 100%;
                height: 30%;
                object-fit: cover;
                display: block;
            }

            nav {
                background-color: #ffffff;
                text-align: center;
                padding 12px 0;
                border-bottom: 2px solid #ccc;
            }
            nav a {
                color: #222;
                text-decoration: underline;
                font-weight: bold;
                font-size: 18px;
                margin: 0 10px;
            }
            nav a:hover {
            color: #0d47a1;
            }

            section {
            padding: 40px 8%;
            border-bottom: 1px solid #ccc;
            }
            section h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            letter-spacing: 1px;
            }

            .profil-wrap {
            display: flex;
            align-items: flex-start;
            gap: 30px;
            flex-wrap: wrap;
            }
            .profil-foto {
            flex: 0 0 180px;
            text-align: center;
            }
            .profil-foto img {
            width: 350px;
            height: auto;
            object-fit: contain;
            }
            .profil-teks {
             flex: 1;
             min-width: 250px;
            }
            .profil-teks p {
            font-size: 17px;
            line-height: 1.6;
            text-align: justify;
            margin-bottom: 16px;
            }
            .highlight {
            color: #d2691e;
            font-style: italic;
            font-weight: 600;
            }

            .materi-teks p {
            font-size: 17px;
            line-height: 1.7;
            text-align: justify;
            margin-bottom: 16px;
            }
            .materi-teks h3 {
            color: #222;
            font-size: 20px;
            margin-top: 25px;
             }
            .materi-foto {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            width: 400px;
            border-radius: 0px;
            }
            .sumber {
            font-size: 13px;
            color: #666;
            margin-top: 20px;
            }

            footer {
            text-align: center;
            padding: 15px;
            font-size: 13px;
            color: #777;
            }
            </style>
            </head>
            <body>

                 <header>
                    <img src="header.png" alt="Header">
                </header>

                <nav>
                    <a href="#profil">Profil</a> | <a href="#materi">Materi</a>
                </nav>

                <section id="profil">
                    <h2>CORTIS</h2>
                    <div class="profil-wrap">
                        <div class="profil-foto">
                            <img src="weverse_20260917232833.jpeg" alt="Foto Profil">
                        </div>
                        <div class="profil-teks">
                         <p>
                            CORTIS merupakan KPOP <i>boy group</i> beranggotakan 5 orang dibawah BIGHIT MUSIC. Mereka debut pada tanggal 18 Agusutus 2025 dengan <i>single</i> berjudul "What You Want". CORTIS beranggotakan Martin, James, Juhoon, Seonghyeon, dan Keonho.
                        <p>
                            Nama CORTIS merupakan akronim dari <i>COLOR OUTSIDE THE LINES</i> yang berarti "berpikir bebas, keluar dari standar dan aturan yang berlaku di dunia." Anggota CORTIS berasal dari Korea Selatan, Kanada, Taiwan, dan Thailand. Pada januari 2026, hanya dalam 5 bulan setelah debut, CORTIS berhasil memenangkan penghargaan artis pendatang baru terbaik.
                            <p class="sumber">Sumber: WIKIPEDIA dan KPROFILES </p>
                        </p>
                    </div>
                </div>
            </section>

            <section id="materi">
                <h2>TENTANG CORTIS</h2>
                <div class="materi-teks">
                <p>
        Saya mulai mengenal CORTIS pada tanggal 30 Desember 2025. Kejadian tersebut pun tidak disengaja. Bermula dari saya yang tidak sengaja melihat <i>fan edit</i> Martin pada FYP TikTok dan dari situlah saya mulai tertarik dengan CORTIS. Anggota favorit saya adalah Martin dan Seonghyeon. Jika sedang bepergian jarak jauh saya suka mendengarkan salah satu lagu mereka yang berjudul Joyride. Ada alasan mengapa saya memilih foto dibawah ini, yaitu karena foto tersebut merupakan dokumentasi CORTIS pada saat pertama kali ke Indonesia pada tanggal 20 Juni 2026 sebagai <i>headliner</i> acara AlloBank Festival di jakarta. 
        <img src="weverse_20260721190126.jpeg" alt="" class="materi-foto">
    </p>
            </div>
         </section>
        </body>
        </html>