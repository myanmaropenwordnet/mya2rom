/* 
	mya2rom.js
	
	Script to convert transcribe/transliterate MYA words (to IPA, MLCTS, MLCTS-SL, and simple romanisation)
	This is an extension to [mya2ipa.js]
			
	Originally based on Python scripts by Thura Hlaing (https://gist.github.com/trhura)
	Additional syllable-splitting method based on Wiktionary template's auto-IPA script
	
	Extended romanisation tables based on Wikipedia <Burmese Alphabet> and Wiktinary Burmese romanisation page
	IPA sound/pronunciation change rules based on Wikipedia <Burmese Alphabet> article.
	
*/

// 23 Nov: Updates and stuff now in [Old Readme.txt]
			

/* NOTE: Romanisation table now moved to a separate file [romanisations.js] */


/*
 * @mya2rom
 * Arguments:
 * 	word:STRING => the MYA word to deal with
 *	system:STRING => the transcription system to use. Valid systems are stored in the array [systems]
 *	show_nice_alts:BOOLEAN [Default: false] => whether to show alternate segments as complete syllables, or just show alternatives within the word itself (using slashes)
 * 	is_manual:BOOLEAN [Default: false] => whether the splitting was already performed manually, or should be performed automatically
 */
 

const m2r_VERSION = "0.4.4";
	// ES2015 Object.freeze(), to prevent changes to [m2r_VERSION]
	Object.freeze(m2r_VERSION);
 
// Array containing the presently supported transcription systems.
// These values are arranged in the same order as they appear in the romanisations table in [romanisations.js]
const SYSTEMS = ["ipa", "mlcts", "mlcts2", "simple", "simple2"];
	// ES2015 Object.freeze(), to prevent changes to the values of SYSTEMS
	Object.freeze(SYSTEMS);

var ridx = 0; // the index of the transcribed sounds, corresponding to the index of the transcription system used

function mya2rom(word, system, show_nice_alts=false, is_manual=false){

	//console.info("Using " + system + " to transcribe");

	ridx = SYSTEMS.indexOf(system);
	
	//console.info(ridx);
	
	var ipa = "";
	var syllable_ipa = "";

	//console.info("Manual split? " + is_manual);
	// Collapse spaces into none, or multiple spaces into one space for manual
	word = (is_manual) ? word.replace(/(\s){2,}/g, " ") : word.replace(/(\s){1,}/g, "");
	
	// TODO: Re-order some stacked diacritics (part. asat and anusvara)
	// Detect asat-aukmyit order and change to aukmyit-asat order (as used in SEALang, ALT NOVA)
	if(word.search(/(်)(့)/g) != -1){
	  word = word.replace(/(်)(့)/g, "$2$1");
	  //console.info("Asat and Aukmyit flipped!");
	}
	
	var syllables = (is_manual) ? word.split(" ") : to_syllables(word);

	for (var i = 0; i < syllables.length; i++){
	
		//console.info("Syllable " + (i+1) + ": " + syllables[i]);
	
		syllable_ipa = "";

		// Initial (consonant, or indepedent vowel, or special letter)
		var initial = syllables[i][0];
		
		syllable_ipa += get_consonant(initial);

		// Medial + Coda
		var medicoda = syllables[i].slice(1);
		
		
		var medials_arr = [
					["j", "y", "j", "y", "y"], // ျ  ya pin
					["j", "r", "j", "y", "y"], // ြ ya yit
					["\u0325", "DV", "DV", "DV", "DV"] // "DV" is used to indicate devoicing, which we will then replace later
			];
		

		// Check for MEDIALS
		if (medicoda.search("ှ") != -1){ // IPA uses under-ring, for devoice
			//syllable_ipa += "\u0325"; 
			syllable_ipa += medials_arr[2][ridx];
		}

		// 06 April 2017: 
		// In original Python code, the following was an "else if", which meant /j/ and /w/ were not meant to co-exist. However, this is not the case in actual data (for example, ပြွန် "pipe, tube". I have made them independent conditionals now.
		
		// yayit and yapin will now be separately detected, as the MLCTS system transcribes them differently.
		
		if (medicoda.search("ျ") != -1){
			syllable_ipa += medials_arr[0][ridx];
		}
		
		if (medicoda.search("ြ") != -1){
			syllable_ipa += medials_arr[1][ridx];
		}
		
		if (medicoda.search("ွ") != -1){
			syllable_ipa += "w";
		}

		// Check for VOWELS
		
		for (letter in vowels){
			var search_result = medicoda.search(letter);
			if (search_result != -1){
				//console.info("\tFound " + letter + " in " + medicoda + " at position " + search_result + " (to " + (search_result + letter.length) + ")");
				if (vowels_in[initial] == undefined && specials[initial] == undefined) { // We only add a vowel if there isn't an independent vowel or special letter
					syllable_ipa += vowels[letter][ridx];
				}
				break;
			} else {
				//console.log("Nothing found.");
			}
		}
		
		
		// The ʊ symbol and "w" should not co-exist side-by-side in a syllable.
		// For example, in the case of kwʊ̀ɴ (for ကွန်), which should be just kʊ̀ɴ
		if (syllable_ipa.search("\u028A") != -1){
		  syllable_ipa = syllable_ipa.replace("w", "");
		} 

		// 03 Jan 2020: Likewise for "ww" combinations in MLCTS and Simple2, and "wu" in MLCTS2.
		// Although detection is slightly different; we detect the actual "ww" and "wu" combination.
		// (Shift to sound change? Keep here for now.)

		if (syllable_ipa.search("ww") != -1){
			syllable_ipa = syllable_ipa.replace("ww", "w");
		}
		if (syllable_ipa.search("wu") != -1){
			syllable_ipa = syllable_ipa.replace("wu", "u");
		}
    
		// TODO: Deal with /(w)a/ to /u/ pronunciation for other systems
		
		
		// ON HOLD
		// Detect syllables with alternative pronunciations (by "/"es).
		//if(syllable_ipa.search(/\//g) != -1){
		//    console.info("Syllable " + syllable_ipa + " has alternatives.");
		//}
    
		ipa += syllable_ipa + " "; 
		
	}
	
	
		// **** SOUND CHANGES ****
		
		// Apply sound-change rules happening for certain consonant clusters
		// These take into account cases like ကြ and ခြ being palatalised to ʧ/tɕ and ʧʰ/tɕʰ
		// instead of kj and kʰj
		// as well as numerous other cases
	
		if(system == "ipa"){
				// 11 Apr 2017: Made replacement global
				// Previously, it would replace only the first instance of matched terms.
	
				ipa = ipa.replace(/kj/g, "|tɕ,dʑ|"); // or ʧ
				ipa = ipa.replace(/kʰj/g,"|tɕʰ,dʑ|"); // or ʧʰ
				ipa = ipa.replace(/ɡj/g, "dʑ");
				ipa = ipa.replace(/jw/g, "w");
				//ipa = ipa.replace("#", "ə"); // Was originally commented out in Python script
				ipa = ipa.replace(/j̥/g, "ʃ");
				ipa = ipa.replace(/ŋ̥/g, "ŋ̊");
				ipa = ipa.replace(/ŋj/g, "ɲ");
				
				/* 
				 * 18 May 2017: New provisions for additional cases related to devoice ha-tho diacritic:
				 * 		- လျှ becomes /ʃ/; Ditto for သျှ
				 * 		- ဝှ becomes /w̥/ becomes /ʍ/
				*/
				ipa = ipa.replace(/l̥j/g, "|l̥j,ʃ|");
				ipa = ipa.replace(/\|θ,ð\|̥j/g, "ʃ");
				ipa = ipa.replace(/w̥/g, "ʍ");
				
				// 09 May 2017: Make အ a schwa /ə/, so the "inherent" letter will be removed.
				ipa = ipa.replace(/ʔ\|a̰,ə\|/g, "ʔə");
		 } else if (system == "mlcts"){
		   
				ipa = ipa.replace(/(.){1}(DV)/g, "h$1"); // replaces [C]DV with proper devoicing h[C] structure
		   
		 } else if (system == "mlcts2"){
		 
		 		ipa = ipa.replace(/khj/g, "ch");
				ipa = ipa.replace(/(.){1}(DV)/g, "h$1"); // replaces [C]DV with proper devoicing h[C] structure

				// 05 Mar 2019: /ngj/ => /nj/
				ipa = ipa.replace(/ngj/g, "nj");

				// 03 Jan 2020: /hj/ => /sh/
				ipa = ipa.replace(/hj/g, "sh");
		 
		 } else if (system == "simple"){
		   
				ipa = ipa.replace(/khy/g, "ch");
		  
				/*
				 * 18 May 2017: Same as provisions for ha-tho diacritic in IPA 
				 * 		- လျှ becomes "sh"; Ditto for သျှ and ယှ
				 */
				ipa = ipa.replace(/yDV/g, "sh");
				ipa = ipa.replace(/DV/g, ""); // Remove other DV
				ipa = ipa.replace(/ly/g, "|ly,sh|");
				ipa = ipa.replace(/thy/g, "sh");

				// 05 Mar 2019: /ngy/ => /ny/
				ipa = ipa.replace(/ngy/g, "ny");
		   
		 } else if (system == "simple2"){
		  
				// In Simple2, the transcription /th/ replaces /s/ in MLCTS, so we have to take into account the two-letter-ness of it first.
				ipa = ipa.replace(/(th)(DV)/g, "h$1"); // thDV -> hth
				ipa = ipa.replace(/(.){1}(DV)/g, "h$1"); // replaces [C]DV with proper devoicing h[C] structure

				// 05 Mar 2019: /ngy/ => /ny/
				ipa = ipa.replace(/ngy/g, "ny");
		   
		 }
		 
		 ipa = ipa.trim();
		 
		 if(show_nice_alts){
		 		ipa = _showAlts(ipa);	
		 }
		 

		return ipa;
}

/* @to_syllables
 *
 * Arguments:
 *	word:STRING => The word to syllabify
 *
 * Description:
 * This function uses Regex to identify potential MYA syllables, and automatically performs a syllable-level split.
 * This is based on, and largely simplified from, the method used in Burmese Wiktionary's template module for auto IPA.
 *
 */

function to_syllables(word){

    var syllables = [];
    
    // compiled from the three objects: [consonants], [vowels_in] and [specials]
    var consonant_str = "";
    for (letter in consonants){
      consonant_str += letter;
    }
    for (letter in vowels_in){
      consonant_str += letter;
    }
    for (letter in specials){
      consonant_str += letter;
    }
    
    var medial_str = "[ျြွှ]";
    var tone_str1 = "[ံ့းွာါါိီုူေဲ ှ]";
    var anusv_str = "[့]";
    var tone_str2 = "[့်္််း]";
    
    //console.info(consonant_str);
    
    // First capture group; split into multiple lines for clarity.
    var regex_str = "(";
    regex_str += "[" + consonant_str + "]";
    regex_str += medial_str + "*"
    regex_str += tone_str1 + "*";
    regex_str += ")";
    
    // Second capture group; ditto
    regex_str += "(";
    regex_str += "[" + consonant_str + "]?"; // 08 May 2017: Second consonant is not always present (eg: တော်)
    regex_str += anusv_str + "?";
    regex_str += tone_str2 + "+";
    regex_str += ")";
    regex_str += "*";
    
    //console.log("Regex str: " + regex_str);
    
    var re = new RegExp(regex_str, "g");
    
    
    
    // The simplest MYA syllable is just a consonant, independent vowels or special letters (/i/).
    // This may or may not be modified by "medial" vowels.
    // It may or may not also have an asat (for တော်, for instance)
    // A more complex syllable structure will be one that has a "rhyme", which is another consonant that has an asat, which may also be coupled with tone marks.
    
    //syllables = word.replace(/([ကခဂဃငစဆဇဈဉညဋဌဍဎဏတထဒဓနပဖဗဘမယရလဝသဟဠအဿ][ျြွှ]*[ံ့းွာါါိီုူေဲ ှ]*)([ကခဂဃငစဆဇဈဉညဋဌဍဎဏတထဒဓနပဖဗဘမယရလဝသဟဠအဿ]?[့]?[့်္််း]+)*/g, "$1$2 ").trim().split(" ");
    
    syllables = word.replace(re, "$1$2 ").trim().split(" ");

    //console.info("Split into: " + syllables);
    
    return syllables;
    
}

/*************************************/

/* @get_consonant
 *
 * Arguments:
 * letter:STRING => The MYA letter for which to retrieve the corresponding transcribed symbol
 *
 * Description:
 * To obtain the corresponding consonant used by the chosen transcription system, when given the MYA letter
 *
 */

function get_consonant(letter){
  
  var consonant_ipa = "";
  
  if (consonants[letter] != undefined){ // consonant?
	    
	  consonant_ipa += consonants[letter][ridx];
  
  } else if (vowels_in[letter] != undefined){ // or independent vowel?
  
	  consonant_ipa += vowels_in[letter][ridx];
  
  } else if (specials[letter] != undefined){ // or special letter?
  
	  consonant_ipa += specials[letter][ridx];
  
  }	else {
  
	  consonant_ipa += "";
	  
  }
  
  return consonant_ipa;
  
}

/**********************************/

/* @_showAlts
 * 
 * Arguments:
 * ipa_str:STRING => The final transcription string
 *
 * Description:
 * Converts syllables with alternate segments such as "|tɕ,dʑ|áʊɴ" and "k|a̰,ə|" into nicer-looking "tɕáʊɴ|dʑáʊɴ" and "ka̰|kə"
 *
 */
 
function _showAlts(ipa_str){
  
  var new_ipa_str_arr = [];
  var new_ipa_str = "";
  
  //var ipa_str = test_strs[s];
  
  // The new string is the original string at the beginning.
  new_ipa_str = ipa_str;

  // We first segment the strings into individual words
  var split_str = ipa_str.split(" ");
  
  // ES6 for-of
  //for (word of split_str){
  for (var w = 0; w < split_str.length; w++){
    
    var word = split_str[w];
    
    if(word.split("|").length > 2){
      
      var segment_arr = word.split("|");
      
      // Removes any empty slots resulting from [split()]
      // Original array is replaced.
      segment_arr = segment_arr.filter(function(ele){
        return ele !== "";        
      });
      
      var alt_segments_arr = [];
  
      for (var i = 0; i < segment_arr.length; i++){
        //var prev_segment = (i - 1 >= 0) ? segment_arr[i-1] : "";
        var current_segment = segment_arr[i];
        var next_segment = (i + 1 < segment_arr.length) ? segment_arr[i+1] : "";
        
        var cs_length = current_segment.split(",").length;
        var ns_length = (next_segment !== "") ? next_segment.split(",").length : 0;
        
        // The following conditionals check which segment array (current or next) is larger
        // the larger one is the one containing the alt-segment bits.
        // these alt-segment bits will be attached individually to the smaller segment array
        // Eg: ["Gord"] and ["en", "on"], the latter is larger.
        // Therefore: "Gord-" + "-en",
        //            "Gord-" + "-on"
        //
        // If they are the same length:
        // each element from one array will combine with the others in the oter array (and the no. of combinations will be the product)
        // ["de", "da"] and ["re", "er"] ==> de + re, de + er, da + re, da + er
        
        if(ns_length > cs_length){
          for (var j = 0; j < ns_length; j++){
            alt_segments_arr.push(current_segment + next_segment.split(",")[j]);
          }          
        } else if (cs_length > ns_length && next_segment !== "") {
          for (var k = 0; k < cs_length; k++){            
            alt_segments_arr.push(current_segment.split(",")[k] + next_segment);
          }         
        } else if (ns_length === cs_length){            
          for (var m = 0; m < cs_length; m++){
            for (var n = 0; n < ns_length; n++){ 
              alt_segments_arr.push(current_segment.split(",")[m] + next_segment.split(",")[n]);
            }
          }
        }
      } // End of segment_arr FOR-loop
      
      // [new_ipa_str], originally same as [ipa_str], now has the alt-segments parts replaced with the [alt_segments_arr]; it is progressively replaced.
      new_ipa_str = new_ipa_str.replace(word, alt_segments_arr.join("|"));
    }
  }
  // The final [new_ipa_str], with all alt-segments replaced, is now pushed into [new_ipa_str_arr]
  //new_ipa_str_arr.push(new_ipa_str);
  
  //return new_ipa_str_arr;
  
  return new_ipa_str;
  
}

/**********************************/

/* @mya2rom_all
 *
 * Arguments:
 * word:STRING => The MYA word to convert
 * show_nice_alts:BOOLEAN [Default: false] => whether to show alternate segments as complete syllables, or just show alternatives within the word itself (using slashes)
 *
 * Description:
 * This just calls [mya2rom] multiple times, one time for each of the transcription systems in the [systems] array
 *
 */
function mya2rom_all(word, show_nice_alts=false, is_manual=false){
  var converted_arr = [];
  for (var s = 0; s < SYSTEMS.length; s++){
    converted_arr.push(mya2rom(word, SYSTEMS[s], show_nice_alts, is_manual).trim());
  }
  return converted_arr;
}
