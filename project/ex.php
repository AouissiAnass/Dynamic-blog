        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <form method="post" enctype="multipart/form-data">
                <table align="center" border="10" width="740">

                    <tr>
                        <td colspan="5" align="center" bgcolor="red">
                            <h1> inseert new post her </h1>
                        </td>
                    </tr>



                    <tr>
                        <td align="right">post tite:</td>
                        <td><input type="text" name="title" size="60" /></td>
                    </tr>

                    <tr>
                        <td align="right">author</td>
                        <td><input type="text" name="author" size="60" /></td>
                    </tr>


                    <tr>
                        <td align="right">image</td>
                        <td><input type="file" name="image" size="60"></td>
                    </tr>


                    <tr>
                        <td align="right">post content</td>
                        <td><textarea name="content" rows="21" cols="70"></textarea></td>
                    </tr>


                    <tr>
                        <td colspan="5" align="center"><input type="submit" name="submit" placeholder="insert post" /></td>
                    </tr>

                </table>

            </form>
        </body>

        </html>

        <?php
        include("connect.php");

        if (isset($_POST['submit'])) {
            if ($_POST['title'] == '' or $_POST['content'] == '' or $_POST["author"] == '') {
                echo ("<script>alert ('fill all the field ')</script>");
                exit();
            } else {
                $title = $_POST['title'];
                $author = $_POST['author'];
                $content = $_POST['content'];
                $image_name = $_FILES['image']['name'];
                echo $image_name;
                $image_type = $_FILES['image']['type'];
                $image_size = $_FILES['image']['size'];
                $image_tmp = $_FILES['image']['tmp_name'];
                $date = date('y.m.d');
            }
        }


        ?>