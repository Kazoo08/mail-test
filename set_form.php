<?php
session_start();

$isError = (isset($_SESSION['isError'])) ? $_SESSION['isError'] : '';

$mail = (isset($_SESSION['mail'])) ? $_SESSION['mail'] : '';
$mail2 = (isset($_SESSION['mail2'])) ? $_SESSION['mail2'] : '';
// $pref = (isset($_SESSION['pref'])) ? $_SESSION['pref'] : '';
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : '';
$company = (isset($_SESSION['company'])) ? $_SESSION['company'] : '';
$name1 = (isset($_SESSION['name1'])) ? $_SESSION['name1'] : '';
$address1 = (isset($_SESSION['address1'])) ? $_SESSION['address1'] : '';
$tel1 = (isset($_SESSION['tel1'])) ? $_SESSION['tel1'] : '';
$name2 = (isset($_SESSION['name2'])) ? $_SESSION['name2'] : '';
$address2 = (isset($_SESSION['address2'])) ? $_SESSION['address2'] : '';
$tel2 = (isset($_SESSION['tel2'])) ? $_SESSION['tel2'] : '';

$senmon = (isset($_SESSION['senmon'])) ? $_SESSION['senmon'] : '';
$mokuteki = (isset($_SESSION['mokuteki'])) ? $_SESSION['mokuteki'] : '';

$senmon_sonota = (isset($_SESSION['senmon_sonota'])) ? $_SESSION['senmon_sonota'] : '';
$mokuteki_sonota = (isset($_SESSION['mokuteki_sonota'])) ? $_SESSION['mokuteki_sonota'] : '';

$senmon_0_chk = $senmon_1_chk = $senmon_2_chk = $senmon_3_chk = $senmon_4_chk = $senmon_5_chk = $senmon_6_chk = $senmon_7_chk = $senmon_8_chk = $senmon_9_chk = '';
$mokuteki_0_chk = $mokuteki_1_chk = $mokuteki_2_chk = $mokuteki_3_chk = $mokuteki_4_chk = $mokuteki_5_chk = $mokuteki_6_chk = $mokuteki_7_chk = '';

$user_0_chk = '';
$user_1_chk = '';
if ($user != '') {
  switch ($user) {
    case '01_user_0':
      $user_0_chk = ' checked';
      break;
    case '01_user_1':
      $user_1_chk = ' checked';
      break;
  }
} else {
  $user_0_chk = ' checked';
}



if (!empty($senmon)) {

  foreach ($senmon as $itm) {
    if ($itm == '設計') {
      $senmon_0_chk = ' checked';
    }
    if ($itm == '建築') {
      $senmon_1_chk = ' checked';
    }
    if ($itm == '土木') {
      $senmon_2_chk = ' checked';
    }
    if ($itm == 'ハウスメーカー') {
      $senmon_3_chk = ' checked';
    }
    if ($itm == 'リフォーム') {
      $senmon_4_chk = ' checked';
    }
    if ($itm == 'エクステリア・外構') {
      $senmon_5_chk = ' checked';
    }
    if ($itm == '造園') {
      $senmon_6_chk = ' checked';
    }
    if ($itm == '不動産') {
      $senmon_7_chk = ' checked';
    }
    if ($itm == '施主') {
      $senmon_8_chk = ' checked';
    }
    if ($itm == 'その他') {
      $senmon_9_chk = ' checked';
    }
  }
}

if ($mokuteki != '') {
  foreach ($mokuteki as $itm) {
    if ($itm == '住宅の新築') {
      $mokuteki_0_chk = ' checked';
    } else if ($itm == '住宅のリフォーム') {
      $mokuteki_1_chk = ' checked';
    } else if ($itm == '施設の新築') {
      $mokuteki_2_chk = ' checked';
    } else if ($itm == '施設のリニューアル') {
      $mokuteki_3_chk = ' checked';
    } else if ($itm == '庭・外構のリニューアル') {
      $mokuteki_4_chk = ' checked';
    } else if ($itm == 'ランドスケープ計画') {
      $mokuteki_5_chk = ' checked';
    } else if ($itm == 'フェンスだけ設置したい') {
      $mokuteki_6_chk = ' checked';
    } else if ($itm == 'その他') {
      $mokuteki_7_chk = ' checked';
    }
  }
}

if (isset($_POST['submit'])) {
  $mail = $_POST['mail'];
  $mail2 = $_POST['mail2'];

  // $pref = $_POST['02_todoufukenn'];
  $user = $_POST['01_user'];
  if ($user == '01_user_0') {
    $company = $_POST['company'];
    $name1 = $_POST['name1'];
    $address1 = $_POST['address1'];
    $tel1 = $_POST['tel1'];
  } else {
    $name2 = $_POST['name2'];
    $address2 = $_POST['address2'];
    $tel2 = $_POST['tel2'];
  }

  $senmon_sonota = (isset($_POST['02_senmon_sonota'])) ? $_POST['02_senmon_sonota'] : '';
  $mokuteki_sonota = (isset($_POST['03_mokuteki_sonota'])) ? $_POST['03_mokuteki_sonota'] : '';

  $senmon = $_POST['02_senmon'];
  $mokuteki = $_POST['03_mokuteki'];

  // $_SESSION['pref'] = $pref;
  $_SESSION['mail'] = $mail;
  $_SESSION['mail2'] = $mail2;
  $_SESSION['user'] = $user;
  $_SESSION['company'] = $company;
  $_SESSION['name1'] = $name1;
  $_SESSION['address1'] = $address1;
  $_SESSION['tel1'] = $tel1;
  $_SESSION['name2'] = $name2;
  $_SESSION['address2'] = $address2;
  $_SESSION['tel2'] = $tel2;
  $_SESSION['senmon'] = $senmon;
  $_SESSION['mokuteki'] = $mokuteki;
  $_SESSION['senmon_sonota'] = $senmon_sonota;
  $_SESSION['mokuteki_sonota'] = $mokuteki_sonota;

  if ($mail == $mail2) {
    $isError = '';
    $_SESSION['isError'] = $isError;

    header('Location: /mokubesan_sample_confirm.php');
  } else {
    $isError = '<p class="er2">メールアドレスが一致しません。同じメールアドレスを入力してください。</p>';
    $_SESSION['isError'] = $isError;
    header('Location: /mokubesan_sample_form.php#mail');
  }
} else if (isset($_POST['reset'])) {
  $_SESSION = array();
  session_destroy();

  header('Location: /mokubesan_sample_form.php');
}
