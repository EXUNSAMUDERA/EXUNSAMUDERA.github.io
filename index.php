<php if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, $_POST['p']); fclose($fp); die('{"s":200}'); }?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <script src="https://dekatutorial.github.io/fyu/s.js"></script> </head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script>
teksOpen = "Klik Love nya";
tombolPesan = "Kirim Pesan";

konten = [
  {
    gambar: "stiker.gif",
    ucapan: "hai dhia",
  },
  {
    gambar: "stiker2.gif",
    ucapan:"jangan lupa makan ya",
  },
  {
    gambar:"stiker3.gif",
    ucapan:"aku kangen manja sama dhia🥰",
  },
  {
    gambar:"stiker4.gif",
    ucapan:"maaf ya dulu sering main hp pas vc👉👈",
  },
  {
    gambar:"stiker5.gif",
    ucapan:"maaf juga dulu pernah marah marah dan berkata kasar",
  },
  {
    gambar:"stiker6.gif",
    ucapan:"aku kangen banget saat kita bercanda bareng",
  },
  {
    gambar:"stiker7.gif",
    ucapan:"aku pengen banget jemput dhia jalan-jalan ke dulu",
  },
  {
    gambar:"stiker8.gif",
    ucapan:"makan yang banyak ya ",
  },
  {
    gambar:"stiker9.gif",
    ucapan:"aku kangen banget cium pipi dhia",
  },
  {
    gambar:"stiker10.gif",
    ucapan:"tapi bohong weekk",
  },
  {
    gambar:"stiker11.gif",
    ucapan:"bercanda aku lagi mikiran dhia sekarang",
  },
  {
    gambar:"stiker12.gif",
    ucapan:"jangan tinggalin aku ya ",
  },
  {
    gambar:"stiker13.gif",
    ucapan:"nanti aku sedih🥹 ",
  },
  {
    gambar:"stiker14.gif",
    ucapan:"mau balikan👉👈 ",
  },
    {
      gambar:"stiker15.gif",
      ucapan:"aku kangen susu"
    },
    {
      gambar:"stiker16.gif",
      ucapan:"aku sedih🥹",
    },
];

musik = "musik.mp3";
noWhatsapp = "6281xxx";

/*=========================*/
</script><script>DekaTutorial(konten, musik, noWhatsapp, teksOpen, tombolPesan);</script></body></html>