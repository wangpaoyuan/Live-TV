<?php
$id = isset($_GET['id']) ? $_GET['id'] : 'tvbs';
$n = array(
  'biglove1'=> 'MIqUplvSRWA',  //大愛1台
  'biglove2'=> 'DTNkEm6jaqQ',  //大愛2台
  'public'=> '4Uc00FPs27M',  //公視
  'handnew'=> 'c3UxV-qb_cE',  //公視手語新聞
  'public2'=> '6KlRR_DGhmI',  //公視台語台
  'sida'=> 'mY6EHxRI4rU',  //信大電視台
  'mirror'=> '5n0y6b0Q25o', // 鏡新聞
  'people'=> 'WIhgU_mc05A', // 新唐人亞太
  'ttv'=> 'uDqQo8a7Xmk',    // 台視
  'tvbs' => 'Usyn21mRd58',  //TVBS  
  'tvbsxw' => 'BiOFto3xqrk.1', // TVBS新聞 
  'dsxw' => 'WPFwCCzjxDQ.1', // 東森新聞
  'ztxw' => '_QbRXRnHMVY', // 中天新聞 
  'CTIASIA' => 'L4a9mAc8634', // 中天亞洲台
  'zsxw' => 'TCnaIE_SAtM', // 中視新聞  
  'tsxw' => 'xL0ch83RAK8', // 台視新聞  
  'hsxw' => 'wM0g8EoUZ_E', // 華視新聞
  'slxw' => 'EB4g7wecgTI', // 三立新聞(試播頻道)    EB4g7wecgTI
  'slixw' => 'Bs_UuQBAqJ0', // 三立iNEWS  EB4g7wecgTI
  'msxw' => 'ylYJSBUgaMA', // 民視新聞
  'hyxw' => 'B7Zp3d6xXWw', // 寰宇新聞
  '31TV' => 'PsrF03OFFGo', // 三大一台
  'dscjxw' => 'ABn_ccXn_jc', // 東森財經新聞
  'yoyotv' => 'x9syYHu1ydo', // YOYO TV
  'money' => 'ctcdFJaN0bk', // 運通財經台
  'chengte' => 'CHDb5D0DCkw', // 正德電視台
  'dolphin' => 'JxCwdzyMZcM', //海豚綜合台
  'SJTV' => 'wTlxNbViRWU', //信吉衛視
  'GSTV' => '7TsMmBTrnKY', //GSTV 幸福空間居家台
  'gov1' => '4HysYHJ6GkY', // 國會頻道1
  'gov2' => 'AXD8ikpYOWA', // 國會頻道2
  'etmal1'=> 'ViJ3XiN6Q3M', //東森購物1台
  'etmal2'=> '_Vlzn9qAHD4', //東森購物2台
  'etmal3'=> 'Z50JFuNgvB0', //東森購物3台
  'viva1'=> 'yuhgIlXwPh8', //美好購物1台
  'viva2'=> 'LEOat38Iuao', //美好購物2台
  'momo1'=> '_pZQ1Lk0xMA', //momo購物1台
  'momo2'=> 'xbNWkUyxQGM', //momo購物2台
  'PhoenixTV'=> 'ng7hd-0AHtk',//鳳凰衛視
  'cctv4' => 'QTz6avPD4Ns' , // CCTV4
  'cna' => 'XWq5kBlakcQ', // cna
  'nbc' => 'FZJd94vitjs', // NBC News NOW
  'sky' => 'WLlKVD4Aqgw', // Sky News
  'abc' => 'w_Ma8oQLmSM', // ABC News
  'news12' => '20tJlHmPfus', // News 12 New York
  'dw' => 'GE_SfNVNyqk', // DW News
  'gbn' => '7fIU2aMImMQ', // GBNews
  'euro' => 'sPgqEHsONK8', // Euronews English
  'arirang' => 'k7ZKUe4NDcA', // Arirang TV
  'africanews' => 'NQjabLGdP5g', // Africanews english
  'bloomberg' => 'dp8PhLsUcFE', // Bloomberg Global Financial News
  'JapaNews' => 'coYw-eVU0Ks', // JapaNews24
  'SBS' => 'vqP5hHQynpg', // SBS
  'FRANCE' => 'h3MuIUNCCzI', // FRANCE 24
  'hitfm' => 'hyWJfzXHaww', // Hit FM廣播
  'DuChuanTou' => 'yAjg52fQZEE',   //淡水渡船頭
  'shihmen' => '1OTZ9rjFv78', // 石門水庫
  'road' => 'KkDSzZcqQTQ&list=PLLKvVicJOifXGRqGn-4jnwtv7J8Da2yoB&index=5', // 鹿野高台
  'street' => 'z_mlibCfgFI&list=PL-Ni-1OtjEdLtQRpD-6r9AsD3P_6MLpgv', // 大溪老街 
  'Ikegami' => 'WA7GEXVGAP0',     //台東池上 
  'fishing' => 'tD_a03trUvE&list=PLLKvVicJOifXGRqGn-4jnwtv7J8Da2yoB',   //永安漁港
  'Xiangshan' => 'z_fY1pj1VBw',   //象山
  'Duoliang' => 'UCG1aXVO8H8',   //台東多良車站
  'Shoushan' => 'C03Itx8iSC0',   //高雄壽山
  'whitesand' => 'St4GHsJzfg4',   //白沙灣
  'Kinmen' => 'uh_yNAE01w8',   //金門建功嶼
  'Bitan' => 'pnRqzs7ZTEs',   //新店碧潭
  'Alishan' => 'mTGS9p1Ijdc',   //阿里山
  'Liushishi' => 'BWrRFJoOV9c',   //花蓮六十石山
  'Jinzun' => 'q3KJt-SZc2s',   //台東金樽
  'Fushan' => 'Rsq95SQ26bY',   //台東富山
  'Nanwan' => 'oTXJlZKnlq0',   //南灣
  'ztxw2' => 'WPfPjbOLNfE',   //南灣
  
);

if (array_key_exists($id, $n)) {
    $string = file_get_contents('https://www.youtube.com/watch?v=' . $n[$id]);
    if (preg_match('/"hlsManifestUrl"\:"(.*?)"/', $string, $matches)) {
        $string = file_get_contents($matches[1]);
        $pos = strrpos($string, 'https://');
        if ($pos) {
            header ("Location: " . substr($string, $pos));
            exit();
        }
    }
}
http_response_code(404);
?>

