<html>
    <body>
        <table width="744" border="1">
            <tr>
                <th height="41" scope="row">
                    <a href="index.php?option=upload" style="margin-left:100px">Upload image</a>
                    <a href="index.php?option=gallery" style="margin-left:100px">Image gallery</a>
                </th>
            </tr>
            <tr>
                <th height="401" scope="row">
                    <?php
                    @$gall = $_GET['option'];
                    switch ($gall) {
                        case 'upload':
                            include('upload.php');
                            break;
                        case 'gallery':
                            include('gallery.php');
                            break;
                    }
                    ?>
                </th>
            </tr>
        </table>
    </body>
</html>

