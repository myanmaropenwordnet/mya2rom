/* To split intra-word slashed-alternatives into individual words.
 * Intra-word slashed alternatives examples: 
 *  - S/he;
 *  - cat/s;
 *  - advice/se
*/

/* Original file developed on REPL.IT
 * https://repl.it/JMcC/7
 * All info() stuff removed
 */
                    
/**** TEST CASES ****/
                    
var test_strs = ["Gord|en,on| is an actor in a comedy series", 
                    "|tɕ,dʑ|áʊɴ |θ,ð|ù",
                    "wḭ |θ,ð|è |θ,ð||a̰,ə| n|a̰,ə|",
                    "paɪʔ sʰàɴ tʰoʊʔ sɛʔ", // a  plain case
                    "|k,kh||o,aw|",
                    "ʔə |tɕ,dʑ|eɪʔ",
                    "Jonath|an,on|"];
       
console.info("--- Start Test Cases ---\n");
// ES6 for-of
for(str of test_strs){
  console.info(_showAlts(str));
}
console.info("\n--- End Test Cases ---");

/**** END TEST CASES ****/
// ES6 for-of;
//for (str of test_strs){
//for (var s = 0; s < test_strs.length; s++){

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
