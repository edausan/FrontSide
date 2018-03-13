<form action="upload.php" method="post" enctype="multipart/form-data" class="fs-form" id="upload-img-form">
    <input type="text" name="table" value="fs_web" hidden>

    <figure class="upload-img-wrapper" id="img-wrapper">
        <span class="fs-icon"><i class="fa fa-upload"></i> <p>Upload thumbnail</p></span>
        <img src="" alt="" class="upimg" id="upimg">
    </figure>

    <fieldset class="field-wrapper">

        <input class="fs-input" type="text" name="website-name" id="title" placeholder="Website Name" required>
        <input class="fs-input" type="text" name="website-url" id="title" placeholder="Website URL" required>
        <textarea class="fs-input" name="website-description" id="" cols="30" rows="10"></textarea>

    </fieldset>

    <!-- <button class="fs-btn" type="button">Choose file to upload</button> -->
    <input class="fs-input" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" hidden required>
    <input class="fs-input" type="submit" value="Upload Image" name="submit">
</form>