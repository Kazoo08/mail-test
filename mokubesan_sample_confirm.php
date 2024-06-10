<?php
$isError = '';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $company = $_POST['company'];
  $name = $_POST['name1'];
  $post_number = $_POST['postal_code'];
  $address = $_POST['address1'];
  $tel = $_POST['tel1'];
  $mail = $_POST['mail'];
  // $txt = $_POST['02_senmon[]'];
}
// $pref = $_SESSION['pref'];
// $mail = $_SESSION['mail'];

// $user = $_SESSION['user'];
// $user_type = '';
// $company = '';
// if ($user == '01_user_0') {
//   $company = '会社名：' . $_SESSION['company'];
//   $user_type = '事業者様';
// } else {
//   $user_type = '個人のお客様';
// }

// // $name = ($_SESSION['name1'] != '') ? $_SESSION['name1'] : $_SESSION['name2'];
// $address = ($_SESSION['address1'] != '') ? $_SESSION['address1'] : $_SESSION['address2'];
// 
// $senmon = $_SESSION['senmon'];
// $mokuteki = $_SESSION['mokuteki'];

$senmon_sonota = (isset($_SESSION['senmon_sonota'])) ? 'その他：' . $_SESSION['senmon_sonota'] : '';
$mokuteki_sonota = (isset($_SESSION['mokuteki_sonota'])) ? 'その他：' . $_SESSION['mokuteki_sonota'] : '';


//お客様の業種・ご専門
$txt = '';
// foreach ($senmon as $itm) {
//   $txt .= $itm . '、';
// }
$txt = rtrim($txt, '、');

//ご検討の目的
$txt2 = '';
// foreach ($mokuteki as $itm2) {
//   $txt2 .= $itm2 . '、';
// }
$txt2 = rtrim($txt2, '、');

if (isset($_POST['download'])) {
  mb_language("ja");
  mb_internal_encoding("UTF-8");

  // $to = 'info@kazedaichi-pro.jp';
  $to = 'kojikazusoftbank@gmail.com';
  $subject = $name . '様より無償サンプルご請求いただきありがとうございます。';
  $message = $name . "様\nこの度は、無料サンプルをご請求いただき、ありがとうございます。\n改めてご連絡いたします。/nしばらくお待ちくださいますよう、よろしくお願い申し上げます。\n\n------------------------------------------------------------\n";


  if ($company != '') {
    $message .= '【会社名】' . "\n" . $company . "\n";
  }

  $message .= '【お名前】' . "\n" . $name . "\n";
  $message .= '【お届け先】' . "\n"
    . $post_number . "\n" . $address . "\n";
  $message .= '【電話番号】' . "\n" . $tel . "\n";

  $message .= '【お客様の業種・ご専門】' . "\n" . $txt . "\n";
  if ($senmon_sonota != '') {
    $message .= $senmon_sonota . "\n";
  }
  $message .= '【ご検討の目的】' . "\n" . $txt2 . "\n";
  if ($mokuteki_sonota != '') {
    $message .= $mokuteki_sonota . "\n";
  }
  $message .= '【メール】' . "\n" . $mail . "\n";
  $message .= "------------------------------------------------------------\n\n";


  $header = 'From: ' . $mail . "\r\n";
  $header .= 'Reply-To: ' . $mail . "\r\n";

  $status1 = mb_send_mail($to, $subject, $message, $header);
  $status2 = mb_send_mail($mail, $subject, $message, $header);

  if ($status1) {
    header('Location:  /mokubesan/mokubesan_sample_complete.php?sd=o');
    $_SESSION = array();
    session_destroy();
  }
} else if (isset($_POST['back'])) {
  header('Location:  /mokubesan/mokubesan_sample_form.php');
}
?>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['back'])) {
    header('Location: /mokubesan/mokubesan_sample_form.php');
    exit;
  }
}

// その他のコード...
?>





<!DOCTYPE HTML>
<html lang="ja">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1028046922"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('set', 'linker', {
      'domains': ['www.ne.jp', 'kazedaichi-pro.jp'],
      'decorate_forms': false
    });
    gtag('js', new Date());

    gtag('config', 'UA-112628064-1');
    gtag('config', 'AW-1028046922');
  </script>




  <meta charset="UTF-8">
  <title>多摩産材の純木フェンス、クロスポール工法 の 木べえさんサンプル請求</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="Expires" content="86400"><!-- キャッシュの有効期限24時間 -->
  <meta name="robots" content="INDEX,FOLLOW">

  <meta name="description" content="リバーシブルで格好いい、ヒノキの角材フェンス。加圧注入の防腐処理で長寿命。天然の息吹を満喫して、SDGs15. 陸の豊かさも守ろう。">

  <meta name="keyword" content="
クロスポールフェンス 木べえさん,木べえさん,多摩産材,純木フェンス,
ウッドフェンス,ウッドフェンス 格子,ウッドフェンス 縦格子,ウッドフェンス 角材,ウッドフェンス 目隠し,
ウッドフェンス リバーシブル,ウッドフェンス 長持ち,ウッドフェンス 長寿命,ウッドフェンス 防腐,
ウッドフェンス デザイン,木製 縦 型 フェンス,
フェンス 木,木のフェンス,木製フェンス,フェンス 天然木,国産材フェンス,杉のフェンス,ヒノキのフェンス,
木 塀,木の塀,塀 木製,塀 格子,塀 縦,
柵 木,木の柵,柵 木製,柵 格子,柵 縦,柵 縦格子,
目隠しフェンス,目隠しフェンス 木製,目隠しフェンス ウッド,
目隠しフェンス 格子,目隠しフェンス 縦,目隠しフェンス 縦格子,
フェンス 格子,フェンス 縦,フェンス 縦格子,
フェンス 角材,
フェンス ナチュラル,フェンス おしゃれ,フェンス デザイン,フェンス 格好いい,
フェンス スリット,フェンス ポール,スクリーン フェンス,ルーバー フェンス,縦 ルーバー フェンス,縦 ボーダー フェンス,
エクステリア 柵,外構 柵,家 の 柵,住宅 柵,境界 柵,庭 の 柵,
コンクリートブロック 上 柵,脱コンクリートブロック 化,
オーダーメイド フェンス,ウッドフェンス 高さ,
ウッドフェンス 製造 販売,ウッドフェンス 製作,ウッドフェンス オーダー,ウッドフェンス 注文,
ウッドフェンス 価格,ウッドフェンス 費用,
ウッドフェンス 設置 例,ウッドフェンス 施工 例,ウッドフェンス 設置,ウッドフェンス 施工,
外構部の木質化の支援事業,木塀 助成,木質化 助成金">

  <link rel="stylesheet" href="/mokubesan/Scripts/style.css"><!-- スタイルシート参照 -->
  <link rel="stylesheet" href="/mokubesan/Scripts/form.css">


  <!-- 先にjQueryを読み込む記述を書く -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>


  <!-- ＃リンクのスムーズスクロール -->
  <script>
    $(function() {
      // #で始まるリンクをクリックしたら実行されます
      $('a[href^="#"]').click(function() {
        // スクロールの速度
        var speed = 400; // ミリ秒で記述
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({
          scrollTop: position
        }, speed, 'swing');
        // return false; を外して、jQueryのスムーズスクロールでブラウザバックに対応する190419
      });
    });
  </script>


  <!-- クリックで開閉するアコーディオンパネル -->
  <script>
    //tab
    $(function() {
      $(".mod_panel").each(function() {
        var id = "tab--" + $(this).index();
        var panelbtn = $(this).find(".panelTitle");
        var closebtn = $(this).find(".mod_panel_inner_btn .closebtn");
        var panelinner = $(this).find(".mod_panel_inner");
        $(panelbtn).wrapInner('<a href="javascript:void(0)" aria-expanded="false" aria-controls="' + id + '">');
        $(panelinner).attr({
          "aria-hidden": "true",
          "id": id
        });
        var panelbtnlink = $(this).find(".panelTitle a");

        //命令
        $(function() {
          $(panelinner).addClass("close");
          $(panelbtnlink).addClass("close").attr({
            title: "ここをクリックしてパネルを開きます。"
          });
          $(panelbtnlink).click(function() {
            if ($(panelinner).css("display") == "none") {
              $(panelinner).slideDown("fast").removeClass("close").attr("aria-hidden", "false");
              $(this).removeClass("close").addClass("open").attr("aria-expanded", "true");
            } else {
              $(panelinner).slideUp("fast").removeClass("open").addClass("close").attr("aria-hidden", "true");
              $(this).removeClass("open").addClass("close").attr("aria-expanded", "false");
            }
          });
          //close
          $(closebtn).click(function() {
            $(panelinner).slideUp("fast").removeClass("open").addClass("close").attr("aria-hidden", "true");
            $(panelbtnlink).removeClass("open").addClass("close").attr("aria-expanded", "false");
          });
        });
      });
    });
  </script>


  <!-- クリックで拡大写真を見せる -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">



</head>


<body class="mokubesan">
  <div class="container"><!-- コンテナ -->




    <div class="header"><!-- ヘッダー -->
      <div class="boxC">
        <div class="boxC-1">
          <div class="center">
            <img src="./mokubesan/images/mokubesan_head_logo.gif" alt="東京の木を使って、山も水もきれいに。木べえさん" class="kijimidimg">
          </div>
        </div><!-- boxC-1終わり -->
        <div class="boxC-2">
          <div class="center">
            <img src="./mokubesan/images/mokubesan_head_kdp_logo.gif" alt="風大地プロダクツ　自然を活かして楽しく暮らす" class="kijimidimg">
          </div>
        </div><!-- boxC-2終わり -->
      </div><!-- boxC終わり -->
    </div><!-- ヘッダー終わり -->



    <div class="boxA">

      <div class="boxA-2">
        <nav class="menu">
          <ul>
            <li><a href="https://kazedaichi-pro.jp/index.html">トップ</a></li>
            <li><a href="https://kazedaichi-pro.jp/kaishashoukai.html">会社紹介</a></li>
            <li><a href="https://www.ne.jp/asahi/kdp/k-design/otoiawase.html" target="_blank">お問い合わせ</a></li>
          </ul>
        </nav>
      </div><!-- boxA-2終わり -->

      <div class="boxA-1">
        <div class="site">
          <h1 class="moku">多摩の森から、天然の息吹をお届けします。</h1>
        </div>

        <div class="yohaku-h20"></div>

        <div class="bread">
          <ol>
            <li><a href="https://kazedaichi-pro.jp/index.html">トップ</a></li>
            <li><a href="https://kazedaichi-pro.jp/mokubesan.html">&#x201C;木べえさん&#x201D; TOP</a></li>
            <li>無料サンプルを請求する</li>
          </ol>
        </div>

      </div><!-- boxA-1終わり -->

    </div><!-- boxA終わり -->



    <div class="boxG">


      <article class="kiji">



        <div class="yohaku-h20">　</div>


        <h1>&#x201C;木べえさん&#x201D;、無料サンプルを請求する</h1>
        <div class="kijimax">
          <!-- <form action="mokubesan_confirm.php" method="post"> -->
          <form action="mokubesan_sample_complete.php" method="post">
            <table class="kakaku02">
              <tr>
                <th class="backgray2">お客様名と送り先<span class="er">(※必須)</span></th>
                <td>
                  <!-- <p>都道府県：<?php echo $pref; ?> -->
                  <p>会社名：<?php echo $company; ?>
                  <p>
                  <p>名前：<?php echo $name; ?>
                  <p>
                  <p>郵便番号：<?php echo $post_number; ?>
                  <p>
                  <p>所在地：<?php echo $address; ?>
                  <p>
                  <p>電話番号：<?php echo $tel; ?>
                  <p>
                </td>
              </tr>
              <tr>
                <th class="backgray2">お客様の業種・ご専門は<br><span class="ex_y01">（いくつでも）</span><span class="er">(※必須)</span></th>
                <td>
                  <?php echo $txt; ?>
                  <?php
                  if ($senmon_sonota != '') {
                    echo '<br>' . $senmon_sonota;
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <th class="backgray2">サンプル請求の目的は<br><span class="ex_y01">（いくつでも）</span><span class="er">(※必須)</span></th>
                <td>
                  <?php echo $txt2; ?>
                  <?php
                  if ($mokuteki_sonota != '') {
                    echo '<br>' . $mokuteki_sonota;
                  }
                  ?>

                </td>
              </tr>
              <tr>
                <th class="backgray2">メールアドレス<span class="er">(※必須)</span></th>
                <td>
                  <?php echo $mail; ?>
                  <br><span class="ex_y01">&#x201C;木べえさん&#x201D;製品のご案内以外に、お客様の情報を利用いたしません。</span>
                </td>
              </tr>
            </table>
            <ul class="form_btn">
              <li><button formmethod="post" name="back">修正する</button></li>
              <li><button formmethod="post" name="download">送信する</button></li>
            </ul>
          </form>
        </div><!-- kijimax終わり -->




        <div class="yohaku-h50">　</div>


        <div class="kiji640">
          <p>&#x201C;木べえさん&#x201D; contents</p>
          <ul>
            <a href="https://kazedaichi-pro.jp/mokubesan.html">
              <li>
                <div class="number"><img src="/mokubesan/images/icon_futaba_green.gif" class="kijipicon"></div>
                <div class="text">&#x201C;木べえさん&#x201D;　TOP　<font color="#09c" size="-1">別ページへ</font>
                </div>
              </li>
            </a>
            <a href="https://kazedaichi-pro.jp/mokubesan_tokutyou.html">
              <li>
                <div class="number"><img src="/mokubesan/images/icon_futaba_green.gif" class="kijipicon"></div>
                <div class="text">クロスポール工法の &#x201C;木べえさん&#x201D; 、特徴とメリット　<font color="#09c" size="-1">別ページへ</font>
                </div>
              </li>
            </a>
            <a href="https://kazedaichi-pro.jp/mokubesan_catalog.html">
              <li>
                <div class="number"><img src="/mokubesan/images/icon_futaba_green.gif" class="kijipicon"></div>
                <div class="text">製品カタログ・図面集　<font color="#09c" size="-1">別ページへ</font>
                </div>
              </li>
            </a>
            <a href="https://kazedaichi-pro.jp/mokubesan_sekou.html">
              <li>
                <div class="number"><img src="/mokubesan/images/icon_futaba_green.gif" class="kijipicon"></div>
                <div class="text">施工方法　<font color="#09c" size="-1">別ページへ</font>
                </div>
              </li>
            </a>
          </ul>
        </div>



        <div class="yohaku-h10">　</div>


      </article>


      <div class="scroll_button">
        <a href="#">&#x25B2;ページTOP</a>
      </div>



    </div><!-- boxG終わり -->



    <div class="footer"><!-- フッター -->
      <img src="./mokubesan/images/mokubesan_foot_tama.jpg" alt="コピーライトは風大地プロダクツに属します。" class="topimg">
      <p style="text-align:center"><strong>有限会社 風大地プロダクツ<br>tel.03-5681-4912</strong><br>
        <font size="-1">東京都足立区青井３丁目5-26-424<br>
          多摩工場 東京都あきる野市戸倉578</font>
      </p>
    </div><!-- フッター終わり -->



  </div><!-- コンテナ終わり -->


  <!-- クリックで拡大写真を見せる -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</body>

</html>