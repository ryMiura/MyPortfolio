<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- ヘッダー -->
    <header>
      <div class="container">
        <div class="header-title">
          <div id="top-btn" class="header-logo">portfolio</div>
        </div>
        <div class="header-menu">
          <ul class="header-menu-right">
            <li>
              <a href="#profile"><i class="fa fa-user" aria-hidden="true"></i>プロフィール</a>
            </li>
            <li>
              <a href="#skill"><i class="fa fa-book " aria-hidden="true"></i> SKILL</a>
            </li>
            <li>
              <a href="#practice"><i class="fa fa-desktop " aria-hidden="true"></i> WORKS</a>
            </li>
            <li>
              <a href="#contact"><i class="fa fa-envelope "></i> CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- トップ部分 -->
    <div class="top-section gray-section">
      <div class="top-inner">
        <div class="container">
          <div class="top-description">
            <h2>Hello My Portfolio</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <!-- profile -->
    <div class="profile-section" id="profile">
      <div class="container">
        <div class="row">
          <img class="interview-image" src="image/prof.png">
          <div class="interview-box">
            <h5><i class="fa fa-user" aria-hidden="true"></i>プロフィール</h5>
            <ul>
              <li>初めまして、三浦　涼子（ミウラ　リョウコ）と申します。</li>
              <li>1987年生まれ</li>
              <li>住所：北海道江別市在住</li>
              <li>活動：半年間スクールにてJave,C＃、SQL,ネットワークなどを学んでいます。<br>
                  他、学習言語HTML,CSS,JS、JQuery、PHP<br>
                  フレームワーク：AndroidStudio laravel<br>
              <li>その他：2019年/個人事業の青色申告のために<br>独学で簿記２級を学び、3カ月で資格取得</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <!-- skill -->
    <div id="skill" class="skill-section">
      <div class="skill-section-top gray-section">
        <div class="container">
          <div class="section-title">
            <h3><i class="fa fa-book " aria-hidden="true"></i>SKILL</h3>
          </div>
          <div class="sk-list">
            <div class="row">
              <div class="card col-3">
                <h2 class="font-weight-bold text-center">Java</h2>
                <p>プログラミングにおいてのオブジェクト指向、スレッド、パッケージ、例外処理、コレクション、ファイル操作など</p>
              </div>
              <div class="card col-3">
                  <h2 class="font-weight-bold text-center">ネットワーク</h2>
                  <p>L2スイッチ、リピーターハブ、ルータを使って複数のPCのネットワーク環境の構築、raspberryPieでLinuxOsのコマンドを学習</p>
              </div>
              <div class="card col-3">
                <h2 class="font-weight-bold text-center">PHP</h2>
                <p>webサイトにおけるサーバーサイドのプログラム、セキュリティについてを学んだ。ログインシステムなど作成</p>
              </div>
              <div class="card col-3">
                <h2 class="font-weight-bold text-center">Swift</h2>
                <p>iosアプリケーションの開発学習</p>
              </div>
            </div>
            <div class="row">
              <div class="card col-3">
                <h2 class="font-weight-bold text-center">SQL</h2>
                <p>データベースの基本クエリ、ストアドプロシージャ、トランザクション、インデックス、ストアドファンクション、トリガー等学習</p>
              </div>
              <div class="card col-3">
                <h2 class="font-weight-bold text-center">AndroidStudio</h2>
                <p>AndroidStudioを使ってアンドロイド端末のアプリケーション開発を学習</p>
              </div>
              <div class="card col-3">
                <h2 class="font-weight-bold text-center">HTML,CSS</h2>
                <p>フロントエンドのwebシステムの開発、JS、bootstrapも使用</p>
              </div>
              <div class="card col-3">
                <h2 class="font-weight-bold text-center">Others</h2>
                <p>C言語でコンソールゲームを作成。</p>
                <p>GX Works2ソフトを使ってシーケンス制御プログラムを学ぶ</p>
                <p>C# Formアプリケーションでタイマーや画像編集システムなどを作成</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="practice" class="works-section">
      <div class="works-section-top ">
        <div class="container">
          <div class="section-title">
            <h3><i class="fa fa-desktop " aria-hidden="true"></i>WORKS</h3>
          </div>
          <div class="row">
            <div class="card" style="width: 35rem;">
              <img src="Image/p3-1.png" class="card-img-top" alt="...">

              <div class="card-body">
                <h5 class="card-title">ファイル共有システム</h5>
                <p class="card-text">使用言語：php7　MySQL</p>
                <p class="card-text">会員登録、ログイン機能、セキュリティ対策、セッション、クッキー、アップロードやダウンロードなどのファイルを扱う機能を一通り理解できました。</p>
                <p class="card-text">Smarty（デザインテンプレート）の使用やPEARのPagerなど利用</p>
                <a href="http://5105a94f5dc30e5d.main.jp/app/logon.html" class="btn btn-primary">デモサイト</a>
              </div>
            </div>
            <div class="card" style="width: 35rem;">
              <img src="Image/p1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">地図検索アプリ</h5>
                <p class="card-text">使用言語：Swift 開発環境：MacOS　Xcodeソフト使用</p>
                <p class="card-text">普段使っているスマートフォンで何かアプリを作ってみたいと思い、こちらを練習で作りました。シンプルですがクロージャやDelegateなどイベントが発生した際に一連の処理を行う流れを理解することができました。</p>
                <a href="https://github.com/ryMiura/MapApp" class="btn btn-primary">Github</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="card" style="width: 35rem;">
              <img src="Image/p2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">スケジューラーアプリケーション</h5>
                <p class="card-text">使用言語：Java 使用ソフト：AndroidStudio</p>
                <p class="card-text">TODOアプリです。データベースの練習のために作成。予定を入力し、変更、削除と行った一連の流れをAndroidStduioフレームワークでリスト化しています。</p>
                <a href="https://github.com/ryMiura/MyScheduler" class="btn btn-primary">Github</a>
              </div>
            </div>
            <div class="card" style="width: 35rem;">
              <img src="Image/p4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">プレゼン用タイマーアプリケーション</h5>
                <p class="card-text">使用言語：Java 使用ソフト：AndroidStudio</p>
                <p class="card-text">タイマーの機能と、音楽のミュージックプレーヤー機能を実装しています。好きな時間をセットできる様になっており、発表終了、質疑応答、質疑応答終了時と、それぞれ鳴る音楽の回数は変更される様に繰り返しの処理も学習できました。</p>
                <a href="https://github.com/ryMiura/PresenTimer" class="btn btn-primary">Github</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Contact -->
    <div id="contact" class="contact-section gray-section">
      <div class="contact-section-inner">
        <div class="container">
          <div class="section-title">
            <h3><i class="fa fa-envelope "></i>CONTACT</h3>
          </div>
          <div class="contact-form">
            <h4>メッセージを送る</h4>
            <form method="post" action="portfolio.php">
              <div class="error-message"></div>
              <input type="text" name="name" placeholder="お名前" class="contact-name" required>
              <div class="error-message"></div>
              <input type="text" name="email" placeholder="メールアドレス" class="contact-email">
              <div class="error-message"></div>
              <textarea name="message" placeholder="メッセージ内容" required></textarea>
              <button type="submit" class="btn btn-contact">送信</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">


      </div>
  </footer>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
<?php
$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$mes=$message.$email.$name;

$to="buongiorno.bambini@gmail.com";
$subject="test";
mb_language("Japanese");
mb_internal_encoding("UTF-8");
if(isset($_POST['name'])){
  if(mb_send_mail($to,$subject,$mes)){
    echo '<script>alert("メールを送信しました。ご返信まで今しばらくお待ちください");</script>';
    $_POST=array();
  }else{
    echo '<script>alert("エラーが発生致しました。");</script>';
  }
}

 ?>
