<!DOCTYPE html>

<html>
<head>
  <title></title>
  <meta charset="utf-8"></meta>
  <style>
  body {font-family: sans-serif}
  table {font-family: Linux Libertine, serif}
  </style>
</head>

<?php

require_once("../../MOW/mya_tables.php");
$db = new SQLite3("../../MOW/eng-mya_synsets");

$no_of_entries = $db->querySingle("SELECT COUNT(id) FROM pronunciation WHERE type = 'ipa'");

$total = 1000;

$total = ($total > $no_of_entries) ? $no_of_entries : $total;

$prons_result = $db->query("SELECT * FROM pronunciation WHERE type = 'ipa' LIMIT 0, $total");

?>
  
<body>
  <header>
  <h1>Mya2IPA.js Test Cases (Auto)</h1>
  <p>Compares auto-IPA with the data inside MOW</p>
  <p>NOTE: Might not always be validated as correct, even if it's correct, because the IPA data in MOW can be modified or have alternatives provided and thus not match up.</p>
  </header>
  <p>Total: <?php echo $total; ?> | Same: <span id='same-stat'>0</span> | Diff: <span id='diff-stat'>0</span></p>
  <main>
  
    <table class="unit-tests wikitable" border="1">
      <tbody>
      <tr>
      <th class="unit-tests-img-corner" style="cursor:pointer" title="Only failed tests"></th>
      <th>Text</th>
      <th>MOW IPA</th>
      <th>Auto IPA</th>
      <th>Same/Diff</th>
      <th>Remarks</th>
      </tr>
      
      <?php
      // To normalise the latin letters' vowels + diacritics, and turn them into a single letter.
      // That's because sometimes the vowels and diacritics are input and encoded as two separate entities,
      // whereas in the auto-IPA-er, they are treated as a single entity. (except apparently, /a̰/)
      
      $vowel_dia_arr = array(
	      "á" => "á", 
	      "à" => "à", 
	      "í" => "í",
	      "ì" => "ì",
	      "ḭ" => "ḭ",
	      "ó" => "ó",
	      "ò" => "ò",
	      "ú" => "ú",
	      "ù" => "ù",
	      "ṵ" => "ṵ",
	      "ɔ́" => "ɔ́"
	);
      
      
      while ($pron = $prons_result->fetchArray()){
	$table = $pron["table_name"];
	$word = $db->querySingle("SELECT " . $mya_tables[$table] . " FROM $table WHERE id = " . $pron["word_id"]);
	echo "<tr class=\"unit-test-pass\">";
	echo "<td>" . $pron["id"] . " / " . $pron["word_id"] . "</td>";
	echo "<td><span class=\"Mymr\" lang=\"my\" xml:lang=\"my\"><a href=\"\" title=\"\">$word</a></span><br></td>";
	
	$phonetic = $pron["phonetic"];
	foreach($vowel_dia_arr as $old => $new){
	  //echo "Looking for $old in $phonetic";
	  $phonetic = str_replace($old, $new, $phonetic, $count);
	  //echo " and found/replaced $count.<br>";
	}
	
	
	echo "<td class=\"mow-ipa-cell\">" . $phonetic . "</td>";
	echo "<td class=\"auto-ipa-cell\"></td>";
	echo "<td class=\"same-diff-cell\"></td>";
	echo "<td class=\"remarks-cell\"></td>";
	echo "</tr>";
      }

      ?>
      
      <tr class="unit-test-pass">
      <td></td>
      <td class="mow-ipa-cell"><span class="Mymr" lang="my" xml:lang="my"><a href="https://en.wiktionary.org/wiki/%E1%80%80%E1%80%85%E1%80%AC%E1%80%B8#Burmese" title="ကစား">သင်္ဘော</a></span><br></td>
      <td>θí̃ bɔ́</td>
      <td class="auto-ipa-cell"></td>
      <td class="same-diff-cell"></td>
      <td class="remarks-cell"></td>
      </tr>
      
      </tbody>
    </table>
  
  </main>
  <footer></footer>
</body>
<script src="../underscore-min.js"></script>
<script src="../mya2ipa.js"></script>
<script>
var mya_words = document.getElementsByClassName("Mymr");
var total = <?php echo $total; ?>;
var no_diff = 0;
for (var i = 0; i < mya_words.length; i++){
  if(mya_words[i].getAttribute("lang") == "my"){
    var current_row = mya_words[i].parentNode.parentNode;
    var mya_word = mya_words[i].getElementsByTagName("a")[0].textContent;
    
    var mow_ipa = current_row.getElementsByClassName("mow-ipa-cell")[0].textContent;
    var auto_ipa = mya2ipa(mya_word, false).trim();
    
    // replace the syllable demarcating "." used in MOW with a space, if any.
    mow_ipa = (mow_ipa.split(".").length > 1) ? mow_ipa.split(".").join(" ") : mow_ipa;
    
    var diff_str = "";

    if(mow_ipa == auto_ipa){
      current_row.getElementsByClassName("same-diff-cell")[0].textContent = "Same";
      current_row.getElementsByClassName("same-diff-cell")[0].style.backgroundColor = "#cec";
    } else {
      current_row.getElementsByClassName("same-diff-cell")[0].textContent = "Diff";
      current_row.getElementsByClassName("same-diff-cell")[0].style.backgroundColor = "#fcc";
      no_diff++;
      diff_str += "Differs in:";
      
      // compare on a syllable level
      
      auto_ipa_syl = auto_ipa.split(" ");
      mow_ipa_syl = mow_ipa.split(" ");
      
      for (var j = 0; j < auto_ipa_syl.length; j++){
	if(auto_ipa_syl[j] != mow_ipa_syl[j]){
	  diff_str += "<br>- " + auto_ipa_syl[j];
	}
      }
      
      current_row.getElementsByClassName("remarks-cell")[0].innerHTML = diff_str;
    }
    
    current_row.getElementsByClassName("mow-ipa-cell")[0].textContent = mow_ipa;
    current_row.getElementsByClassName("auto-ipa-cell")[0].textContent = auto_ipa;
    
  }
}
document.getElementById("diff-stat").textContent = no_diff + " (" + parseInt(no_diff/total * 100) + "%)";
document.getElementById("same-stat").textContent = total - no_diff + " (" + parseInt((total - no_diff)/total * 100) + "%)";
</script>
</html>