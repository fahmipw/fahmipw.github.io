<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hai, selamat datang :)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/5b9e12ff-b59c-4d5f-9e56-c9eeee379fc9/de16dii-8f2efd4b-48db-4214-b792-e8444870f93a.jpg/v1/fit/w_828,h_1210,q_70,strp/patience_and_perseverance__by_pascalcampion_de16dii-414w-2x.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTQxNyIsInBhdGgiOiJcL2ZcLzViOWUxMmZmLWI1OWMtNGQ1Zi05ZTU2LWM5ZWVlZTM3OWZjOVwvZGUxNmRpaS04ZjJlZmQ0Yi00OGRiLTQyMTQtYjc5Mi1lODQ0NDg3MGY5M2EuanBnIiwid2lkdGgiOiI8PTk3MCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.tmVQndo19bztqY8DjgjCvAkiEfzcv055fGASvqgJIxc');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: white;
        }

        .container {
            text-align: center;
            margin: 40% auto;
            max-width: 80%;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .container h1 {
            font-size: 5vw;
            margin-bottom: 20px;
        }

        input {
            padding: 1em;
            margin: 5px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
        }

        button {
            padding: 1em 2em;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .container h3 {
            font-family: 'Comic Sans MS', Times, serif;
            font-size: 16px;
            /* Ganti dengan ukuran font yang diinginkan */
            font-style: italic;
        }

        .custom-text {
            font-family: 'Comic Sans MS', cursive;
            font-size: 16px;
            /* Ganti dengan ukuran font yang diinginkan */
            font-style: italic;
        }

        button:hover {
            background-color: #2980b9;
        }

        .copyright {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-family: 'Calibri', Times, serif;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>

    <div id="question1" class="container dialog" style="display: none;">
        <p>Selamat datang manusia, mungkin kamu adalah teman saya atau kenal dengan saya. Kalo boleh tau nama kamu siapa?</p>
        <input type="text" id="answer1">
        <button onclick="handleNextQuestion('question1', 'question2')">Next</button>
    </div>

    <div id="question2" class="container dialog" style="display: none;">
        <p>Kenal sama saya sejak kapan?</p>
        <input type="text" id="answer2">
        <button onclick="handleNextQuestion('question2', 'question3')">Next</button>
    </div>

    <div id="question3" class="container dialog" style="display: none;">
        <p>Pasti kesini mau ngestalk ya?</p>
        <input type="text" id="answer3">
        <button onclick="handleNextQuestion('question3', 'question4')">Next</button>
    </div>

    <div id="question4" class="container dialog" style="display: none;">
        <p>Oke deh kalo gitu, ada sesuatu nih buat kamu</p>
        <p id="answer4"></p>
        <!-- Menghilangkan tombol input -->
        <button onclick="handleNextQuestion('question4', 'result')">Next</button>
    </div>

    <div id="result" class="container dialog" style="display: none;">
        <p id="resultContent"></p>
    </div>

    <div class="copyright">
        <p>Copyright &copy; 2024 | <a href="https://instagram.com/fahmiprdn16" target="_blank"
                style="color: #3498db;">fahmiprdn16</a></p>
    </div>

    <script language="JavaScript" type="text/javascript">
        // Start the interaction
        var yakin = confirm("Apakah kamu kenal saya?");
        if (yakin) {
            window.alert = "";
            openDialog('question1');
        } else {
            displayThankYouMessage();
        }

        function openDialog(dialogId) {
            var dialog = document.getElementById(dialogId);
            if (dialog) {
                dialog.style.display = 'block';
            }
        }

        function closeDialog(dialogId) {
            var dialog = document.getElementById(dialogId);
            if (dialog) {
                dialog.style.display = 'none';
            }
        }
        function handleNextQuestion(currentQuestion, nextQuestion) {
            var answer = document.getElementById('answer' + currentQuestion.charAt(currentQuestion.length - 1)).value;
            // Do additional processing if needed with the answer
            if (nextQuestion === 'result') {
                var answer1 = document.getElementById('answer1').value;
                var answer2 = document.getElementById('answer2').value;
                var answer3 = document.getElementById('answer3').value;
                var answer4 = document.getElementById('answer4').value;
                displayResult(answer1, answer2, answer3, answer4);
            } else {
                closeDialog(currentQuestion);
                openDialog(nextQuestion);
            }
        }

        function displayResult(answer1, answer2, answer3, answer4) {
            var resultContainer = document.getElementById('resultContent');
            if (resultContainer) {
                // Process the answers and display the result
                const instagramUsername = "fahmiprdn16";
                resultContainer.innerHTML = "<h2>Hai, kamu adalah pengunjung profil Instagram @" + instagramUsername + "</h2>";
                resultContainer.innerHTML += "<pre>";
                resultContainer.innerHTML += "<br><span style='font-family: Consolas;'>Halo, " + answer1 + " kamu sedang berkunjung ke profil Instagramnya Fahmi,</span>";
                resultContainer.innerHTML += "<br><span style='font-family: Consolas;'>selanjutnya kamu sudah mengenal Fahmi sejak " + answer2 +
                    ", dan sepertinya Fahmi mengetahui siapa dirimu</span><br>";
                resultContainer.innerHTML += "<span style='font-family: Consolas;'>Dan ketika kamu ditanya tentang ngestalk tapi jawaban kamu malah " + answer3 + "</span>";

                resultContainer.innerHTML += "<p style='font-family: Consolas;'>BTW makasih ya " + answer1 +
                    " atas kunjungannya wkwkw... <br><br><br><br></p>";

                     resultContainer.innerHTML += "<p style='font-family: Arial;font-size: 15px;'>ada sedikit kata-kata hari ini buat kamu :</p>";



                // Array of kata-kata
                const kataKata = [
                    "\"Jika untuk bermimpi saja kamu takut, maka kamu adalah orang yang tidak tahu arah masa depanmu\"",
                    "\"Seburuk apapun masa lalumu, itu telah berlalu. Sekarang, fokus untuk kebahagiaan dirimu di masa depan\"",
                    "\"Cintailah orang yang kamu lihat di depan cermin\"",
                   "\"Sejatinya seseorang hanya suka menilai buruk orang lain, namun tidak suka dirinya dinilai buruk. Suka mengritik orang lain, namun tidak suka dikritik orang lain\"",
                   "\"Hidup tak semudah membalikkan telapak tangan, tetapi dengan telapak tangan kita dapat mengubah hidup kita jauh lebih baik lagi\"",
                   "\"Kemarin adalah kenangan, esok adalah apa yang akan dicapai, hari ini adalah kenyataan yang harus dijalani dengan sebaik-baiknya\"",
                   "\"Kamu tidak bisa memulai bab selanjutnya dalam hidupmu jika kamu terus membaca kembali yang terakhir\"",
                   "\Salah satu momen paling membahagiakan adalah ketika kamu menemukan keberanian untuk melepaskan apa yang tidak bisa kamu ubah\"",
                   "\"Hidup adalah tentang bertahan dan belajar menerima, atau pergi dan belajar melupakan\"",
                   "\"Salah satu cara paling sederhana untuk tetap bahagia adalah melepaskan hal-hal yang membuatmu sedih\"",

                ];

                // Ambil kata acak dari array
                const kataAcak = kataKata[Math.floor(Math.random() * kataKata.length)];

                resultContainer.innerHTML += "<h3>" + kataAcak + "</h3>";

                // Display the result dialog
                closeDialog('question4');
                openDialog('result');
            }
        }

                   function displayThankYouMessage() {
                document.write("<div class='container'><h4>Kirain kita udah saling kenal ternyata belum ya?<br>Yaudah deh... makasih ya karena udah mampir ke profil Instagram saya<br><br>Pesan untuk kamu :<br><span class='custom-text'>\"Jika datangmu kemari hanya sekedar penasaran, maka pergilah. Dan jika ingin mengenalnya jangan pergi\"</span></h4>");

                // Menambahkan tombol "Pergi" dengan onclick event
                document.write("<button onclick='openAndCloseWindow()'>Pergi</button>");

                // Menambahkan spasi antara tombol
                document.write("<span style='margin-right: 20px;'></span>");

                // Menambahkan tombol "Tidak Mau Pergi" dengan onclick event
                document.write("<button onclick='goToLink()'>Gak Mau Pergi</button></div>");
            }

            // Fungsi untuk membuka jendela dan menutupnya
            function openAndCloseWindow() {
                // Membuka jendela baru
                var popup = window.open("", "_self");
                popup.close();
            }

            // Fungsi untuk mengarahkan ke halaman dengan link
            function goToLink() {
                // Mengganti URL dengan tautan yang diinginkan
                var link = "https://www.instagram.com/direct/t/100865637978467/"; // Ganti dengan URL yang diinginkan
                window.location.href = link;
            }

                </script>

            </body>

            </html>
