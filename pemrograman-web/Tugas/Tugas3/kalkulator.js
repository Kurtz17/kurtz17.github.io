function hitung(metode) {
    let hasilHitung;
    const input1 = parseInt(document.getElementById("angka1").value);
    const input2 = parseInt(document.getElementById("angka2").value);

    if (metode == 1)
        hasilHitung = input1 + input2;
    else if (metode == 2)
        hasilHitung = input1 - input2;
    else if (metode == 3)
        hasilHitung = input1 * input2;
    else
        hasilHitung = input1 / input2;

    document.getElementById("hasil").value = hasilHitung;
}
