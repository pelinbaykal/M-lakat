
<?php

$content = "Bunlar hobbitlerin en normal, en tipik örnekleri ve en kalabalık olanlarıymış.
 Bir yere yerleşip atalarının tüneller ve delikler içindeki yaşayış biçimlerini muhafaza etmeye en çok eğilimi olan da bunlarmış.
 Ülkenler uzun süre Ulu Nehir Anduin’in kıyılarında oyalanmışlar ve insanlardan daha az çekiniyorlarmış.
 Onlar da Kılayaklar’dan sonra batıya gelmişler ve Gürültülüsu’yu izleyerek güneye inmişler; Orada, Tharbad ile Garpeli sının arasında epey bir zaman yaşayıp, neden sonra yeniden kuzeye göç etmişler.
 Sayıca en küçük soy olan Samanpostlular kuzey kolunu oluşturuyormuş.
 Diğer hobbitlere nazaran elflerle daha dostça geçiniyorlarmış ve el işçiliğinden çok dilde ve müzikte maharet gösteriyorlarmış; eskiden beri çiftçilikten çok avcılıktan hoşlanırlarmış.
 Ayrıkvadi’nin kuzeyindeki dağları geçmişler ve Akpınar Nehri’nden aşağıya inmişler.
 Kısa bir süre sonra Eriador’da onlardan önce oraya gelmiş olanlarla karışmışlar fakat biraz daha cesur ve maceraperest olduklarından Kılayak ve Ülgen klanları arasında sık sık lider ve reis konumuna gelmişler.
 Bilbo’nun zamanında dahi, Tooklar ve Erdiyan’nın Efendileri gibi büyük ailelerde Samanpostlu soyunun güçlü kanı kendisini gösteriyordu.
 Eriador’un batı topraklarında, Dumanlı Dağlar ile Mavi Dağlar arasında hobbitler hem insanları hem de elfleri bulmuşlardı.
 Gerçekten de Dünedain’den, yani Deniz’i aşıp Batıil’den gelen insanların krallarından arta kalan bir kısım burada yaşıyordu; fakat hızla azalmaktaydılar, onlara ait olan Kuzey Krallığı topraklan gün be gün yabana kanşmaktaydı.
 Gelenler için bol bol yer vardı ve çok geçmeden hobbitler düzenli topluluklar halinde yerleşmeye başlamıştı, ilk yerleşim merkezlerinin çoğu daha Bilbo’nun zamanında çoktan kaybolmuş ve unutulmuştu; fakat önem kazanan ilklerden biri, zamanla küçülse de varlığını korumayı başarmıştı; burası Shire’ın kırk mil kadar doğusuna düşen Bree ve etrafındaki Tokay Ormanı idi.
 Kuşkusuz bu ilk günlerde hobbitler yazıyı öğrenmişler ve bu sanatı çok daha önce elflerden öğrenmiş olan Dünedain tarzında yazmaya başlamışlardı.
 Yine o günlerde daha önce hangi dili kullanıyorlarsa onu unutmuşlar ve ondan sonra hep Westron adı verilen Arnor’dan Gondor’a kadar kralların ülkelerinde ve Belfalas’tan Mavi’ye kadar bütün sahillerde geçerli olan Ortak Lisan’ı kullanmışlardı.
 Yine de ayların ve günlerin kendi isimleri ve geçmişten kalan büyük bir şahıs isimleri birikimine ilaveten, kendilerine ait birkaç kelimeyi alıkoymuşlardı.";

 $pars=explode(" ",$content);
 $pars_count=count($pars);
 $number="";
 $work="";
    for($i=0;$i<$pars_count;$i++)
    {
        
        $work=$work."&".$pars[$i]." ".substr_count($content,$pars[$i]);
        $number=$number."&".substr_count($content,$pars[$i]);
       
    }
    $mar=explode("&",$work);
    $key=explode("&",$number);
    $mar_c=array_filter($mar);
    $temp = array_pad($key, count($mar),'');
    $res = array_combine($mar,$temp);
    arsort($res);
    foreach($res as $w => $n){
        echo $w."</br>";
    }
?>
