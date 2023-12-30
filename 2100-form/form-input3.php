<meta charset="utf-8"><?php
if (array_key_exists("submit_check", $_POST)) {
  echo "<pre>";
  print_r($_POST); // 入力された値を表示
}
else {
  echo <<< END_OF_FORM
<form action="$_SERVER[SCRIPT_NAME]" method="POST">
  <h3>どのOSを使いますか？</h3>
  <input type="radio" name="os" value="Windows" />Windows<br/>
  <input type="radio" name="os" value="Mac"     />Mac<br/>
  <input type="radio" name="os" value="Linux"   />Linux<br/>
  <h3>よく使うアプリケーションを選択してください(複数指定)</h3>
  <input type="checkbox" name="app[]" value="Office"   />Office<br/>
  <input type="checkbox" name="app[]" value="Eclipse"  />Eclipse<br/>
  <input type="checkbox" name="app[]" value="Photoshop"/>Photoshop<br/>
  <h3>利用する場所を選んでください。</h3>
  <select name="place[]">
    <option>自宅</option>
    <option>会社</option>
    <option>学校</option>
  </select><br/><br/>
  <input type="hidden" name="submit_check" value="1" />
  <input type="submit" value="送信"/>
</form>
END_OF_FORM;
}

