<?php
// メッセージを保存するファイルのパス設定
define( 'FILENAME', './message.txt');
// タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

if( !empty($_POST['btn_submit']) ) {
	if( $file_handle = fopen( FILENAME, "a") ) {
        
        // 書き込み日時を取得
		$current_date = date("Y-m-d H:i:s");
	
		// 書き込むデータを作成
		$data = "'".$_POST['view_name']."','".$_POST['message']."','".$current_date."'\n";
	
		// 書き込み
		fwrite( $file_handle, $data);
        
		// ファイルを閉じる
		fclose( $file_handle);
	}	
}
?>
<head>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>本郷補完計画</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" id="style">
</head>
<body class="fix-menu">
    <!-- ヘッダー -->
    <header>
        <h1 data-text="本郷補完計画"><a href="top.html">本郷補完計画</a></h1>
        <nav id="mainMenu" data-toggler="mainMenuToggler" class="menu">
            <ul>
                <li><a href="#">Top</a></li>
                <li><a href="#">Map</a></li>
                <li><a href="#">menu3</a></li>
                <li><a href="#">menu4</a></li>
                <li><a href="#">menu5</a></li>
            </ul>
        </nav>
    </header>
    <button id="mainMenuToggler" class="manu-toggler" data-open="false"></button>

    <!-- メイン -->
    <main>
        <article>
            <h2>本郷補完計画マップ</h2>
            <div class="container">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1b5uVB1Bv9wUyLOj5H7nnSfPNQZBRuws&ehbc=2E312F" width="960" height="480"></iframe>
            </div>
            <div>
                <p>ピンをクリックして本郷キャンパス内で見つかった痕跡をチェックしよう</p>
            </div>
            <hr>
            <div>
                <h3>掲示板</h3>
                <!-- ここにメッセージの入力フォームを設置 -->
                <form method="post">
	            <div>
		            <label for="view_name">表示名</label>
		            <input id="view_name" type="text" name="view_name" value="">
	            </div>
	            <div>
		            <label for="message">ひと言メッセージ</label>
		            <textarea id="message" name="message"></textarea>
	            </div>
	                <input type="submit" name="btn_submit" value="書き込む">
                </form>
                <hr>
                <section>
                <!-- ここに投稿されたメッセージを表示 -->
                </section>
            </div>
        </article>
    </main>

    <!-- フッター -->
    <footer>
        <div class="text-small">
            <a href="https://espace.monbalcon.net/" target="_blank" rel="nofollow noopener">Template by espace.</a>
        </div>
        <nav class="fixed-menu">
            <ul>
                <li class="prev"><span></span></li>
                <li class="next"><span></span></li>
                <li id="pageTop" class="pagetop"><button></button></li>
            </ul>
        </nav>
    </footer>

    <!-- script -->
    <script src="js/general.js"></script>
</body>
</html>