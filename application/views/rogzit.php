<div>
    <p style="color:red" id="hiba"></p>
    <h1>Új tétel rögzítése</h1>
    <form onsubmit="return validalas();" method="post">
        <input type="text" name="tartalom" id="tartalom" placeholder="Tétel" required>
        <br>
        <input type="submit" value="Rögzít">
    </form>
</div>

<script>
      function validalas() {
                let tartalom = document.getElementById('tartalom').value;
                if (tartalom == "") {
                    document.getElementById("hiba").innerHTML = "A Tétel mezőt nem lehet üresen hagyni!";
                    return false;
                }
                return true;
            }
</script>
