convert_button = document.getElementById("convert-text");
audio = document.getElementById("audio");
document.getElementById("about").onclick = function () {
      Swal.fire({
        position: 'top-end',
        text: 'Convert your text into audio files without signing up for an account and without paying. I have provided this web source code for free on my github repository.',
        showConfirmButton: false,
      });
      return false;
}
convert_button.onclick = function() {
    input_text = document.getElementById("text_to_voice").value;
    if (input_text.length < 1) {
        Swal.fire({
            position: 'top-end',
            text: 'Masukkan text yang ingin di convert.',
            showConfirmButton: false,
          });
          return false;
    }
    convert_button.disabled = true;
    convert_button.innerHTML = "Loading...";
    audio.setAttribute('src', "https://texttovoices.herokuapp.com/api/?text=" + encodeURI(input_text) + "&gender=male&lang_code=id");
    document.getElementById("audio-text").load();
    document.getElementById("audio-text").onloadeddata = function() {
        document.getElementById("audio-text").play();
        convert_button.disabled = false;
        convert_button.innerHTML = "Convert";
    }
};