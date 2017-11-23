var m2r = m2r || {};

m2r = (function(){
  
  var systems = ["ipa", "mlcts", "mlcts2", "s1", "s2"];
  var ridx = 0;
  
  return {
    
    showVowels : function(){
      console.info("Vowels: " + this.vowels);
    },
    
    
    showConsonants : function(){
      console.info("Consonants: " + this.consonants)
    },
    

    translit : function(word, system="ipa"){
      
      ridx = systems.indexOf(system);
      
      console.info("Using System: " + system)
      
      let vowels = this.vowels;
      let consonants = this.consonants;
      
      // Imagine to_syllables
      this.to_syllables(word);
      
      if(vowels[word]){
        console.info("Vowel: " , vowels[word][ridx]);
      } else {
        console.info("Not Vowel");
        if(consonants[word]){
          console.info("Consonant: " , this.get_cons(word))
        } else {
          console.info("Unable to transliterate the letter <",word,">")
        }
      }
      
    },
    
    translit_all : function(word){
      
      for(var i = 0; i < systems.length; i++){
        
        this.translit(word, systems[i]);
        
      }
      
    },
    
    to_syllables : function(word){
      
      console.info("\t This would have performed syllabification");
      
    },
    
    get_cons : function(letter){
      
      return this.consonants[letter][ridx];
      
    }
    
  };
  
})();

// Separate file that contains the letter-correspondences for use by actual code
// Makes the m2r object neater.
(function(){
  
  m2r.consonants = {
    "ခ" 	: 	["kʰ", "hk", "kh", "kh", "k"],
    "ဂ" 	: 	["ɡ", "g", "g", "g", "g"],
    "ဃ" 	: 	["ɡ", "gh", "g", "g", "g"],
    "င" 	: 	["ŋ", "ng", "ng", "ng", "g"]
  }
  
  m2r.vowels = {
    "ယ်"		:		["ɛ̀" , "ai" , "e" , "e" , "ai"],
    "မ်"		:		["àɴ" , "am" , "an" , "an" , "am"],
    "ပ်"		:		["aʔ" , "ap" , "a'" , "a'" , "ap"],
    "န်"		:		["àɴ" , "an" , "an" , "an" , "an"],
    "တ်"		:		["aʔ" , "at" , "a'" , "a'" , "at"],
  }

})();