<html>
    <head>
        <title> Edit Post </title>
        <?php require_once('common/header.php') ?>
        <script type="text/javascript" src="../static/js/tinymce/tinymce.min.js">></script>
        <script type="text/javascript">
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                     "save table contextmenu directionality emoticons template paste textcolor"
                ],
                content_css: "css/content.css",
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
             });
        </script>
    </head>
    
    <body>
        <?php 
        require_once("common/new_nav.php");
        require_once("common/include.php");
        session_start();
        if (!(isset($_GET['post'])) ){
            $edit = false;
            $id = $_SESSION['uid'];
        }
        else{
            $id = $_GET['post'];
            $edit = true;
            $curr_post = getSinglePost($id);
        } 
                        
        ?>
        
        <div class="container-fluid">
            <?php require_once("common/page_header.php");?>

            <div class="row">
                <?php require_once('common/left_panel.php') ?>
                <div class="col-md-9">
                    <div class="jumbotron clearfix" >


                        <form action="manage_input/manage_post.php" class="form-horizontal" role="form" method="post" >
                            <div class="form-group-lg" >
                                <label for="" class="col-md-2 control-label label-lg">HEADING</label>
                                <div class="col-md-10">
                                <input type="text" class="form-control" name="heading"  <?php if ($edit == true){echo 'value='.$curr_post['heading'];}?> placeholder="Enter your heading here">
                                </div>
                            </div>
                            <br><br><br><br>
                            
                            <div class="row" style="margin: 20px 0 20px 0;">
                                <div class="form-group-lg"style="margin: 30px 0 20px 0;">
                                    <label class="col-md-2 control-label label-lg">ABSTRACT</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea id="elm1" class="form-control" rows="10" name="abstract"><?php if ($edit == true){echo $curr_post['abstract'];}?></textarea>
                                </div>
                            </div>
                            
                            
                    
                            <div class="form-group-lg">
                                <label class="col-md-2 control-label label-lg">CONTENT</label>
                            </div>
                            <div class="col-md-10">
                                <textarea class="form-control" id="elm1" rows="20" name="content"><?php if ($edit == true){echo $curr_post['content'];}?></textarea>
                            </div>
                            
                            <div class="col-md-12">
                                <input type=hidden name="id" <?php if($edit){echo 'value='.$id;} ?> >
                            </div>
                            
                            <div class="col-md-6 col-md-offset-6">
                                <input type=hidden name="is_edit" <?php echo 'value='.$edit; ?> >
                                <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>

            <?php require_once('common/footer.php') ?>
        </div>
    </body>
</html>