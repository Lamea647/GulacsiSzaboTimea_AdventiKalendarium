<div>
    <p style="color:red" id="hiba"></p>
    <h3>Új tétel rögzítése</h3>
    <form onsubmit="return validalas();" method="post">
        <input type="text" name="tartalom" id="tartalom" placeholder="Tétel" required>
        <br>
        <input style="color:blue;" type="submit" value="Rögzít">
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
