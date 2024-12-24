document.getElementById("komen_form").addEventListener("submit", function(event) {
    event.preventDefault();

    const fullName = document.getElementById("full-name").value.trim();
    const gender = document.querySelector('input[name="gender"]:checked')?.value;
    const birthDate = document.getElementById("birth-date").value;
    const churchOrigin = document.getElementById("church-origin").value.trim();
    const phoneNumber = document.getElementById("phone-number").value.trim();

    let errorMessage = "";

    if (!fullName) {
        errorMessage += "Nama lengkap harus diisi.\n";
    }
    if (!gender) {
        errorMessage += "Jenis kelamin harus dipilih.\n";
    }
    if (!birthDate) {
        errorMessage += "Tanggal lahir harus diisi.\n";
    }
    if (!churchOrigin) {
        errorMessage += "Asal gereja harus diisi.\n";
    }
    if (!phoneNumber) {
        errorMessage += "Nomor telepon harus diisi.\n";
    }

    if (errorMessage) {
        alert(errorMessage);
        return;
    }

    const waMessage = `Halo, saya ingin mendaftar dengan data berikut:
- Nama Lengkap: ${fullName}
- Jenis Kelamin: ${gender === "male" ? "Laki-laki" : "Perempuan"}
- Tanggal Lahir: ${birthDate}
- Asal Gereja: ${churchOrigin}
- Nomor Telepon: ${phoneNumber}`;

    const waNumber = "6281291468340";
    const waLink = `https://wa.me/${waNumber}?text=${encodeURIComponent(waMessage)}`;

    window.open(waLink, "_blank");
});