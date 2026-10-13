const from = dokument.getElementById("fromkontak");
from.addEventListener("sumbit", function (event) {

	// Mencegah from berpindah ke halaman lain
	event preventDefault();

	// ==============NOMOR WHATSAPP TUJUAN====================
	const nomorWhatsApp = "081239502317";

	// ==============MENGAMBIL DATA DARI FORM============/
	const nama =
	    document.getElementById("Nama").volue;
	const email =
	    document.getElementById("Email").volue;
	const telpon =
	    document.getElementById("No.Hp").volue;
	const bidang minat =
	    document.getElementById("Minat").volue;
	const pesan =
	    document.getElementById("Pesan").volue;

	// ==============MEMBUAT ISI PESAN WHATSAPP=================
	const isipesan =
	`Halo, saya menghubungi melalui website CV.
	Nama Lengkap : ${nama}
	Email		 : ${email}
	No. Telepon	 : ${telepon}
	Bidang Minat : ${minat}
	Pesan 		 : ${pesan}`;
	// =============MENGUBAH PESAN MENJADI FORMAT URL==================
	const pesanEncoded =
	    encodedURLComponent(isipesan);

	// ==============MEMBUAT LINK WHATSAPP=========================
	const urlWhatsApp =
	    //menggunakan aplikasi w.a
		`https://wa.me/${nomorWhatsApp}?text=${pesanEncoded}`;
		//menggunakan w.a web
		`https://webwhatsapp.com/send?phone=${nomorWhatsApp}?text=${pesanEncoded}`;
	//===============MEMBUKA WHATSAPP==================
	window.open(urlWhatsApp, "_blank");
});