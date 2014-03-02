<?php
/*******************
繁體中文驗證碼 v4.10 by a0000778
授權採用 CC BY 3.0 (http://creativecommons.org/licenses/by/3.0/deed)
E-mail: a0000778@gmail.com
Talk: http://chat.a0000778.coms.hk/
本程式需要以下支援
- PHP模組 GD 2
- GD2必須支援 FreeType 2
- PHP模組 mbstring
本程式支援以下字型格式
- TrueType (.ttf)
- OpenType (.otf)
- 其他FreeType 2所支援的格式(未確認)
*******************/
class checkcode{
	static private $fx=8;//X軸扭動頻率,8表示8度,通常無須調整
	static private $fxr=10;//X軸扭曲頻率浮動,10表示1度,通常無須調整
	static private $fy=1.5;//Y軸扭動頻率,1.5表示1.5度,通常無須調整
	static private $fyr=30;//Y軸扭曲頻率浮動,30表示3度,通常無須調整
	static private $worddb='乙丁七乃九了八刀力又上下丸凡久乞也亡口夕大女子小山川工巾弓才不中丹之予互五井什仁今仍内元公六冗凶分切化勿勾匹升午及友反天太夫孔尺巴巿幻引心戶手支文斗斤方日月木欠止歹比毛氏气水火爪父片牙牛犬王且世丘丙主乍乎乏他仗付仙代令以兄充冊冬凸凹出刊功加北包半占卡去另古句只叫召叭叮可台史右司四外失奴奶孕它尼左巧巨市布平幼弘必扒打扔斥旦本札正母民永汁犯玄玉瓜瓦甘生用甩田由甲申白皮目矛矢石示穴立丞乒乓亦交仰仲件任份仿企伊伍伏伐休伙兆兇先光全共再冰列劣印危吃合吉吊吋同名后吐向回因在奸如妃妄字存宅宇守安寺尖州年式忙扣早旨收曲有朱次此死汗江池灰百竹米羊羽老考而耳肉臣自至舌舟色艾血行衣西串亨伯估伴伸伺似但佈位低住佐佑佔何佛作你克兌免兵况判別利刪别助努即卵君吞吟否吧含吳吵吻告呀呂呆呑困圾均坐坑壯夾妙妥妨孝宋完尾尿局屁巫希床廷弄弟形彷忌忍志忘我戒扭扮扯找技把抓投抖抗折改攻更李杏材村束步每汽沒沖沙没災牠牢狂盯秀私究罕肖肛肝育良見角言豆貝赤走足身車辛辰巡迅那邦邪里防並乖乳事些亞享京佳使來例依兒兔兩其具典函刮到制刷券刺刻卑卒卓協卷叔取受呢周呱味呵呻呼命和咒咕咖咚坡奇妳妹妻始姐姑姓委季孤官宙定宜居岩岳帖幸底店府延弦弧彼往征忠念忽怕怖性怪或房所承披抬抱抵抹押抽拆拉拋拌拍拒拔拖拘招放斧於昂昆昇昌明昏易昔朋服杯杰東枕林枚果枝欣武歧歨河沸油沾沿況法泛泡波泥注泳炎炒爬爭爸版牧物狀狐狗的盲直知空者股肢肥肩肪肯臥舍芝芥花芳芽虎初表近返邱采金長門阻阿附雨青非亭亮侵便俄俗保俞俠信冠剃剄則剉削剋前剎勁勃勇勉匍南卻叛咦咬咳哀品哄哆哇哈哉响哎垂型奏契姦姨姿威娃孩客宣室封屋屌屍屎屏巷帝幽度建彥很律後怎怒思怠急怨怱恨扁拜括拭拷拼拾持指按挖政故施既星映春昨是昱架柏某染柔柚查柱柳柵歪段毒泉洋洗洞洩洪洲派流炭炮炸為狠珊珍界畏疤疫皆皇盃盆盈相盾省眉看砍研科秒穿突竽竿紀約紅美耍耐耶胃背胖胡致苗苛苞若苦范茄虐要訂計貞負軌軍郊郎重降限面革韋音頁風飛食首香乘修俯俱倉個倍們倒候倚借倫兼冥凍剔剖剛原員哥哦哨哪哭哲唐埋夏套姬娘娛娜娟娥宮宰害宴宵家容射屑展島峽差師座庫庭弱恐恕恥恩恭息悅拳拿振挺捅捆捉捏捕效料旁旅時晃晉書朗柴栓栗根格栽桂桃框案桌桐殊氣氧泰浩浪浮浴海浸消涉烈烕烘烙烤特留疲疾病症益真眠眨矩破砸祕祖祝神租秦窄站粉納紗紙級紛素索缺能脂脈茶訊討訓託記豈財貢起迷追退送逃逆酒釘針閃陣除隻飢馬骨高鬥鬼乾假做停側偵偶偷凑剪副勒動務匿區參唯唱啃啄商啊問啥啦國域執培基堂堅堆堇堵夠娶婉婚婜宿寄密將專尉屠崖崗崩巢帶常庸張強彩得從御悠患惜捧捨捱捲捷掀掃授掉掏掘掙掛採探接控推敏救敗敘教斜斬旋族晚晨曹望桶梁梅梨梯械棄欲殺毫淋淒淘淚淡淨淫深淵混淺添清烽焊爽牽犁猛猜率現球理瓶甜產畢異痔痕盒盔盛眼票祭笛符笨第粒粗紮累細紳終組絆統習聊脫船莊莫蛀蛇蛋術袋袍袓袖被規訝訣訪設許貧貨販貪貫責軟透逐這通逛速造部都野閉陰陳陵陶陷陸雀雪竟章頂頃魚鳥鹿麥麻傅傑傘備最';//字庫,避免出現簡字,罕見字,部首等情況
	private $sizex=0;//驗證碼寬度
	private $sizey=0;//驗證碼高度
	private $bgcolor=0;//背景顏色
	private $codecolor=0;//文字顏色
	public $line=2;//干擾線條數
	public $code=array();//驗證文字
	public $codepic;//驗證圖片
	
	function randcode($count=4){//隨機指定文字: 字數
		$n=0;
		$len=mb_strlen(self::$worddb,'utf-8')-1;
		while($n<$count){
			$this->code[]=rand(0,$len);
			$n++;
		}
		return $this->code;
	}
	function ocolortogdcolor($pic,$c,$h=0,$a=0){
		//數值轉GD顏色: GD圖片,編號(0~765),透明度(0~127)
		//000~255,255~510,510~765
		//#FF0000~#00FF00,#00FF00~#0000FF,#0000FF~#FF0000
		while($c>765){ $c-=765; }//防止超過範圍
		while($c<0){ $c+=765; }
		while($h<0){ $h+=255; }
		while($h>255){ $h-=255; }
		$r=($c<255)? 255-$c:(($c>510)? $c-510:$h);
		$g=($c>=255 && $c<510)? 510-$c:(($c>0 && $c<255)? $c:$h);
		$b=($c>=510)? 765-$c:(($c>255)? $c-255:$h);
		if($a==0){
			return imagecolorallocate($pic,$r,$g,$b);
		}else{
			return imagecolorallocatealpha($pic,$r,$g,$b,$a);
		}
	}
	function distortion($pic,$power){
		//扭曲: 圖片,扭曲成度
		//注意: 扭曲後原有圖片資源將捨棄不使用,並傳回新的圖片資源
		$x=imagesx($pic);$y=imagesy($pic);
		$ex=self::$fx+rand(0,self::$fxr)/10;
		$ey=self::$fy+rand(0,self::$fyr)/10;
		$dispic=imagecreatetruecolor($x,$y);
		ImageFill($dispic,0,0,$this->bgcolor);
		$lx=rand(0,360);$ly=rand(0,360);//隨機初始偏移角
		$sx=0;
		while($sx<$x){
			$sy=0;
			while($sy<$y){
				$color=imagecolorat($pic,$sx,$sy);//取得像素顏色
				imagesetpixel($dispic,$sx+sin(deg2rad($lx))*$power,$sy+sin(deg2rad($ly))*$power,$color);//重設相素顏色
				$lx+=$ex;
				$sy++;
			}
			$lx-=$ex*$y;
			$ly+=$ey;
			$sx++;
		}
		return $dispic;
	}
	function genwordpic($word,$size,$color,$font,$power,$x,$y){
		//產生單個文字: 文字,大小,GD色碼,字型,強度
		$picsize=ceil($size*1.414);//計算最大可能占用空間,預先計算sqrt 2得1.414以簡化運算
		$wordpic=imagecreatetruecolor($picsize,$picsize);
		ImageAlphaBlending($wordpic,true);
		ImageSaveAlpha($wordpic,true);
		ImageFill($wordpic,0,0,ImageColorAllocateAlpha($wordpic,0,0,0,127));
		imagefttext($wordpic,$size/4*3,rand(0,40)-20,($picsize-$size)/2,($picsize+$size)/2.2,$color,$font,$word);
		$dwordpic=$this->distortion($wordpic,$power);
		imagedestroy($wordpic);
		imagecopymerge($this->codepic,$dwordpic,$x,$y,0,0,$picsize,$picsize,100);
		imagedestroy($dwordpic);
	}
	function gencodepic($size,$sizer,$power,$powerr,$fonts=array('./font.ttf')){
		//產生圖片: 字體大小,字體大小浮動,強度,強度浮動
		//圖片大小依字體大小,字數自動決定
		$sizex=ceil($size*count($this->code)*1.9);
		$sizey=ceil($size*2.1);
		$this->codepic=imagecreatetruecolor($sizex,$sizey);
		ImageAlphaBlending($this->codepic,true);
		ImageSaveAlpha($this->codepic,true);
		$oc=rand(0,765);$och=rand(0,255);
		$this->bgcolor=$this->ocolortogdcolor($this->codepic,$oc,$och);//定義背景顏色
		$this->codecolor=$this->ocolortogdcolor($this->codepic,$oc+rand(255,510),$och+rand(64,192));//定義文字顏色
		ImageFill($this->codepic,0,0,$this->bgcolor);//背景顏色填充
		foreach($this->code as $k=>$v){
			$wordsize=$size+rand(0,$sizer);
			$this->genwordpic(mb_substr(self::$worddb,$v,1,'utf-8'),$wordsize,$this->codecolor,$fonts[array_rand($fonts)],$power+rand(0,$powerr),($size+$sizer)*$k*1.4+rand(10,15),rand(0,ceil($sizey-$wordsize*1.414)));
		}
		//加入干擾圖型
		$ln=0;
		while($ln<$this->line){
			$lp=array(rand(0,$sizey),rand(0,$sizey));
			imageline($this->codepic,0,$lp[0],$sizex,$lp[1],$this->codecolor);
			imageline($this->codepic,0,$lp[0]+1,$sizex,$lp[1]+1,$this->codecolor);
			$ln++;
		}
	}
	function check($code,$text){
		//檢查回答是否正確: 題目代碼,答案文字
		$text=str_replace(' ','',$text);
		$at=0;
		$len=mb_strlen($text,'utf-8');
		if($len !== count($code)) return false;
		while($at<$len){
			if(mb_strpos(self::$worddb,mb_substr($text,$at,1,'utf-8'),0,'utf-8') != $code[$at]) return false;
			$at++;
		}
		return true;
	}
}
?>
