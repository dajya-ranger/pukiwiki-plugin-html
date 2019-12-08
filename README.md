# pukiwiki-plugin-html

PukiWiki用HTML出力プラグイン

- 暫定公開版です（[PukiWiki1.5.2](https://pukiwiki.osdn.jp/?PukiWiki/Download/1.5.2)で動作確認済）
- ブロック型プラグイン **#html(<出力するHTML>)** としても、インライン型プラグイン **&html(<出力するHTML>);** としても利用可能
- そのままHTMLコード（JavaScript含む）を出力するので、[クロスサイトスクリプティング（XSS）](https://ja.wikipedia.org/wiki/%E3%82%AF%E3%83%AD%E3%82%B9%E3%82%B5%E3%82%A4%E3%83%88%E3%82%B9%E3%82%AF%E3%83%AA%E3%83%97%E3%83%86%E3%82%A3%E3%83%B3%E3%82%B0)のセキュリティホール（脆弱性）の危険性を孕みます（利用には十分気を付けて下さい）
- 設置に関しては自サイトの記事「[HTML出力プラグインでPukiWikiのメニューにFacebookページを組み込む！](https://dajya-ranger.com/pukiwiki/embed-facebook-page/)」を参照して下さい
