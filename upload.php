<!DOCTYPE html>
<html>
<head>
<title>DOG</title>
<link rel="shortcut icon" href="../favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/masonry.pkgd.js"></script>
<script src="js/imagesloaded.js"></script>
<script src="js/classie.js"></script>
<script src="js/jquery.mobile-1.4.4.js"></script>
<script src="js/script.js"></script>
<? include("include/meta.php"); ?> 
<? include('include/ga.php') ?>
<link href="css/themes/default/jquery.mobile-1.4.4.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="menu">
  <dl>
    <dt>
      <img src="images/member_img.jpg" id="mem_img">
      <span id="mem_name">TYSON</span>
      <span id="mem_center">會員中心</span>
    </dt>
    <dd><a href="#">我要領養</a></dd>
    <dd><a href="#">我要刊登</a></dd>
    <dd><a href="#">最新消息</a></dd>
    <dd><a href="#">收容所資訊</a></dd>
  </dl>
</div>
<div id="container">
  <div id="header">
    <h1><span>DOG</span></h1>
    <a href="#" id="menu_btn"><span>MENU</span></a>
  </div><!--End of header-->
  <h2 id="sub_header">我想領養</h2>
  <div id="upload_content">
    <table width="90%" border="0">
      <tr>
        <th colspan="2" scope="row">
          <label class="choose_file" id="upload" for="id_image_large"><img src="images/upload_img.png" width="560" height="560" alt="上傳圖片"></label>
          <input type="file" id="id_image_large" name="image_large">
        </th>
      </tr>
      <tr>
        <th scope="row"><label for="text-basic">姓名</label></th>
        <td><input type="text" name="text-basic" id="text-basic" value=""></td>
      </tr>
      <tr>
        <th scope="row"><legend>性別</legend></th>
        <td>
          <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">            
            <input type="radio" name="sex-choice" id="sex-choice-a" value="m" checked="checked">
            <label for="sex-choice-a">公</label>
            <input type="radio" name="sex-choice" id="sex-choice-b" value="w">
            <label for="sex-choice-b">母</label>
          </fieldset>
        </td>
      </tr>
      <tr>
        <th scope="row"><label for="select-native-fc">地點</label></th>
        <td>
          <div class="ui-field-contain">
            <select name="select-native-fc" id="select-native-fc">
                <option value="small">請選擇</option>
                <option value="medium">台北市</option>
                <option value="large">新北市</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <th scope="row"><legend>年齡</legend></th>
        <td>
          <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
            <input type="radio" name="old-choice" id="old-choice-a" value="list" checked="checked">
            <label for="old-choice-a">幼犬</label>
            <input type="radio" name="old-choice" id="old-choice-b" value="grid">
            <label for="old-choice-b">成犬</label>
          </fieldset>
        </td>
      </tr>
      <tr>
        <th scope="row">
          <legend>絕育</legend>
        </th>
        <td>
          <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
            <input type="radio" name="radio-choice-b" id="radio-choice-c" value="list" checked="checked">
            <label for="radio-choice-c">未絕育</label>
            <input type="radio" name="radio-choice-b" id="radio-choice-d" value="grid">
            <label for="radio-choice-d">已絕育</label>
          </fieldset>
        </td>
      </tr>
      <tr>
        <th scope="row"><label for="textarea">Textarea:</label></th>
        <td>
          <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
        </td>
      </tr>
    </table>
  </div><!--End of content-->
</div><!--End of container-->
</body>
</html>