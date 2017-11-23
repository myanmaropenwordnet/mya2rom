<!DOCTYPE html>

<html>
<head>
  <title></title>
  <meta charset="utf-8"></meta>
  <style>
  </style>
</head>
  
<body>
  <header>
  <h1>Mya2Rom.js Test Cases (Manual)</h1>
  <p>Based on Wiktionary's Burmese auto-romanisation test case module <tt>Module:my-pron/testcases</tt>.</p>
  <p>Additional words from MOW itself</p>
  <p>NOTE: The WIKT test cases are used here wholesale, which means it includes other romanisations. At the moment, we only use IPA</p>
  <p>NOTE 2: We do not deal with voicing rules or special pronunciations, so the WIKT module's respellings are not applied here.</p>
  </header>
  <main>
  
    <table class="unit-tests wikitable" border="1">
      <tbody>
      <tr>
      <th class="unit-tests-img-corner" style="cursor:pointer" title="Only failed tests"></th>
      <th>Text</th>
      <th>Expected</th>
      <th>Actual</th>
      <th>Remarks</th>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%85%E1%80%AC%E1%80%B8#Burmese" title="ကစား">သင်္ဘော</a></span><br></td>
      <td>θí̃ bɔ́</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%85%E1%80%AC%E1%80%B8#Burmese" title="ကစား">မေတ္တေယျဘုရား</a></span><br></td>
      <td>"matreiya"</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%85%E1%80%AC%E1%80%B8#Burmese" title="ကစား">ဘုရား</a></span><br></td>
      <td>pʰajá́</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%85%E1%80%AC%E1%80%B8#Burmese" title="ကစား">ကစား</a></span><br>
      (respelled <span class="Mymr">+က'+စား</span>)</td>
      <td>ɡəzá | ka.ca: | kacā″ | găza: | (k)ă(s)à</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%80%E1%80%90%E1%80%BA%E1%80%9D%E1%80%80%E1%80%BA&amp;action=edit&amp;redlink=1" class="new" title="ကတ်ဝက် (page does not exist)">ကတ်ဝက်</a></span></td>
      <td>kaʔwɛʔ | kat-wak | kat‘vak‘ | kat-wet | kaʔweʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%80%E1%80%95%E1%80%BB%E1%80%AC%E1%80%80%E1%80%9A%E1%80%AC&amp;action=edit&amp;redlink=1" class="new" title="ကပျာကယာ (page does not exist)">ကပျာကယာ</a></span><br>
      (respelled <span class="Mymr">+ka'+pya+ka'ya</span>)</td>
      <td>ɡəbjàɡəjà | ka.pyaka.ya | kapyākayā | găbyagăya | (k)ă(p)ya(k)ăya</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%80%E1%80%95%E1%80%BB%E1%80%AC%E1%80%80%E1%80%9A%E1%80%AC&amp;action=edit&amp;redlink=1" class="new" title="ကပျာကယာ (page does not exist)">ကပျာကယာ</a></span><br>
      (respelled <span class="Mymr">+က'+ပျာ+က'ယာ</span>)</td>
      <td>ɡəbjàɡəjà | ka.pyaka.ya | kapyākayā | găbyagăya | (k)ă(p)ya(k)ăya</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%BC%E1%80%AD%E1%80%AF%E1%80%86%E1%80%AD%E1%80%AF%E1%80%95%E1%80%AB%E1%81%8F#Burmese" title="ကြိုဆိုပါ၏">ကြိုဆိုပါ၏</a></span><br>
      (respelled <span class="Mymr">ကြို+ဆို+ပါ၏</span>)</td>
      <td>t͡ɕòzòbàʔɛ̰ | kruihcuipae | kruichuipāe* | kyozobaè. | cou(hs)ou(p)aé</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%BD%E1%80%94%E1%80%BA%E1%80%95%E1%80%BB%E1%80%B0%E1%80%90%E1%80%AC#Burmese" title="ကွန်ပျူတာ">ကွန်ပျူတာ</a></span></td>
      <td>kʊ̀ɴpjùtà | kwanpyuta | kvan‘pyūtā | kunpyuta | kuñpyuta</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%80%E1%80%AC%E1%80%90%E1%80%BD%E1%80%80%E1%80%BA&amp;action=edit&amp;redlink=1" class="new" title="ကာတွက် (page does not exist)">ကာတွက်</a></span></td>
      <td>kàtwɛʔ | ka-twak | kātvak‘ | ka-twet | katweʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%81%E1%80%BC%E1%80%B1%E1%80%91%E1%80%B1%E1%80%AC%E1%80%80%E1%80%BA#Burmese" title="ခြေထောက်">ခြေထောက်</a></span><br>
      (respelled <span class="Mymr">ခြေ+ထောက်</span>)</td>
      <td>t͡ɕʰèdaʊʔ | hkrehtauk | khrethok‘ | chedauk | hcei(ht)auʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%81%E1%80%9C%E1%80%AF%E1%80%90%E1%80%BA#Burmese" title="ခလုတ်">ခလုတ်</a></span><br>
      (respelled <span class="Mymr">ခ'လုတ်</span>)</td>
      <td>kʰəloʊʔ | hka.lut | khalut‘ | hkălok | hkălouʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%84%E1%80%AB%E1%80%B8%E1%80%A5&amp;action=edit&amp;redlink=1" class="new" title="ငါးဥ (page does not exist)">ငါးဥ</a></span><br>
      (respelled <span class="Mymr">ငါး'ဥ</span>)</td>
      <td>ŋəʔṵ | nga:u. | ṅā″u | ngău. | ngăú</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%85%E1%80%AC%E1%80%80%E1%80%BC%E1%80%8A%E1%80%B7%E1%80%BA%E1%80%90%E1%80%AD%E1%80%AF%E1%80%80%E1%80%BA#Burmese" title="စာကြည့်တိုက်">စာကြည့်တိုက်</a></span><br>
      (respelled <span class="Mymr">စာကြည့်+တိုက်</span>)</td>
      <td>sàt͡ɕḭdaɪʔ | ca-krany.tuik | cākraññ‘′tuik‘ | sa-kyi.daik | sací(t)aiʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%85%E1%80%AC%E1%80%9B%E1%80%B1%E1%80%B8#Burmese" title="စာရေး">စာရေး</a></span><br>
      (respelled <span class="Mymr">စာ'ရေး</span>)</td>
      <td>səjé | care: | cāre″ | săye: | săyeì</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%86%E1%80%94%E1%80%BA%E1%80%95%E1%80%BC%E1%80%AF%E1%80%90%E1%80%BA#Burmese" title="ဆန်ပြုတ်">ဆန်ပြုတ်</a></span><br>
      (respelled <span class="Mymr">ဆန်+ပြုတ်</span>)</td>
      <td>sʰàɴbjoʊʔ | hcanprut | chan‘prut‘ | hsanbyok | hsañ(p)youʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%86%E1%80%AE%E1%80%95%E1%80%AF%E1%80%B6%E1%80%B8&amp;action=edit&amp;redlink=1" class="new" title="ဆီပုံး (page does not exist)">ဆီပုံး</a></span><br>
      (respelled <span class="Mymr">ဆီ+ပုံး</span>)</td>
      <td>sʰìbóʊɴ | hcipum: | chīpuṃ″ | hsibon: | hsi(p)oùñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%90%E1%80%94%E1%80%BA%E1%80%82%E1%80%AB&amp;action=edit&amp;redlink=1" class="new" title="တန်ဂါ (page does not exist)">တန်ဂါ</a></span></td>
      <td>tàɴɡà | tan-ga | tan‘gā | tan-ga | tañga</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%90%E1%80%AC%E1%80%84%E1%80%AB&amp;action=edit&amp;redlink=1" class="new" title="တာငါ (page does not exist)">တာငါ</a></span></td>
      <td>tàŋà | ta-nga | tāṅā | ta-nga | tanga</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%92%E1%80%B0%E1%80%B8%E1%80%91%E1%80%B1%E1%80%AC%E1%80%80%E1%80%BA#Burmese" title="ဒူးထောက်">ဒူးထောက်</a></span></td>
      <td>dútʰaʊʔ | du:htauk | dū″thok‘ | du:htauk | dùhtauʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%94%E1%80%80%E1%80%BA%E1%80%96%E1%80%BC%E1%80%94%E1%80%BA#Burmese" title="နက်ဖြန်">နက်ဖြန်</a></span><br>
      (respelled <span class="Mymr">ne?hpya~</span>)</td>
      <td>nɛʔpʰjàɴ | nakhpran | nak‘phran‘ | nethpyan | neʔhpyañ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%94%E1%80%80%E1%80%BA%E1%80%96%E1%80%BC%E1%80%94%E1%80%BA#Burmese" title="နက်ဖြန်">နက်ဖြန်</a></span></td>
      <td>nɛʔpʰjàɴ | nakhpran | nak‘phran‘ | nethpyan | neʔhpyañ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%95%E1%80%9B%E1%80%AD%E1%80%98%E1%80%B1%E1%80%AC%E1%80%82#Burmese" title="ပရိဘောဂ">ပရိဘောဂ</a></span><br>
      (respelled <span class="Mymr">pa'ri/bo\ga/</span>)</td>
      <td>pəɹḭbɔ́ɡa̰ | pa.ri.bhau:ga. | paribhoga | pări.baw:ga. | păríbògá</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%95%E1%80%9B%E1%80%AD%E1%80%98%E1%80%B1%E1%80%AC%E1%80%82#Burmese" title="ပရိဘောဂ">ပရိဘောဂ</a></span><br>
      (respelled <span class="Mymr">ပ'*ရိဘောဂ</span>)</td>
      <td>pəɹḭbɔ́ɡa̰ | pa.ri.bhau:ga. | paribhoga | pări.baw:ga. | păríbògá</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%96%E1%80%BC%E1%80%8A%E1%80%BA%E1%80%B8%E1%80%96%E1%80%BC%E1%80%8A%E1%80%BA%E1%80%B8#Burmese" title="ဖြည်းဖြည်း">ဖြည်းဖြည်း</a></span><br>
      (respelled <span class="Mymr">ဖြည်2း+ဖြည်2း</span>)</td>
      <td>pʰjébjé | hprany:hprany: | phraññ‘″phraññ‘″ | hpye:bye: | hpyeì(hp)yeì</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%98%E1%80%81%E1%80%84%E1%80%BA&amp;action=edit&amp;redlink=1" class="new" title="ဘခင် (page does not exist)">ဘခင်</a></span><br>
      (respelled <span class="Mymr">-ဘ+ခင်</span>)</td>
      <td>pʰa̰ɡɪ̀ɴ | bha.hkang | bhakhaṅ‘ | hpa.gin | hpá(hk)iñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%99%E1%80%84%E1%80%BA%E1%80%B9%E1%80%82%E1%80%9C%E1%80%AC%E1%80%95%E1%80%AB#Burmese" title="မင်္ဂလာပါ">မင်္ဂလာပါ</a></span><br>
      (respelled <span class="Mymr">mi~ga'la+pa</span>)</td>
      <td>mɪ̀ɴɡəlàbà | mangga.lapa | maṅ‘galāpā | min-gălaba | miñgăla(p)a</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%99%E1%80%84%E1%80%BA%E1%80%B9%E1%80%82%E1%80%9C%E1%80%AC%E1%80%95%E1%80%AB#Burmese" title="မင်္ဂလာပါ">မင်္ဂလာပါ</a></span><br>
      (respelled <span class="Mymr">မင်္ဂ'လာ+ပါ</span>)</td>
      <td>mɪ̀ɴɡəlàbà | mangga.lapa | maṅ‘galāpā | min-gălaba | miñgăla(p)a</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%99%E1%80%BB%E1%80%80%E1%80%BA%E1%80%85%E1%80%AD#Burmese" title="မျက်စိ">မျက်စိ</a></span></td>
      <td>mjɛʔsḭ | myakci. | myak‘ci | myetsi. | myeʔsí</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%99%E1%80%BC%E1%80%94%E1%80%BA%E1%80%99%E1%80%AC#Burmese" title="မြန်မာ">မြန်မာ</a></span></td>
      <td>mjàɴmà | mranma | mran‘mā | myanma | myañma</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9C%E1%80%BB%E1%80%BE%E1%80%84%E1%80%BA#Burmese" title="လျှင်">လျှင်</a></span><br>
      (respelled <span class="Mymr">*လျှင်</span>)</td>
      <td>l̥jɪ̀ɴ | hlyang | lyhaṅ‘ | hlyin | hlyiñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%9C%E1%80%BB%E1%80%BE%E1%80%AD%E1%80%AF%E1%80%B7%E1%80%9D%E1%80%BE%E1%80%80%E1%80%BA&amp;action=edit&amp;redlink=1" class="new" title="လျှို့ဝှက် (page does not exist)">လျှို့ဝှက်</a></span></td>
      <td>ʃo̰ʍɛʔ | hlyui.hwak | lyhui′vhak‘ | sho.hwet | hyoúhweʔ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9D%E1%80%80%E1%80%BA%E1%80%9D%E1%80%B6#Burmese" title="ဝက်ဝံ">ဝက်ဝံ</a></span></td>
      <td>wɛʔwʊ̀ɴ | wak-wam | vak‘vaṃ | wet-wun | weʔwuñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9E%E1%80%B0%E1%80%84%E1%80%9A%E1%80%BA#Burmese" title="သူငယ်">သူငယ်</a></span><br>
      (respelled <span class="Mymr">သူ'ငယ်</span>)</td>
      <td>θəŋɛ̀ | su-ngai | sūṅay‘ | thăngè | thănge</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%A1%E1%80%80%E1%80%BA%E1%80%9A%E1%80%94%E1%80%BA&amp;action=edit&amp;redlink=1" class="new" title="အက်ယန် (page does not exist)">အက်ယန်</a></span></td>
      <td>ʔɛʔjàɴ | ak-yan | ’ak‘yan‘ | etyan | eʔyañ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A1%E1%80%81%E1%80%BD%E1%80%B6#Burmese" title="အခွံ">အခွံ</a></span><br>
      (respelled <span class="Mymr">အ'ခွံ</span>)</td>
      <td>ʔəkʰʊ̀ɴ | a.hkwam | ’akhvaṃ | ăhkun | ăhkuñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%A1%E1%80%8A%E1%80%AC%E1%80%9E%E1%80%AC%E1%80%B8&amp;action=edit&amp;redlink=1" class="new" title="အညာသား (page does not exist)">အညာသား</a></span><br>
      (respelled <span class="Mymr">အ'ညာ+သား</span>)</td>
      <td>ʔəɲàðá | a.nyasa: | ’aññāsā″ | ănyadha: | ănya(th)à</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A1%E1%80%99%E1%80%BC%E1%80%AE%E1%80%B8#Burmese" title="အမြီး">အမြီး</a></span><br>
      (respelled <span class="Mymr">အ'မီး</span>)</td>
      <td>ʔəmí | a.mri: | ’amrī″ | ămi: | ămì</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/w/index.php?title=%E1%80%A1%E1%80%AC%E1%80%80%E1%80%BB%E1%80%94%E1%80%BA&amp;action=edit&amp;redlink=1" class="new" title="အာကျန် (page does not exist)">အာကျန်</a></span></td>
      <td>ʔàt͡ɕàɴ | a-kyan | ’ākyan‘ | a-kyan | acañ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A1%E1%80%AF%E1%80%94%E1%80%BA%E1%80%B8%E1%80%86%E1%80%AE#Burmese" title="အုန်းဆီ">အုန်းဆီ</a></span><br>
      (respelled <span class="Mymr">အုန်း+ဆီ</span>)</td>
      <td>ʔóʊɴzì | un:hci | ’un‘″chī | on:zi | oùñ(hs)i</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%99%E1%80%BA%E1%80%B8%E1%80%81%E1%80%BC%E1%80%B1#Burmese" title="ကမ်းခြေ">ကမ်းခြေ</a></span><br>
      (respelled <span class="Mymr">ကမ်း+ခြေ</span>)</td>
      <td>káɴd͡ʑè | kam:hkre | kam‘″khre | kan:gye | kàñ(hc)ei</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%99%E1%80%B9%E1%80%98%E1%80%AC#Burmese" title="ကမ္ဘာ">ကမ္ဘာ</a></span><br>
      (respelled <span class="Mymr">+ကမ်'ဘာ</span>)</td>
      <td>ɡəbà | kambha | kambhā | găba | (k)ăba</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%99%E1%80%94%E1%80%B9%E1%80%90%E1%80%9C%E1%80%B1%E1%80%B8#Burmese" title="မန္တလေး">မန္တလေး</a></span><br>
      (respelled <span class="Mymr">မန်+တ'လေး</span>)</td>
      <td>màɴdəlé | manta.le: | mantale″ | mandăle: | mañ(t)ăleì</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%86%E1%80%B1%E1%80%AC%E1%80%84%E1%80%BA%E1%80%B8%E1%80%A6%E1%80%B8#Burmese" title="ဆောင်းဦး">ဆောင်းဦး</a></span></td>
      <td>sʰáʊɴʔú | hcaung:u: | choṅ‘″ū″ | hsaung:u: | hsaùñù</td>
      <td class="actual-result-cell"></td>
      <td>Some bug dealing with ဦး yet to be resolved... using ဦ (next row) produces proper results.</td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%86%E1%80%B1%E1%80%AC%E1%80%84%E1%80%BA%E1%80%B8%E1%80%A6%E1%80%B8#Burmese" title="ဆောင်းဦး">ဆောင်းဦ</a></span></td>
      <td>sʰáʊɴʔú | hcaung:u | choṅ‘″ū | hsaung:u | hsaùñu</td>
      <td class="actual-result-cell"></td>
      <td>A tweaked version, with ဦ as a substitute (not a valid word, though)</td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%86%E1%80%B1%E1%80%AC%E1%80%B7#Burmese" title="ဆော့">ဆော့</a></span></td>
      <td>sʰɔ̰ | hcau. | cho′ | hsaw. | hsó</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A1%E1%80%98%E1%80%AD%E1%80%93%E1%80%AC%E1%80%94%E1%80%BA#Burmese" title="အဘိဓာန်">အဘိဓာန်</a></span><br>
      (respelled <span class="Mymr">a'bi/da~</span>)</td>
      <td>ʔəbḭdàɴ | a.bhi.dhan | ’abhidhān‘ | ăbi.dan | ăbídañ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A1%E1%80%98%E1%80%AD%E1%80%93%E1%80%AC%E1%80%94%E1%80%BA#Burmese" title="အဘိဓာန်">အဘိဓာန်</a></span><br>
      (respelled <span class="Mymr">a'bei?da~</span>)</td>
      <td>ʔəbeɪʔdàɴ | a.bhi.dhan | ’abhidhān‘ | ăbeikdan | ăbeiʔdañ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%90%E1%80%80%E1%80%B9%E1%80%80%E1%80%9E%E1%80%AD%E1%80%AF%E1%80%9C%E1%80%BA#Burmese" title="တက္ကသိုလ်">တက္ကသိုလ်</a></span><br>
      (respelled <span class="Mymr">te?ka'thou</span>)</td>
      <td>tɛʔkəθò | takka.suil | takkasuil‘ | tetkătho | teʔkăthou</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%B2%E1%80%B7#Burmese" title="ကဲ့">ကဲ့</a></span></td>
      <td>kɛ̰ | kai. | kai′ | kè. | ké</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%92%E1%80%B1%E1%80%AB%E1%80%BA#Burmese" title="ဒေါ်">ဒေါ်</a></span></td>
      <td>dɔ̀ | dau | do‘ | daw | do</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%95%E1%80%B1%E1%80%AB%E1%80%80%E1%80%BA%E1%80%90%E1%80%B0%E1%80%B8#Burmese" title="ပေါက်တူး">ပေါက်တူး</a></span></td>
      <td>paʊʔtú | pauktu: | pok‘tū″ | pauktu: | pauʔtù</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A9%E1%80%85%E1%80%90%E1%80%BC%E1%80%B1%E1%80%B8%E1%80%9C%E1%80%BB#Burmese" title="ဩစတြေးလျ">ဩစတြေးလျ</a></span><br>
      (respelled <span class="Mymr">ဩစ'တ'*ရေး*လျ</span>)</td>
      <td>ʔɔ́sətəɹélja̰ | au:ca.tre:lya. | ocatre″lya | aw:sătăre:lya. | òsătăreìlyá</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A9%E1%80%85%E1%80%90%E1%80%BC%E1%80%B1%E1%80%B8%E1%80%9C%E1%80%BB#Burmese" title="ဩစတြေးလျ">ဩစတြေးလျ</a></span><br>
      (respelled <span class="Mymr">o\sa'ta'rei\lya/</span>)</td>
      <td>ʔɔ́sətəɹélja̰ | au:ca.tre:lya. | ocatre″lya | aw:sătăre:lya. | òsătăreìlyá</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%A1%E1%80%AD%E1%80%94%E1%80%B9%E1%80%92%E1%80%AD%E1%80%9A#Burmese" title="အိန္ဒိယ">အိန္ဒိယ</a></span></td>
      <td>ʔèɪɴdḭja̰ | indi.ya. | ’indiya | eindi.ya. | eiñdíyá</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9E%E1%80%BD%E1%80%84%E1%80%BA%E1%80%9E%E1%80%BD%E1%80%84%E1%80%BA#Burmese" title="သွင်သွင်">သွင်သွင်</a></span><br>
      (respelled <span class="Mymr">သွင်+သွင်</span>)</td>
      <td>θwɪ̀ɴðwɪ̀ɴ | swangswang | svaṅ‘svaṅ‘ | thwindhwin | thwiñ(th)wiñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9B%E1%80%BD%E1%80%BE%E1%80%B6%E1%80%B7#Burmese" title="ရွှံ့">ရွှံ့</a></span></td>
      <td>ʃʊ̰ɴ | hrwam. | rvhaṃ′ | shun. | hyúñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9E%E1%80%AC%E1%80%99%E1%80%8F%E1%80%B1#Burmese" title="သာမဏေ">သာမဏေ</a></span><br>
      (respelled <span class="Mymr">သာမ'ဏေ</span>)</td>
      <td>θàmənè | sama.ne | sāmaṇe | thamăne | thamănei</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9D%E1%80%99%E1%80%BA%E1%80%B8#Burmese" title="ဝမ်း">ဝမ်း</a></span><br>
      (respelled <span class="Mymr">w/a\~</span>)</td>
      <td>wáɴ | wam: | vam‘″ | wan: | wàñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      <tr class="unit-test-pass">
      <td></td>
      <td><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%9D%E1%80%99%E1%80%BA%E1%80%B8#Burmese" title="ဝမ်း">ဝမ်း</a></span><br>
      (respelled <span class="Mymr">ဝ/န်း</span>)</td>
      <td>wáɴ | wam: | vam‘″ | wan: | wàñ</td>
      <td class="actual-result-cell"></td>
      <td></td>
      </tr>
      </tbody>
    </table>
  
  </main>
  <footer></footer>
</body>
<script src="../underscore-min.js"></script>
<script src="../romanisations.js"></script>
<script src="../mya2rom.js"></script>
<script>
var mya_words = document.getElementsByClassName("Mymr");
for (var i = 0; i < mya_words.length; i++){
  if(mya_words[i].getAttribute("lang") == "my"){
    var mya_word = mya_words[i].getElementsByTagName("a")[0].textContent;
    //console.info(mya2ipa(mya_word, false));
    //mya_words[i].parentNode.parentNode.getElementsByClassName("actual-result-cell")[0].textContent = mya2ipa(mya_word, false);
    mya_words[i].parentNode.parentNode.getElementsByClassName("actual-result-cell")[0].textContent = mya2rom_all(mya_word).join(" | ");
  }
}
</script>
</html>