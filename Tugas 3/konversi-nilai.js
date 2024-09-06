function konversi() {
    var nilai = document.mutu.inputNilai.value;

    if (nilai >= 0 && nilai <= 40)
        hasil("E");
    else if (nilai >= 41 && nilai <= 55)
        hasil("D");
    else if (nilai >= 56 && nilai <= 60)
        hasil("C");
    else if (nilai >= 61 && nilai <= 65)
        hasil("BC");
    else if (nilai >= 66 && nilai <= 70)
        hasil("B");
    else if (nilai >= 71 && nilai <= 80)
        hasil("AB");
    else if (nilai >= 80 && nilai <= 100)
        hasil("A");
    else
        hasil("th3_1nput_15_wr0n9");
}

function hasil(hurufMutu) {
    var hasilKonversi = document.getElementById("hasilKonversi");

    if (hurufMutu == "th3_1nput_15_wr0n9")
        hasilKonversi.innerHTML = "Nilai yang Anda masukkan tidak sesuai.";
    else
        hasilKonversi.innerHTML = "Huruf mutu Anda adalah " + hurufMutu;
}
