<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form runat="server">
    <div class="bubble-r-box" style="height: 140px; left: 364px; width: 130px;">
        <div class="bubble-element PictureInput clickable-element"
            style="width: 130px; left: 0px; position: absolute; box-sizing: border-box; z-index: 9; height: 140px; top: 0px; border-style: solid; border-width: 1px; border-color: rgb(204, 204, 204); border-radius: 4px; box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 0px 0px inset; transition: border-color 200ms ease 0s, box-shadow 200ms ease 0s;">
            <button class="button_for_file_uploader"
                style="border: none; background-color: rgb(255, 255, 255); z-index: 4; position: absolute; left: 0px; top: 0px; cursor: pointer; width: 100%; height: 100%; opacity: 1; font-family: &quot;Open Sans&quot;; font-size: 14px; font-weight:bold; color:rgb(51, 51, 51); text-align: center;">Click
                to upload an image</button>
            <input id="imgInp" type="file"
                style="opacity: 0; position: absolute; z-index: 15; cursor: pointer; left: 0px; width: 100%; height: 100%;"
                tabindex="4">
            <img id="photo" src="" style="width: 100%; height: 100%; z-index: 5; position: absolute; opacity: 0;"
                alt="Your Image">
        </div>
    </div>
</form>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#photo').attr('src', e.target.result);
                $('#photo').css({
                    opacity: 1
                });

            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });
</script>