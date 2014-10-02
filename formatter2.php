<!DOCTYPE html>

<html>
     <head>
     <meta charset="utf-8" />

     <title>E-book Formatter</title>

     <link href='http://fonts.googleapis.com/css?family=Inconsolata|Fjalla+One|Domine' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" type="text/css" href="css/style.css"/>
     <link rel="stylesheet" type="text/css" href="css/universal.css"/>

     <script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
     <script type="text/javascript" src="js/functions.js"></script>
     <script type="text/javascript" src="js/universal.js"></script>


     <script src="js/colors/jquery.minicolors.js"></script>
     <link rel="stylesheet" href="js/colors/jquery.minicolors.css">
     </head>

     <body>
          <?php 
               $story = $_GET["story"];
               $type = $_GET["type"];
               //echo '<script type="text/javascript">var directory = "books/' . $directory . '";</script>'               
          ?>
          <div class="controls">
               <?php //include('includes/sidebar.php');?>

               <!--<hr />-->

               <form method="post" action="createBook2.php">
                    <div class="section">
                         <?php 
                         echo '<input type="text" class="hidden" name="story" value="' . $story . '" />
                         <input type="text" class="hidden" name="type" value="' . $type . '" />';
                         ?>
                         <img src="imgs/plus.png" class="plus" />
                         <span class="head">Background</span>

                         <div class="row">
                              <label class="col-6"> Page Width:</label>
                              <input type="number" name="/width"  value="900" alt="px" class="half" onchange="change('', 'width', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="/width/unit">
                                   <option>px</option>
                                   <option>em</option>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Background Color:</label>
                              <input type="text" name="/background"  value="#fff" class="color col-6" onchange="change('', 'background', this.value,'')"/>
                         </div>
                         <hr />
                    </div>

                    <div class="section">
                         <img src="imgs/plus.png" class="plus" />
                         <span class="head">Text formatting</span>

                         <div class="row">
                              <label class="col-6"> Header Font:</label>
                              <select class="font" name="h1,h2,h3,h4,h5,h6/font-family" onchange="change('h1,h2,h3,h4,h5,h6', 'font-family', this.value,'')">         
                                   <?php include 'includes/fonts.php'; ?>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Header Color:</label>
                              <input type="text" name="h1,h2,h3,h4,h5,h6/color" value="#000" class="color col-6"  onchange="change('h1,h2,h3,h4,h5,h6', 'color', this.value,'')"/>
                         </div>

                         <div class="row">
                              <label class="col-6"> Header Text Size:</label>
                              <input type="number" name="h1,h2,h3,h4,h5,h6/font-size" value="30" alt="pt" class="half" onchange="change('h1,h2,h3,h4,h5,h6', 'font-size', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="h1,h2,h3,h4,h5,h6/font-size/unit">
                                   <option>pt</option>
                                   <option>em</option>
                              </select>
                         </div>

                         <hr />

                         <div class="row">
                              <label class="col-6"> Body Font:</label>
                              <select class="font" name="p/font-family" onchange="change('p', 'font-family', this.value,'')">
                                   <?php include 'includes/fonts.php'; ?>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Body Text Color:</label>
                              <input type="text" name="p/color" value ="#000" class="color col-6"  onchange="change('p', 'color', this.value,'')"/>
                         </div>

                         <div class="row">
                              <label class="col-6"> Body Text Size:</label>
                              <input type="number" name="p/font-size" value="14" alt="pt" class="half" onchange="change('p', 'font-size', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="p/font-size/unit">
                                   <option>pt</option>
                                   <option>em</option>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Body Text Indent:</label>
                              <input type="number" name="p/text-indent" value ="2" alt="em" class="half" onchange="change('p', 'text-indent', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="p/text-indent/unit">
                                   <option>pt</option>
                                   <option selected>em</option>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Line Height:</label>
                              <input type="number" name="p/line-height" value ="130" alt="%" class="half" onchange="change('p', 'line-height', this.value, $(this).attr('alt'))"/> %
                         </div>

                         <div class="row">
                              <label class="col-6"> Paragraph Spacing:</label>
                              <input type="number" name="p/padding-top" value ="15" alt="pt" class="half" onchange="change('p', 'padding-top', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="p/padding-top/unit">
                                   <option>pt</option>
                                   <option>em</option>
                              </select>
                         </div>
                         <hr/>
                    </div>

                    <div class="section">
                         <img src="imgs/plus.png" class="plus" />
                         <span class="head">Margins</span>

                         <div class="row">
                              <label class="col-6"> Left Margin:</label>
                              <input type="number" name="div/padding-left" value ="20" alt="%" class="half" onchange="change('div', 'padding-left', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="div/padding-left/unit">
                                   <option>px</option>
                                   <option>em</option>
                                   <option selected>%</option>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Right Margin:</label>
                              <input type="number" name="div/padding-right" value ="20" alt="%" class="half" onchange="change('div', 'padding-right', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="div/padding-right/unit">
                                   <option>px</option>
                                   <option>em</option>
                                   <option selected>%</option>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Top Margin:</label>
                              <input type="number" name="div/padding-top" value ="50" alt="px" class="half" onchange="change('div', 'padding-top', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="div/padding-top/unit">
                                   <option>px</option>
                                   <option>em</option>
                                   <option >%</option>
                              </select>
                         </div>

                         <div class="row">
                              <label class="col-6"> Bottom Margin:</label>
                              <input type="number" name="div/padding-bottom" value ="50" alt="px" class="half" onchange="change('div', 'padding-bottom', this.value, $(this).attr('alt'))"/>
                              <select class="units" name="div/padding-bottom/unit">
                                   <option>px</option>
                                   <option>em</option>
                                   <option>%</option>
                              </select>
                         </div>
                         <hr/>
                    </div>

                    <div class="section">
                         <img src="imgs/plus.png" class="plus" />
                         <span class="head">Images</span>

                         <div class="row">
                              <label class="col-6"> Width:</label>
                              <input type="number" name="img/width" value ="50" alt="%" class="half" onchange="change('img', 'width', this.value, $(this).attr('alt'))"/>
                              <!--<select class="units" name="img/width/unit">
                                   <option>px</option>
                                   <option>em</option>
                                   <option selected>%</option>
                              </select>-->
                              %
                         </div>
                         <hr/>
                    </div>

                    <div class="section">
                         <img src="imgs/plus.png" class="plus" />
                         <span class="head">Miscellaneous</span>

                         <div class="row">
                              <label class="col-6"> Show Bookmark Menu</label>
                              <input type="checkbox" name="bookmarks"/>
                         </div>
                         <hr/>
                    </div>

                    <input type="submit" value="Create e-book"/>
              </form>
          </div>

          <div class="story">
          	<?php
          		include 'includes/converter.php';
          	?>
          </div>
     </body>
</html>