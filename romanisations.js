/* Romanisations */
/*
	This is an expansion of the original [mya2ipa.js] table.
	IPA is based on that used in Thura Hlaing's MYA-IPA python script
	The remaining romanisations are based on Wikipedia's <Burmese Alphabet> article, and also Wiktionary's Burmese transliteration tables
	We also have SEALang's (or M-E Dictionary by the MLC) modification of the MLCTS
	
	The following are implemented:
		- IPA
		- MLCTS
		- MLCTS-SL: Modified form used in SEALang's dictionary
		- Simple: Simplified transcription system; ASCII-friendly; adheres to pronunciation, but no tonal information; used mainly for searching
		- Simple 2: Same objective as above, but adhering to orthograhy instead. (Highly similar to MLCTS, save tonal information and some modernised sounds for letters)
	(values are stored in the above order)
	
  UPDATES
  > 05 Mar 2019: Fixed Simple2 for င (/g/ should be /ng/)
	> 05 Jul 2017: Sounds with alternatives are now separated by commas and enclosed in vertical bars (eg: |o,ou|)
	
*/

// Consonants, or "syllable onsets"
var consonants = {
	"က" 	: 	["k", "k", "k", "k", "k"], // "g" as the voiced counterpart
  "ခ" 	: 	["kʰ", "hk", "kh", "kh", "k"],
  "ဂ" 	: 	["ɡ", "g", "g", "g", "g"],
  "ဃ" 	: 	["ɡ", "gh", "g", "g", "g"],
  "င" 	: 	["ŋ", "ng", "ng", "ng", "ng"],
  "စ" 	: 	["s", "c", "s", "s", "s"],  // "z" as the voiced counterpart
  "ဆ" 	: 	["sʰ", "hc", "hs", "s", "hs"], // "z" as the voiced counterpart; "s" used for simplified to not confuse with /ʃ/ sound
  "ဇ" 	: 	["z", "j", "z", "z", "z"],
  "ဈ" 	: 	["z", "jh", "z", "z", "z"],
  "ဉ" 	: 	["ɲ", "ny", "nj", "ny", "ny"],
  "ည" 	: 	["ɲ", "ny", "nj", "ny", "ny"],
  "ဋ" 	: 	["t", "t", "t", "t", "t"],
  "ဌ" 	: 	["tʰ", "ht", "th", "th", "th"],
  "ဍ" 	: 	["d", "d", "d", "d", "d"],
  "ဎ" 	: 	["d", "dh", "d", "d", "d"],
  "ဏ" 	: 	["n", "n", "n", "n", "n"],
  "တ" 	: 	["t", "t", "t", "t", "t"],
  "ထ" 	: 	["tʰ", "ht", "ht", "th", "th"],
  "ဒ" 	: 	["d", "d", "d", "d", "d"],
  "ဓ" 	: 	["d", "dh", "d", "d", "d"],
  "န" 	: 	["n", "n", "n", "n", "n"],
  "ပ" 	: 	["p", "p", "p", "p", "p"], // "b" is the voiced counterpart
  "ဖ" 	: 	["pʰ", "hp", "hp", "ph", "ph"],
  "ဗ" 	: 	["b", "b", "b", "b", "b"],
  "ဘ" 	: 	["b", "bh", "b", "b", "b"],
  "မ" 	: 	["m", "m", "m", "m", "m"],
  "ယ" 	: 	["j", "y", "j", "y", "y"],
  "ရ" 	: 	["j", "r", "j", "y", "y"], // "r" usually in borrowed words
  "လ" 	: 	["l", "l", "l", "l", "l"],
  "ဝ" 	: 	["w", "w", "w", "w", "w"],
  "၀" 	: 	["w", "w", "w", "w", "w"], // Myanmar Digit "0" is sometimes used as "w"... (in ALT Corpus); temporarily here until substitution code is in place.
  "သ" 	: 	["|θ,ð|", "s", "th", "th", "th"],
  "ဿ" 	: 	["|θ,ð|", "s", "th", "th", "th"], // 04 May 2017: Added "great sa"
  "ဟ" 	: 	["h", "h", "h", "h", "h"],
  "ဠ" 	: 	["l", "l", "l", "l", "l"],
  "အ" 	: 	["ʔ", "", "", "", ""]
}

// Vowels, nucleus(es/nuclei?) and finals; or "syllable rhymes"
var vowels = {
  "ိုင်း"		:		["áɪɴ" , "uing:" , "ain:" , "ain" , "uing"],
  "ိုင့်"		:		["a̰ɪɴ" , "uing." , "ain." , "ain" , "uing"],
  "ေါင်း"		:		["áʊɴ" , "aung:" , "aun:" , "aun"],
  "ေါင့်"		:		["a̰ʊɴ" , "aung." , "aun." , "aun" , "aung"],
  "ောင်း"		:		["áʊɴ" , "aung:" , "aun:" , "aun" , "aung"],
  "ောင့်"		:		["a̰ʊɴ" , "aung." , "aun." , "aun" , "aung"],
  "ိုက်"		:		["aɪʔ" , "uik" , "ai'" , "ai'" , "uik"],
  "ွမ်း"		:		["ʊ́ɴ" , "wam:" , "un:" , "un" , "wam"],
  "ွမ့်"		:		["ʊ̰ɴ" , "wam." , "un." , "un" , "wam"],
  "ွန်း"		:		["ʊ́ɴ" , "wan:" , "un:" , "un" , "wan"],
  "ွန့်"		:		["ʊ̰ɴ" , "wan." , "un." , "un" , "wan"],
  "ေါက်"		:		["aʊʔ" , "auk" , "au'" , "au'" , "auk"],
  "ောက်"		:		["aʊʔ" , "auk" , "au'" , "au'" , "auk"],
  "ိုင်"		:		["àɪɴ" , "uing" , "ain" , "ain" , "uing"],
  "ေါင်"		:		["àʊɴ" , "aung" , "aun" , "aun" , "aung"],
  "ောင်"		:		["àʊɴ" , "aung" , "aun" , "aun" , "aung"],
  "ုမ်း"		:		["óʊɴ" , "um:" , "oun:" , "oun" , "um"],
  "ုမ့်"		:		["o̰ʊɴ" , "um." , "oun." , "oun" , "um"],
  "ုန်း"		:		["óʊɴ" , "un:" , "oun:" , "oun" , "un"],
  "ုန့်"		:		["o̰ʊɴ" , "un." , "oun." , "oun" , "un"],
  "ိမ်း"		:		["éɪɴ" , "im:" , "ein:" , "ein" , "im"],
  "ိမ့်"		:		["ḛɪɴ" , "im." , "ein." , "ein" , "im"],
  "ိန်း"		:		["éɪɴ" , "in:" , "ein:" , "ein" , "in"],
  "ိန့်"		:		["ḛɪɴ" , "in." , "ein." , "ein" , "in"],
  "ုဏ်"		:		["òʊɴ" , "un" , "oun" , "oun" , "wun"],
  "ွမ်"		:		["ʊ̀ɴ" , "wam" , "un" , "un" , "wam"],
  "ွပ်"		:		["ʊʔ" , "wap" , "u'" , "u'" , "wap"],
  "ွန်"		:		["ʊ̀ɴ" , "wan" , "un" , "un" , "wan"],
  "ွတ်"		:		["ʊʔ" , "wat" , "u'" , "u'" , "wat"],
  "ိုး"		:		["ó" , "ui:" , "ou:" , "|o,ou|" , "ui"],
  "ို့"		:		["o̰" , "ui." , "ou." , "|o,ou|" , "ui"],
  "ို်"		:		["aɪʔ" , "ui" , "ai'" , "ai'" , "ui"],
  "ေါ့"		:		["ɔ̰" , "au." , "o." , "|o,aw|" , "au"],
  "ေါ်"		:		["ɔ̀" , "au" , "o" , "|o,aw|" , "au"],
  "ော့"		:		["ɔ̰" , "au." , "o." , "|o,aw|" , "au"],
  "ော်"		:		["ɔ̀" , "au" , "o" , "|o,aw|" , "au"],
  "ုံး"		:		["óʊɴ" , "um:" , "oun:" , "oun" , "um"],
  "ုံ့"		:		["o̰ʊɴ" , "um." , "oun." , "oun" , "um"],
  "ုမ်"		:		["òʊɴ" , "um" , "oun" , "oun" , "um"],
  "ုပ်"		:		["oʊʔ" , "up" , "ou" , "ou" , "up"],
  "ုန်"		:		["òʊɴ" , "un" , "oun" , "oun" , "un"],
  "ုတ်"		:		["oʊʔ" , "ut" , "ou" , "ou" , "ut"],
  "ိံး"		:		["éɪɴ" , "im:" , "ein:" , "ein" , "im"],
  "ိံ့"		:		["ḛɪɴ" , "im." , "ein." , "ein" , "im"],
  "ိမ်"		:		["èɪɴ" , "im" , "ein" , "ein" , "im"],
  "ိပ်"		:		["eɪʔ" , "ip'" , "ei'" , "ei'" , "ip"],
  "ိန်"		:		["èɪɴ" , "in" , "ein" , "ein" , "in"],
  "ိတ်"		:		["eɪʔ" , "it" , "ei'" , "ei'" , "it"],
  "မ်း"		:		["áɴ" , "am:" , "an:" , "an" , "am"],
  "မ့်"		:		["a̰ɴ" , "am." , "an." , "an" , "am"],
  "န်း"		:		["áɴ" , "an:" , "an:" , "an" , "an"],
  "န့်"		:		["a̰ɴ" , "an." , "an." , "an" , "an"],
  "ဉ်း"		:		["ɪ́ɴ" , "any:" , "in:" , "in" , "any"],
  "ည်း"		:		["í" , "any:" , "i:" , "i" , "any"],
  "ဉ့်"		:		["ɪ̰ɴ" , "any." , "in." , "in" , "any"],
  "ည့်"		:		["|ḭ,ɛ̰|" , "any." , "i." , "i" , "any"],
  "င်း"		:		["ɪ́ɴ" , "ang:" , "in:" , "in" , "ang"],
  "င့်"		:		["ɪ̰ɴ" , "ang." , "in." , "in" , "ang"],
  "ို"		:		["ò" , "ui" , "ou" , "|o,ou|" , "ui"],
  "ေါ"		:		["ɔ́" , "au:" , "o:" , "|o,aw|" , "au"],
  "ော"		:		["ɔ́" , "au:" , "o:" , "|o,aw|" , "au"],
  "ဲ့"		:		["ɛ̰" , "ai." , "e." , "e" , "ai"],
  "ေး"		:		["é" , "e:" , "ei:" , "e" , "e"],
  "ေ့"		:		["ḛ" , "e." , "ei." , "ei" , "e"],
  "ူး"		:		["ú" , "u:" , "u:" , "u" , "u"],
  "ုံ"		:		["òʊɴ" , "um" , "oun" , "oun" , "um"],
  "ီး"		:		["í" , "i:" , "i:" , "i" , "i"],
  "ိံ"		:		["èɪɴ" , "im" , "ein" , "ein" , "im"],
  "ံး"		:		["áɴ" , "am:" , "an:" , "an" , "am"],
  "ံ့"		:		["a̰ɴ" , "am." , "an." , "an" , "am"],
  "ယ်"		:		["ɛ̀" , "ai" , "e" , "e" , "ai"],
  "မ်"		:		["àɴ" , "am" , "an" , "an" , "am"],
  "ပ်"		:		["aʔ" , "ap" , "a'" , "a'" , "ap"],
  "န်"		:		["àɴ" , "an" , "an" , "an" , "an"],
  "တ်"		:		["aʔ" , "at" , "a'" , "a'" , "at"],
  "ဉ်"		:		["ɪ̀ɴ" , "any" , "in" , "in" , "any"],
  "ည်"		:		["|ì,ɛ̀|" , "any" , "i" , "i" , "any"],
  "စ်"		:		["ɪʔ" , "ac" , "i'" , "i'" , "as"],
  "င်"		:		["ɪ̀ɴ" , "ang" , "in" , "in" , "ang"],
  "ါး"		:		["á" , "a:" , "a:" , "a" , "a"],
  "ား"		:		["á" , "a:" , "a:" , "a" , "a"],
  "ါ့"		:		["a̰" , "a." , "a" , "a" , "a"],
  "ာ့"		:		["a̰" , "a." , "a" , "a" , "a"],
  "ဲ"		:		["ɛ́" , "ai:" , "e:" , "e" , "ai"],
  "ေ"		:		["è" , "e" , "ei" , "ei" , "e"],
  "့"   :   ["ṵ" , "u." , "u." , "u" , "u"], // 03 Jan 2020: Added provision for auk-myit–induced creaky tone; placed above the others so it will take precedence.
  "ူ"		:		["ù" , "u" , "u" , "u" , "u"],
  "ု"		:		["ṵ" , "u." , "u." , "u" , "u"],
  "ီ"		:		["ì" , "i" , "i" , "i" , "i"],
  "ိ"		:		["ḭ" , "i." , "i." , "i" , "i"],
  "ံ"		:		["àɴ" , "am" , "an" , "an" , "am"],
  "်"		:		["ɛʔ" , "ak" , "e'" , "e" , "ak"],
  "ါ"		:		["à" , "a" , "a" , "a" , "a"],
  "ာ"		:		["à" , "a" , "a" , "a" , "a"],
  ""		:		["|a̰,ə|" , "a." , "a." , "|a,e|" , "a"],
}
  
// WJ: Additional "independent" or open vowels, which were not in the original Python scripts
//		 These vowels can occur the same way as a consonant, and should be detected as such.  
var vowels_in = {
  'ဣ' 		: 	["ʔḭ", "i.", "i.", "i", "i"],
  'ဤ' 		: 	["ʔì", "i", "i", "i", "i"],
  'ဥ' 		: 	["ʔṵ", "u.", "u.", "u", "u"],
  'ဦ' 		: 	["ʔù", "u", "u", "u", "u"],
  //'ဦး' 	: 	'ʔú', // 09 May 2017: high-tone ဦ (BUG: currently can't seen to detect this letter?)
  'ဧ' 		:	["ʔè", "e", "ei", "e", "e"],
  'ဩ' 		: 	["ʔɔ́", "au:", "o:", "o", "au"],
  'ဪ' 	: 	["ʔɔ̀", "au", "o", "o", "au"]
}

// WJ: Also, some "special letters" that serve as markers, punctuations or abbreviations
var specials = {
	'၍' 		: 	["jwḛ", "ywei.", "jwei.", "ywei", "ywei"],
	'၏' 		: 	["ḭ", "i.", "i.", "i", "i"]
}
